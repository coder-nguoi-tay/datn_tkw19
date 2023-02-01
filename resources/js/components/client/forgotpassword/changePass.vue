<template>
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-6">
          <img src="/assets/img/login.jpg" alt="login" class="login-card-img" />
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <div class="brand-wrapper">
              <img src="/assets/img/logo_it.jpg" alt="logo" class="logo" />
              <br />
              <p class="login-card-description">Mời bạn đổi lại mật khẩu</p>
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
                :action="data.urlStore"
              >
                <input type="hidden" :value="csrfToken" name="_token" />
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
                <Button class="btn btn-block login-btn mb-4"
                  >Đổi mật khẩu</Button
                >
                <br />
                <p class="login-card-footer-text">
                  Nếu bạn đã có tài khoản?
                  <a href="/login" class="text-reset">Đăng nhập</a>
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