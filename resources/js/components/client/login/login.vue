<template>
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-6">
          <img
            src="https://scontent.fhan2-5.fna.fbcdn.net/v/t1.6435-9/95454650_545763709455532_686842777610223616_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=V2lc7o_y3KQAX9p1HMO&_nc_ht=scontent.fhan2-5.fna&oh=00_AfDCEkeoKviTCbCsbQ2NPoLI0kKl_7qoeVzIOytdWqV3UA&oe=63DCFA6F"
            alt="login"
            class="login-card-img"
          />
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="brand-wrapper">
              <img src="assets/images/logo.svg" alt="logo" class="logo" />
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
              >
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <Field
                    type="email"
                    name="email"
                    rules="required|email"
                    id="email"
                    class="form-control"
                    placeholder="Email address"
                  />
                  <ErrorMessage class="error" name="email" />
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <Field
                    type="password"
                    name="password"
                    rules="required|min:8|max:16"
                    id="password"
                    class="form-control"
                    placeholder="***********"
                  />
                  <ErrorMessage class="error" name="password" />
                </div>
                <input
                  name="login"
                  id="login"
                  class="btn btn-block login-btn mb-4"
                  type="submit"
                  value="Login"
                />
                <div class="row">
                  <div class="col-md-5" style="margin-left: 20px">
                    <Field
                      name="save"
                      class="form-check-input text-checkbok"
                      type="checkbox"
                      id="rememberMe"
                      value="on"
                    />
                    <label
                      class="form-check-label mb-0 ms-3 text-rememberMe"
                      for="rememberMe"
                      >Remember me</label
                    >
                  </div>
                  <div class="col-md-6">
                    <a href="" class="forgot-password-link">Forgot password?</a>
                  </div>
                </div>
                <br />
                <p class="login-card-footer-text">
                  Don't have an account?
                  <a href="" class="text-reset">Register here</a>
                </p>
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
      csrfToken: Laravel.csrfToken
      //   model: {},
      //   msgLogin: '',
      //   checkForm: 1,
      //   msgSucsess: ''
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

          password: {
            required: 'Password không được để trống',
            min: 'Mật khẩu dài từ 8 đến 16 ký tự',
            max: 'Mật khẩu dài từ 8 đến 16 ký tự'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
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
      this.$refs.formData.submit()
    }
   
  }
}
</script>

<style>
body {
  font-family: 'Karla', sans-serif;
  background-color: #d0d0ce;
  min-height: 100vh;
}

.brand-wrapper {
  margin-bottom: 19px;
}

.brand-wrapper .logo {
  height: 37px;
}

.login-card {
  border: 0;
  height: 90%;
  border-radius: 27.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden;
}

.login-card-img {
  border-radius: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.login-card .card-body {
  padding: 85px 60px 60px;
}

@media (max-width: 422px) {
  .login-card .card-body {
    padding: 35px 24px;
  }
}

.login-card-description {
  font-size: 23px;
  color: #000;
  font-weight: normal;
  margin-bottom: 23px;
}

.login-card form {
  max-width: 326px;
}

.login-card .form-control {
  border: 1px solid #d5dae2;
  padding: 15px 25px;
  margin-bottom: 20px;
  min-height: 45px;
  font-size: 13px;
  line-height: 15;
  font-weight: normal;
}

.login-card .form-control::-webkit-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-moz-placeholder {
  color: #919aa3;
}

.login-card .form-control:-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::placeholder {
  color: #919aa3;
}

.login-card .login-btn {
  padding: 13px 20px 12px;
  background-color: #000;
  border-radius: 4px;
  font-size: 17px;
  font-weight: bold;
  line-height: 20px;
  color: #fff;
  margin-bottom: 24px;
}

.login-card .login-btn:hover {
  border: 1px solid #000;
  background-color: transparent;
  color: #000;
}

.login-card .forgot-password-link {
  font-size: 14px;
  color: #919aa3;

  display: flex;
  margin-top: 17px !important;
  margin-left: 10px !important;
}

.login-card-footer-text {
  font-size: 16px;
  color: #0d2366;
  margin-bottom: 60px;
}

@media (max-width: 767px) {
  .login-card-footer-text {
    margin-bottom: 24px;
  }
}
.required-label {
  color: red;
  font-size: 20px;
}
</style>