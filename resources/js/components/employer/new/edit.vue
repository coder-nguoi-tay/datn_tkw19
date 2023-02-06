
<template>
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
          :action="data.urlStore"
        >
          <Field type="hidden" :value="csrfToken" name="_token" />
          <div class="row">
            <div class="col-lg-12">
              <div class="billing-form-item">
                <!-- billing-title-wrap -->
                <div class="billing-content">
                  <div class="contact-form-action">
                    <div class="MultiFile-intercepted">
                      <div class="row">
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Tiêu đề</label>
                            <div class="form-group">
                              <span class="la la-briefcase form-icon"></span>
                              <Field
                                name="title"
                                type="text"
                                v-model="model.title"
                                rules="required|max:255"
                                class="form-control"
                                placeholder="Tiêu đề"
                              />
                              <ErrorMessage class="error" name="title" />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Số lượng cần tuyển</label>
                            <div class="form-group">
                              <span
                                class="la la-pencil-square-o form-icon"
                              ></span>
                              <Field
                                name="quatity"
                                type="number"
                                min="1"
                                v-model="model.quatity"
                                rules="required"
                                class="form-control"
                                placeholder="Số lượng"
                              />
                              <ErrorMessage class="error" name="quatity" />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Giới tính</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="sex"
                                as="select"
                                v-model="model.sex"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn giới tính
                                </option>
                                <option value="0">không yêu cầu</option>
                                <option value="nam">nam</option>
                                <option value="nữ">nữ</option>
                              </Field>
                              <ErrorMessage class="error" name="location_id" />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Chọn nơi làm việc</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="location_id"
                                as="select"
                                v-model="model.location_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn Địa chỉ
                                </option>
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
                            <!-- end form-group -->
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text"
                              >Chọn địa chỉ cụ thể</label
                            >
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="address"
                                v-model="model.address"
                                rules="required"
                                class="form-control"
                                placeholder="địa chỉ"
                              />
                              <ErrorMessage class="error" name="address" />
                            </div>
                            <!-- end form-group -->
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Hạn nộp hồ sơ</label>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <span
                                    class="la la-dollar-sign form-icon"
                                  ></span>
                                  <picker-new-employer
                                    name="end_job_time"
                                    v-model="model.end_job_time"
                                    class="date-time"
                                  ></picker-new-employer>
                                  <ErrorMessage
                                    class="error"
                                    name="end_job_time"
                                  />
                                </div>
                              </div>
                              <!-- end col-lg-6 -->
                            </div>
                            <!-- end row -->
                          </div>
                        </div>
                        <!-- end col-lg-4 -->

                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Chọn ngành nghề</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="majors_id"
                                as="select"
                                v-model="model.majors_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn ngành nghề
                                </option>
                                <option
                                  v-for="item in data.majors"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.label }}
                                </option>
                              </Field>
                              <ErrorMessage class="error" name="majors_id" />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Chọn chuyên ngành</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="profession_id"
                                as="select"
                                v-model="model.profession_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn vị trí
                                </option>
                                <option
                                  v-for="item in data.profession"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.label }}
                                </option>
                              </Field>
                              <ErrorMessage
                                class="error"
                                name="profession_id"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text d-flex align-items-center"
                              >chọn trình độ
                              <i
                                class="la la-question tip ml-1"
                                data-toggle="tooltip"
                                data-placement="top"
                                title=""
                                data-original-title="Comma separate tags, such as required skills or technologies, for this job. Maximum of 5 keywords"
                              ></i>
                            </label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="level_id"
                                as="select"
                                v-model="model.level_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn Trình độ học vẫn
                                </option>
                                <option
                                  v-for="item in data.lever"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.label }}
                                </option>
                              </Field>
                              <ErrorMessage class="error" name="level_id" />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">chọn kinh nghiệm</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="experience_id"
                                as="select"
                                v-model="model.experience_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn Kinh nghiệm
                                </option>
                                <option
                                  v-for="item in data.experience"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.label }}
                                </option>
                              </Field>
                              <ErrorMessage
                                class="error"
                                name="experience_id"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">chọn mức lương</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="wage_id"
                                as="select"
                                v-model="model.wage_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn Mức lương
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
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Thời gian làm việc</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="time_work_id"
                                as="select"
                                v-model="model.time_work_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn thời gian làm việc
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
                          </div>
                        </div>
                        <!-- end col-lg-4 -->

                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Mô tả công việc</label>
                            <div class="form-group">
                              <Editor
                                name="describe"
                                class="ckedit"
                                v-model="model.describe"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Yêu Cầu Công Việc</label>
                            <div class="form-group">
                              <Editor
                                name="candidate_requirements"
                                v-model="model.candidate_requirements"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text"
                              >Quyền lơi công việc</label
                            >
                            <div class="form-group">
                              <Editor name="benefit" v-model="model.benefit" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Kỹ năng</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                class="form-control"
                                v-model="value"
                                name="skill_id"
                                rules="required"
                              >
                                <Multiselect
                                  placeholder="Chọn Kỹ năng"
                                  mode="tags"
                                  v-model="value"
                                  :searchable="true"
                                  :options="options"
                                  label="label"
                                  track-by="label"
                                  :infinite="true"
                                  :object="true"
                                  :filterResults="true"
                                  :clearOnSearch="true"
                                  :clearOnSelect="true"
                                  @input="updateSelected"
                                />
                              </Field>
                              <input
                                type="hidden"
                                name="skill[]"
                                v-model="skill"
                              />
                              <ErrorMessage class="error" name="skill_id" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Hình thức làm việc</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Field
                                name="wk_form_id"
                                as="select"
                                v-model="model.wk_form_id"
                                rules="required"
                                class="form-control"
                              >
                                <option value disabled selected>
                                  Chọn Hình thức làm việc
                                </option>
                                <option
                                  v-for="item in data.workingform"
                                  :key="item.id"
                                  :value="item.id"
                                >
                                  {{ item.label }}
                                </option>
                              </Field>
                              <ErrorMessage class="error" name="wk_form_id" />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 column-lg-full">
                          <div class="input-box">
                            <label class="label-text">Trạng thái</label>
                            <div
                              class="form-group user-chosen-select-container"
                            >
                              <Toggle
                                name="status_profile"
                                v-model="status_profile"
                                class="toggle-flag"
                                on-label=""
                                off-label=""
                                id="status_profile"
                              />
                            </div>
                          </div>
                        </div>
                        <!-- end col-lg-12 -->
                      </div>
                      <div class="rec-submit">
                        <button type="submit" class="btn btn-primary">
                          Đăng Tin
                        </button>
                      </div>
                      <!-- end row -->
                    </div>
                  </div>
                  <!-- end contact-form-action -->
                </div>
                <!-- end billing-content -->
              </div>
            </div>
            <!-- end col-lg-12 -->
          </div>
        </form>
      </VeeForm>
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
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
import Multiselect from '@vueform/multiselect'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import Editor from '@tinymce/tinymce-vue'
import { Notyf } from 'notyf'
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  components: {
    Editor,
    VeeForm,
    Field,
    ErrorMessage,
    Multiselect,
    Toggle
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.job,
      status_profile: this.data.job.status == 1 ? true : false,
      value: [],
      options: [],
      skill: []
    }
  },
  created() {
    console.log(this.status_profile)
    let array = []
    this.data.job.getskill.map((e) => {
      this.value.push({
        value: e.id,
        label: e.name
      })
      array.push(e.id)
      this.skill = array
    })
    this.data.skill.map((e) => {
      this.options.push({
        value: e.id,
        label: e.label
      })
    })
    let messError = {
      en: {
        fields: {
          title: {
            required: 'Tiêu đề  không được để trống',
            max: 'Tiêu đê không được vượt qua 255 ký tự'
          },
          quantity: {
            required: 'Số lượng  không được để trống',
            max: 'Số lượng không được vượt qua 255 ký tự'
          },
          sex: {
            required: 'Giới  không được để trống'
          },
          describe: {
            required: 'Mô tả  không được để trống',
            max: 'Mô tả không được vượt qua 255 ký tự'
          },
          level_id: {
            required: 'Trình độ  không được để trống'
          },
          experience_id: {
            required: 'Kinh nghiệm  không được để trống'
          },
          wage_id: {
            required: 'mức lương  không được để trống'
          },
          benefit: {
            required: 'Phúc lợi  không được để trống',
            max: 'Phúc lợi không được vượt qua 255 ký tự'
          },
          profession_id: {
            required: 'vị trí ứng tuyển không được để trống'
          },
          location_id: {
            required: 'địa chỉ không được để trống',
            max: 'địa chỉ không được vượt qua 255 ký tự'
          },
          address: {
            required: 'địa chỉ không được để trống',
            max: 'địa chỉ không được vượt qua 255 ký tự'
          },
          majors_id: {
            required: 'chuyên ngành  không được để trống'
          },
          wk_form_id: {
            required: 'Hình thức làm việc  không được để trống'
          },
          end_job_time: {
            required: 'thời gian  không được để trống'
          },
          time_work_id: {
            required: 'thời gian làm việc  không được để trống'
          },
          candidate_requirements: {
            required: 'yêu cầu công việc không được để trống',
            max: ' không được vượt qua 255 ký tự'
          },
          quatity: {
            required: 'Số lượng không được để trống'
          },
          skill_id: {
            required: 'kỹ năng không được để trống'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    updateSelected(e) {
      let array = []
      e.map((x) => {
        array.push(x.value)
      })
      array = [...new Set(array)]
      this.skill = array
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

<style>
.ckedit {
  margin-top: 2%;
}
.check-edit-ter {
  width: 100%;
}
</style>
<style src="@vueform/multiselect/themes/default.css"></style>