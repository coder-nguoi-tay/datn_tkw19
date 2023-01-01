<template>
  <section style="background-color: #f4f5f7">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-10 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: 0.5rem">
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
                <div class="row g-0">
                  <div
                    class="col-md-4 gradient-custom text-center text-white"
                    style="
                      border-top-left-radius: 0.5rem;
                      border-bottom-left-radius: 0.5rem;
                    "
                  >
                    <div
                      class="img-fluid my-5"
                      id="img-preview"
                      @click="chooseImage()"
                      role="button"
                    >
                      <img
                        v-if="Media === '' && checkImage == '' && !filePreview"
                        src="https://i.pinimg.com/236x/15/46/2e/15462ed447e25356837b32a7e22e538f.jpg"
                        alt=""
                      />
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
                        v-if="!filePreview && Media != ''"
                        :src="Media"
                        class="img-fluid my-5 p-5 rounded-9"
                      />

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
                          class="img-fluid my-5 p-5"
                        />
                      </div>
                    </div>
                    <input type="hidden" name="images" v-model="model.images" />
                    <div class="text-center">
                      <span class="error">{{ errmsgCheckImage }}</span>
                    </div>

                    <h5>{{ model.name }}</h5>

                    <i class="far fa-edit mb-5"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-4">
                      <h6>Thông tin tài khoản của bạn</h6>
                      <hr class="mt-0 mb-4" />
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Name</h6>
                          <Field
                            type="text"
                            class="form-control rounded"
                            name="name"
                            rules="required|max:255"
                            v-model="model.name"
                          />
                          <ErrorMessage class="error" name="name" />
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Phone</h6>
                          <Field
                            type="text"
                            class="form-control"
                            v-model="valueSelect.phone"
                            name="phone"
                            rules="required|telephone"
                          />
                          <ErrorMessage class="error" name="phone" />
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email</h6>
                          <Field
                            type="email"
                            class="form-control"
                            v-model="model.email"
                            rules="required|email|max:255"
                            name="email"
                          />
                          <ErrorMessage class="error" name="email" />
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Địa chỉ</h6>
                          <Field
                            type="text"
                            v-model="valueSelect.address"
                            class="form-control"
                            name="address"
                            rules="required|max:255"
                          />
                          <ErrorMessage class="error" name="address" />
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Kinh Nghiệm</h6>
                          <Field
                            name="experience_id"
                            as="select"
                            v-model="valueSelect.experience_id"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              Chọn Kinh Nghiệm
                            </option>
                            <option
                              v-for="item in data.experience"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="experience_id" />
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Trình độ</h6>
                          <Field
                            name="lever_id"
                            as="select"
                            v-model="valueSelect.lever_id"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>Kinh Nghiệm</option>
                            <option
                              v-for="item in data.lever"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="lever_id" />
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Mức lương</h6>
                          <Field
                            name="wage_id"
                            as="select"
                            v-model="valueSelect.wage_id"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              Chọn Mức Lương
                            </option>
                            <option
                              v-for="item in data.wage"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="wage_id" />
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Ngành Nghề</h6>
                          <Field
                            name="profession_id"
                            as="select"
                            v-model="valueSelect.profession_id"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              Chọn Ngành Nghề
                            </option>
                            <option
                              v-for="item in data.profession"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="profession_id" />
                        </div>
                      </div>
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Thời gian làm việc</h6>
                          <Field
                            name="time_work_id"
                            as="select"
                            v-model="valueSelect.time_work_id"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              Chọn Thời Gian
                            </option>
                            <option
                              v-for="item in data.timework"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="time_work_id" />
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Kĩ năng</h6>
                          <Field
                            class="form-control"
                            v-model="value"
                            name="skill_id"
                            rules="required"
                          >
                            <Multiselect
                              placeholder="Chọn Kỹ năng"
                              v-model="value"
                              mode="tags"
                              :searchable="true"
                              :options="options"
                              label="label"
                              track-by="label"
                              :infinite="true"
                              :object="true"
                              :loading="isLoading"
                              :internal-search="false"
                              :clear-on-select="false"
                              :close-on-select="false"
                              :options-limit="300"
                              :limit="3"
                              :limit-text="limitText"
                              :max-height="600"
                              :show-no-results="false"
                              :hide-selected="true"
                              @input="updateSelected"
                            />
                          </Field>
                          <ErrorMessage class="error" name="skill_id" />
                        </div>
                      </div>
                      <!-- skill -->
                      <input type="hidden" name="skill[]" v-model="skill" />
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <button
                            type="submit"
                            class="
                              btn btn-md
                              ft-medium
                              text-light
                              rounded
                              theme-bg
                              btn-register-employer
                            "
                          >
                            Cập nhật
                          </button>
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
import Multiselect from '@vueform/multiselect'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
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
    ErrorMessage,
    Multiselect
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.user ?? '',
      filePreview: '',
      loading: false,
      value: [],
      options: [],
      valueSelect: this.data.user.get_profile_use ?? {},
      checkImage: '',
      errmsgCheckImage: '',
      Media: '',
      deleteImage: '',
      skill: [],
      isLoading: false
    }
  },

  created() {
    let array = []
    this.Media = this.data.user.get_profile_use
      ? this.data.user.get_profile_use.images
      : 1
    if (this.data.getskill.getskill != null) {
      this.data.getskill.getskill.map((e) => {
        this.value.push({
          value: e.id,
          label: e.name
        })
        array.push(e.id)
        this.skill = array
      })
    }

    this.data.skill.map((e) => {
      this.options.push({
        value: e.id,
        label: e.label
      })
    })
    let messError = {
      en: {
        fields: {
          images: {
            required: 'Ảnh không được để trống'
          },
          name: {
            required: 'Tên không được để trống',
            max: 'Tên không được vượt quá 255 ký tự'
          },
          email: {
            required: 'Email không được để trống',
            max: 'Email không được vượt quá 255 ký tự',
            email: 'Email không đúng định dạng'
          },
          phone: {
            required: 'Số điện thoại không được để trống',
            telephone: 'Số điện thoại không đúng định dạng'
          },
          address: {
            required: 'Địa chỉ không được để trống',
            max: 'Địa chỉ không được vượt quá 255 ký tự'
          },
          experience_id: {
            required: 'Kinh nghiệm không được bỏ trống'
          },
          lever_id: {
            required: 'Trình độ không được bỏ trống'
          },
          wage_id: {
            required: 'Mức lương không được bỏ trống'
          },
          profession_id: {
            required: 'Ngành nghề không được bỏ trống'
          },
          time_work_id: {
            required: 'Thời gian không được bỏ trống'
          },
          skill_id: {
            required: 'Kỹ năng không được bỏ trống'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    limitText(count) {
      return `and ${count} other countries`
    },
    updateSelected(e) {
      let array = []
      e.map((x) => {
        array.push(x.value)
      })
      array = [...new Set(array)]
      this.skill = array
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
<style>
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}

.display-div_custom {
  border: solid 1px;
  border-radius: 4px;
  height: 170px;
  width: 200px;
}

.img-display_author {
  height: 168px;
  max-width: 200px;
}

.img {
  max-width: 135px;
  margin-left: 30px;
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
<style src="@vueform/multiselect/themes/default.css">
</style>