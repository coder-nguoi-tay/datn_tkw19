<template>
  <div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img
                  src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-admin-rolls-glyph-black-icon-png-image_691507.jpg"
                  alt="Admin"
                  class="rounded-circle"
                  width="150"
                />
                <div class="mt-3">
                  <h4>Triệu Việt Đức</h4>
                  <p class="text-secondary mb-1">Nhà Tuyển Dụng</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <VeeForm
              as="div"
              v-slot="{ handleSubmit }"
              @invalid-submit="onInvalidSubmit"
            >
              <form
                method="POST"
                @submit="handleSubmit($event, onSubmit)"
                class="form-register-employer"
                :action="data.urlStore"
                ref="formData"
              >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Họ và Tên</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <Field
                        name="name"
                        type="text"
                        v-model="model.name"
                        rules="required|max:128"
                        class="form-control form-control-sm"
                        placeholder="Họ và Tên"
                      />
                      <ErrorMessage class="error" name="name" />
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <Field
                        type="text"
                        name="email"
                        v-model="value"
                        rules="required|max:255|email"
                        class="form-control form-control-sm"
                        placeholder="Email"
                      />
                      <ErrorMessage class="error" name="email" />
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Số Điện Thoại</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <Field
                        type="text"
                        v-model="model.phone"
                        rules="required|telephone"
                        name="phone"
                        class="form-control form-control-sm"
                        placeholder="Số Điện Thoại"
                      />
                      <ErrorMessage class="error" name="phone" />
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Địa Chỉ</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <Field
                        type="text"
                        name="address"
                        v-model="model.address"
                        rules="required|max:255"
                        class="form-control form-control-sm"
                        placeholder="Địa Chỉ"
                      />
                      <ErrorMessage class="error" name="address" />
                    </div>
                  </div>
                  <hr />
                  <button
                    class="
                      btn-custom-edit
                      nav-link
                      py-0
                      btn-next-step
                      text-center
                    "
                  >
                    Cập nhật
                  </button>
                </div>
              </form>
            </VeeForm>
          </div>

          <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3">
                    Thông Tin Công Ty
                  </h6>
                  <small>Tên Công Ty</small>
                  <Field
                    type="text"
                    rules="required|max:128"
                    name="nameCompany"
                    class="form-control form-control-sm"
                    placeholder="Tên Công Ty"
                  />
                  <ErrorMessage class="error" name="nameCompany" />
                  <small>Email</small>
                  <Field
                    type="text"
                    rules="required|max:255|email"
                    name="emailCompany"
                    class="form-control form-control-sm"
                    placeholder="Email"
                  />
                  <ErrorMessage class="error" name="emailCompany" />
                  <small>Số Lượng Thành Viên</small>
                  <Field
                    type="text"
                    rules="required"
                    name="number_member"
                    class="form-control form-control-sm"
                    placeholder="Số Lượng Thành Viên"
                  />
                  <ErrorMessage class="error" name="number_member" />
                  <small>Địa Chỉ</small>
                  <Field
                    type="text"
                    rules="required|max:255"
                    name="addressCompany"
                    class="form-control form-control-sm"
                    placeholder="Địa Chỉ"
                  />
                  <ErrorMessage class="error" name="addressCompany" />
                </div>
                <div class="text-center">
                  <button class="btn-custom-edit nav-link py-0 btn-next-step">
                    Thay Đổi
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3">
                    Tài Khoản Ngân Hàng
                  </h6>
                  <small>Web Design</small>
                  <Field
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Kenneth Valdez"
                  />
                  <small>Website Markup</small>
                  <Field
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Kenneth Valdez"
                  />
                  <small>One Page</small>
                  <Field
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Kenneth Valdez"
                  />
                  <small>Backend API</small>
                  <Field
                    type="text"
                    class="form-control form-control-sm"
                    placeholder="Kenneth Valdez"
                  />
                </div>
                <div class="text-center">
                  <button class="btn-custom-edit nav-link py-0 btn-next-step">
                    Thay Đổi
                  </button>
                </div>
              </div>
            </div>
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
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.employer,
      value: this.data.email
    }
  },
  props: ['data'],
  created() {
    console.log(this.data.employer)
    let messError = {
      en: {
        fields: {
          name: {
            required: 'Xin hãy nhập tên của bạn.',
            max: 'Vui lòng nhập tên của bạn trong 128 ký tự.'
          },
          company: {
            required: 'Xin hãy nhập tên công ty.',
            max: 'Vui lòng nhập tên công ty trong 128 ký tự.'
          },
          email: {
            required: 'Hãy điền địa chỉ email của bạn.',
            email: 'Vui lòng nhập đúng định dạng địa chỉ email.',
            max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage
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
</style>