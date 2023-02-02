<template>
  <section style="background-color: #f4f5f7">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-11 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: 0.5rem">
            <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
              <form @submit="handleSubmit($event, onSubmit)" ref="formData" enctype="multipart/form-data"
                :action="data.urlStore" method="POST">
                <Field type="hidden" :value="csrfToken" name="_token" />
                <div class="g-0">
                  <div class="col-md-12">
                    <div class="card-body">
                      <h6>
                        NHỮNG THUẬN LỢI KHI BẠN CẬP NHẬT THÔNG TIN TÌM VIỆC ?
                      </h6>
                      <p style="font-size: 15px">
                        - Tạo điều kiện cho nhà tuyển dụng dễ tìm thấy bạn.
                      </p>
                      <p style="font-size: 15px; margin-top: -10px !important">
                        - Được gợi ý các công việc phù hợp với bạn.
                      </p>

                      <hr class="mt-0 mb-4" />
                      <div class="row pt-1">
                        <h6 class="text-center">
                          Bạn vui lòng hoàn thiện các thông tin dưới đây
                        </h6>
                        <p class="text-center">(*) Các thông tin bắt buộc</p>
                        <div class="col-md-12" style="color: #3c65f5; font-weight: 550">
                          KINH NGHIỆM THỰC TẾ
                        </div>
                        <br />
                        <br />
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Kinh Nghiệm<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="experience_id" as="select" v-model="valueSelect.experience_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Kinh Nghiệm--
                              </option>
                              <option v-for="item in data.experience" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="experience_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Địa chỉ<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="location_id" as="select" v-model="valueSelect.location_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Địa chỉ--
                              </option>
                              <option v-for="item in data.location" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="location_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Hình thức làm việc<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="workingform_id" as="select" v-model="valueSelect.workingform_id"
                              rules="required" class="form-control s00">
                              <option value disabled selected>
                                --Chọn hình thức làm việc--
                              </option>
                              <option v-for="item in data.workingform" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="workingform_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Nghành nghề<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="majors_id" as="select" v-model="valueSelect.majors_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Nghành nghề--
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
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Trình độ<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="lever_id" as="select" v-model="valueSelect.lever_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Trình Độ--
                              </option>
                              <option v-for="item in data.lever" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="lever_id" />
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Mức lương<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="wage_id" as="select" v-model="valueSelect.wage_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Mức Lương--
                              </option>
                              <option v-for="item in data.wage" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="wage_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Ngành Nghề<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="profession_id" as="select" v-model="valueSelect.profession_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Ngành Nghề--
                              </option>
                              <option v-for="item in data.profession" :key="item.id" :value="item.id">
                                {{ item.label }}

                              </option>
                            </Field>
                            <ErrorMessage class="error" name="profession_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Thời gian làm việc<span
                              class="required-label">
                              *</span></label>
                          <div class="col-sm-8">
                            <Field name="time_work_id" as="select" v-model="valueSelect.time_work_id" rules="required"
                              class="form-control s00">
                              <option value disabled selected>
                                --Chọn Thời Gian--
                              </option>
                              <option v-for="item in data.timework" :key="item.id" :value="item.id">
                                {{ item.label }}
                              </option>
                            </Field>
                            <ErrorMessage class="error" name="time_work_id" />
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Kĩ năng
                            <span class="required-label"> *</span></label>
                          <div class="col-sm-8">
                            <Field class="form-control s00" v-model="value" name="skill_id" rules="required">
                              <Multiselect placeholder="--Chọn Kỹ năng--" v-model="value" mode="tags" :searchable="true"
                                :options="options" label="label" track-by="label" :infinite="true" :object="true"
                                :loading="isLoading" :internal-search="false" :clear-on-select="false"
                                :close-on-select="false" :options-limit="300" :limit="3" :limit-text="limitText"
                                :max-height="600" :show-no-results="false" :hide-selected="true"
                                @input="updateSelected" />
                            </Field>
                            <ErrorMessage class="error" name="skill_id" />
                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="skill[]" v-model="skill" />
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <button style="background: #3c65f5 !important" type="submit" class="
                              btn btn-md
                              ft-medium
                              text-light
                              rounded
                              theme-bg
                              btn-register-employer
                            ">
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
      value: [],
      options: [],
      valueSelect: this.data.user.get_profile_use ?? {},
      skill: []
    }
  },

  created() {
    let array = []
    if (this.data.getskill) {
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
          location_id: {
            required: 'không được bỏ trống'
          },
          majors_id: {
            required: 'không được bỏ trống'
          },
          workingform_id: {
            required: 'không được bỏ trống'
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