<template>
  <div>
    <div data-v-4ad9e6f8="" class="container-fluid page-content">
      <div data-v-4ad9e6f8="" class="card shadow-none border-0">
        <div data-v-4ad9e6f8="" class="d-flex shadow-sm">
          <div data-v-4ad9e6f8="">
            <div
              data-v-61ae721f=""
              data-v-4ad9e6f8=""
              class="list-group rounded"
            >
              <a
                id="v-pills-profile-tab"
                data-coreui-toggle="pill"
                data-coreui-target="#v-pills-profile"
                type="button"
                role="tab"
                aria-controls="v-pills-profile"
                aria-selected="false"
                data-v-61ae721f=""
                href=""
                class="
                  list-group-item list-group-item-action
                  border-0
                  nuxt-link-active
                "
                ><i data-v-61ae721f="" class="fa mr-2 fa-user"></i> Thông tin cá
                nhân
              </a>
              <a
                id="v-pills-settings-tab"
                data-coreui-toggle="pill"
                data-coreui-target="#v-pills-settings"
                type="button"
                role="tab"
                aria-controls="v-pills-settings"
                aria-selected="false"
                data-v-61ae721f=""
                href=""
                class="
                  list-group-item list-group-item-action
                  border-0
                  nuxt-link-active
                "
                ><i data-v-61ae721f="" class="fa mr-2 fa-building"></i> Thông
                tin công ty
              </a>
              <a
                id="v-pills-license-tab"
                data-coreui-toggle="pill"
                data-coreui-target="#v-pills-license"
                type="button"
                role="tab"
                aria-controls="v-pills-license"
                aria-selected="false"
                data-v-61ae721f=""
                href=""
                class="
                  list-group-item list-group-item-action
                  border-0
                  nuxt-link-active
                "
                ><i data-v-61ae721f="" class="fa mr-2 fa-building"></i> Giấy
                phép kinh doanh
              </a>
              <a
                id="v-pills-history-tab"
                data-coreui-toggle="pill"
                data-coreui-target="#v-pills-history"
                type="button"
                role="tab"
                aria-controls="v-pills-history"
                aria-selected="false"
                data-v-61ae721f=""
                href=""
                class="
                  list-group-item list-group-item-action
                  border-0
                  nuxt-link-active
                "
                ><i data-v-61ae721f="" class="fa mr-2 fa-building"></i> Lịch sử
                giao dịch
              </a>
            </div>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <!-- Thông tin cá nhân-->
            <div
              class="tab-pane fade"
              id="v-pills-profile"
              role="tabpanel"
              aria-labelledby="v-pills-profile-tab"
              tabindex="0"
            >
              <div class="row card-profile-employer">
                <VeeForm
                  as="div"
                  v-slot="{ handleSubmit }"
                  @invalid-submit="onInvalidSubmit"
                >
                  <form
                    method="POST"
                    @submit="handleSubmit($event, onSubmit)"
                    class="form-register-employer"
                    ref="formData"
                    :action="data.urlStoreEmployer"
                  >
                    <input type="hidden" :value="csrfToken" name="_token" />
                    <Field type="hidden" value="PUT" name="_method" />
                    <div class="container rounded bg-white mt-5 mb-5">
                      <div class="row">
                        <div class="col-md-3 border-right">
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
                              width="150"
                            /><span class="font-weight-bold">
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
                                    <ErrorMessage class="error" name="name" />
                                  </div>
                                </div>
                                <br />
                                <div class="mb-3 row">
                                  <label
                                    for="email"
                                    class="col-sm-3 col-form-label"
                                    >Email<span class="required-lable">*</span>:
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
                                    <ErrorMessage class="error" name="email" />
                                  </div>
                                </div>
                                <br />
                                <div class="mb-3 row">
                                  <label
                                    for="phone"
                                    class="col-sm-3 col-form-label"
                                    >Số Điện Thoại<span class="required-lable"
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
                                    <ErrorMessage class="error" name="phone" />
                                  </div>
                                </div>
                                <br />
                                <div class="mb-3 row">
                                  <label
                                    for="address"
                                    class="col-sm-3 col-form-label"
                                    >Địa Chỉ<span class="required-lable">*</span
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
                  </form>
                </VeeForm>
              </div>
            </div>

            <!-- Lịch sử giao dịch -->
            <div
              class="tab-pane fade"
              id="v-pills-history"
              role="tabpanel"
              aria-labelledby="v-pills-history-tab"
              tabindex="0"
            >
              <div class="row card-profile-employer">
                <h6 class="title-update-employer mb-3">Tất cả lịch sử</h6>
                <div class="card-employer-content">
                  <VeeForm
                    as="div"
                    v-slot="{ handleSubmit }"
                    @invalid-submit="onInvalidSubmit"
                  >
                    <form
                      method="POST"
                      @submit="handleSubmit($event, onSubmit)"
                      class="form-register-employer"
                      ref="formData"
                    >
                      <div class="card h-100">
                        <div class="card-body">
                          <div
                            class="col-12 form-update-company"
                            v-for="item in data.paymentHistory"
                            :key="item.id"
                          >
                            <div class="mb-3 row">
                              <div data-v-79f03480="" class="card-body">
                                <!---->
                                <div data-v-79f03480="" class="d-flex history">
                                  <span data-v-79f03480="" class="line-date">{{
                                    moment(item.created_at).format('YYYY-MM-DD')
                                  }}</span>
                                  <div data-v-79f03480="" class="line">
                                    <div
                                      data-v-79f03480=""
                                      class="line-content"
                                    >
                                      <div data-v-79f03480="" class="content">
                                        <p data-v-79f03480="">
                                          <span data-v-79f03480="" class="time"
                                            >Số tiền</span
                                          ><span data-v-79f03480="">{{
                                            new Intl.NumberFormat('de-DE', {
                                              style: 'currency',
                                              currency: 'VND'
                                            }).format(item.price)
                                          }}</span>
                                        </p>
                                      </div>
                                      <div data-v-79f03480="" class="content">
                                        <p data-v-79f03480="">
                                          <span data-v-79f03480="" class="time"
                                            >Nội dung</span
                                          ><span data-v-79f03480="">{{
                                            item.desceibe
                                          }}</span>
                                        </p>
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

            <!-- Giấy phép kinh doanh-->
            <div
              class="tab-pane fade"
              id="v-pills-license"
              role="tabpanel"
              aria-labelledby="v-pills-license-tab"
              tabindex="0"
            >
              <div class="row card-profile-employer">
                <h6 class="title-update-employer mb-3">
                  Thông tin giấy phép kinh doanh
                </h6>
                <div class="card-employer-content">
                  <VeeForm
                    as="div"
                    v-slot="{ handleSubmit }"
                    @invalid-submit="onInvalidSubmit"
                  >
                    <form
                      method="POST"
                      @submit="handleSubmit($event, onSubmit)"
                      class="form-register-employer"
                      ref="formData"
                      :action="data.urlAccuracyCompany"
                      enctype="multipart/form-data"
                    >
                      <input type="hidden" :value="csrfToken" name="_token" />
                      <div class="card h-100">
                        <div class="card-body">
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
                    </form>
                  </VeeForm>
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
              </div>
            </div>

            <!-- Thông tin công ty-->
            <div
              class="tab-pane fade"
              id="v-pills-settings"
              role="tabpanel"
              aria-labelledby="v-pills-settings-tab"
              tabindex="0"
            >
              <div class="row card-profile-employer">
                <h6 class="title-update-employer mb-3">
                  Cập nhật thông tin công ty
                </h6>
                <div class="card-employer-content">
                  <VeeForm
                    as="div"
                    v-slot="{ handleSubmit }"
                    @invalid-submit="onInvalidSubmit"
                  >
                    <form
                      method="POST"
                      @submit="handleSubmit($event, onSubmit)"
                      class="form-register-employer"
                      ref="formData"
                      :action="data.urlStoreCompany"
                      enctype="multipart/form-data"
                    >
                      <input type="hidden" name="_token" :value="csrfToken" />
                      <div class="card h-100">
                        <div class="card-body">
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
                      </div>
                    </form>
                  </VeeForm>
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
  border: 2px dashed #00b14f;
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
/* .list-group-item.active[data-v-61ae721f] {
  color: #28a745;
  background: #fff;
  font-weight: 700;
} */

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
  background-color: #00b14f;
  border-color: #00b14f;
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
/* .nav-tabs .nav-link.active[data-v-6f017734] {
  border-bottom: 2px solid #00b14f !important;
} */

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
  color: #00b14f;
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
  background-color: #00b14f;
  border-color: #00b14f;
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
.profile-button {
  background: rgb(99, 39, 120);
  box-shadow: none;
  border: none;
}

.profile-button:hover {
  background: #682773;
}

.profile-button:focus {
  background: #682773;
  box-shadow: none;
}

.profile-button:active {
  background: #682773;
  box-shadow: none;
}

.back:hover {
  color: #682773;
  cursor: pointer;
}

.labels {
  font-size: 11px;
}

.add-experience:hover {
  background: #ba68c8;
  color: #fff;
  cursor: pointer;
  border: solid 1px #ba68c8;
}
</style>