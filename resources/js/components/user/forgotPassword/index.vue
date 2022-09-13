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
            >
              <input type="hidden" :value="csrfToken" name="_token" />
              <div class="card">
                <div class="card-body card-login">
                  <div class="row justify-content-center">
                    <div class="col-sm-8 text-center title-login">
                      <h3>パスワードをお忘れの方</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8">
                      <p>
                        ご入力いただいた電話番号（SMS）宛てにパスワード変更用の24時間有効のリンクが送信されます。なお、同じ電話番号を使用したリンクの発行は1日1回まで可能です。
                      </p>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label class="title-forgot-password"
                          >電話番号 / メールアドレス</label
                        >
                        <Field
                          name="info"
                          placeholder="000-0000-0000 / sample@example.com"
                          v-model="model.info"
                          rules="required"
                          type="text"
                          class="form-control"
                        />
                        <ErrorMessage class="error" name="info" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 p-l-20 text-center">
                      <button
                        class="btn px-4 btn-login"
                        style="
                          background-color: #e5352b;
                          color: white;
                          width: 50%;
                        "
                        type="submit"
                      >
                        SMSを送信する
                      </button>
                    </div>
                  </div>
                  <div class="row justify-content-center group-back-login">
                    <div class="col-sm-8 p-l-20">
                      <a
                        class="btn-link px-0"
                        :href="data.loginUrl"
                        style="color: #e5352b"
                        >戻る</a
                      >
                      <br />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </VeeForm>
        </div>
      </div>
    </div>
    <loader :flag-show="flagShowLoader"></loader>
  </div>
</template>

<script>
import Loader from '../../common/loader.vue'
import { Form as VeeForm, Field, ErrorMessage, configure } from 'vee-validate'
import { localize } from '@vee-validate/i18n'
// import * as Yup from 'yup'

export default {
  data() {
    return {
      flagShowLoader: false,
      model: {},
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl
      // schema: Yup.object()
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          info: {
            required: '電話番号 / メールアドレスを入力してください。'
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
      this.flagShowLoader = true
      this.$refs.formLogin.submit()
    }
  }
}
</script>
