<template>
  <section>
    <div class="container profile">
      <div class="row d-flex">
        <div class="col col-lg-12 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: 0.5rem">
            <div class="row g-0">
              <div class="col-sm-4" id="sidebar">
                <div class="box box-white text-center-sm" style="height: 940px">
                  <VeeForm
                    as="div"
                    v-slot="{ handleSubmit }"
                    @invalid-submit="onInvalidSubmit"
                  >
                    <form
                      @submit="handleSubmit($event, onSubmit)"
                      ref="formData"
                      enctype="multipart/form-data"
                      :action="data.urlUpdateAvatar"
                      method="POST"
                    >
                      <Field type="hidden" :value="csrfToken" name="_token" />
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="profile-avatar"
                            @click="chooseImage()"
                            role="button"
                          >
                            <img
                              v-if="!filePreview"
                              :src="data.user.images"
                              alt=""
                            />
                            <img v-if="filePreview" :src="filePreview" />
                          </div>
                          <div class="text-center" style="display: none">
                            <input
                              type="file"
                              @change="onChange"
                              ref="fileInput"
                              accept="image/*"
                              name="images"
                            />
                          </div>
                          <div class="text-center">
                            <button
                              class="btn"
                              style="
                                font-size: 14px;
                                padding: 3px 5px;
                                margin: 6px 0px;
                                color: #777;
                                font-style: italic;
                              "
                              id="btn-upload-avatar"
                            >
                              Cập nhật ảnh
                            </button>
                          </div>
                        </div>
                        <br />
                        <div class="col-md-12">
                          <h4 class="profile-fullname text-center">
                            {{ data.user.name }}
                          </h4>
                        </div>
                        <div
                          class="col-md-12"
                          v-if="
                            data.checkProfile != null &&
                            data.getCheckUser != null
                          "
                        >
                          <h4 class="profile-fullname text-center">
                            <Toggle
                              name="status_profile"
                              v-model="status_profile"
                              class="toggle-flag"
                              on-label=""
                              off-label=""
                              id="status_profile"
                              @change="ChangeStatus"
                            />
                            <label for="">Bật tìm kiếm việc làm</label>
                          </h4>
                        </div>
                        <div
                          class="col-md-12"
                          v-if="
                            data.checkProfile == null ||
                            data.getCheckUser == null
                          "
                        >
                          <h4 class="profile-fullname text-center">
                            <Toggle />
                            <label for="">Bật tìm kiếm việc làm</label>
                          </h4>
                        </div>
                        <div class="col-xs-12">
                          <p
                            class="
                              job-waiting-description
                              text-gray
                              alert-secondary
                              p-3
                            "
                            id="job-waiting-text" style="text-align: justify !important;"
                          >
                            <span style="color: red; ">Lưu ý</span>: Bạn cần cập
                            nhật thông tin gọi ý công việc để chúng tôi có thể
                            tìm kiếm công việc tốt nhất cho bạn và nhà tuyển
                            dụng có thể dựa vào những thông số đó để có thể tiếp
                            cận bạn sớm hơn
                            <a href="/goi-y-viec-lam" style="color: blue"
                              >Gợi ý việc làm</a
                            >
                            và phải tạo Cv trên hệ thống của chúng tôi
                            <a href="/file/tao-moi" style="color: blue"
                              >Tạo cv theo mẫu có sẵn</a
                            >
                            để chúng tôi có thể giúp bạn tìm kiếm việc làm phù
                            hợp nhất
                          </p>
                        </div>
                      </div>
                    </form>
                  </VeeForm>
                </div>
              </div>
              <div class="col-8">
                <VeeForm
                  as="div"
                  v-slot="{ handleSubmit }"
                  @invalid-submit="onInvalidSubmit"
                >
                  <form
                    @submit="handleSubmit($event, onSubmit)"
                    ref="formData"
                    enctype="multipart/form-data"
                    :action="data.urlStore"
                    method="POST"
                  >
                    <Field type="hidden" :value="csrfToken" name="_token" />
                    <div class="col-md-12">
                      <div class="box-block">
                        <div class="box-header">
                          <h1 class="title">Tạo CV</h1>
                        </div>
                        <div class="box-upload text-center">
                          <p class="icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                          </p>
                          <div class="not-cv">
                            <p>
                              Kéo CV của bạn vào đây hoặc bấm để chọn file CV
                              của bạn
                            </p>
                          </div>
                          <Field
                            type="file"
                            name="file_cv"
                            class="file-upload-cv"
                            id="file-upload-cv"
                            rules="required|mimes:pdf,doc,docx|max:2048"
                          />
                          <br />
                          <ErrorMessage class="error" name="file_cv" />
                        </div>
                        <div class="file-format">
                          <div>Files hỗ trợ: PDF, DOC, DOCX</div>
                          <div>File tải lên không quá: 5 MB</div>
                        </div>
                        <label for="" class="form-label"><b>Tên CV</b></label>
                        <Field
                          type="text"
                          name="title"
                          class="form-control"
                          id=""
                          rules="required"
                        />
                        <ErrorMessage class="error" name="title" />
                        <br />
                        <button
                          class="btn btn-info btn-create-cv mb-4"
                          style="margin-top: 10px; margin-left: 45%"
                        >
                          Tải lên
                        </button>
                      </div>
                    </div>
                  </form>
                </VeeForm>
                <br />
                <div class="col-md-12">
                  <div id="cv-upload-list" class="box-block">
                    <div class="box-header">
                      <h1 class="title">CV đã tải lên</h1>
                    </div>
                    <div class="box-content">
                      <div class="row">
                        <!--  -->
                        <div
                          class="col-md-6 col-12 pr-12"
                          v-for="(item, index) in cv"
                        >
                          <div class="box-cv">
                            <img
                              src="https://media.istockphoto.com/id/1142275061/vi/vec-to/bi%E1%BB%83u-m%E1%BA%ABu-cv-t%C3%A0i-li%E1%BB%87u-v%C3%A0-h%C3%ACnh-minh-h%E1%BB%8Da-vector-d%E1%BB%AF-li%E1%BB%87u-c%C3%A1-nh%C3%A2n-c%E1%BB%8Dc-ho%E1%BA%B7c-ng%C4%83n-x%E1%BA%BFp-t%C3%A0i-li%E1%BB%87u-gi%E1%BA%A5y.jpg?s=1024x1024&w=is&k=20&c=_vo4WAl7TTVVYR4oRVqRVibFVseGOngIElVG2Rt5w8U="
                              data-src="https://media.istockphoto.com/id/1142275061/vi/vec-to/bi%E1%BB%83u-m%E1%BA%ABu-cv-t%C3%A0i-li%E1%BB%87u-v%C3%A0-h%C3%ACnh-minh-h%E1%BB%8Da-vector-d%E1%BB%AF-li%E1%BB%87u-c%C3%A1-nh%C3%A2n-c%E1%BB%8Dc-ho%E1%BA%B7c-ng%C4%83n-x%E1%BA%BFp-t%C3%A0i-li%E1%BB%87u-gi%E1%BA%A5y.jpg?s=1024x1024&w=is&k=20&c=_vo4WAl7TTVVYR4oRVqRVibFVseGOngIElVG2Rt5w8U="
                              class="img-responsive"
                            />
                            <div class="box-bg">
                              <div class="box-info">
                                <h4
                                  class="title-cv"
                                  v-if="
                                    checkTitle == true &&
                                    checkTrueTitle != item.id
                                  "
                                >
                                  <a
                                    :href="item.file_cv"
                                    target="_blank"
                                    class="title-445516"
                                    >{{ item.title }}</a
                                  >
                                  <i
                                    @click="checkTitleCv(item.id, item.title)"
                                    class="
                                      fas
                                      fa-pencil-alt
                                      custom-icon-form-cv
                                    "
                                  ></i>
                                </h4>
                                <h4
                                  class="title-cv"
                                  v-if="checkTrueTitle == item.id"
                                >
                                  <input
                                    type="text"
                                    name="title"
                                    v-model="item.title"
                                    @change="textTitle(item.title)"
                                    class="custom-form-create-cv"
                                  />
                                  <i
                                    class="fas fa-times custom-icon-form-cv"
                                    @click="checkFalseTitleCv(item.id)"
                                  ></i>
                                  <i
                                    class="
                                      fas
                                      fa-paper-plane
                                      custom-icon-form-cv
                                    "
                                    @click="updateTitleCv(item.id)"
                                  ></i>
                                </h4>
                                <p class="update_at">
                                  Cập nhật lần cuối
                                  <span>{{
                                    getHumanDate(item.created_at)
                                  }}</span>
                                </p>
                                <ul class="action">
                                  <li>
                                    <a
                                      href="javascript:void(true)"
                                      class="btn btn-sm bold"
                                      ><i class="fa-solid fa-down-to-line"></i>
                                      Tải xuống</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      :href="'profile/delete-cv/' + item.id"
                                      class="btn btn-sm bold"
                                      ><i class="fa-solid fa-down-to-line"></i>
                                      xóa</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--  -->
                      </div>
                      <div class="text-center"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div id="cv-upload-list" class="box-block">
                    <div class="box-header row">
                      <h1 class="title col-10">CV đã Đã tạo</h1>
                      <a href="/file/tao-moi" class="btn btn-info col-2"
                        >Xem cv đã tạo</a
                      >
                      <div class="box-content" v-if="ProfileCv != ''">
                        <div class="row">
                          <!--  -->
                          <div class="col-md-6 col-12 pr-12">
                            <div class="box-cv">
                              <img
                                src="https://media.istockphoto.com/id/1142275061/vi/vec-to/bi%E1%BB%83u-m%E1%BA%ABu-cv-t%C3%A0i-li%E1%BB%87u-v%C3%A0-h%C3%ACnh-minh-h%E1%BB%8Da-vector-d%E1%BB%AF-li%E1%BB%87u-c%C3%A1-nh%C3%A2n-c%E1%BB%8Dc-ho%E1%BA%B7c-ng%C4%83n-x%E1%BA%BFp-t%C3%A0i-li%E1%BB%87u-gi%E1%BA%A5y.jpg?s=1024x1024&w=is&k=20&c=_vo4WAl7TTVVYR4oRVqRVibFVseGOngIElVG2Rt5w8U="
                                data-src="https://media.istockphoto.com/id/1142275061/vi/vec-to/bi%E1%BB%83u-m%E1%BA%ABu-cv-t%C3%A0i-li%E1%BB%87u-v%C3%A0-h%C3%ACnh-minh-h%E1%BB%8Da-vector-d%E1%BB%AF-li%E1%BB%87u-c%C3%A1-nh%C3%A2n-c%E1%BB%8Dc-ho%E1%BA%B7c-ng%C4%83n-x%E1%BA%BFp-t%C3%A0i-li%E1%BB%87u-gi%E1%BA%A5y.jpg?s=1024x1024&w=is&k=20&c=_vo4WAl7TTVVYR4oRVqRVibFVseGOngIElVG2Rt5w8U="
                                class="img-responsive"
                              />
                              <div class="box-bg">
                                <div class="box-info">
                                  <h4 class="title-cv">
                                    <a
                                      href="/file/tao-moi"
                                      target="_blank"
                                      class="title-445516"
                                      >{{ ProfileCv.title }}</a
                                    >
                                  </h4>
                                  <p class="update_at">
                                    Cập nhật lần cuối
                                    <span>{{
                                      getHumanDate(ProfileCv.updated_at)
                                    }}</span>
                                  </p>
                                  <ul class="action">
                                    <li>
                                      <a
                                        href="javascript:void(true)"
                                        class="btn btn-sm bold"
                                        ><i
                                          class="fa-solid fa-down-to-line"
                                        ></i>
                                        Tải xuống</a
                                      >
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--  -->
                        </div>
                        <div class="text-center"></div>
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
  </section>
