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
                                        >H??? v?? t??n<span class="required-lable"
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
                                          placeholder="H??? v?? t??n"
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
                                          placeholder="Nh????p email"
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
                                        >S??? ??i???n Tho???i<span
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
                                          placeholder="Nh????p S??? ??i???n Tho???i"
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
                                        >?????a Ch???<span class="required-lable"
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
                                          placeholder="Nh????p ?????a Ch???"
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
                                          H???y
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
                                          C???p nh???t
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
            required: '???nh kh??ng ???????c ????? tr???ng',
            mimes: '???nh ch??? h??? tr??? d???ng jpeg,png,jpg,gif,svg,pdf,doc,docx',
            max: 'k??ch th?????c ???nh qu?? l???n'
          },
          name: {
            required: 'Xin h??y nh???p t??n c???a b???n.',
            max: 'Vui l??ng nh???p t??n c???a b???n trong 128 k?? t???.'
          },
          nameCompany: {
            required: 'Xin h??y nh???p t??n c??ng ty.',
            max: 'Vui l??ng nh???p t??n c??ng ty trong 128 k?? t???.'
          },
          descriptionCompany: {
            required: 'Xin h??y nh???p ?????a ch??? c??ng ty.',
            max: 'Vui l??ng nh???p ?????a ch??? c??ng ty trong 255 k?? t???.'
          },
          addressCompany: {
            required: 'Xin h??y nh???p ?????a ch??? c??ng ty.',
            max: 'Vui l??ng nh???p ?????a ch??? c??ng ty trong 128 k?? t???.'
          },
          address: {
            required: 'Xin h??y nh???p ?????a ch??? c???a b???n.',
            max: 'Vui l??ng nh???p ?????a ch??? c??ng ty trong 128 k?? t???.'
          },
          number_member: {
            required: 'Vui l??ng nh???p quy m?? c??ng ty.'
          },
          phoneCompany: {
            required: 'Vui l??ng nh???p s??? ??i???n tho???i c??ng ty.'
          },
          phone: {
            required: 'Vui l??ng nh???p s??? ??i???n tho???i .'
          },
          tax_code: {
            required: 'Vui l??ng nh???p m?? s??? thu??? .'
          },
          emailCompany: {
            required: 'H??y ??i???n ?????a ch??? email c??ng ty.',
            email: 'Vui l??ng nh???p ????ng ?????nh d???ng ?????a ch??? email.'
            // max: 'Vui l??ng nh???p ?????a ch??? email c???a b???n trong 255 k?? t???.'
          },
          email: {
            required: 'H??y ??i???n ?????a ch??? email c???a b???n.',
            email: 'Vui l??ng nh???p ????ng ?????nh d???ng ?????a ch??? email.'
            // max: 'Vui l??ng nh???p ?????a ch??? email c???a b???n trong 255 k?? t???.'
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