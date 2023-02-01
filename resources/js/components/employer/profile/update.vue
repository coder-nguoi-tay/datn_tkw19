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
            :action="data.urlStoreEmployer"
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
                            <div
                              class="col-md-3 border-right"
                              style="margin-left: -20px"
                            >
                              <div
                                class="
                                  flex-column
                                  align-items-center
                                  text-center
                                  p-3
                                  py-5
                                "
                              >
                                <img
                                  src="https://png.pngtree.com/png-vector/20190223/ourlarge/pngtree-admin-rolls-glyph-black-icon-png-image_691507.jpg"
                                  alt="Admin"
                                  class="rounded-circle"
                                  width="200"
                                />
                                <br /><span class="font-weight-bold">
                                  {{ employer.name }}</span
                                >
                                <br /><span> </span>
                              </div>
                            </div>
                            <div class="col-md-9 border-right">
                              <div class="p-3 py-5">
                                <div class="card">
                                  <div class="card-body">
                                    <br />
                                    <div class="mb-3 row">
                                      <label
                                        for="name"
                                        class="col-sm-3 col-form-label"
                                        >Họ và tên<span class="required-lable"
                                          >*</span
                                        >:</label
                                      >
                                      <div class="col-sm-9">
                                        <Field
                                          type="text"
                                          name="name"
                                          v-model="employer.name"
                                          id="name"
                                          rules="required|max:128"
                                          class="form-control"
                                          placeholder="Họ và tên"
                                        />
                                        <ErrorMessage
                                          class="error"
                                          name="name"
                                        />
                                      </div>
                                    </div>
                                    <br />
                                    <div class="mb-3 row">
                                      <label
                                        for="email"
                                        class="col-sm-3 col-form-label"
                                        >Email<span class="required-lable"
                                          >*</span
                                        >:
                                      </label>
                                      <div class="col-sm-9">
                                        <Field
                                          type="email"
                                          v-model="employer.get_user.email"
                                          name="email"
                                          disabled
                                          readonly
                                          id="email"
                                          rules="required|email"
                                          class="form-control"
                                          placeholder="Nhập email"
                                        />
                                        <ErrorMessage
                                          class="error"
                                          name="email"
                                        />
                                      </div>
                                    </div>
                                    <br />
                                    <div class="mb-3 row">
                                      <label
                                        for="phone"
                                        class="col-sm-3 col-form-label"
                                        >Số Điện Thoại<span
                                          class="required-lable"
                                          >*</span
                                        >:
                                      </label>
                                      <div class="col-sm-9">
                                        <Field
                                          type="text"
                                          name="phone"
                                          v-model="employer.phone"
                                          id="phone"
                                          rules="required"
                                          class="form-control"
                                          placeholder="Nhập Số Điện Thoại"
                                        />
                                        <ErrorMessage
                                          class="error"
                                          name="phone"
                                        />
                                      </div>
                                    </div>
                                    <br />
                                    <div class="mb-3 row">
                                      <label
                                        for="address"
                                        class="col-sm-3 col-form-label"
                                        >Địa Chỉ<span class="required-lable"
                                          >*</span
                                        >:
                                      </label>
                                      <div class="col-sm-9">
                                        <Field
                                          type="text"
                                          name="address"
                                          id="address"
                                          v-model="employer.address"
                                          rows="3"
                                          class="form-control"
                                          rules="required|max:128"
                                          placeholder="Nhập Địa Chỉ"
                                        />
                                        <ErrorMessage
                                          class="error"
                                          name="address"
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
                                          class="
                                            btn
                                            min-width
                                            btn btn-primary btn-lg
                                          "
                                        >
                                          <!---->
                                          Cập nhật
                                        </button>
                                      </div>
                                    </div>
                                    <br />
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
              </div>
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
    Editor,
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

<style scoped>
.bg-white {
  background-color: #fff !important;
}
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

.rounded {
  border-radius: 0.214rem !important;
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
.align-items-center {
  font-size: 18px;
  font-weight: 500px;
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