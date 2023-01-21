<template>
  <div>
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
            :action="data.urlStore"
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
                        <div class="card-body">
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="pay_member"
                              class="col-sm-3 col-form-label"
                              >Số tiền muốn nạp<span class="required-lable"
                                >*</span
                              >
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="number"
                                name="pay_member"
                                id="pay_member"
                                class="form-control"
                                min="1"
                                rules="required"
                                placeholder="Số tiền muốn nạp"
                              />
                              <ErrorMessage class="error" name="pay_member" />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label"
                              >Ngân hàng<span class="required-lable">*</span>
                            </label>
                            <div class="col-sm-9">
                              <Field
                                class="form-select"
                                rules="required"
                                name="bank"
                                as="select"
                                aria-label="Default select example"
                              >
                                <option value disabled selected>
                                  Chọn ngân hàng
                                </option>
                                <option value="NCB">
                                  Ngân hàng Quốc Dân – NCB
                                </option>
                              </Field>
                              <ErrorMessage class="error" name="bank" />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label"
                              >Mô tả<span class="required-lable">*</span>
                            </label>
                            <div class="col-sm-9">
                              <Field
                                class="form-control"
                                rules="required"
                                name="desceibe"
                                placeholder="desceibe"
                              >
                              </Field>
                              <ErrorMessage class="error" name="desceibe" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <input type="hidden" name="redirect" id="" />
                            <button
                              type="submit"
                              name="redirect"
                              class="btn min-width btn btn-primary btn-lg"
                            >
                              <!---->
                              Lưu
                            </button>
                          </div>
                        </div>

                        <!-- end row -->
                      </div>
                    </div>
                    <!-- end contact-form-action -->
                  </div>
                  <!-- end billing-content -->
                </div>
              </div>
              <!-- end col-lg-12 -->
            </div>
          </form>
        </VeeForm>
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
import Editor from '@tinymce/tinymce-vue'
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
      csrfToken: Laravel.csrfToken
    }
  },
  props: ['data'],
  created() {
    let messError = {
      en: {
        fields: {
          name: {
            required: 'Xin hãy nhập tên của bạn.',
            max: 'Vui lòng nhập tên của bạn trong 128 ký tự.'
          },
          bank: {
            required: 'Vui lòng chọn ngân hàng thanh toán.'
          },
          pay_member: {
            required: 'Vui lòng nhập số tiền muốn nạp .'
          },
          desceibe: {
            required: 'Vui lòng nhập mô tả .'
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
    Editor,
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

<style scoped>
.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.card {
  border: none;
}
.card-body {
  margin: 15px 15px;
  width: 100%;
}

.required-lable {
  color: red;
  font-size: 20px;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.min-width.btn {
  min-width: 100px;
  font-size: 14px;
}
.btn-primary {
  color: #fff;
}
.btn-group-lg > .min-width.btn,
.min-width.btn-lg {
  min-width: 120px;
}

.mr-2,
.mx-2 {
  margin-right: 0.7rem !important;
}

.btn-group-lg > .btn,
.btn-lg {
  padding: 0.6rem 1rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.214rem;
}
.btn-secondary {
  color: #212529;
  background-color: #f3f4f5;
  border-color: #f3f4f5;
}
</style>