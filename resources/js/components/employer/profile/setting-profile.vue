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
                  active
                "
                ><i data-v-61ae721f="" class="fa mr-2 fa-building"></i> Thông
                tin công ty
              </a>
            </div>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
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
                  >
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
                            /><span class="font-weight-bold"> Hùng</span>
                            <br /><span class="text-black-50"
                              >Hung@gmail.com</span
                            ><span> </span>
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
                                      name="email"
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
                                      Lưu
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
                    >
                      <div class="card h-100">
                        <div class="card-body">
                          <br />

                          <div class="mb-3 row">
                            <label
                              for="nameCompany"
                              class="col-sm-3 col-form-label"
                              >Tên Công Ty<span class="required-lable">*</span>:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="text"
                                name="nameCompany"
                                id="nameCompany"
                                class="form-control"
                                placeholder="Nhập tên công ty"
                                rules="required|max:128"
                              />
                              <ErrorMessage class="error" name="nameCompany" />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="phoneCompany"
                              class="col-sm-3 col-form-label"
                              >Tên Công Ty<span class="required-lable">*</span>:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="text"
                                name="phoneCompany"
                                id="phoneCompany"
                                class="form-control"
                                placeholder="Nhập số điện thoại công ty"
                                rules="required"
                              />
                              <ErrorMessage class="error" name="phoneCompany" />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="emailCompany"
                              class="col-sm-3 col-form-label"
                              >Email Công Ty<span class="required-lable">*</span
                              >:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="text"
                                name="emailCompany"
                                id="emailCompany"
                                class="form-control"
                                placeholder="Nhập email công ty"
                                rules="required|email"
                              />
                              <ErrorMessage class="error" name="emailCompany" />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="number_member"
                              class="col-sm-3 col-form-label"
                              >Số lượng thành viên<span class="required-lable"
                                >*</span
                              >:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="number"
                                name="number_member"
                                id="number_member"
                                class="form-control"
                                min="1"
                                rules="required"
                                placeholder="Nhập số lượng thành viên"
                              />
                              <ErrorMessage
                                class="error"
                                name="number_member"
                              />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="addressCompany"
                              class="col-sm-3 col-form-label"
                              >Địa chỉ công ty<span class="required-lable"
                                >*</span
                              >:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="text"
                                name="addressCompany"
                                id="addressCompany"
                                class="form-control"
                                rows="3"
                                rules="required|max:128"
                                placeholder="Nhập địa chỉ công ty"
                              />
                              <ErrorMessage
                                class="error"
                                name="addressCompany"
                              />
                            </div>
                          </div>
                          <br />
                          <div class="mb-3 row">
                            <label
                              for="descriptionCompany"
                              class="col-sm-3 col-form-label"
                              >Mô tả công ty<span class="required-lable">*</span
                              >:
                            </label>
                            <div class="col-sm-9">
                              <Field
                                type="text"
                                name="descriptionCompany"
                                id="descriptionCompany"
                                class="form-control"
                                rows="3"
                                rules="required|max:128"
                                placeholder="Nhập mô tả công ty"
                              />
                              <ErrorMessage
                                class="error"
                                name="descriptionCompany"
                              />
                            </div>
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
                              Lưu
                            </button>
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
      //   csrfToken: Laravel.csrfToken,
      // model: this.data.employer
      //   value: this.data.email
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
          nameCompany: {
            required: 'Xin hãy nhập tên công ty.',
            max: 'Vui lòng nhập tên công ty trong 128 ký tự.'
          },
          descriptionCompany: {
            required: 'Xin hãy nhập địa chỉ công ty.',
            max: 'Vui lòng nhập địa chỉ công ty trong 128 ký tự.'
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
            required: 'Vui lòng nhập số lượng thành viên .'
          },
          phoneCompany: {
            required: 'Vui lòng nhập số điện thoại công ty.'
          },
          phone: {
            required: 'Vui lòng nhập số điện thoại .'
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



.add-experience:hover {
  background: #ba68c8;
  color: #fff;
  cursor: pointer;
  border: solid 1px #ba68c8;
}
</style>