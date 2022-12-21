<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      class="recuitment-form"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
    >
      <Field type="hidden" :value="csrfToken" name="_token" />

      <div class="accordion">
        <div class="card recuitment-card">
          <div class="card-header recuitment-card-header" id="headingOne">
            <h2 class="mb-0">
              <span class="btn btn-block text-left recuitment-header">
                Đăng tin tuyển dụng
              </span>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show">
            <div class="card-body recuitment-body">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Tiêu đề<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Số lượng cần tuyển</label
                >
                <div class="col-sm-9">
                  <Field
                    name="quatity"
                    type="number"
                    v-model="model.quatity"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Số lượng cần tuyển"
                  />
                  <ErrorMessage class="error" name="quatity" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Giới tính<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <Field
                    name="sex"
                    as="select"
                    v-model="model.sex"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn giới tinh</option>
                    <option value="0">Không yêu cầu</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </Field>
                  <ErrorMessage class="error" name="sex" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Mô tả công việc<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <Field
                    name="describe"
                    type="text"
                    v-model="model.describe"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Mô tả công việc"
                  />
                  <ErrorMessage class="error" name="describe" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Yêu cầu công việc<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <Field
                    name="candidate_requirements"
                    type="text"
                    v-model="model.candidate_requirements"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Yêu cầu công việc"
                  />
                  <ErrorMessage class="error" name="candidate_requirements" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Chuyên Ngành<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <Field
                    name="majors_id"
                    as="select"
                    v-model="model.majors_id"
                    rules="required"
                    class="form-control"
                  >
                    <option value disabled selected>Chọn chuyên nghề</option>
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
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Trình độ<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Kinh nghiệm<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Mức lương<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Hình thức làm việc<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Thời gian làm việc<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
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
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Quyền lợi<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <Field
                    name="benefit"
                    type="text"
                    v-model="model.benefit"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="Quyền lợi"
                  />
                  <ErrorMessage class="error" name="benefit" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Vị trí ứng tuyển</label
                >
                <div class="col-sm-9">
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
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Nơi làm việc</label
                >
                <div class="col-sm-9">
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
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Địa chỉ cụ thể</label
                >
                <div class="col-sm-9">
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
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label text-right label"
                  >Hạn nộp hồ sơ<span class="pl-2">*</span></label
                >
                <div class="col-sm-9">
                  <picker-new-employer
                    name="end_job_time"
                    class="date-time"
                  ></picker-new-employer>
                  <ErrorMessage class="error" name="end_job_time" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card recuitment-card">
        <div class="card-header recuitment-card-header" id="headingTwo">
          <h2 class="mb-0">
            <span class="btn btn-block text-left recuitment-header">
              Kỹ Năng
            </span>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse show">
          <div class="card-body recuitment-body">
            <div class="checkboxsec">
              <label class="label-container">
                <div class="filter-topic">
                  <label class="label-container"> </label>
                </div>
              </label>
              <ErrorMessage class="error" name="skill_id" />
            </div>
          </div>
        </div>
      </div>
      <div class="rec-submit">
        <button type="submit" class="btn-submit-recuitment">
          <i class="fa fa-floppy-o pr-2 icon-save" />Lưu Tin
        </button>
      </div>
    </form>
  </VeeForm>
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
    ErrorMessage
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      options: []
    }
  },
  created() {
    this.data.skill.map((e) => {
      this.options.push(e.label)
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
      this.$refs.formData.submit()
    }
  }
}
</script>