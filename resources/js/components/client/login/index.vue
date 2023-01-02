<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <div class="error text-center" role="alert" v-if="msgLogin && !msgSucsess">
      {{ msgLogin }}
    </div>
    <div class="text-center" role="success" v-if="msgSucsess && !msgLogin">
      <span class="success">{{ msgSucsess }}</span>
    </div>
    <br />
    <form
      class="pt-3"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
    >
      <div class="container row text-center">
        <div class="col-6">
          <a
            class="custom-buttom-checkform"
            @click="checkFormData(1)"
            :class="{ active: checkForm == 1 }"
            >Đăng nhập</a
          >
        </div>
        <div class="col-6">
          <a
            class="custom-buttom-checkform"
            @click="checkFormData(2)"
            :class="{ active: checkForm == 2 }"
            >Đăng ký</a
          >
        </div>
      </div>
      <br />
      <div class="form-login-user" v-if="checkForm == 1">
        <input type="hidden" :value="csrfToken" name="_token" />
        <p>Email</p>
        <Field
          type="text"
          name="email"
          v-model="model.email"
          rules="required|email"
          placeholder="Email"
          class="form-control"
        />
        <ErrorMessage class="error" name="email" />
        <p>Password</p>
        <Field
          type="password"
          name="password"
          v-model="model.password"
          rules="required|min:8|max:16"
          placeholder="Password"
          class="form-control"
        />
        <ErrorMessage class="error" name="password" />
        <div class="d-flex">
          <Field
            name="save"
            v-model="model.save"
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
          <a href="" class="text-danger ms-auto">Quên mật khẩu</a>
        </div>
        <div class="text-center mt-5">
          <Button class="main-button btn border btn-all">Đăng nhập</Button>
        </div>
      </div>
      <div class="form-login-user" v-if="checkForm == 2">
        <input type="hidden" :value="csrfToken" name="_token" />
        <input type="hidden" :value="1" name="form" />
        <p>Họ và Tên</p>
        <Field
          type="text"
          name="name"
          v-model="model.name"
          rules="required|max:255"
          placeholder="Họ và Tên"
          class="form-control"
        />
        <ErrorMessage class="error" name="name" />
        <p>Email</p>
        <Field
          type="text"
          name="email"
          v-model="model.email"
          rules="required|email"
          placeholder="Email"
          class="form-control"
        />
        <ErrorMessage class="error" name="email" />
        <p>Password</p>
        <Field
          type="password"
          name="password"
          v-model="model.password"
          rules="required|min:8|max:16"
          placeholder="Password"
          class="form-control"
        />
        <ErrorMessage class="error" name="password" />
        <br />
        <div class="text-center">
          <Button class="main-button btn border btn-all">Đăng ký</Button>
        </div>
      </div>
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
      model: {},
      msgLogin: '',
      checkForm: 1,
      msgSucsess: ''
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
    checkFormData(id) {
      if (id == 1) {
        this.checkForm = 1
      } else {
        this.checkForm = 2
      }
    },
    onSubmit() {
      if (this.checkForm == 1) {
        let that = this
        let url = this.data.urlStore
        axios
          .post(url, {
            email: this.model.email,
            password: this.model.password,
            save: this.model.save
          })
          .then(function (data) {
            if (data.data.status == 403) {
              that.msgLogin = data.data.data
            }
            if (data.data.data == 1) {
              location.reload()
            } else if (data.data.data == 2) {
              window.location.href = '/employer'
            }
          })
          .catch(function (error) {
            location.reload()
          })
      } else {
        let that = this
        let url = this.data.urlRegister
        axios
          .post(url, {
            name: that.model.name,
            email: that.model.email,
            password: that.model.password
          })
          .then(function (data) {
            console.log(data)
            if (data.data.status == 403) {
              that.msgLogin = data.data.data
            } else {
              that.msgLogin = ''
              that.msgSucsess = data.data.data
              that.checkForm = 1
            }
          })
          .catch(function (error) {
            location.reload()
          })
      }
    }
  }
}
</script>
<style lang="scss">
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}

.text-link {
  margin-left: 20%;
}

.ms-auto {
  margin-top: 20px;
}

.text-checkbok {
  margin-top: 20px !important;
}

.text-rememberMe {
  margin-top: 16px !important;
}
.pt-3 {
  .active {
    color: rgb(2, 0, 0) !important;
    border-radius: 0px !important;
    border-top: solid 1px green !important;
    border-right: solid 1px green !important;
    border-left: solid 1px green !important;
    border-bottom: none !important;
    border-top-right-radius: 3px !important;
    border-top-left-radius: 3px !important;
  }
  .custom-buttom-checkform:hover {
    border: solid 0px #ccc;
  }
  .custom-buttom-checkform {
    font-size: 17px !important;
    padding: 10px 55px 10px 55px;
  }
}
.success {
  color: green;
}
.btn-all {
  background-color: #ccc;
}
</style>