<template>
  <div class="_dashboard_content_body py-3 px-3">
    <VeeForm
      as="div"
      v-slot="{ handleSubmit }"
      @invalid-submit="onInvalidSubmit"
    >
      <form
        @submit="handleSubmit($event, onSubmit)"
        ref="formData"
        method="POST"
        enctype="multipart/form-data"
        class="text-center"
        :action="data.urlStore"
      >
        <Field type="hidden" :value="csrfToken" name="_token" />
        <div class="col-4">
          <Toggle
            name="status_profile"
            v-model="status_profile"
            class="toggle-flag"
            on-label=""
            off-label=""
            id="status_profile"
          />
          <label for="" class="form-label">Bật Tìm Kiếm Công Việc</label>
        </div>
        <div style="margin: 30px 0; padding: 0; box-sizing: border-box">
          <div class="main_gt">
            <div class="left_cv">
              <div
                class="img-fluid box_img p-3"
                id="img-preview"
                @click="chooseImage()"
                role="button"
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
                <img
                  v-if="!filePreview && model.images"
                  :src="'http://127.0.0.1:8000/' + model.images"
                  class="img-fluid"
                />
                <div id="img-preview" @click="chooseImage()" role="button">
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
                    v-if="filePreview && !model.images"
                    :src="filePreview"
                    class="img-fluid p-2"
                  />
                </div>
                <input type="hidden" name="images" v-model="model.images" />
              </div>
              <div class="contact">
                <h3>Thông tin cá nhân</h3>
                <div class="box_contact">
                  <div class="mb-3">
                    <label
                      for="exampleFormControlInput1"
                      class="form-label custom-label"
                      >Email
                    </label>
                    <Field
                      type="text"
                      v-model="model.email"
                      class="form-control box-up-cv it-1"
                      id="exampleFormControlInput1"
                      placeholder="name@example.com"
                      name="email"
                    />
                  </div>
                  <div class="mb-3">
                    <label
                      for="exampleFormControlInput1"
                      class="form-label custom-label"
                      >Địa chỉ</label
                    >
                    <Field
                      type="text"
                      v-model="model.address"
                      class="form-control box-up-cv it-1"
                      id="exampleFormControlInput1"
                      placeholder="Nhập địa chỉ"
                      name="address"
                    />
                  </div>
                  <div class="mb-3">
                    <label
                      for="exampleFormControlInput1"
                      class="form-label custom-label"
                      >SDT</label
                    >
                    <Field
                      type="text"
                      v-model="model.phone"
                      class="form-control box-up-cv it-1"
                      id="exampleFormControlInput1"
                      placeholder="Nhập số điện thoại"
                      name="phone"
                    />
                  </div>
                  <div class="mb-3">
                    <label
                      for="exampleFormControlInput1"
                      class="form-label custom-label"
                      >Link FB</label
                    >
                    <Field
                      type="text"
                      v-model="model.link_fb"
                      class="form-control box-up-cv it-1"
                      id="exampleFormControlInput1"
                      placeholder="facebook.com"
                      name="link_fb"
                    />
                  </div>
                </div>
              </div>
              <div class="contact">
                <h3>CÁC KỸ NĂNG</h3>
                <div class="box_contact">
                  <div class="mb-3">
                    <label
                      for="exampleFormControlInput1"
                      class="form-label custom-label col-12"
                      >Các kĩ năng</label
                    >
                    <Editor
                      name="skill"
                      v-model="model.skill"
                      class="form-control box-up-cv"
                      rules="required|max:255"
                      style="float: left"
                    />
                  </div>
                </div>
              </div>
              <div class="contact">
                <h3>CHỨNG CHỈ</h3>
                <div class="box_contact">
                  <div class="mb-3">
                    <label
                      for="exampleFormControlTextarea1"
                      class="form-label custom-label col-12"
                      style="float: left"
                      >Chứng chỉ</label
                    >
                    <Editor
                      name="certificate"
                      v-model="model.certificate"
                      class="form-control box-up-cv"
                      rules="required|max:255"
                      style="float: left"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="right_cv">
              <div class="box_cv">
                <h2 class="name">{{ data.user_name }}</h2>
                <!-- majors -->
                <h4>
                  <Field
                    type="text"
                    style="width: 300px"
                    id="majors"
                    v-model="model.majors"
                    name="majors"
                    class="form-control box-up-cv"
                    placeholder="Chuyên ngành"
                  />
                </h4>
              </div>
              <div class="box_cv mt_cv">
                <h3
                  style="
                    font-size: 18px;
                    font-weight: 500;
                    text-transform: uppercase;
                  "
                >
                  MỤC TIÊU NGHỀ NGHIỆP
                </h3>
                <span class="bd_cv"></span>
                <div class="mt">
                  <div>
                    <Editor
                      name="target"
                      v-model="model.target"
                      class="form-control box-up-cv"
                      rules="required|max:255"
                      style="height: 100px !important"
                    />
                  </div>
                </div>
              </div>
              <div class="box_cv">
                <h3
                  style="
                    font-size: 18px;
                    font-weight: 500;
                    text-transform: uppercase;
                  "
                >
                  KINH NGHIỆM LÀM VIỆC
                </h3>
                <span class="bd_cv"></span>
                <div class="box_2_cv" style="margin-bottom: 30px">
                  <div class="mt">
                    <div
                      class="title_cv"
                      style="
                        margin-top: 30px;
                        display: flex;
                        align-items: center;
                        justify-content: flex-start;
                        gap: 10px;
                        font-size: 14px;
                      "
                    >
                      <br />
                      <i
                        class="fa-solid fa-briefcase"
                        style="color: #ebad00"
                      ></i>

                      <h4 style="font-size: 14px; margin: 0; color: #284350">
                        VỊ TRÍ:
                      </h4>
                      <div>
                        <Field
                          type="text"
                          style="width: 300px"
                          id="work"
                          v-model="model.work"
                          name="work"
                          class="form-control box-up-cv"
                          placeholder="Vị trí làm việc"
                        />
                      </div>
                    </div>
                    <br />
                    <div class="mb-3">
                      <label
                        for="exampleFormControlTextarea1"
                        class="form-label"
                        >Nội dung công việc</label
                      >
                      <Editor
                        name="work_detail"
                        v-model="model.work_detail"
                        class="form-control box-up-cv"
                        rules="required|max:255"
                        style="height: 100px !important"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <div class="box_cv">
                <h3
                  style="
                    text-align: center;
                    font-size: 18px;
                    font-weight: 500;
                    text-transform: uppercase;
                  "
                >
                  dự án
                </h3>
                <span class="bd_cv"></span>
                <div class="mt">
                  <div
                    class="title_cv"
                    style="
                      margin-top: 30px;
                      display: flex;
                      align-items: center;
                      justify-content: flex-start;
                      gap: 10px;
                      font-size: 14px;
                    "
                  >
                    <br />
                    <i class="fa-solid fa-briefcase" style="color: #ebad00"></i>

                    <h4 style="font-size: 14px; margin: 0; color: #284350">
                      VỊ TRÍ:
                    </h4>
                    <div>
                      <Field
                        type="text"
                        v-model="model.project"
                        style="width: 300px"
                        id="project"
                        name="project"
                        class="form-control box-up-cv"
                        placeholder="Vị trí làm việc"
                      />
                    </div>
                  </div>
                  <br />
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"
                      >Nội dung công việc</label
                    >

                    <Editor
                      name="project_detail"
                      v-model="model.project_detail"
                      class="form-control box-up-cv"
                      rules="required|max:255"
                      style="height: 100px !important"
                    />
                  </div>
                </div>
              </div>
            </div>
            <br />
            <div class="col-md-12">
              <button
                type="submit"
                class="btn min-width btn btn-primary btn-lg"
              >
                Lưu
              </button>
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
import Editor from '@tinymce/tinymce-vue'
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage,
    Toggle,
    Editor
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.user ?? '',
      status_profile: '',
      filePreview: ''
    }
  },
  created() {
    if (this.data.user) {
      if (this.data.user.status_profile == 0) {
        this.status_profile = false
      } else {
        this.status_profile = true
      }
    }
    let messError = {
      en: {
        fields: {
          password: {
            required: 'mật khẩu không được để trống',
            max: 'Mật khẩu 8-16 ký tự',
            min: 'Mật khẩu 8-16 ký tự',
            password_rule: 'mật khẩu không đúng định dạng'
          },
          password_old: {
            required: 'Mật khẩu 2 không được để trống',
            confirmed: 'Hai mật khẩu phải giống nhau'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
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
    }
  }
}
</script>

<style lang="scss">
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
.btn-primary:hover {
  background-color: #00b14f;
  border-color: #00b14f;
}
.btn-group-lg > .min-width.btn,
.min-width.btn-lg {
  min-width: 120px;
}
.nav-tabs .nav-link.active i[data-v-6f017734],
.nav-tabs .nav-link.active p[data-v-6f017734] {
  color: #00b14f;
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
.it-1 {
  color: white;
}

.box-up-cv {
  background: rgba(229, 247, 237, 0.1);
  border: 2px dashed #00b14f;
  border-radius: 8px;
  cursor: pointer;
  position: relative;
  text-align: left;
}
.gradient-custom {
  /* fallback for old browsers */
  background: #f6d365;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right bottom,
    rgba(246, 211, 101, 1),
    rgba(253, 160, 133, 1)
  );

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right bottom,
    rgba(246, 211, 101, 1),
    rgba(253, 160, 133, 1)
  );
}

.main_gt {
  width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 350px 1fr;
  font-size: 12px !important;
}

.left_cv {
  height: auto;
  width: 100%;
  color: #bbbdbf;
  background: #387fa0;
  padding: 10px;
}

.left_cv .box_img {
  width: 100%;
  margin-bottom: 10px;
  /* border: 3px solid #ffc628; */
  /* height: 300px; */
  height: 220px !important;
}

.left_cv .box_img > img {
  /* border: 3px solid #ffc628; */
}

.left_cv > .contact {
  margin: 0 auto;
  width: 100%;
}

.box_contact > .mail {
  display: grid;
  grid-template-columns: 25px 1fr;
  color: #bbbdbf;
  font-size: 14px;
  font-weight: 400;
  gap: 5px;
}

.box_contact > .mail > p {
  margin: 0;
}

.box_contact > .mail > i {
  text-align: center;
  margin: auto 0;
  color: beige;
}

.left_cv .contact > h3 {
  color: #f1f1f1;
  text-transform: uppercase;
  margin: 10px 0;
  font-size: 18px;
  border-bottom: 1px solid #ffc628;
}

.left_cv > .contact .box_contact {
  line-height: 30px;
  margin: 10px 0;
}

.left_cv > .contact h4 {
  font-size: 12px;
  text-transform: capitalize;
  color: #f1f1f1;
}

.left_cv > .contact .box_contact .ky_nang {
  font-size: 14px;
}

.text-first {
  text-transform: capitalize;
}

.text-first::first-letter {
  text-transform: capitalize;
}

.main_gt .right_cv {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  background: white !important;
}

.main_gt .right_cv .box_cv {
  border-top: 1px solid #ffc628;
  position: relative;
  padding-left: 35px;
  color: #284350;
  font-size: 14px;
  padding-right: 30px;
  text-align: justify;
}

.main_gt .right_cv .box_cv:first-child {
  padding-top: 20px;
  border-top: none;
  text-transform: uppercase;
  padding-bottom: 20px;
}

.main_gt .right_cv .box_cv .name {
  font-size: 28px;
  color: #284350;
  margin-bottom: 20px;
}

.main_gt .right_cv .box_cv:first-child > h4 {
  font-size: 24px;
  color: #284350;
  margin-bottom: 20px;
}

.main_gt .right_cv > .box_cv:first-child h4 {
  border: none;
  border-radius: none;
}

.main_gt .right_cv > .box_cv > h3 {
  border: 1px solid #ffbb00;
  border-radius: 8px;
  width: 250px;
  text-align: center;
  padding: 8px 5px;
  position: absolute;
  top: -20px;
  color: #284350;
  background: white;
}

.main_gt .right_cv > .box_cv > h3 > {
  font-size: 14px;
}

.main_gt .right_cv .box_cv > .mt {
  margin: 40px 0;
}

.main_gt .right_cv.title_cv {
  display: flex;
  gap: 10px;
  align-items: center;
}

.main_gt .right_cv.title_cv > h4 {
  color: #284350;
}

.main_gt .right_cv.title_cv > i {
  color: #ebad00;
}

.main_gt .right_cv.mt .h4 {
  font-weight: 600;
  margin: 10px 0;
}

.main_gt .right_cv .mt_cv {
  font-size: 14px;
  text-align: justify;
}

.main_gt .right_cv.mt_cv > .h4 {
  color: #284350;
  padding: 10px 0;
  font-size: 14px;
}
.custom-label {
  float: left;
  color: #fff;
}
._dashboard_content_body {
  .tox-tinymce {
    height: 300px !important;
  }
}
</style>