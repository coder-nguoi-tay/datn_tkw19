
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
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <Field type="hidden" :value="csrfToken" name="_token" />
                <div class="mb-4">
                  <label for="" class="form-label"
                    >Tiêu đề<span class="required-lable">*</span></label
                  >
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
                <div class="mb-4">
                  <label for="" class="form-label"
                    >Số lượng cần tuyển<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    name="quatity"
                    type="text"
                    v-model="model.quatity"
                    min="1"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Tiêu đề"
                  />
                  <ErrorMessage class="error" name="quatity" />
                </div>
                <div class="mb-4">
                  <label for="" class="form-label"
                    >Giới tính<span class="required-lable">*</span></label
                  >
                  <Field
                    name="sex"
                    as="select"
                    v-model="model.sex"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn giới tính</option>
                    <option value="0">không yêu cầu</option>
                    <option value="nam">nam</option>
                    <option value="nữ">nữ</option>
                  </Field>
                  <ErrorMessage class="error" name="location_id" />
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn nơi làm việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    name="location_id"
                    as="select"
                    v-model="model.location_id"
                    rules="required"
                    class="form-control"
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
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn địa chỉ cụ thể<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    type="text"
                    name="address"
                    v-model="model.address"
                    rules="required"
                    class="form-control"
                    placeholder="Nhập địa chỉ"
                  />
                  <ErrorMessage class="error" name="address" />
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Hạn nộp hồ sơ<span class="required-lable">*</span></label
                  >
                  <picker-new-employer
                    name="end_job_time"
                    v-model="model.end_job_time"
                    class="date-time"
                  ></picker-new-employer>
                  <ErrorMessage class="error" name="end_job_time" />
                </div>
                <div class="mb-4">
                  <label class="form-label col-12"
                    >Mô tả công việc<span class="required-lable">*</span></label
                  >
                  <Editor
                    name="describe"
                    class="ckedit"
                    v-model="model.describe"
                  />
                </div>
                <div class="mb-4">
                  <label class="form-label col-12"
                    >Quyền lơi công việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Editor
                    class="ckedit"
                    name="benefit"
                    v-model="model.benefit"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn ngành nghề<span class="required-lable">*</span></label
                  >
                  <Field
                    name="majors_id"
                    as="select"
                    v-model="model.majors_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn ngành nghề</option>
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
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn chuyên ngành<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    name="profession_id"
                    as="select"
                    v-model="model.profession_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn vị trí</option>
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
                <div class="mb-4">
                  <label class="form-label"
                    >chọn trình độ<span class="required-lable">*</span></label
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

                <div class="mb-4">
                  <label class="form-label"
                    >chọn kinh nghiệm<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    name="experience_id"
                    as="select"
                    v-model="model.experience_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn Kinh nghiệm</option>
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
                <div class="mb-4">
                  <label class="form-label"
                    >chọn mức lương<span class="required-lable">*</span></label
                  >
                  <Field
                    name="wage_id"
                    as="select"
                    v-model="model.wage_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn Mức lương</option>
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
                <div class="mb-4">
                  <label class="form-label"
                    >Thời gian làm việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Field
                    name="time_work_id"
                    as="select"
                    v-model="model.time_work_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>
                      Chọn Yêu cầu thời gian làm việc
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

                <div class="mb-4">
                  <label class="form-label col-12"
                    >Yêu cầu công việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <div>
                    <Editor
                      name="candidate_requirements"
                      v-model="model.candidate_requirements"
                    />
                    <ErrorMessage class="error" name="candidate_requirements" />
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Kỹ năng<span class="required-lable">*</span></label
                  >

                  <Field
                    class="form-select"
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
                    />
                  </Field>
                  <ErrorMessage class="error" name="skill_id" />
                </div>
                <label class="form-label text-right label"
                  >Hình thức làm việc<span class="required-lable"
                    >*</span
                  ></label
                >
                <div class="mb-4">
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
            <div class="rec-submit">
              <button type="submit" class="btn btn-primary">Đăng Tin</button>
            </div>
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
    Multiselect
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.job,
      value: [],
      options: []
    }
  },
  created() {
    this.data.job.getskill.map((e) => {
      this.value.push({
        value: e.id,
        label: e.name
      })
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
      let that = this
      let id = this.data.job.id
      axios
        .post('/employer/new/update/' + id, {
          _token: this.csrfToken,
          data: this.model,
          skill: this.value
        })
        .then(function (response) {
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
          if (response.data.status == 403) {
            return notyf.error(response.data.message)
          }
          setTimeout(function () {
            window.location.href = that.data.urlBack
          }, 1100)
          return notyf.success(response.data.message)
        })
        .catch((error) => {
          location.reload()
        })
    }
  }
}
</script>

<style>
.form-text {
  height: 42px;
  padding: 10px 15px;
  font-size: 15px;
  border-radius: 1px;
  border-color: #e5e5e5;
}
.ckedit {
  margin-top: 2%;
}
.check-edit-ter {
  width: 100%;
}
</style>
<style src="@vueform/multiselect/themes/default.css"></style>