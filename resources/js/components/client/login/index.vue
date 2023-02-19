<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
      class="custom-form-login-modal"
    >
      <input type="hidden" :value="csrfToken" name="_token" />
      <div class="form-group">
        <label for="email" class="sr-only">Email</label>
        <Field
          type="email"
          name="email"
          v-model="model.email"
          rules="required|email"
          id="email"
          class="form-control"
          placeholder="Email"
        />
        <ErrorMessage class="error" name="email" />
      </div>
      <div class="form-group mb-4">
        <label for="password" class="sr-only">Password</label>
        <Field
          type="password"
          v-model="model.password"
          name="password"
          rules="required|min:8|max:16"
          id="password"
          class="form-control"
          placeholder="***********"
        />
        <ErrorMessage class="error" name="password" />
      </div>

      <Button class="btn btn-primary">Đăng nhập</Button>
      <div class="row">
        <div class="col-md-6 mt-3">
          <a href="/quen-mat-khau" class="forgot-password-link"
            >Quên mật khẩu</a
          >
        </div>
      </div>
      <br />
      <p class="login-card-footer-text">
        Nếu bạn chưa có tài khoản?
        <a href="/register-client" class="text-reset">Đăng ký</a>
      </p>
    </form>
  </VeeForm>
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
<style lang="scss">
.custom-form-login-modal {
  .form-control {
    padding: 20px !important;
  }
}
</style>
