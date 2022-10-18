<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <div class="error text-center" role="alert" v-if="data.message">
      {{ data.message }}
    </div>
    <form
      class="pt-3"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
    >
      <input type="hidden" :value="csrfToken" name="_token" />
      <div class="input-group input-group-outline my-3">
        <Field
          type="text"
          name="email"
          v-model="model.email"
          rules="required|email"
          placeholder="email"
          class="form-control"
        />
      </div>
      <ErrorMessage class="error" name="email" />
      <br />
      <div class="input-group input-group-outline mb-3">
        <Field
          type="password"
          name="password"
          v-model="model.password"
          rules="required|min:8|max:16"
          placeholder="password"
          class="form-control"
        />
      </div>
      <ErrorMessage class="error" name="password" />
      <br />
      <div class="form-check form-switch d-flex align-items-center mb-3">
        <input
          name="save"
          class="form-check-input"
          type="checkbox"
          id="rememberMe"
        />
        <label class="form-check-label mb-0 ms-3" for="rememberMe"
          >Remember me</label
        >
        <a :href="data.resetPassword" class="text-link form-check-label mb-0 ms-8">Quên mật khẩu</a>
      </div>
      <div class="text-center">
        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
          Sign in
        </button>
      </div>
    </form>
    <!--  -->
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
            // unique_email: "Email này không đúng",
          },
          password: {
            required: "Password không được để trống",
            min: "Mật khẩu dài từ 8 đến 16 ký tự",
            max: "Mật khẩu dài từ 8 đến 16 ký tự",
          },
        },
      },
    };
    configure({
      generateMessage: localize(messError),
    });
    // defineRule("unique_email", (value) => {
    //   return axios
    //     .post(this.data.urlCheckmail, {
    //       _token: Laravel.csrfToken,
    //       email: value,
    //     })
    //     .then(function (response) {
    //       console.log(response.data);
    //       return response.data.valid;
    //     })
    //     .catch((error) => {
    //       console.log(error.data);
    //     });
    // });
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
.text-link{
  margin-left: 20%;
}
</style>