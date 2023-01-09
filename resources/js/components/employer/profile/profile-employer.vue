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
                        <div class="row">
                          <div class="col-12 form-update-company">
                            <div class="mb-3 row">
                              <label for="nameCompany" class="form-label"
                                >Tên Công Ty
                              </label>
                              <div class="">
                                <Field
                                  type="text"
                                  v-model="dataCompany.name"
                                  name="nameCompany"
                                  id="nameCompany"
                                  class="form-control"
                                  placeholder="Nhập tên công ty"
                                  rules="required|max:128"
                                />
                                <ErrorMessage
                                  class="error"
                                  name="nameCompany"
                                />
                              </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="number_tax" class="form-label"
                                >Mã số thuế
                              </label>
                              <div>
                                <Field
                                  type="text"
                                  v-model="dataCompany.number_tax"
                                  name="number_tax"
                                  id="number_tax"
                                  class="form-control"
                                  placeholder="Nhập mã số thuế công ty"
                                  rules="required"
                                />
                                <ErrorMessage class="error" name="number_tax" />
                              </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="email" class="form-label"
                                >Email Công Ty
                              </label>
                              <div>
                                <Field
                                  type="text"
                                  v-model="dataCompany.email"
                                  name="email"
                                  id="email"
                                  class="form-control"
                                  placeholder="Nhập email công ty"
                                  rules="required|email"
                                />
                                <ErrorMessage class="error" name="email" />
                              </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="number_member" class="form-label"
                                >Quy mô
                              </label>
                              <div>
                                <Field
                                  v-model="dataCompany.number_member"
                                  type="number"
                                  name="number_member"
                                  id="number_member"
                                  class="form-control"
                                  min="1"
                                  rules="required"
                                  placeholder="Nhập quy mô công ty"
                                />
                                <ErrorMessage
                                  class="error"
                                  name="number_member"
                                />
                              </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="addressCompany" class="form-label"
                                >Địa chỉ công ty
                              </label>
                              <div>
                                <Field
                                  type="text"
                                  v-model="dataCompany.address"
                                  name="address"
                                  id="address"
                                  class="form-control"
                                  rows="3"
                                  rules="required|max:128"
                                  placeholder="Nhập địa chỉ công ty"
                                />
                                <ErrorMessage class="error" name="address" />
                              </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="descriptionCompany" class="form-label"
                                >Mô tả công ty
                              </label>
                              <div>
                                <Editor
                                  v-model="dataCompany.desceibe"
                                  name="desceibe"
                                  id="desceibe"
                                  placeholder="Nhập mô tả công ty"
                                  class="text-company-employer"
                                  rules="required|max:255"
                                />

                                <ErrorMessage class="error" name="desceibe" />
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="descriptionCompany" class="form-label"
                                >logo
                              </label>
                              <div>
                                <Field
                                  type="file"
                                  v-model="model.logo"
                                  name="logo"
                                  id="logo"
                                  class="form-control"
                                  rows="3"
                                  rules="required"
                                  placeholder="logo"
                                />
                                <ErrorMessage class="error" name="logo" />
                              </div>
                              <input
                                type="hidden"
                                name="logo"
                                v-model="model.logo"
                              />
                              <img
                                :src="
                                  'http://127.0.0.1:8000/' + dataCompany.logo
                                "
                                alt=""
                                style="width: 100px !important"
                                height="100"
                              />
                            </div>
                            <div class="col-md-12">
                              <button
                                type="button"
                                class="
                                  btn
                                  min-width
                                  btn
                                  min-width
                                  btn btn-secondary
                                  mr-2
                                  btn-lg
                                "
                              >
                                <!---->
                                Hủy
                              </button>
                              <button
                                type="submit"
                                class="btn min-width btn btn-primary btn-lg"
                              >
                                <!---->
                                Cập nhật
                              </button>
                            </div>
                          </div>
                        </div>

                        <!-- end row -->
                      </div>
                    </div>
                    <!-- end contact-form-action -->
                  </div>
                  <!-- end billing-content -->
                </div>
                <!-- end billing-form-item -->

                <!-- end billing-form-item -->
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

