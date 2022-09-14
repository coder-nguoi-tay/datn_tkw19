<template>
  <div class="container">
    <div class="fade-in">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <VeeForm
            as="div"
            v-slot="{ handleSubmit }"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              method="POST"
              @submit="handleSubmit($event, onSubmit)"
              :action="data.storeUrl"
              ref="formLogin"
              id="form-data"
            >
              <input type="hidden" :value="csrfToken" name="_token" />
              <div class="row justify-content-center">
                <div class="col-sm-8 text-center title-login">
                  <h3 style="font-size: 32px">パスワードをお忘れの方</h3>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <p style="font-size: 14px">
                    ご入力いただいた電話番号（SMS）宛てにパスワード変更用の24時間有効のリンクが送信されます。なお、同じ電話番号を使用したリンクの発行は1日1回まで可能です。
                  </p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label
                      class="title-forgot-password m-0"
                      style="font-size: 14px"
                      >電話番号 / メールアドレス</label
                    >
                    <Field
                      name="email"
                      placeholder="000-0000-0000 / sample@example.com"
                      v-model="model.email"
                      rules="required|telephone_or_email"
                      type="text"
                      class="form-control"
                      style="margin-top: 6px; font-size: 14px"
                    />
                    <ErrorMessage class="error" name="email" />
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div
                  class="text-center"
                  style="max-width: 304px; margin-left: -20px"
                >
                  <div class="capcha text-center" style="margin-top: 10px">
                    <vue-recaptcha
                      language="ja"
                      @verify="verifyMethod"
                      ref="recaptcha"
                      :sitekey="data.GOOGLE_PUBLIC_KEY_V2"
                      class="capcha-center"
                      style="width: 304px"
                    ></vue-recaptcha>
                    <Field
                      name="recaptcha_token"
                      type="hidden"
                      autocomplete="off"
                      v-model="model.recaptcha_token"
                      rules="required"
                      @change="error = ''"
                    />
                    <ErrorMessage
                      class="error text-center"
                      name="recaptcha_token"
                    />
                    <div
                      class="error text-center"
                      style="font-size: 10px"
                      v-if="error"
                    >
                      {{ error }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8 p-l-20 text-center">
                  <button
                    class="btn px-4 btn-submit btn-sms-email"
                    type="submit"
                  >
                    SMSを送信する
                  </button>
                </div>
              </div>
              <div
                class="row justify-content-center group-back-login"
                style="margin-top: 0px"
              >
                <div class="col-sm-8 p-l-20" :class="{ 'have-capcha': true }">
                  <a
                    class="btn-link px-0"
                    :href="data.loginUrl"
                    style="
                      color: #e5352b;
                      text-decoration: none;
                      font-size: 12px;
                    "
                    >戻る</a
                  >
                  <br />
                </div>
              </div>
            </form>
          </VeeForm>
        </div>
      </div>
    </div>
    <loader :flag-show="flagShowLoader"></loader>
    <popup-alert
      :data="dataAlert"
      @resetDataAlert="resetDataAlert"
    ></popup-alert>
  </div>
</template>

<script>
import Loader from '../../common/loader.vue'
import { Form as VeeForm, Field, ErrorMessage, configure } from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import axios from 'axios'
import $ from 'jquery'

export default {
  data() {
    return {
      flagShowLoader: false,
      model: {},
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl,
      error: '',
      dataAlert: null
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          email: {
            required: '電話番号 / メールアドレスを入力してください。',
            telephone_or_email: 'Invalid format'
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
  mounted() {},
  props: ['data'],
  components: {
    Loader,
    VeeForm,
    Field,
    ErrorMessage
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('input[name=' + firstInputError + ']').focus()
    },
    onSubmit() {
      // this.flagShowLoader = true
      // this.$refs.formLogin.submit()
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.storeUrl, $('#form-data').serialize())
        .then(function (response) {
          console.log(response)
          $('.loading-div').addClass('hidden')
          // location.href = response.data.url_redirect
          that.dataAlert = {
            message: '変更メールを送信しました！！',
            content:
              'まだ変更手続きは完了していません。変更用のメールを送信いたしましたので、メールに記載の確認リンクにアクセスし、変更を完了させてください。',
            mode: 'success',
            urlRedirect: ''
          }
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          // that.error = error.response.data.message
          that.dataAlert = {
            message: error.response.data.message,
            mode: 'error',
            urlRedirect: ''
          }
        })
    },
    resetDataAlert() {
      this.dataAlert = null
    },
    verifyMethod(val) {
      this.model.recaptcha_token = val
    }
  }
}
</script>

<style scoped>
.btn-sms-email {
  background-color: #e5352b;
  color: white;
  font-size: 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 23px;
  margin: 0px auto;
  margin-bottom: 9px;
  margin-top: 16px;
}

.capcha-center > div {
  width: 100% !important;
}

.capcha-center > span {
  font-size: 10px;
}

.error {
  font-size: 10px !important;
}
</style>
