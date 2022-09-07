<template>
  <div class="container">
    <div class="fade-in">
      <CRow>
        <CCol :sm="12">
          <CCard>
            <VeeForm
              as="div"
              v-slot="{ handleSubmit }"
              @invalid-submit="onInvalidSubmit"
            >
              <form
                method="POST"
                @submit="handleSubmit($event, onSubmit)"
                :action="data.urlStore"
                ref="formData"
              >
                <Field type="hidden" :value="csrfToken" name="_token" />
                <CCardHeader>
                  <CFormLabel>ユーザー作成</CFormLabel>
                </CCardHeader>
                <CCardBody>
                  <!-- show_name -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >ユーザー名</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="show_name"
                        type="text"
                        v-model="model.show_name"
                        rules="required|max:255"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="show_name" />
                    </div>
                  </CRow>
                  <!-- phone_number -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >電話番号</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="phone_number"
                        type="text"
                        v-model="model.phone_number"
                        rules="required|max:50|telephone|unique_telephone"
                        class="form-control"
                        :placeholder="'0xxxxxxxxx'"
                      />
                      <ErrorMessage class="error" name="phone_number" />
                    </div>
                  </CRow>
                  <!-- email -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input"
                      >メールアドレス</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="email"
                        type="text"
                        v-model="model.email"
                        rules="max:50|email|unique_custom"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="email" />
                    </div>
                  </CRow>
                  <!-- password -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >パスワード</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="password"
                        type="password"
                        v-model="model.password"
                        rules="required|min:8|max:16|password_rule"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="password" />
                    </div>
                  </CRow>
                  <!-- type -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >登録タイプ</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="type"
                        as="select"
                        v-model="model.type"
                        rules="required"
                        class="form-select"
                      >
                        <option value="" disabled selected>
                          -- 登録タイプを選択してください --
                        </option>
                        <option
                          v-for="item in data.typeOptions"
                          :key="item.id"
                          :value="item.id"
                        >
                          {{ item.label }}
                        </option>
                      </Field>
                      <ErrorMessage class="error" name="type" />
                    </div>
                  </CRow>
                  <!-- birthday -->
                  <template v-if="model.type == 1 || model.type == ''">
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >生年月日</CFormLabel
                      >
                      <div class="col-sm-6">
                        <Field
                          as="div"
                          name="birthday"
                          v-model="model.birthday"
                          rules="required"
                        >
                          <datepicker
                            autoApply
                            keepActionRow
                            :closeOnAutoApply="false"
                            v-model="model.birthday"
                            :monthChangeOnScroll="false"
                            :maxDate="new Date()"
                            locale="ja"
                            name="birthday"
                            selectText="選択"
                            cancelText="閉じる"
                            format="yyyy/MM/dd"
                            placeholder="1990 / 01 / 01"
                            :enableTimePicker="false"
                          />
                        </Field>
                        <ErrorMessage class="error" name="birthday" />
                      </div>
                    </CRow>
                    <!-- gender -->
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >性別
                      </CFormLabel>
                      <div class="col-sm-6">
                        <div>
                          <div
                            class="form-check form-check-inline lbl-input"
                            :key="item.id"
                            v-for="(item, index) in data.genderOptions"
                          >
                            <input
                              class="form-check-input"
                              type="radio"
                              name="gender"
                              v-model="model.gender"
                              :value="item.id"
                              :id="'gender' + index"
                            />
                            <label
                              class="form-check-label"
                              :for="'gender' + index"
                            >
                              {{ item.label }}
                            </label>
                          </div>
                        </div>
                      </div>
                    </CRow>
                  </template>
                  <template v-else>
                    <!-- name -->
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >屋号</CFormLabel
                      >
                      <div class="col-sm-6">
                        <Field
                          name="name"
                          type="text"
                          v-model="model.name"
                          rules="required|max:255"
                          class="form-control"
                          placeholder="ララプラス商店"
                        />
                        <ErrorMessage class="error" name="name" />
                      </div>
                    </CRow>
                    <!-- name_kana -->
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >屋号（カナ）
                      </CFormLabel>
                      <div class="col-sm-6">
                        <Field
                          name="name_kana"
                          type="text"
                          v-model="model.name_kana"
                          rules="required|max:255|kata"
                          class="form-control"
                          placeholder="ララプラス"
                        />
                        <ErrorMessage class="error" name="name_kana" />
                      </div>
                    </CRow>
                    <!-- representative_name -->
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >代表者名</CFormLabel
                      >
                      <div class="col-sm-6">
                        <Field
                          name="representative_name"
                          type="text"
                          v-model="model.representative_name"
                          rules="required|max:255"
                          class="form-control"
                          placeholder="ララプラ太郎"
                        />
                        <ErrorMessage
                          class="error"
                          name="representative_name"
                        />
                      </div>
                    </CRow>
                  </template>
                  <!-- prefecture_id -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >所在地</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="prefecture_id"
                        as="select"
                        v-model="model.prefecture_id"
                        rules="required"
                        class="form-select"
                        @change="this.model.city_id = ''"
                      >
                        <option value="" disabled selected>
                          -- 都道府県を選択してください --
                        </option>
                        <option
                          v-for="item in data.prefectureOptions"
                          :key="item.id"
                          :value="item.id"
                        >
                          {{ item.label }}
                        </option>
                      </Field>
                      <ErrorMessage class="error" name="prefecture_id" />
                    </div>
                  </CRow>
                  <!-- city_id -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input"></CFormLabel>
                    <div class="col-sm-6">
                      <Field
                        name="city_id"
                        as="select"
                        v-model="model.city_id"
                        rules="required"
                        class="form-select"
                      >
                        <option value="" disabled selected>
                          -- 市区を選択してください --
                        </option>
                        <option
                          v-for="item in data.cityOptions.filter(
                            (x) => x.prefecture_id == model.prefecture_id
                          )"
                          :key="item.id"
                          :value="item.id"
                        >
                          {{ item.label }}
                        </option>
                      </Field>
                      <ErrorMessage class="error" name="city_id" />
                    </div>
                  </CRow>
                  <!-- address_building -->
                  <template v-if="model.type == 2 || model.type == ''">
                    <CRow class="mb-2">
                      <CFormLabel class="col-sm-3 lbl-input" require
                        >丁番地 ビル・マンション名</CFormLabel
                      >
                      <div class="col-sm-6">
                        <Field
                          name="address_building"
                          type="text"
                          v-model="model.address_building"
                          rules="required|max:255"
                          class="form-control m-t-4"
                        />
                        <ErrorMessage class="error" name="address_building" />
                      </div>
                    </CRow>
                  </template>
                  <!-- job_type -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >所在地</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="job_type"
                        as="select"
                        v-model="model.job_type"
                        rules="required"
                        class="form-select"
                      >
                        <option value="" disabled selected>
                          -- 都道府県を選択してください --
                        </option>
                        <option
                          v-for="item in data.jobOptions"
                          :key="item.id"
                          :value="item.id"
                        >
                          {{ item.label }}
                        </option>
                      </Field>
                      <ErrorMessage class="error" name="job_type" />
                    </div>
                  </CRow>
                  <!-- job_descriptions -->
                  <CRow v-if="model.type == 2" class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >事業内容</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="job_descriptions"
                        type="text"
                        as="textarea"
                        v-model="model.job_descriptions"
                        rules="required|max:1000"
                        rows="5"
                        class="form-control"
                        placeholder="こちらに現在行っている事業について記載ください。"
                      />
                      <ErrorMessage class="error" name="job_descriptions" />
                    </div>
                  </CRow>
                </CCardBody>
                <CCardFooter>
                  <div class="col-md-12 text-center btn-box">
                    <CButton type="submit" class="btn-primary btn-w-100">
                      登録
                    </CButton>
                    <a :href="data.urlBack" class="btn btn-default btn-w-100">
                      キャンセル
                    </a>
                  </div>
                </CCardFooter>
              </form>
            </VeeForm>
          </CCard>
        </CCol>
      </CRow>
    </div>
    <loader :flag-show="flagShowLoader"></loader>
  </div>
