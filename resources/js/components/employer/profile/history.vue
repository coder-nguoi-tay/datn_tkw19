<template>
  <div>
    <!-- Lịch sử giao dịch -->
    <div class="dashboard-content-wrap">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div
              class="
                breadcrumb-content
                d-flex
                flex-wrap
                justify-content-between
                align-items-center
              "
            >
              <ul class="list-items d-flex align-items-center">
                <li class="active__list-item active">Tất cả lịch sử</li>
              </ul>
            </div>
            <!-- end breadcrumb-content -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="billing-form-item">
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
                                  <div data-v-79f03480="" class="line-content">
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
                                    <div data-v-79f03480="" class="content">
                                      <p data-v-79f03480="">
                                        <span data-v-79f03480="" class="time"
                                          >Trạng thái</span
                                        ><span data-v-79f03480="">{{
                                          item.status == 1
                                            ? 'Thành công'
                                            : 'Thất bại'
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
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Form as VeeForm, Field, defineRule, configure } from 'vee-validate'
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
        // fields: {
        //   file_cv: {
        //     required: 'Ảnh không được để trống',
        //     mimes: 'Ảnh chỉ hỗ trợ dạng jpeg,png,jpg,gif,svg,pdf,doc,docx',
        //     max: 'kích thước ảnh quá lớn'
        //   },
        //   name: {
        //     required: 'Xin hãy nhập tên của bạn.',
        //     max: 'Vui lòng nhập tên của bạn trong 128 ký tự.'
        //   },
        //   nameCompany: {
        //     required: 'Xin hãy nhập tên công ty.',
        //     max: 'Vui lòng nhập tên công ty trong 128 ký tự.'
        //   },
        //   descriptionCompany: {
        //     required: 'Xin hãy nhập địa chỉ công ty.',
        //     max: 'Vui lòng nhập địa chỉ công ty trong 255 ký tự.'
        //   },
        //   addressCompany: {
        //     required: 'Xin hãy nhập địa chỉ công ty.',
        //     max: 'Vui lòng nhập địa chỉ công ty trong 128 ký tự.'
        //   },
        //   address: {
        //     required: 'Xin hãy nhập địa chỉ của bạn.',
        //     max: 'Vui lòng nhập địa chỉ công ty trong 128 ký tự.'
        //   },
        //   number_member: {
        //     required: 'Vui lòng nhập quy mô công ty.'
        //   },
        //   phoneCompany: {
        //     required: 'Vui lòng nhập số điện thoại công ty.'
        //   },
        //   phone: {
        //     required: 'Vui lòng nhập số điện thoại .'
        //   },
        //   tax_code: {
        //     required: 'Vui lòng nhập mã số thuế .'
        //   },
        //   emailCompany: {
        //     required: 'Hãy điền địa chỉ email công ty.',
        //     email: 'Vui lòng nhập đúng định dạng địa chỉ email.'
        //     // max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
        //   },
        //   email: {
        //     required: 'Hãy điền địa chỉ email của bạn.',
        //     email: 'Vui lòng nhập đúng định dạng địa chỉ email.'
        //     // max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
        //   }
        // }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  components: {
    VeeForm,
    Field
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

.shadow-none {
  box-shadow: none !important;
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

/* .rounded {
  border-radius: 0.214rem !important;
} */

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

.description[data-v-6f017734] {
  font-size: 12px;
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