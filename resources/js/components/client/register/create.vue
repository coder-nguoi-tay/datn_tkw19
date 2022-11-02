<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      class="pt-3"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
    >
      <div class="form-login-user">
        <input type="hidden" :value="csrfToken" name="_token" />
        <input type="hidden" :value="1" name="form" />
        <p>Họ và Tên</p>
        <Field
          type="text"
          name="name"
          :value="this.data.request.name"
          v-model="model.name"
          rules="required|max:255"
          placeholder="Họ và Tên"
        />
        <ErrorMessage class="error" name="name" />
        <p>Email</p>
        <Field
          type="text"
          name="email"
          :value="this.data.request.email"
          v-model="model.email"
          rules="required|email"
          placeholder="Email"
        />
        <ErrorMessage class="error" name="email" />
        <p>Password</p>
        <Field
          type="password"
          name="password"
          v-model="model.password"
          rules="required|min:8|max:16"
          placeholder="Password"
        />
        <ErrorMessage class="error" name="password" />

        <Button class="btn btn-success">Đăng ký</Button>
      </div>
    </form>
    <div class="error text-center" role="alert" v-if="data.message">
      {{ data.message }}
    </div>
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
  created() {
    let messError = {
      en: {
        fields: {
          name: {
            required: 'Tên không được để trống',
            max: 'Tên không quá 255 ký tự'
          },
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
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}

.text-link {
  margin-left: 20%;
}
</style>