import moment from 'moment'
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
      model: this.data.Company ?? '',
      employer: this.data.employer,
      preview: null,
      image: null,
      preview_list: [],
      image_list: [],
      filePreview: '',
      Image: null,
      statusImage: '',
      dataCompany: ''
    }
  },
  props: ['data'],
  created() {
    console.log(this.data.employer)
    if (this.data.Company) {
      this.dataCompany = this.data.Company
    }
    if (this.data.accuracy) {
      this.Image = this.data.accuracy.images
      if (this.data.accuracy.status == 0) {
        this.statusImage = 0
      } else {
        this.statusImage = 1
      }
    }
    let messError = {
      en: {
        fields: {
          file_cv: {
            required: 'Ảnh không được để trống',
            mimes: 'Ảnh chỉ hỗ trợ dạng jpeg,png,jpg,gif,svg,pdf,doc,docx',
            max: 'kích thước ảnh quá lớn'
          },
          name: {
            required: 'Xin hãy nhập tên của bạn.',
            max: 'Vui lòng nhập tên của bạn trong 128 ký tự.'
          },
          nameCompany: {
            required: 'Xin hãy nhập tên công ty.',
            max: 'Vui lòng nhập tên công ty trong 128 ký tự.'
          },
          descriptionCompany: {
            required: 'Xin hãy nhập địa chỉ công ty.',
            max: 'Vui lòng nhập địa chỉ công ty trong 255 ký tự.'
          },
          addressCompany: {
            required: 'Xin hãy nhập địa chỉ công ty.',
            max: 'Vui lòng nhập địa chỉ công ty trong 128 ký tự.'
          },
          address: {
            required: 'Xin hãy nhập địa chỉ của bạn.',
            max: 'Vui lòng nhập địa chỉ công ty trong 128 ký tự.'
          },
          number_member: {
            required: 'Vui lòng nhập quy mô công ty.'
          },
          phoneCompany: {
            required: 'Vui lòng nhập số điện thoại công ty.'
          },
          phone: {
            required: 'Vui lòng nhập số điện thoại .'
          },
          tax_code: {
            required: 'Vui lòng nhập mã số thuế .'
          },
          emailCompany: {
            required: 'Hãy điền địa chỉ email công ty.',
            email: 'Vui lòng nhập đúng định dạng địa chỉ email.'
            // max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
          },
          email: {
            required: 'Hãy điền địa chỉ email của bạn.',
            email: 'Vui lòng nhập đúng định dạng địa chỉ email.'
            // max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
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
    moment: function () {
      return moment()
    },
    chooseImage() {
      this.$refs['fileInput'].click()
    },
    onChange(e) {
      let fileInput = this.$refs.fileInput
      let imgFile = fileInput.files
      if (imgFile && imgFile[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
          this.filePreview = e.target.result
        }
        reader.readAsDataURL(imgFile[0])
      }
    },
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
    },
    previewImage: function (event) {
      var input = event.target
      if (input.files) {
        var reader = new FileReader()
        reader.onload = (e) => {
          this.preview = e.target.result
        }
        this.image = input.files[0]
        reader.readAsDataURL(input.files[0])
      }
    }
  }
}
</script>

<style>
.justify-content-between {
  justify-content: space-between !important;
}

.d-flex {
  display: flex !important;
}
.line-date[data-v-79f03480] {
  font-weight: 700;
}
.line[data-v-79f03480] {
  padding-left: 1rem;
  position: relative;
}
.line .line-content[data-v-79f03480] {
  border-left: 1px solid #ebf3fe;
}
.line .line-content .time[data-v-79f03480] {
  margin-right: 5px;
  padding: 3px;
  border-radius: 5px;
  background: #ebf3fe;
  color: #4285f4;
}
.line .content[data-v-79f03480] {
  position: relative;
  padding-left: 1rem;
}

.form-update-company {
  width: 80%;
  margin-left: 10%;
}

.shadow-none {
  box-shadow: none !important;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.content[data-v-4ad9e6f8] {
  width: calc(100% - 230px);
}

.card {
  border: none;
}
.align-items-center {
  font-size: 18px;
  font-weight: 500px;
}
.card-employer-content {
  width: 94%;
  border: 1px solid #f1f3f4;
  margin: 15px 10px 20px 40px;
  border-radius: 15px;
}
</style>