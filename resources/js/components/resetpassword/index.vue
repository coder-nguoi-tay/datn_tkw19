<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <h6 class="font-weight-light text-center">Hãy nhập mail của bạn để tôi có thể giúp bạn lấy lại mật khẩu </h6>
    <form class="pt-3" @submit="handleSubmit($event, onSubmit)" ref="formData" method="POST" :action="data.urlSenmail">
      <div class="error text-center" role="alert" v-if="data.message">
        {{ data.message }}
      </div>
      <br>
      <input type="hidden" :value="csrfToken" name="_token" />
      <div class="input-group input-group-outline mb-3">
        <Field type="email" name="email" v-model="model.email" rules="required|email" placeholder="Email"
          class="form-control" />

      </div>
      <ErrorMessage class="error" name="email" />
      <div class="mt-3">
        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
          Gửi mail
        </button>
      </div>
      <div class="my-2 d-flex justify-content-between align-items-center">
        <a :href="data.login" class="auth-link text-black">Quay lại trang đăng nhập</a>
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
  configure,
} from "vee-validate";
import { localize } from "@vee-validate/i18n";
import * as rules from "@vee-validate/rules";
import $ from "jquery";
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != "default") {
        defineRule(rule, rules[rule]);
      }
    });
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage,
  },
  props: ["data"],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
    };
  },
  created() {
    let messError = {
      en: {
        fields: {
          email: {
            required: "Email không được để trống",
            email: "Email không đúng định dạng",
          },
        },
      },
    };
    configure({
      generateMessage: localize(messError),
    });
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0];
      this.$el.querySelector("input[name=" + firstInputError + "]").focus();
      $("html, body").animate(
        {
          scrollTop:
            $("input[name=" + firstInputError + "]").offset().top - 150,
        },
        500
      );
    },
    onSubmit() {
      this.$refs.formData.submit();
    },
  },
};
</script>
<style>
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}
</style>