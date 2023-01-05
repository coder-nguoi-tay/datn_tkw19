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
                  <label for="name" class="form-label"
                    >Họ và Tên<span class="required-label">*</span></label
                  >
                  <Field
                    type="text"
                    name="name"
                    rules="required|max:255"
                    id="name"
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
                    rules="required|email"
                    id="email"
                    class="form-control"
                    placeholder="Email address"
                  />
                  <ErrorMessage class="error" name="email" />
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="form-label"
                    >Password<span class="required-label">*</span></label
                  >
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
                  value="Đăng ký"
                />
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