</template>
<script>
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import moment from 'moment'
import Multiselect from '@vueform/multiselect'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import Toggle from '@vueform/toggle'
import $ from 'jquery'
import axios from 'axios'
import { Notyf } from 'notyf'
import 'notyf/notyf.min.css'
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
    Toggle,
    ErrorMessage,
    Multiselect
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      baseUrl: Laravel.baseUrl,
      model: {},
      filePreview: '',
      cv: [],
      checkTitle: true,
      checkTrueTitle: '',
      nametitle: '',
      status_profile: '',
      ProfileCv: ''
    }
  },

  created() {
    if (this.data.getCheckUser) {
      this.ProfileCv = this.data.getCheckUser
      if (this.data.getCheckUser.status_profile == 1) {
        this.status_profile = true
      } else {
        this.status_profile = false
      }
    }

    if (this.data.cv) {
      this.cv = this.data.cv
    }
    let messError = {
      en: {
        fields: {
          file_cv: {
            required: 'Ảnh không được để trống',
            mimes: 'Ảnh chỉ hỗ trợ dạng pdf,doc,docx',
            max: 'kích thước ảnh quá lớn'
          },
          title: {
            required: 'Tên không được để trống'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    ChangeStatus(e) {
      let that = this
      if (e == true) {
        axios
          .post(that.data.changeStatusProfile, {
            _token: Laravel.csrfToken,
            data: 1
          })
          .then((a) => {
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
            return notyf.success(a.data.message)
          })
      } else {
        axios
          .post(that.data.changeStatusProfile, {
            _token: Laravel.csrfToken,
            data: 0
          })
          .then((a) => {
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
            return notyf.success(a.data.message)
          })
      }
    },
    getHumanDate: function (date) {
      return moment(date, 'YYYY-MM-DD').format('DD/MM/YYYY')
    },
    textTitle(e) {
      this.nametitle = e
    },
    checkTitleCv(id, title) {
      this.checkTrueTitle = id
      this.nametitle = title
    },
    checkFalseTitleCv(id) {
      this.checkTrueTitle = -1
      this.checkTitle = true
    },
    updateTitleCv(id) {
      console.log(this.nametitle)
      axios
        .post('profile/update-title-cv/' + id, {
          _token: Laravel.csrfToken,
          title: this.nametitle
        })
        .then((data) => {
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
          if (data.data.status == 403) {
            return notyf.error(data.data.message)
          }
          setTimeout(() => {
            this.checkTrueTitle = -1
            this.checkTitle = true
          }, 1000)
          return notyf.success(data.data.message)
        })
        .catch((error) => {})
    },
    onInvalidSubmit({ values, errors, results }) {
      if (this.checkImage == 1) {
        this.errmsgCheckImage = 'Ảnh không được để trống'
      }
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
    chooseImage() {
      this.$refs['fileInput'].click()
    },
    onChange(e) {
      this.deleteImage = e.target.files[0]
      if (e.target) {
        let Image = e.target.files[0]
        if (Image.type.includes('image/')) {
          this.errmsgCheckImage = ''
          this.checkImage = 2
        } else {
          this.errmsgCheckImage = 'Ảnh phải đúng định dạng'
          return
        }
        if (Image.size >= 5242880) {
          this.errmsgCheckImage = 'Ảnh không được quá 5mb'
          this.checkImage = 1
        } else {
          this.errmsgCheckImage = ''
          this.checkImage = 2
        }
        this.model.images = e.target.files[0]
        let fileInput = this.$refs.fileInput
        let imgFile = fileInput.files

        if (imgFile && imgFile[0]) {
          let reader = new FileReader()
          reader.onload = (e) => {
            this.filePreview = e.target.result
          }
          reader.readAsDataURL(imgFile[0])
        }
      }
    }
  }
}
</script>
<style lang="sass">
.container
  .error
    color: rgb(255, 80, 80)
    margin-left: 5px
    margin-top: 5px

  .display-div_custom
    border: solid 1px
    border-radius: 4px
    height: 170px
    width: 200px

  .img-display_author
    height: 168px
    max-width: 200px

  .img
    max-width: 135px
    margin-left: 30px
    margin-top: 15px
    margin-bottom: 15px

  .box-white
    background-color: #f1f3f4
    margin: 10px
    border-radius: 5px
    box-shadow: -1px 1px 6px rgb(0 0 0 / 5%)

  .box
    margin-bottom: 20px
    padding: 20px

  .profile-avatar img
    border-radius: 50%
    height: 250px
    object-fit: cover
    max-width: 250px
    width: 250px
    margin-left: 15%

  img
    vertical-align: middle

  img
    border: 0

  .text-center
    text-align: center

  .profile-fullname
    font-size: 20px
    font-weight: 700
    margin-bottom: 10px
    margin-top: 3px
    position: relative

  .box-block
    background: #f1f3f4
    border-radius: 5px
    box-shadow: -1px 1px 6px rgb(0 0 0 / 5%)
    margin-bottom: 16px
    margin-top: 10px
    padding: 24px 24px 8px

  & .box-header
    align-items: center
    display: flex
    justify-content: space-between
    margin-bottom: 12px

  & .box-header .title
    color: #000
    font-size: 19px
    font-weight: 700
    line-height: 24px
    margin: 0
</style>

<style lang="scss">
.box-content {
  height: 340px !important;
}
.custom-form-create-cv {
  margin-right: 5px !important;
  width: 180px !important;
  border: none;
  font-size: 16px !important;
}
.custom-icon-form-cv {
  cursor: pointer;
  font-size: 15px;
  margin-left: 5px;
}
#cv-upload-list .box-cv {
  border-radius: 5px;
  height: 310px;
  margin-bottom: 16px;
  overflow: hidden;
  position: relative;
}
#manager-cv #cv-list .box-cv img,
#manager-cv #cv-upload-list .box-cv img {
  left: 0;
  -o-object-fit: cover;
  object-fit: cover;
  position: absolute;
  top: 0;
  transition: 0.3s;
  width: 100%;
  z-index: 1;
}
.img-responsive {
  display: inline-block;
  max-width: 100%;
}
#cv-upload-list .box-cv .box-bg {
  background: linear-gradient(180deg, hsla(0, 0%, 100%, 0), #212f3f);
  bottom: 0;
  height: 100%;
  left: 0;
  position: absolute;
  width: 100%;
  z-index: 2;
}
#cv-upload-list .box-cv .box-info {
  bottom: 16px;
  color: #fff;
  left: 16px;
  position: absolute;
  right: 16px;
  z-index: 3;
}
.box-cv .box-info .title-cv {
  display: flex;
  margin-bottom: 12px;
  margin-top: 0;
}
#cv-upload-list .box-cv .box-info .title-cv a:first-child {
  max-width: 80%;
  word-break: break-word;
}
#cv-upload-list .box-cv .box-info .title-cv a {
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  color: #fff;
  display: -webkit-box;
  font-size: 19px;
  font-weight: 700;
  line-height: 24px;
  margin-right: 8px;
  overflow: hidden;
}
a {
  color: #666;
}
a {
  text-decoration: none;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a {
  background-color: transparent;
}
.box-cv .box-info .update_at {
  color: #fff;
  font-size: 15px;
  line-height: 20px;
  margin-bottom: 16px;
}
#cv-upload-list .box-cv .box-info .action {
  align-items: center;
  display: flex;
  list-style: none;
  margin-bottom: 0;
}
.box-cv .box-info .action a {
  background: hsla(0, 0%, 100%, 0.2);
  border-radius: 30px;
  color: #fff;
  font-size: 12px;
  line-height: 16px;
  margin-right: 8px;
  padding: 4px 8px;
}
</style>
<style src="@vueform/multiselect/themes/default.css">
</style>