</template>

<script>
import Loader from '../../common/loader'
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
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  components: {
    Loader,
    VeeForm,
    Field,
    ErrorMessage,
    Datepicker
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      flagShowLoader: false,
      model: {}
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          show_name: {
            required: '表示名を入力してください。',
            max: '255文字以内で入力してください。'
          },
          phone_number: {
            required: '電話番号を入力してください。',
            max: '50文字以内で入力してください。',
            telephone: '電話番号が正しい形式ではありません。',
            unique_telephone: 'このメールアドレスは既に登録されています'
          },
          email: {
            max: '50文字以内で入力してください。',
            email: 'メールアドレスを正確に入力してください',
            unique_custom: 'このメールアドレスは既に登録されています'
          },
          password: {
            required: 'パスワードを入力してください。',
            max: 'パスワードは８文字～１６文字入力してください。',
            min: 'パスワードは８文字～１６文字入力してください。',
            password_rule:
              'パスワードは半角英数字で、大文字、小文字、数字で入力してください。'
          },
          type: {
            required: '登録タイプを入力してください。'
          },
          birthday: {
            required: '生年月日を入力してください。'
          },
          prefecture_id: {
            required: '都道府県を入力してください。'
          },
          city_id: {
            required: '市を入力してください。'
          },
          address_building: {
            required: '住所建物を入力してください。',
            max: '255文字以内で入力してください。'
          },
          job_type: {
            required: '所在地を入力してください。'
          },
          name: {
            required: '屋号を入力してください。',
            max: '255文字以内で入力してください。'
          },
          name_kana: {
            required: '屋号（カナ）を入力してください。',
            max: '255文字以内で入力してください。',
            kata: 'カタカナで入力してください'
          },
          representative_name: {
            required: '代表者名を入力してください。',
            max: '255文字以内で入力してください。'
          },
          job_descriptions: {
            required: '事業内容を入力してください。',
            max: '1000文字以内で入力してください。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })

    let that = this
    defineRule('unique_custom', (value) => {
      return axios
        .post(that.data.urlCheckEmail, {
          _token: Laravel.csrfToken,
          value: value
        })
        .then(function (response) {
          return response.data.valid
        })
        .catch((error) => {})
    })
    defineRule('unique_telephone', (value) => {
      return axios
        .post(that.data.urlCheckPhone, {
          _token: Laravel.csrfToken,
          phone_number: (that.data.VN_MODE ? '+84' : '+81') + value
        })
        .then(function (response) {
          return response.data.valid
        })
        .catch((error) => {})
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
      this.flagShowLoader = true
      this.$refs.formData.submit()
    }
  }
}
</script>
