<template>
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-6">
          <img src="assets/img/login.jpg" alt="login" class="login-card-img" />
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="brand-wrapper">
              <img src="assets/img/logo_it.jpg" alt="logo" class="logo" />
              <br />
              <p class="login-card-description">Chào mừng bạn đến với ITWork</p>
            </div>
            <VeeForm
              as="div"
              v-slot="{ handleSubmit }"
              @invalid-submit="onInvalidSubmit"
            >
              <form
                @submit="handleSubmit($event, onSubmit)"
                ref="formData"
                method="POST"
                :action="data.urlRegister"
              >
                <input type="hidden" :value="csrfToken" name="_token" />
                <div class="form-group">
                  <label for="name" class="form-label"
                    >Họ và Tên<span class="required-label">*</span></label
                  >
                  <Field
                    type="text"
                    name="name"
                    v-model="model.name"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Nhập họ và tên"
                  />
                  <ErrorMessage class="error" name="name" />
                </div>
                <div class="form-group">
                  <label for="email" class="form-label"
                    >Email<span class="required-label">*</span></label
                  >
                  <Field
                    type="text"
                    name="email"
                    v-model="model.email"
                    rules="required|email"
                    id="email"
                    class="form-control"
                    placeholder="Email address"
                  />
                  <ErrorMessage class="error" name="email" />
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="form-label"
                    >Mật khẩu<span class="required-label">*</span></label
                  >
                  <Field
                    type="password"
                    name="password"
                    v-model="model.password"
                    rules="required|min:8|max:16"
                    id="password"
                    class="form-control"
                    placeholder="***********"
                  />
                  <ErrorMessage class="error" name="password" />
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="form-label"
                    >Nhập lại mật khẩu<span class="required-label"
                      >*</span
                    ></label
                  >
                  <Field
                    type="password"
                    name="password_old"
                    rules="required|confirmed:@password"
                    id="password"
                    class="form-control"
                    placeholder="***********"
                  />
                  <ErrorMessage class="error" name="password_old" />
                </div>
                <div class="row">
                  <div class="col-md-5" style="margin-left: 20px"></div>
                  <div class="col-md-6">
                    <a href="/quen-mat-khau" class="forgot-password-link"
                      >Quên mật khẩu</a
                    >
                  </div>
                </div>
                <br />
                <p class="login-card-footer-text">
                  Nếu bạn đã có tài khoản?
                  <a href="/login" class="text-reset">Đăng nhập</a>
                </p>
                <button class="btn btn-block login-btn mb-4">Đăng kí</button>
              </form>
            </VeeForm>
          </div>
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
    ErrorMessage
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {}
    }
  },
  mounted() {},
  created() {
    let messError = {
      en: {
        fields: {
          email: {
            required: 'Email không được để trống',
            email: 'Email không đúng định dạng'
          },
          name: {
            required: 'Tên không được để trống',
            max: 'Tên không được quá 128 ký tự'
          },
          password: {
            required: 'Password không được để trống',
            min: 'Mật khẩu dài từ 8 đến 16 ký tự',
            max: 'Mật khẩu dài từ 8 đến 16 ký tự'
          },
          password_old: {
            required: 'Password không được để trống',
            confirmed: '2 mật khẩu phải trùng khớp'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    onInvalidSubmit({ errors }) {
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
      this.$refs.formData.submit()
    }
  }
}
</script>

