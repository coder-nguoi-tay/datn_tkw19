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
            :action="data.urlAccuracyCompany"
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
                            <div class="row">
                              <div class="col-12">
                                <div class="mb-3 row">
                                  <div class="row box-title-license">
                                    <p class="title-license">
                                      Trạng thái:
                                      <span
                                        class="badge bg-secondary"
                                        v-if="statusImage == 0"
                                        >Chưa xác thực</span
                                      >
                                      <span
                                        class="badge bg-success"
                                        v-if="statusImage == 1"
                                        >Đã xác thực</span
                                      >
                                    </p>
                                    <p class="title-license">
                                      Giấy phép kinh doanh:
                                    </p>
                                    <p class="title-license">
                                      Dung lượng file không vượt quá 5MB
                                    </p>
                                  </div>

                                  <div class="text-center">
                                    <div
                                      class="img-fluid border box-upload p-3"
                                      id="img-preview"
                                      @click="chooseImage()"
                                      role="button"
                                      style="height: 200px; width: 200px"
                                      v-if="!Image"
                                    >
                                      <div style="display: none">
                                        <input
                                          type="file"
                                          @change="onChange"
                                          ref="fileInput"
                                          accept="image/*"
                                          name="images"
                                        />
                                      </div>

                                      <div
                                        id="img-preview"
                                        @click="chooseImage()"
                                        role="button"
                                      >
                                        <div style="display: none">
                                          <input
                                            type="file"
                                            id="file"
                                            @change="onChange"
                                            ref="fileInput"
                                            accept="image/*"
                                            name="images"
                                          />
                                        </div>
                                        <img
                                          v-if="filePreview"
                                          :src="filePreview"
                                          class="img-fluid img-show"
                                        />
                                      </div>
                                    </div>
                                    <img
                                      v-if="Image != null"
                                      :src="'http://127.0.0.1:8000/' + Image"
                                      class="img-fluid"
                                    />
                                  </div>
                                  <ErrorMessage class="error" name="images" />
                                  <input
                                    type="hidden"
                                    name="images"
                                    :value="model.images"
                                  />
                                </div>
                              </div>
                            </div>

                            <div class="col-md-12" v-if="!Image">
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
                <div class="row">
                  <h6 class="title-update-employer mb-3">Tài liệu hướng dẫn</h6>
                  <a
                    class="p-update-employer"
                    href="https://docs.google.com/document/d/1wOSg50rCXduzUxLYIYOAdWA-k3fjvfvyR-B8ASUsUUs/edit?usp=sharing"
                    >Hướng dẫn đăng lên</a
                  >
                  <a
                    class="p-update-employer"
                    href="https://docs.google.com/document/d/1kw-3VIZHwNqCpIZZlYrQ1PmgK1dg0sw8zVImxBorYRY/edit?usp=sharing"
                    >Giấy phép kinh doanh</a
                  >
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
.img-show {
  width: 180px !important;
  height: 170px !important;
}
[data-v-79f03480] .reportrange-text {
  background-color: #f3f4f5;
  color: #212f3f;
  border: none;
  border-radius: 18px;
}
.reportrange-text[data-v-2359713c] {
  background: #fff;
  cursor: pointer;
  padding: 5px 10px;
  border: 1px solid #ccc;
  width: 100%;
}
.vue-daterange-picker[data-v-2359713c] {
  position: relative;
  display: inline-block;
  min-width: 60px;
}
.font-weight-bold {
  font-weight: 500 !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.d-flex {
  display: flex !important;
}

.border-0 {
  border: 0 !important;
}

.bg-white {
  background-color: #fff !important;
}
.history[data-v-79f03480] {
  padding: 0.75rem 0;
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
.box-img {
  height: 200px;
}
.box-title-license {
  height: 130px;
}
.title-license {
  font-size: 16px;
  font-weight: 550;
  margin-left: -10px;
}
.box-upload {
  background: rgba(229, 247, 237, 0.1);
  border: 2px dashed #2eb85c;
  border-radius: 8px;
  cursor: pointer;
  margin-bottom: 16px;
  position: relative;
  text-align: center;
  transition: 0.4s;
}

.icon {
  margin-bottom: 24px;
  margin-top: 10px;
}

.file-upload-cv {
  margin: 0px 0px 10px 80px;
  cursor: pointer;
}
.form-update-company {
  width: 80%;
  margin-left: 10%;
}
.tab-content {
  width: 100%;
}
.page-content {
  max-width: 1296px;
  padding: 20px 20px 80px;
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
.shadow-none {
  box-shadow: none !important;
}
.border-0 {
  border: 0 !important;
}
.card-profile-employer {
  width: 100%;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  width: 100%;
}

.list-group[data-v-61ae721f] {
  height: 100%;
  background: #fafafa;
  width: 230px;
}

.rounded {
  border-radius: 0.214rem !important;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item[data-v-61ae721f] {
  background: transparent;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-item[data-v-61ae721f] {
  background: transparent;
}

.list-group-item + .list-group-item {
  border-top-width: 0;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #2eb85c;
  border-color: #2eb85c;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.content[data-v-4ad9e6f8] {
  width: calc(100% - 230px);
}
.py-5 {
  border: 1px solid #f1f3f4;
  border-radius: 10px;
}
.rounded {
  border-radius: 0.214rem !important;
}

.bg-white {
  background-color: #fff !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.w-50 {
  width: 50% !important;
}

.nav-tabs .nav-link[data-v-6f017734] {
  border-bottom: 2px solid #eee !important;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .nav-link {
  margin-bottom: -1px;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.row-profile-employer {
  margin-right: 10px;
  margin-left: 10px;
}

.icon-tab[data-v-6f017734] {
  background: #fafafa;
  padding: 10px;
  border-radius: 50%;
}
.p-0 {
  padding: 0 !important;
}
.description[data-v-6f017734] {
  font-size: 12px;
}

.nav-tabs .nav-link.active i[data-v-6f017734],
.nav-tabs .nav-link.active p[data-v-6f017734] {
  color: #2eb85c;
}
.card {
  border: none;
}
.card-body {
  margin: 15px 15px;
  width: 100%;
}
.gutters-sm {
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
.card-employer-content {
  width: 94%;
  border: 1px solid #f1f3f4;
  margin: 15px 10px 20px 40px;
  border-radius: 15px;
}
.title-update-employer {
  margin: 20px 0px 0px 30px;
  font-size: 20px;
  font-weight: 600;
}
.p-update-employer {
  margin: 0px 0px 10px 30px;
  font-size: 17px;
  color: #000;
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
  background-color: #2eb85c;
  border-color: #2eb85c;
}
.btn-primary:hover {
  color: #fff;
  background-color: #2eb85c;
  border-color: #2eb85c;
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