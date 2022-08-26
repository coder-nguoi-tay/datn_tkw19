<template>
  <div class="container">
    <div class="fade-in">
      <CRow>
        <CCol :sm="12">
          <CCard>
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
              >
                <Field type="hidden" :value="csrfToken" name="_token" />
                <CCardHeader>
                  <CFormLabel>ユーザー作成</CFormLabel>
                </CCardHeader>
                <CCardBody>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >ユーザー名</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="name"
                        v-model="model.name"
                        rules="required"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="name" />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >ユーザーのメール</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="email"
                        v-model="model.email"
                        rules="required|unique_custom|email"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="email" />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >パスワード</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="password"
                        type="password"
                        autocomplete="off"
                        v-model="model.password"
                        rules="required|max:15|min:8|password_rule"
                        class="form-control"
                        ref="password"
                      />
                      <ErrorMessage class="error" name="password" />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >パスワード確認</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="password_confirmation"
                        type="password"
                        autocomplete="off"
                        v-model="model.password_confirmation"
                        rules="required|confirmed:@password"
                        class="form-control"
                      />
                      <ErrorMessage
                        class="error"
                        name="password_confirmation"
                      />
                    </div>
                  </CRow>
                </CCardBody>
                <CCardFooter>
                  <div class="col-md-12 text-center btn-box">
                    <CButton type="submit" class="btn-primary btn-w-100">
                      登録
                    </CButton>
                    <a :href="data.urlBack" class="btn btn-default btn-w-100">
                      キャンセル
                    </a>
                  </div>
                </CCardFooter>
              </form>
            </VeeForm>
          </CCard>
        </CCol>
      </CRow>
    </div>
    <loader :flag-show="flagShowLoader"></loader>
  </div>
</template>

<script>
import Loader from "../../common/loader";
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
import axios from "axios";

export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != "default") {
        defineRule(rule, rules[rule]);
      }
    });
  },
  components: {
    Loader,
    VeeForm,
    Field,
    ErrorMessage,
  },
  props: ["data"],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      flagShowLoader: false,
      model: {},
    };
  },
  created() {
    let messError = {
      en: {
        fields: {
          name: {
            required: "ユーザー名を入力してください。",
          },
          email: {
            required: "ユーザーのメールを入力してください。",
            unique_custom: "このメールアドレスは既に登録されています。",
          },
          password: {
            password_rule:
              "パスワードは半角英数字で、大文字、小文字、数字で入力してください",
            required: "パスワードを入力してください。",
            max: "パスワードは15文字以内で入力してください。",
            min: "パスワードは8文字以上で入力してください。",
          },
          password_confirmation: {
            required: "パスワード確認 を入力してください。",
            confirmed: "パスワード確認が入力されたものと異なります。",
          },
        },
      },
    };
    configure({
      generateMessage: localize(messError),
    });

    let that = this;
    defineRule("unique_custom", (value) => {
      return axios
        .post(that.data.urlCheckEmail, {
          _token: Laravel.csrfToken,
          value: value,
        })
        .then(function (response) {
          return response.data.valid;
        })
        .catch((error) => {});
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
      this.flagShowLoader = true;
      this.$refs.formData.submit();
    },
  },
};
</script>
