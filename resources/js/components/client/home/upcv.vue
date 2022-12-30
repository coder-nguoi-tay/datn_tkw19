<template>
  <div class="text-right mt-2">
    <button
      type="button"
      class="
        btn
        rounded
        theme-bg-light theme-cl
        fs-sm
        ft-medium
        btn-custom-cv
        mr-2
      "
      :class="{ active: active == 1 }"
      @click="activeUpCv(1)"
    >
      Dùng Cv đã tải lên
    </button>
    <button
      type="button"
      class="
        btn
        rounded
        theme-bg-light theme-cl
        fs-sm
        ft-medium
        btn-custom-cv
        mr-2
      "
      :class="{ active: active == 2 }"
      @click="activeUpCv(2)"
    >
      Tải lên CV từ máy tính
    </button>
  </div>
  <div class="modal-body">
    <VeeForm as="div" v-slot="{ handleSubmit }">
      <form
        @submit="handleSubmit($event, onSubmit)"
        ref="formData"
        method="POST"
        :action="data.urlStore"
        enctype="multipart/form-data"
      >
        <input type="hidden" :value="csrfToken" name="_token" />
        <input type="hidden" :value="data.jobId" name="id_job" />
        <div id="new-apply">
          <div id="frm-select-cv-online">
            <div class="p-3 rounded mx-auto d-block">
              <div class="col-xs-6">
                <!-- up cv new -->
                <div v-if="active == 2">
                  <div class="mt-custom-modal">
                    <strong class="input-label text-dark-gray"
                      >Tải lên CV từ máy tính</strong
                    ><br />
                    <span class="text-gray text-small"
                      >File doc, docx, pdf. Tối đa 5MB.</span
                    >
                  </div>
                  <div class="p-2 custom-input">
                    <label for="title" class="form-lable">Tiêu Đề</label>
                    <Field
                      type="text"
                      name="title"
                      id="title"
                      class="form-control"
                      rules="required|max:255"
                    />
                    <ErrorMessage class="error" name="title" />
                    <div class="box-upload text-center">
                      <p class="icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                      </p>
                      <div class="not-cv">
                        <p>
                          Kéo CV của bạn vào đây hoặc bấm để chọn file CV của
                          bạn
                        </p>
                      </div>
                      <Field
                        type="file"
                        name="file_cv"
                        class="file-upload-cv"
                        id="file-upload-cv"
                        rules="required|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx|max:2048"
                      />
                      <br />
                      <ErrorMessage class="error" name="file_cv" />
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group align-center">
                        <input
                          type="checkbox"
                          name="save_cv"
                          class="checkbok"
                          id="save_cv"
                        />
                        <span htmlFor="save_cv"
                          >Lưu CV (Dùng để quản lý trong
                          <a target="_blank" class="text-highlight" href=""
                            >Hồ Sơ CV</a
                          >
                          và giúp nhà tuyển dụng tiếp cận bạn)</span
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
                <div v-if="active == 1">
                  <label
                    ><span class="custom-text">Chọn Cv Đã Tải Lên</span>:
                    <span class="italic text-primary text-small">
                      Khuyên Dùng</span
                    ></label
                  >

                  <ul class="cv-choosen" v-if="cv.length != 0">
                    <li
                      class="radio-choose-active"
                      v-for="(cvs, index) in cv"
                      :key="index"
                    >
                      <input
                        type="radio"
                        :id="'html' + cvs.id"
                        name="cv_for_save"
                        :value="cvs.id"
                        checked
                      />
                      <!-- v-if="cvs.id == this.cv[0].id" -->
                      <label :htmlFor="'html' + cvs.id"
                        >{{ cvs.title
                        }}<a
                          class="text-highlight"
                          target="_blank"
                          :href="url + '/' + cvs.file_cv"
                          >(Xem)</a
                        ></label
                      ><br />
                    </li>
                  </ul>
                  <br />
                  <span v-if="cv.length == 0" class="text-danger"
                    >Bạn chưa có cv nào, hãy bắt đầu
                    <a :href="data.urlStoreCv">Tạo mới Cv</a> hoặc tải cv từ máy
                    tính cá nhân
                  </span>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success text-white">
                    Tải CV
                  </button>
                  <div
                    class="modal fade"
                    id="exampleModal1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Hãy điền thông tin cá nhân của bạn để nhà tuyển dụng
                            chú ý đến bạn hơn
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">x</span>
                          </button>
                        </div>
                        <!-- profile cv -->
                        <form class="p-4" method="POST" :action="data.urlStore">
                          <input
                            type="hidden"
                            :value="csrfToken"
                            name="_token"
                          />
                          <input
                            type="hidden"
                            :value="data.jobId"
                            name="id_job"
                          />

                          <button type="submit" class="btn btn-primary">
                            Submit
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="float-left">
                  <ul class="cv-choosen justify-content-center border p-4">
                    <li class="w-100">
                      <div class="text-left">
                        <span class="text-danger"> Lưu ý: </span>
                        <br /><br />
                        <p>
                          <span class="text-danger">1.</span> Ứng viên nên lựa
                          chọn ứng tuyển bằng CV Online &amp; viết thêm mong
                          muốn tại phần thư giới thiệu để được Nhà tuyển dụng
                          xem CV sớm hơn.
                        </p>
                        <p>
                          <span class="text-danger">2.</span> Để có trải nghiệm
                          tốt nhất, bạn nên sử dụng các trình duyệt phổ biến như
                          Google Chrome hoặc Firefox.
                        </p>
                        <p class="text-red">
                          <span class="text-danger">3.</span>
                          Trước tình trạng gia tăng các hình thức lừa đảo việc
                          làm trên internet được các cơ quan chức năng cảnh báo,
                          TopCV xin lưu ý bạn một số dấu hiệu lừa đảo việc làm
                          như sau:
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </VeeForm>
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
import $ from 'jquery'
import { Notyf } from 'notyf'
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
      active: 1,
      url: Laravel.baseUrl,
      model: {},
      cv: this.data.cv,
      cv_for_save: '',
      visibleLiveDemo: false
    }
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage
  },
  mounted() {
    console.log(this.data.seeker)
    // if (this.cv_for_save == '') {
    //   return [(this.cv_for_save = 'true')]
    // }
  },
  created() {
    let messError = {
      en: {
        fields: {
          file_cv: {
            required: 'Ảnh không được để trống',
            mimes: 'Ảnh chỉ hỗ trợ dạng jpeg,png,jpg,gif,svg,pdf,doc,docx',
            max: 'kích thước ảnh quá lớn'
          },
          title: {
            required: 'Tiêu đề không được để trống',
            max: 'Tiêu đề không được quá 255 ký tự'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  props: ['data'],

  methods: {
    activeUpCv(id) {
      if (id == 1) {
        this.active = 1
      } else {
        this.active = 2
      }
    },
    onSubmit() {
      if (!this.data.seeker) {
        const notyf = new Notyf({
          duration: 6000,
          position: {
            x: 'right',
            y: 'bottom'
          },
          types: [
            {
              type: 'error',
              duration: 8000,
              dismissible: true
            }
          ]
        })
        return notyf.error('Bạn cần hoàn thiện hồ sơ để có thể nộp được CV')
      } else {
        this.$refs.formData.submit()
      }
    }
  }
}
</script>

<style lang="scss">
.custom-input {
  .form-control {
    padding: 10px !important;
    height: 45px !important;
  }
}
</style>