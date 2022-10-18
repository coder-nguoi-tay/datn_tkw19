<template>
  <div class="container">
    <div class="fade-in">
      <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
        <form method="POST" @submit="handleSubmit($event, onSubmit)" :action="data.urlUpdate" ref="formData">
          <input type="hidden" :value="csrfToken" name="_token" />
          <input type="hidden" name="_method" value="PUT" />

          <div class="input-group input-group-outline mb-3">
            <Field type="password" name="password" v-model="model.password" rules="required|min:8|max:16"
              placeholder="mật khẩu mới" class="form-control" />
          </div>
          <ErrorMessage class="error" name="password" />
          <div class="input-group input-group-outline mb-3">
            <Field type="password" name="password_confirmation" v-model="model.password_confirmation" rules="required|confirmed:@password"
              placeholder="nhập lại mật khẩu" class="form-control" />
          </div>
          <ErrorMessage class="error" name="password_confirmation" />
          <div class="mt-3">
            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
              Đổi mật khẩu
            </button>
          </div>
          <div class="my-2 d-flex justify-content-between align-items-center">
            <a :href="data.login" class="auth-link text-black">Quay lại trang đăng nhập</a>
          </div>
        </form>
      </VeeForm>
    </div>
  </div>
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
  created: function () {
    let messError = {
      en: {
        fields: {
          password: {
            password_rule: "mật khẩu không đúng định dạng",
            required: "mật khẩu không được để trống",
            max: "mật khẩu phải có độ dài từ 8 đến 16 ký tự",
            min: "mật khẩu phải có độ dài từ 8 đến 16 ký tự",
          },
          password_confirmation: {
            required: "mật khẩu 2 không được để trống",
            confirmed: "2 mật khẩu phải giống nhau",
          },
        },
      },
    };
    configure({
      generateMessage: localize(messError),
    });
  },
  data() {
    return {
      model: {},
      csrfToken: Laravel.csrfToken,
    };
  },
  props: ["data"],
  components: {
    VeeForm,
    Field,
    ErrorMessage,
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
