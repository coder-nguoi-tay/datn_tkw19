<template>
  <div class="container-fluid">
    <div class="register-header-box">
      <div class="overlay">
        <div class="register-header-logo d-flex justify-content-between p-4">
          <div class="back">
            <a
              :href="data.urlBack"
              class="text-decoration-none text-white btn-comback"
              ><i class="fas fa-arrow-left"></i>
              Quay lại
            </a>
          </div>
          <div class="logo">
            <img
              src="/assets/img/user/banner-5.jpg"
              width="160px"
              class="logo-lg"
            />
            <img src="/assets/img/user/banner-5.jpg" class="logo-mobile" />
          </div>
        </div>

        <h3 class="login-card-description">Đăng ký tài khoản Nhà tuyển dụng</h3>
        <p class="login-card-description-text">
          Cùng tạo dựng lợi thế cho doanh nghiệp bằng trải nghiệm công nghệ
          tuyển dụng ứng dụng sâu AI & Hiring Funnel
        </p>
      </div>
    </div>
    <div class="container form-employer-register">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="row">
            <div class="card-body">
              <!-- Modal -->
              <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Quy Định
                      </h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="register-policy">
                        Để đảm bảo chất lượng dịch vụ, ITWork

                        <span class="text-danger"
                          >không cho phép một người dùng tạo nhiều tài khoản
                          khác nhau</span
                        >.
                        <br />
                        <p>
                          Nếu phát hiện vi phạm, ITWork sẽ ngừng cung cấp dịch
                          vụ tới tất cả các tài khoản trùng lặp hoặc chặn toàn
                          bộ truy cập tới hệ thống website của ITWork.
                        </p>

                        <p>
                          Đối với trường hợp khách hàng đã sử dụng hết 3 tin
                          tuyển dụng miễn phí, ITWork hỗ trợ kích hoạt đăng tin
                          tuyển dụng không giới hạn sau khi quý doanh nghiệp
                          cung cấp thông tin giấy phép kinh doanh.
                        </p>
                        <br />
                        <div class="py-2">
                          Mọi thắc mắc vui lòng liên hệ Hotline CSKH:
                        </div>
                        <div class="d-flex">
                          <div class="contact-1">
                            <button
                              class="
                                btn
                                rounded-circle
                                transparent-1
                                py-1
                                px-2
                                btn-primary
                                mr-2
                              "
                            >
                              <i class="fas fa-phone-alt"></i>
                            </button>
                            <span class="font-weight-bold">(052) 623872</span>
                          </div>
                          <div>
                            <button
                              class="
                                btn
                                rounded-circle
                                transparent-1
                                py-1
                                px-2
                                btn-primary
                                mr-2
                                od-2
                              "
                            >
                              <i class="fas fa-phone-alt"></i>
                            </button>
                            <span class="font-weight-bold">052 2092294</span>
                          </div>
                        </div>
                        <div class="py-2">
                          <span class="text-muted mr-2">Đã có tài khoản?</span>
                          <a href="/home" class="text-primary">
                            Đăng nhập ngay
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <br />
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
                  <input type="hidden" :value="csrfToken" name="_token" />
                  <h4 class="title-register-employer">TÀI KHOẢN</h4>
                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label"
                      >Email đăng nhập<span class="required-lable"
                        >*</span
                      ></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        name="email"
                        v-model="model.email"
                        :value="value.email"
                        id="email"
                        rules="required|email|max:255"
                        class="form-control"
                        placeholder="Nhập email"
                      />
                      <ErrorMessage class="error" name="email" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label"
                      >Mật khẩu<span class="required-lable">*</span></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="password"
                        v-model="model.password"
                        :value="value.password"
                        name="password"
                        rules="required|max:16|min:8"
                        id="password"
                        class="form-control"
                        placeholder="Mật khẩu (phải trên 8 ký tự)"
                      />
                      <ErrorMessage class="error" name="password" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_old" class="col-sm-4 col-form-label"
                      >Nhập lại mật khẩu<span class="required-lable"
                        >*</span
                      ></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="password"
                        v-model="model.password_old"
                        :value="value.password_old"
                        name="password_old"
                        rules="required|confirmed:@password"
                        id="password_old"
                        class="form-control"
                        placeholder="Nhập lại mật khẩu:"
                      />
                      <ErrorMessage class="error" name="password_old" />
                    </div>
                  </div>

                  <h4 class="title-register-employer">
                    THÔNG TIN NHÀ TUYỂN DỤNG
                  </h4>
                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label"
                      >Họ và tên<span class="required-lable">*</span></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        v-model="model.name"
                        :value="value.name"
                        name="name"
                        rules="required|max:128"
                        id="name"
                        class="form-control"
                        placeholder="Họ tên"
                      />
                      <ErrorMessage class="error" name="name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sdt" class="col-sm-4 col-form-label"
                      >Số điện thoại<span class="required-lable">*</span></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        name="sdt"
                        v-model="model.sdt"
                        :value="value.sdt"
                        rules="required|telephone"
                        id="sdt"
                        class="form-control"
                        placeholder="Số điện thoại cá nhân"
                      />
                      <ErrorMessage class="error" name="sdt" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sdt" class="col-sm-4 col-form-label"
                      >Giới tính<span class="required-lable">*</span>:</label
                    >
                    <div class="col-sm-8">
                      <Field
                        v-model="model.sex"
                        :value="value.sex"
                        name="sex"
                        as="select"
                        rules="required"
                        class="form-select"
                      >
                        <option value disabled selected>Chọn giới tính</option>
                        <option value="0">Không yêu cầu</option>
                        <option value="nam">nam</option>
                        <option value="nữ">nữ</option>
                      </Field>
                      <ErrorMessage class="error" name="sex" />
                    </div>
                  </div>
                  <br />
                  <div class="form-group row">
                    <label for="company" class="col-sm-4 col-form-label"
                      >Công ty<span class="required-lable">*</span></label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        name="company"
                        v-model="model.company"
                        :value="value.company"
                        id="company"
                        rules="required|max:128"
                        class="form-control"
                        placeholder="Tên công ty"
                      />
                      <ErrorMessage class="error" name="company" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label"
                      >Vị trí công tác<span class="required-lable">*</span
                      >:</label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        name="workplace"
                        v-model="model.workplace"
                        :value="value.workplace"
                        id="workplace"
                        rules="required|max:128"
                        class="form-control"
                        placeholder="Vị trí công tác"
                      />
                      <ErrorMessage class="error" name="workplace" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label"
                      >Địa điểm cụ thể<span class="required-lable">*</span
                      >:</label
                    >
                    <div class="col-sm-8">
                      <Field
                        type="text"
                        name="address"
                        v-model="model.address"
                        :value="value.address"
                        id="address"
                        rules="required|max:128"
                        class="form-control"
                        placeholder="Địa điểm làm việc cụ thể"
                      />
                      <ErrorMessage class="error" name="address" />
                    </div>
                  </div>
                  <br />
                  <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label"
                      >Địa điểm làm việc<span class="required-lable">*</span
                      >:</label
                    >
                    <div class="col-sm-8">
                      <Field
                        v-model="model.location_id"
                        :value="value.location_id"
                        name="location_id"
                        as="select"
                        rules="required"
                        class="form-select"
                      >
                        <option value disabled selected>Chọn Địa chỉ</option>
                        <option
                          v-for="item in data.location"
                          :key="item.id"
                          :value="item.id"
                        >
                          {{ item.label }}
                        </option>
                      </Field>
                      <ErrorMessage class="error" name="location_id" />
                    </div>

                    <div class="form-group form-check">
                      <div
                        class="
                          custom-control custom-checkbox
                          form-check-input
                          my-0
                        "
                        type="checkbox"
                      >
                        <input
                          id="522sBGUn"
                          type="checkbox"
                          class="custom-control-input"
                          value="false"
                          data-gtm-form-interact-field-id="0"
                        />
                        <label
                          for="522sBGUn"
                          class="custom-control-label"
                        ></label>
                      </div>
                      <label class="form-check-label">
                        Tôi đồng ý với
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"
                          class="text-danger text-decoration-none"
                        >
                          &nbsp;Điều khoản dịch vụ&nbsp;
                        </a>
                        của ITWORK.
                      </label>
                    </div>
                  </div>
                  <div
                    data-v-9281c350=""
                    class="text-center mb-0 mt-4 action-container"
                  >
                    <button
                      type="submit"
                      class="main-button btn border btn-all"
                    >
                      Hoàn tất
                    </button>
                  </div>
                </form>
              </VeeForm>
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

    return {}
  },
  created() {
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
            // unique_custom: 'このメールアドレスは既に存在しています。'
          },
          password: {
            required: 'Xin hãy điền mật khẩu.',
            max: 'Vui lòng nhập mật khẩu có từ 8 đến 16 ký tự.',
            min: 'Vui lòng nhập mật khẩu có từ 8 đến 16 ký tự.',
            password_rule: 'Vui lòng nhập mật khẩu có chứa câu và số.'
          },
          password_old: {
            required: 'Vui lòng nhập xác nhận mật khẩu.',
            confirmed: 'Xác nhận mật khẩu không đúng.'
          },
          sdt: {
            required: 'Vui lòng nhập số điện thoại',
            telephone: 'Vui lòng nhập chính xác định dạng số điện thoại.'
          },
          location_id: {
            required: 'vui lòng chọn địa chỉ.'
          },
          workplace: {
            required: 'vui lòng chọn vị trí công tác.',
            max: 'không được quá 128 ký tự.'
          },
          sex: {
            required: 'vui lòng chọn giới tính.'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      value: this.data.request ?? ''
    }
  },
  mounted() {},
  props: ['data'],
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
body {
  font-family: 'Karla', sans-serif;
  background-color: #f1f2f6;
  min-height: 100vh;
}
.container-fluid {
  max-width: 100%;
}
.register-header-box {
  background-image: url(https://tuyendung.topcv.vn/app/_nuxt/img/register-image-bg.f17662b.jpg);

  background-size: cover;
  background-position: 0;
  height: 300px;

  position: relative;
  padding: 1.6188rem !important;
}
.register-header-box .overlay {
  position: absolute;
  background: #747474;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  opacity: 0.9;
}

.form-employer-register {
  width: 70%;
  margin-top: 20px !important;
}

.brand-wrapper {
  margin-bottom: 19px;
}

.brand-wrapper .logo {
  height: 37px;
}

.login-card {
  border: 0;
  margin-top: -13%;
  border-radius: 10.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden;
}

.login-card-img {
  border-radius: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.login-card .card-body {
  padding: 10px 60px 60px 90px;
}

@media (max-width: 422px) {
  .login-card .card-body {
    padding: 35px 24px;
    margin-left: 10px !important;
  }

  .login-card {
    margin-top: -70px !important;
  }
  .form-employer-register {
    width: 100% !important;
  }
  .form-register-employer {
    width: 95% !important;
    margin-left: 5px !important;
  }
  .login-card-description-text {
    width: 95% !important;
    text-align: justify !important;
    margin-left: -2px !important;
  }
}

.login-card-description {
  font-size: 30px;
  color: white;
  text-align: center;
  font-weight: normal;
}
.login-card-description-text {
  font-size: 14px;
  color: white;
  text-align: center !important;
  width: 30%;
  margin-left: 35%;
  text-align: justify;
  margin-bottom: 10px;
}
.logo-mobile {
  display: none;
}

.login-card form {
  max-width: 100%;
}

.login-card .form-control {
  border: 1px solid #d5dae2;
  padding: 15px 25px;
  margin-bottom: 20px;
  min-height: 45px;
  font-size: 13px;
  line-height: 15;
  font-weight: normal;
}

.login-card .form-control::-webkit-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-moz-placeholder {
  color: #919aa3;
}

.login-card .form-control:-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::placeholder {
  color: #919aa3;
}

.login-card .login-btn {
  padding: 13px 20px 12px;
  background-color: #000;
  border-radius: 4px;
  font-size: 17px;
  font-weight: bold;
  line-height: 20px;
  color: #fff;
  margin-bottom: 24px;
}

.login-card .login-btn:hover {
  border: 1px solid #000;
  background-color: transparent;
  color: #000;
}

.login-card .forgot-password-link {
  font-size: 14px;
  color: #919aa3;
  margin-bottom: 12px;
}

.login-card-footer-text {
  font-size: 16px;
  color: #0d2366;
  margin-bottom: 20px;
}

@media (max-width: 767px) {
  .login-card-footer-text {
    margin-bottom: 24px;
  }
}
.title-register-employer {
  font-size: 20px;
  color: #000;
  font-weight: normal;
}
.login-card-footer-nav a {
  font-size: 14px;
  color: #919aa3;
}
.modal-body {
  text-align: justify;
}
.od-2 {
  margin-left: 10px;
}
.form-check {
  margin-top: 35px;
  margin-left: 10px;
}
.form-check-input {
  border: none;
}
.required-lable {
  color: red;
  font-size: 20px;
}
/*# sourceMappingURL=login.css.map */
</style>