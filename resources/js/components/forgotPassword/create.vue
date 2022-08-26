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
              :action="data.storeUrl"
              ref="formLogin"
            >
              <input type="hidden" :value="csrfToken" name="_token" />
              <div class="card">
                <div class="card-body card-login">
                  <div class="row justify-content-center">
                    <div class="col-sm-8 text-center title-login">
                      <h3>パスワード再発行申請</h3>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label class="title-forgot-password"
                          >パスワード再設定のURLを記載したメールを送信します</label
                        >
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
                    <div class="col-sm-8 p-l-20">
                      <button
                        class="btn btn-primary px-4 btn-login"
                        type="submit"
                      >
                        送信する
                      </button>
                    </div>
                  </div>
                  <div class="row justify-content-center group-back-login">
                    <div class="col-sm-8 p-l-20">
                      <a class="btn-link px-0" :href="data.loginUrl"
                        >ログイン画面へ</a
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
import Loader from "../common/loader.vue";
import { Form as VeeForm, Field, ErrorMessage } from "vee-validate";
import * as Yup from "yup";
export default {
  created: function () {
    this.schema = Yup.object().shape({
      email: Yup.string()
        .required("メールアドレスを入力してください。")
        .email("メールアドレス形式が正しくありません。"),
    });
  },
  data() {
    return {
      flagShowLoader: false,
      model: {},
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl,
      schema: Yup.object(),
    };
  },
  mounted() {},
  props: ["data"],
  components: {
    Loader,
    VeeForm,
    Field,
    ErrorMessage,
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0];
      this.$el.querySelector("input[name=" + firstInputError + "]").focus();
    },
    onSubmit() {
      this.flagShowLoader = true;
      this.$refs.formLogin.submit();
    },
  },
};
</script>
