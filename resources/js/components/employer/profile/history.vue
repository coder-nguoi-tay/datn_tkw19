<template>
  <div>
    <!-- Lịch sử giao dịch -->
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
                                  <div
                                    data-v-79f03480=""
                                    class="d-flex history"
                                  >
                                    <span
                                      data-v-79f03480=""
                                      class="line-date"
                                      >{{
                                        moment(item.created_at).format(
                                          'YYYY-MM-DD'
                                        )
                                      }}</span
                                    >
                                    <div data-v-79f03480="" class="line">
                                      <div
                                        data-v-79f03480=""
                                        class="line-content"
                                      >
                                        <div data-v-79f03480="" class="content">
                                          <p data-v-79f03480="">
                                            <span
                                              data-v-79f03480=""
                                              class="time"
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
                                            <span
                                              data-v-79f03480=""
                                              class="time"
                                              >Nội dung</span
                                            ><span data-v-79f03480="">{{
                                              item.desceibe
                                            }}</span>
                                          </p>
                                        </div>
                                        <div data-v-79f03480="" class="content">
                                          <p data-v-79f03480="">
                                            <span
                                              data-v-79f03480=""
                                              class="time"
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
import { Form as VeeForm, Field, defineRule, configure } from 'vee-validate'
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
    Field,
    Editor
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