<template>
  <div class="register">
    <div class="container register__container">
      <h1 class="title text-center">ログイン</h1>
      <div class="form-content">
        <div class="register-form login-form">
          <VeeForm
            as="div"
            v-slot="{ handleSubmit }"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              method="POST"
              @submit="handleSubmit($event, onSubmit)"
              :action="data.urlStore"
              ref="formData"
              id="form-data"
            >
              <Field type="hidden" :value="csrfToken" name="_token" />
              <div class="step__container">
                <div class="step">
                  <div class="input-label m-t-10">
                    電話番号 / メールアドレス
                  </div>
                  <div class="form-group">
                    <Field
                      name="email"
                      type="text"
                      autocomplete="off"
                      v-model="model.email"
                      rules="required"
                      class="form-control input-tel"
                      @change="error = ''"
                      placeholder="000-0000-0000 / sample@example.com"
                    />
                    <ErrorMessage class="error-msg" name="email" />
                  </div>
                  <div class="input-label m-t-10">パスワード</div>
                  <div class="form-group">
                    <Field
                      name="password"
                      type="password"
                      autocomplete="off"
                      v-model="model.password"
                      rules="required|min:8|max:16|password_rule"
                      class="form-control input-tel"
                      @change="error = ''"
                      placeholder="●●●●●●●●"
                    />
                    <ErrorMessage class="error-msg" name="password" />
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
                <div class="error-msg text-center" v-if="error">
                  {{ error }}
                </div>
              </div>
              <div
                class="submit__container"
                :class="{ 'have-capcha': showRecapchar }"
              >
                <button type="submit" class="btn-submit">ログインする</button>
                <p class="txt-login">
                  既にアカウントをお持ちの方は<a href="/forgot_password/create"
                    >こちら</a
                  >
                </p>
                <p class="txt-login">
                  アカウントをお持ちでない方は<a :href="data.urlRegister"
                    >こちら</a
                  >
                </p>
              </div>
            </form>
          </VeeForm>
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
    VueRecaptcha
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      showRecapchar: false,
      error: ''
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          email: {
            required: '電話番号 / メールアドレスを入力してください。'
          },
          password: {
            required: 'パスワードを入力してください。',
            max: 'パスワードは８文字～１６文字入力してください。',
            min: 'パスワードは８文字～１６文字入力してください。',
            password_rule:
              'パスワードは半角英数字で、大文字、小文字、数字で入力してください。'
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
      this.$el.querySelector('[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.urlStore, $('#form-data').serialize())
        .then(function (response) {
          $('.loading-div').addClass('hidden')
          location.href = response.data.url_redirect
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          that.error = error.response.data.message
          that.showRecapchar = true
        })
    }
  }
}
</script>
