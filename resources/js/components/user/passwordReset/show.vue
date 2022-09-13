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
              :action="data.urlUpdate"
              ref="formData"
            >
              <input type="hidden" :value="csrfToken" name="_token" />
              <input type="hidden" name="_method" value="PUT" />
              <div class="card">
                <div class="card-body card-login">
                  <div class="row justify-content-center">
                    <div class="col-sm-8 text-center title-login">
                      <h3 style="font-size: 32px; font-weight: bold">
                        パスワードリセット
                      </h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label
                          for="ccnumber"
                          style="
                            font-size: 14px;
                            font-weight: bold;
                            margin-bottom: 6px;
                          "
                          >新しいパスワード</label
                        >
                        <Field
                          name="password"
                          type="password"
                          autocomplete="off"
                          v-model="model.password"
                          rules="required|max:15|min:8|password_rule"
                          class="form-control"
                          ref="password"
                          placeholder="●●●●●●●●"
                          style="font-size: 14px; color: #cfcfcf"
                        />
                        <ErrorMessage class="error" name="password" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="row justify-content-center"
                    style="margin-top: 12px"
                  >
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label
                          for="ccnumber"
                          style="
                            font-size: 14px;
                            font-weight: bold;
                            margin-bottom: 6px;
                          "
                          >新しいパスワード（確認用）</label
                        >
                        <Field
                          name="password_confirmation"
                          type="password"
                          autocomplete="off"
                          v-model="model.password_confirmation"
                          rules="required|confirmed:@password"
                          class="form-control"
                          placeholder="●●●●●●●●"
                          style="font-size: 14px; color: #cfcfcf"
                        />
                        <ErrorMessage
                          class="error"
                          name="password_confirmation"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 p-l-20 text-center">
                      <button
                        class="btn px-4 btn-confirm-password"
                        type="submit"
                      >
                        パスワードを変更する
                      </button>
                    </div>
                  </div>
                  <div
                    class="row justify-content-center group-back-login"
                    style="margin: 0px; margin-top: 9px"
                  >
                    <div class="col-sm-8 p-l-20">
                      <a
                        class="btn-link px-0"
                        :href="data.loginUrl"
                        style="
                          color: #e5352b;
                          text-decoration: none;
                          font-size: 12px;
                          margin-top: 9px;
                        "
                        >イベント一覧に戻る</a
                      ><br />
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
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  created: function () {
    let messError = {
      en: {
        fields: {
          password: {
            password_rule:
              'パスワードは半角英数字で、大文字、小文字、数字で入力してください',
            required: 'パスワードを入力してください。',
            max: 'パスワードは15文字以内で入力してください。',
            min: 'パスワードは8文字以上で入力してください。'
          },
          password_confirmation: {
            required: 'パスワード確認 を入力してください。',
            confirmed: 'パスワード確認が入力されたものと異なります。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  data() {
    return {
      flagShowLoader: false,
      model: {},
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl
    }
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
      $('html, body').animate(
        {
          scrollTop: $('input[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      this.flagShowLoader = true
      this.$refs.formData.submit()
    }
  }
}
</script>

<style scoped>
.btn-confirm-password {
  background-color: #e5352b;
  color: white;
  font-size: 12px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 23px;
  width: 173px;
  margin: 0px auto;
  margin-top: 24px;
}
</style>
