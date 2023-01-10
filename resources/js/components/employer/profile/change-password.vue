<template>
  <div class="col-12 recuitment-inner">
    <div class="card-create-employer">
      <VeeForm
        as="div"
        v-slot="{ handleSubmit }"
        @invalid-submit="onInvalidSubmit"
      >
        <form
          class="recuitment-form"
          @submit="handleSubmit($event, onSubmit)"
          ref="formData"
          method="POST"
          :action="data.urlStoreCompany"
          enctype="multipart/form-data"
        >
          <Field type="hidden" :value="csrfToken" name="_token" />
          <div class="row">
            <div class="col-lg-12">
              <div class="billing-form-item">
                <!-- billing-title-wrap -->
                <div class="billing-content">
                  <div class="contact-form-action">
                    <div class="MultiFile-intercepted">
                      <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                          <div class="mb-4 size-input">
                            <label for="label3" class="form-label"
                              >Mật khẩu<span class="required-lable"
                                >*</span
                              ></label
                            >
                            <Field
                              type="password"
                              class="form-control"
                              rules="required|max:16|min:8|password_rule"
                              v-model="model.password"
                              name="password"
                              id="label3"
                              placeholder="Mật khẩu"
                            />
                            <ErrorMessage class="error" name="password" />
                          </div>
                          <div class="mb-4 size-input">
                            <label for="label4" class="form-label"
                              >Nhập lại mật khẩu<span class="required-lable"
                                >*</span
                              ></label
                            >
                            <Field
                              type="password"
                              class="form-control"
                              rules="required|confirmed:@password"
                              v-model="model.password_old"
                              name="password_old"
                              placeholder="Nhập lại mật khẩu"
                              id="label4"
                            />
                            <ErrorMessage class="error" name="password_old" />
                          </div>
                          <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                              <button
                                style="margin-left: 10%"
                                type="submit"
                                class="
                                  btn btn-md
                                  ft-medium
                                  text-light
                                  theme-bg
                                  btn-primary
                                "
                              >
                                Cập nhật
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </VeeForm>
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
  created() {
    let messError = {
      en: {
        fields: {
          password: {
            required: 'Mật khẩu không được để trống',
            max: 'Mật khẩu không được quá 16 ký tự',
            min: 'Mật khẩu phải tối thiểu 8 ký tự',
            password_rule: 'Mật khẩu không đúng định dạng'
          },
          password_old: {
            required: 'Nhập lại mật khẩu không được để trống',
            confirmed: 'Hai mật khẩu phải giống nhau'
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
.required-lable{
  color: red;
}
.size-input {
  width: 80%;
  margin: auto;
}
.btn-change {
 
  color: white;
  height: 40px;
}
.btn-change:hover {
  

  height: 40px !important;
  color: white !important;
}
</style>