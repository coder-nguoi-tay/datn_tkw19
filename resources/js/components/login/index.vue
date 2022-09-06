<template>
  <div class="container">
    <div class="fade-in">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <VeeForm
            as="div"
            v-slot="{ handleSubmit }"
            :validation-schema="schema"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              method="POST"
              @submit="handleSubmit($event, onSubmit)"
              action="/admin/login"
              ref="formLogin"
            >
              <input type="hidden" :value="csrfToken" name="_token" />
              <input
                type="hidden"
                :value="data.request.url_redirect"
                name="url_redirect"
              />
              <div class="card">
                <div class="card-body card-login">
                  <div class="row justify-content-center">
                    <div class="col-sm-8 text-center title-login">
                      <h3>ログイン</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 mb-3">
                      <div class="form-group">
                        <Field
                          name="email"
                          placeholder="メールアドレス"
                          v-model="model.email"
                          type="text"
                          class="form-control"
                        />
                        <ErrorMessage class="error" name="email" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 mb-3">
                      <div class="form-group">
                        <Field
                          class="form-control"
                          type="password"
                          autocomplete="off"
                          placeholder="パスワード"
                          name="password"
                          v-model="model.password"
                        />
                        <ErrorMessage class="error" name="password" />
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                      <div class="form-check checkbox">
                        <input
                          class="form-check-input"
                          id="remember_me"
                          name="remember_me"
                          type="checkbox"
                          value="1"
                        />
                        <label class="form-check-label" for="remember_me"
                          >次回から自動的にログイン</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 mb-3">
                      <a :href="data.urlForgotPass" class="btn-link px-0"
                        >パスワードを忘れた方へ</a
                      ><br />
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div
                      class="error text-center"
                      role="alert"
                      v-if="data.message"
                    >
                      {{ data.message }}
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8 p-l-20">
                      <button
                        class="btn btn-primary px-4 btn-login"
                        type="submit"
                      >
                        ログイン
                      </button>
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
import Loader from '../common/loader.vue'
import { Form as VeeForm, Field, ErrorMessage } from 'vee-validate'
import * as Yup from 'yup'

export default {
  created: function () {
    this.schema = Yup.object().shape({
      email: Yup.string()
        .required('メールアドレスを入力してください。')
        .email('メールアドレス形式が正しくありません。'),
      // password: Yup.lazy((value, ctx) => {
      //   console.log(ctx.parent.email);
      //   if (this.model.email) {
      //     return Yup.object();
      //   }
      //   return Yup.string()
      //     .min(8, "パスワードは8文字以上にしてください。")
      //     .required("パスワードを入力してください。");
      // }),
      password: Yup.string()
        .min(8, 'パスワードは8文字以上にしてください。')
        .required('パスワードを入力してください。')
    })
  },
  data() {
    return {
      flagShowLoader: false,
      model: {
        email: this.data.request.email
      },
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl,
      schema: Yup.object()
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
    },
    onSubmit() {
      this.flagShowLoader = true
      this.$refs.formLogin.submit()
    }
  }
}
</script>
