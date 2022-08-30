<template>
  <div class="register">
    <div class="container register__container">
      <h1 class="title text-center">会員登録</h1>
      <div class="form-content">
        <div class="register-form">
          <div class="form-header d-flex">
            <span class="step-indicator" :class="{ active: step >= 1 }"
              >SMS認証</span
            >
            <span class="step-indicator" :class="{ active: step >= 2 }"
              >ユーザー情報登録</span
            >
            <span class="step-indicator" :class="{ active: step >= 3 }"
              >完了</span
            >
          </div>
          <VeeForm
            as="div"
            v-if="step == 1"
            v-slot="{ handleSubmit }"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              method="POST"
              @submit="handleSubmit($event, onSubmit)"
              :action="data.urlStore"
              ref="formData"
            >
              <template v-if="step1 === 1">
                <div class="step__container">
                  <div class="step">
                    <label class="input-label">電話番号</label>
                    <div class="input-group">
                      <span class="input-group-text">{{
                        data.VN_MODE ? '+84' : '+81'
                      }}</span>
                      <Field
                        name="phone_number"
                        type="text"
                        autocomplete="off"
                        v-model="model.phone_number"
                        rules="required|telephone"
                        class="form-control input-tel"
                        @change="error = ''"
                        placeholder="000 0000 0000"
                      />
                    </div>
                    <ErrorMessage class="error-msg" name="phone_number" />
                    <div class="error-msg" v-if="error">
                      {{ error }}
                    </div>
                  </div>
                </div>
                <div class="capcha text-center" v-if="showRecapchar">
                  <vue-recaptcha
                    language="ja"
                    @verify="verifyMethod"
                    ref="recaptcha"
                    :sitekey="data.GOOGLE_PUBLIC_KEY_V2"
                  ></vue-recaptcha>
                  <Field
                    name="recaptcha_token"
                    type="hidden"
                    autocomplete="off"
                    v-model="model.recaptcha_token"
                    rules="required"
                    @change="error = ''"
                  />
                  <ErrorMessage class="error-msg" name="recaptcha_token" />
                </div>
                <div
                  class="submit__container"
                  :class="{ 'have-capcha': showRecapchar }"
                >
                  <button type="submit" class="btn-submit">送信する</button>
                  <p class="txt-login">
                    既にアカウントをお持ちの方は<a href="">こちら</a>
                  </p>
                </div>
              </template>
              <template v-else>
                <div class="step__container">
                  <div class="step">
                    <label class="input-label">認証コード</label>
                    <div class="input_container">
                      <div style="display: flex; flex-direction: row">
                        <v-otp-input
                          ref="otpInput"
                          input-classes="otp-input"
                          separator=""
                          :num-inputs="6"
                          :should-auto-focus="true"
                          :inputmode="'text'"
                          :is-input-num="false"
                          @on-complete="handleOnComplete"
                          :conditionalClass="[
                            'one',
                            'two',
                            'three',
                            'four',
                            'five',
                            'six'
                          ]"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="submit__container have-capcha">
                  <button
                    type="button"
                    @click="step = 2"
                    :disabled="disabledCheckCode"
                    class="btn-submit"
                  >
                    送信する
                  </button>
                  <p class="txt-login">
                    <a href="">認証コードを再送する</a>
                  </p>
                </div>
              </template>
            </form>
          </VeeForm>
          <step2 v-else-if="step==2"></step2>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import { VueRecaptcha } from 'vue-recaptcha'
import $ from 'jquery'
import axios from 'axios'
import VOtpInput from 'vue3-otp-input'
import step2 from './step2.vue'
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage,
    VueRecaptcha,
    VOtpInput,
    step2
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {
        phone_number: '0368278668'
      },
      step: 2,
      step1: 1,
      error: '',
      showRecapchar: false,
      disabledCheckCode: true
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          phone_number: {
            required: '電話番号を入力してください。',
            telephone: '電話番号が正しい形式ではありません。'
          },
          recaptcha_token: {
            required: 'reCAPTCHAを入力してください。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    verifyMethod(val) {
      this.model.recaptcha_token = val
    },
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('input[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('input[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.urlSendCode, {
          _token: Laravel.csrfToken,
          phone_number: this.model.phone_number
        })
        .then(function (response) {
          $('.loading-div').addClass('hidden')
          that.step1 = 2
          that.disabledCheckCode = false
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          const { status } = error.response || {}
          if (status == 500 || status == 429 || status == 400) {
            that.error = error.response.data.message
            that.showRecapchar = true
          }
        })
    },
    handleOnComplete(val) {
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.urlVerifyCode, {
          _token: Laravel.csrfToken,
          phone_number: this.model.phone_number,
          code: val
        })
        .then(function (response) {
          $('.loading-div').addClass('hidden')
          that.disabledCheckCode = false
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          const { status } = error.response || {}
          if (status == 500 || status == 429 || status == 400) {
            that.error = error.response.data.message
            that.showRecapchar = true
          }
        })
    }
  }
}
</script>
