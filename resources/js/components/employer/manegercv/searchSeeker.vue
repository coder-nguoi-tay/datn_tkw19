<template>
  <div
    class="modal fade"
    id="exampleModalSeacrhSpeed"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Tìm Kiếm Ứng Viên Nhanh
          </h5>
          <button
            type="button"
            class="btn-close"
            data-coreui-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <VeeForm
            as="div"
            v-slot="{ handleSubmit }"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              class="row"
              @submit="handleSubmit($event, onSubmit)"
              ref="formData"
              method="POST"
            >
              <Field type="hidden" :value="csrfToken" name="_token" />
              <div class="container">
                <form>
                  <div id="emailHelp" class="form-text">
                    Số Tiền Sẽ Tăng Theo Số Lượng Người Mà Bạn Muốn Tìm
                  </div>
                  <div class="row p-3">
                    <div class="col-6">
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <label class="text-dark ft-medium"
                            >Số Người Cần Tìm</label
                          >
                          <Field
                            name="data"
                            as="select"
                            v-model="ChanPayment"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              .....Chọn Số Người.....
                            </option>
                            <option
                              v-for="item in data"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="data" />
                        </div>
                      </div>
                      <br />
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <label class="text-dark ft-medium"
                            >Chuyên Ngành</label
                          >
                          <Field
                            name="profession_id"
                            as="select"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              .....Chọn Chuyên Nhành.....
                            </option>
                            <option
                              v-for="item in query.profession"
                              :key="item.id"
                              :value="item.id"
                            >
                              {{ item.label }}
                            </option>
                          </Field>
                          <ErrorMessage class="error" name="profession_id" />
                        </div>
                      </div>
                      <br />
                    </div>
                    <div class="col-6">
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <label class="text-dark ft-medium">Kỹ năng</label>
                          <Field
                            class="form-control"
                            name="skill"
                            rules="required"
                          >
                            <Multiselect
                              placeholder="Chọn Kỹ năng"
                              mode="tags"
                              :options="value"
                              v-model="model.skill"
                              :searchable="true"
                              label="label"
                              track-by="label"
                              :infinite="true"
                              :object="true"
                            />
                          </Field>
                          <ErrorMessage class="error" name="skill" />
                        </div>
                      </div>
                      <br />
                      <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                          <label class="text-dark ft-medium">Ngành Nghề</label>
                          <Field
                            name="majors_id"
                            as="select"
                            rules="required"
                            class="form-control"
                          >
                            <option value disabled selected>
                              .....Chọn Ngành Nghề.....
                            </option>
                            <option
                              v-for="item in query.majors"
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
                  </div>
                  <button
                    @click="test()"
                    type="button"
                    class="nav-link py-0 btn-next-step"
                  >
                    {{
                      ChanPayment
                        ? new Intl.NumberFormat('de-DE', {
                            style: 'currency',
                            currency: 'VND'
                          }).format(ChanPayment * 300000)
                        : 'Submit'
                    }}
                  </button>
                </form>
              </div>
            </form>
          </VeeForm>
        </div>
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
import Multiselect from '@vueform/multiselect'
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
    ErrorMessage,
    Multiselect
  },
  created() {
    // if (this.ChanPayment) {
    //   console.log(this.ChanPayment)
    //   this.total = this.ChanPayment * 10000
    // }
    this.query.skill.map((e) => {
      this.value.push({
        value: e.id,
        label: e.label
      })
    })
  },
  props: ['data', 'query'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      value: [],
      ChanPayment: '',
      total: ''
    }
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
    test() {
      console.log(this.model.skill)
    },
    onSubmit() {
      console.log(this.model)
      //   this.$refs.formData.submit()
    }
  }
}
</script>

<style>
</style>