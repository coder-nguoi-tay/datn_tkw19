<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
    >
      <div>
        <div class="col-12 recuitment-inner">
          <form class="recuitment-form">
            <div class="card-create-employer">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Đăng tin tuyển dụng</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="mb-4">
                        <label class="form-label"
                          >Tiêu đề<span class="required-lable">*</span></label
                        >
                        <input type="text" class="form-control form-text" />
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Số lượng cần tuyển<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <input type="number" class="form-control" min="0" />
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Giới tính<span class="required-lable">*</span></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option value="">chọn giới tính</option>
                          <option value="không yêu cầu"
                            >không yêu cầu giới tính</option
                          >
                          <option value="nam">Nam</option>
                          <option value="nữ">Nữ</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Mô tả công việc<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <textarea class="form-control"></textarea>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Yêu cầu công việc<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <textarea class="form-control"></textarea>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Quyền lơi công việc<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <textarea class="form-control"></textarea>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Chọn nghành nghề<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Chọn nơi làm việc<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Chọn địa chỉ cụ thể<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <input type="text" class="form-control" />
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Hạn nộp hồ sơ<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <input type="date" class="form-control" />
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="mb-4">
                        <label class="form-label"
                          >Chọn nghành nghề<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Chọn chuyên ngành<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >chọn trình độ<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >chọn kinh nghiệm<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >chọn mức lương<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"
                          >Thời gian làm việc<span class="required-lable"
                            >*</span
                          ></label
                        >
                        <select
                          class="form-control"
                          required
                          aria-label="select example"
                        >
                          <option></option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label class="form-label"> Kỹ năng</label>
                        <div class="checkboxsec" id="checkboxSection">
                          <label class="label-container">
                            <div class="filter-topic" key="{skill.id}">
                              <label class="label-container">
                                <span></span>
                                <input type="checkbox" value="{skill.id}" />
                                <span class="checkmark" />
                              </label>
                            </div>
                          </label>
                        </div>
                      </div>
                      <div>
                        <div>logo</div>
                        <input type="file" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="rec-submit">
                    <button type="submit" class="btn btn-primary">
                      Đăng Tin
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <Field type="hidden" :value="csrfToken" name="_token" />
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
import axios from 'axios'
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
  props: {
    isChecked: true ?? false
  },
  props: ['data'],
  data: function() {
    return {
      csrfToken: Laravel.csrfToken,
      model: {}
    }
  },
  created() {
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
      console.log(this.model)
      axios
        .post('/employer/new/store', {
          ...this.model,
          _token: this.csrfToken
        })
        .then(function(response) {
          console.log(response)
        })
        .catch(function(error) {
          console.log(error)
        })
      // this.$refs.formData.submit();
    }
  }
}
</script>
<style>
.date-time {
  margin-top: 15px;
}

.form-text {
  height: 52px;
  padding: 10px 15px;
  font-size: 15px;
  border-radius: 1px !;
  border-color: #e5e5e5;
}
</style>