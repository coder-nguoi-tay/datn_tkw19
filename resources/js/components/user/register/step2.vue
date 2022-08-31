<template>
  <VeeForm
    as="div"
    v-if="step == 1"
    v-slot="{ handleSubmit }"
    @invalid-submit="onInvalidSubmit"
  >
    <form
      method="POST"
      class="form-step"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
    >
      <div class="step__container">
        <div class="step">
          <div class="input-label">アカウント情報</div>
          <div class="form-group">
            <label class="input-label">表示名</label>
            <Field
              name="show_name"
              type="text"
              v-model="model.show_name"
              rules="required|telephone"
              class="form-control"
              placeholder="ララプラ太郎"
            />
            <ErrorMessage class="error-msg" name="show_name" />
          </div>
          <div class="form-group">
            <label class="input-label">パスワード</label>
            <Field
              name="password"
              type="text"
              v-model="model.password"
              rules="required|telephone"
              class="form-control"
              placeholder="●●●●●●●●"
            />
            <ErrorMessage class="error-msg" name="password" />
          </div>
          <div class="input-label m-t-30">利用者情報</div>
          <div class="form-group">
            <label class="input-label">登録タイプ</label>
            <Field
              name="type"
              as="select"
              v-model="model.type"
              rules="required"
              class="form-select"
            >
              <option value="" disabled selected>
                -- 登録タイプを選択してください --
              </option>
              <option
                v-for="item in data.typeOptions"
                :key="item.value"
                :value="item.value"
              >
                {{ item.label }}
              </option>
            </Field>
            <ErrorMessage class="error-msg" name="type" />
          </div>
          <div class="form-group">
            <label class="input-label">生年月日</label>
            <Field
              name="birthday"
              type="text"
              v-model="model.birthday"
              rules="required|telephone"
              class="form-control"
              placeholder="1990 / 01 / 01"
            />
            <ErrorMessage class="error-msg" name="birthday" />
          </div>
          <div class="form-group">
            <label class="input-label">性別</label>
            <div>
              <div
                class="form-check form-check-inline"
                :key="item.id"
                v-for="(item, index) in data.genderOptions"
              >
                <input
                  class="form-check-input"
                  type="radio"
                  name="gender"
                  v-model="model.gender"
                  :value="item.id"
                  :id="'gender' + index"
                />
                <label class="form-check-label" :for="'gender' + index">
                  {{ item.label }}
                </label>
              </div>
            </div>

            <ErrorMessage class="error-msg" name="type" />
          </div>
        </div>
      </div>
    </form>
  </VeeForm>
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
    VOtpInput
  },
  props: ['data', 'dataModel'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.dataModel,
      step: 1,
      step1: 1,
      error: '',
      showRecapchar: false
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
          // response.data.valid
          that.step1 = 2
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          const { status } = error.response || {}
          if (status == 500 || status == 429 || status == 400) {
            that.error = error.response.data.message
            that.showRecapchar = true
          }
        })
      //   this.flagShowLoader = true
      //   this.$refs.formData.submit()
    }
  }
}
</script>
