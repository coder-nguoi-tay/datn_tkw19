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
                ><i data-v-61ae721f="" class="fa mr-2 fa-user"></i> Nạp tiền
              </a>
            </div>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div
              class="tab-pane fade"
              id="v-pills-settings"
              role="tabpanel"
              aria-labelledby="v-pills-settings-tab"
              tabindex="0"
            >
              <div class="row card-profile-employer">
                <h6 class="title-update-employer mb-3">
                  Nạp tiền vào tài khoản
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
                      :action="data.urlStore"
                    >
                      <input type="hidden" :value="csrfToken" name="_token" />
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
                            >Hình thức thanh toán<span class="required-lable"
                              >*</span
                            >
                          </label>
                          <div class="col-sm-9">
                            <Field
                              class="form-select"
                              name="payments"
                              rules="required"
                              as="select"
                              aria-label="Default select example"
                            >
                              <option value disabled selected>
                                Chọn hình thức thanh toán
                              </option>
                              <option value="1">Online</option>
                              <option value="2">Offline</option>
                            </Field>
                            <ErrorMessage class="error" name="payments" />
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
          payments: {
            required: 'Vui lòng nhập hình thức thanh toán.'
          },
          bank: {
            required: 'Vui lòng chọn ngân hàng thanh toán.'
          },

          pay_member: {
            required: 'Vui lòng nhập số tiền muốn nạp .'
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
</style>