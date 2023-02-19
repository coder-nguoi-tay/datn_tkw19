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
                :action="data.urlStore"
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
                    placeholder="Email address"
                  />
                  <ErrorMessage class="error" name="email" />
                </div>

                <Button class="btn btn-block login-btn mb-4"
                  >Quên mật khẩu</Button
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
          email: {
            required: 'Email không được để trống',
            email: 'Email không đúng định dạng'
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