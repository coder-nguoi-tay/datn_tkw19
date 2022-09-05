<template>
<<<<<<< HEAD
  <VeeForm
    as="div"
    v-if="step == 1"
    v-slot="{ handleSubmit }"
    @invalid-submit="onInvalidSubmit"
  >
    <form
      method="POST"
      class="form-step"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
    >
      <div class="step__container">
        <div class="step">
          <div class="input-label">アカウント情報</div>
          <div class="form-group">
            <label class="input-label">表示名</label>
            <Field
              name="show_name"
              type="text"
              v-model="model.show_name"
              rules="required|max:255"
              class="form-control"
              placeholder="ララプラ太郎"
            />
            <ErrorMessage class="error-msg" name="show_name" />
          </div>
          <div class="form-group">
            <label class="input-label">パスワード</label>
            <Field
              name="password"
              type="password"
              v-model="model.password"
              rules="required|min:8|max:16|password_rule"
              class="form-control"
              placeholder="●●●●●●●●"
            />
            <ErrorMessage class="error-msg" name="password" />
          </div>
          <div class="input-label m-t-30">利用者情報</div>
          <div class="form-group">
            <label class="input-label"
              >登録タイプ<span>登録後変更はできません。</span></label
            >
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
            <ErrorMessage class="error-msg" name="type" />
          </div>
          <template v-if="model.type == 1 || model.type == ''">
            <div class="form-group">
              <label class="input-label">生年月日</label>
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
              <ErrorMessage class="error-msg" name="birthday" />
            </div>
            <div class="form-group">
              <label class="input-label"
                >性別<span>登録後変更はできません。</span></label
              >
              <div>
                <div
                  class="form-check form-check-inline"
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
                  <label class="form-check-label" :for="'gender' + index">
                    {{ item.label }}
                  </label>
                </div>
              </div>
            </div>
          </template>
          <template v-else>
            <div class="form-group">
              <label class="input-label">屋号</label>
              <Field
                name="name"
                type="text"
                v-model="model.name"
                rules="required|max:255"
                class="form-control"
                placeholder="ララプラス商店"
              />
              <ErrorMessage class="error-msg" name="name" />
            </div>
            <div class="form-group">
              <label class="input-label">屋号（カナ）</label>
              <Field
                name="name_kana"
                type="text"
                v-model="model.name_kana"
                rules="required|max:255|kata"
                class="form-control"
                placeholder="ララプラス"
              />
              <ErrorMessage class="error-msg" name="name_kana" />
            </div>
            <div class="form-group">
              <label class="input-label">代表者名</label>
              <Field
                name="representative_name"
                type="text"
                v-model="model.representative_name"
                rules="required|max:255"
                class="form-control"
                placeholder="ララプラ太郎"
              />
              <ErrorMessage class="error-msg" name="representative_name" />
            </div>
          </template>
          <div class="form-group">
            <label class="input-label">所在地</label>
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
            <ErrorMessage class="error-msg" name="prefecture_id" />
            <Field
              name="city_id"
              as="select"
              v-model="model.city_id"
              rules="required"
              class="form-select m-t-4"
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
            <ErrorMessage class="error-msg" name="city_id" />
          </div>
          <template v-if="model.type == 2 || model.type == ''">
            <Field
              name="address_building"
              type="text"
              v-model="model.address_building"
              rules="required|max:255"
              class="form-control m-t-4"
              placeholder="丁番地 ビル・マンション名"
            />
            <ErrorMessage class="error-msg" name="address_building" />
          </template>
          <div class="form-group">
            <label class="input-label">所在地</label>
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
            <ErrorMessage class="error-msg" name="job_type" />
          </div>
          <div v-if="model.type == 2" class="form-group">
            <label class="input-label">事業内容</label>
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
            <ErrorMessage class="error-msg" name="job_descriptions" />
          </div>
          <input type="hidden" name="code" :value="model.code" />
          <input
            type="hidden"
            name="phone_number"
            :value="model.phone_number"
          />
          <div class="submit__container have-capcha">
            <button type="submit" class="btn-submit">送信する</button>
            <p class="txt-login" @click="$emit('backStep')">
              <a>SMS認証に戻る</a>
            </p>
          </div>
        </div>
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
import { VueRecaptcha } from 'vue-recaptcha'
import $ from 'jquery'
import axios from 'axios'
import VOtpInput from 'vue3-otp-input'
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
    VeeForm,
    Field,
    ErrorMessage,
    VueRecaptcha,
    VOtpInput,
    Datepicker
  },
  props: ['data', 'dataModel'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.dataModel,
      step: 1,
      step1: 1,
      error: '',
      showRecapchar: false
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
  },
  methods: {
    verifyMethod(val) {
      this.model.recaptcha_token = val
    },
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      //   let that = this
      //   $('.loading-div').removeClass('hidden')
      //   axios
      //     .post(this.data.urlSendCode, {
      //       _token: Laravel.csrfToken,
      //       phone_number: this.model.phone_number
      //     })
      //     .then(function (response) {
      //       $('.loading-div').addClass('hidden')
      //       // response.data.valid
      //       that.step1 = 2
      //     })
      //     .catch((error) => {
      //       $('.loading-div').addClass('hidden')
      //       const { status } = error.response || {}
      //       if (status == 500 || status == 429 || status == 400) {
      //         that.error = error.response.data.message
      //         that.showRecapchar = true
      //       }
      //     })
      //   this.flagShowLoader = true
      //   this.$refs.formData.submit()
    }
  }
}
</script>
=======
    <div class="container register__container">
        <h1 class="title text-center">会員登録</h1>
        <div class="register-form">
            <div class="form-header d-flex">
                <span class="step-indicator">SMS認証</span>
                <span class="step-indicator active" style="color: red;">ユーザー情報登録</span>
                <span class="step-indicator">完了</span>
            </div>
        </div>
        <VeeForm as="div">
            <form class="form-step2 container">
                <h5>アカウント情報</h5><br>
                <div>
                    <CFormLabel class=" col-sm-3 lbl-input" require>表示名</CFormLabel>
                    <Field name="code" class="form-control" placeholder="ララプラ太郎" />
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>パスワード</CFormLabel>
                    <Field name="code" class="form-control" placeholder="●●●●●●●●" />
                </div><br>
                <div>
                    <h5>利用者情報</h5>
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>登録タイプ</CFormLabel>
                    <Field name="code" type="number" autocomplete="off" class="form-control" ref="telephone"
                        placeholder="-- 登録タイプを選択してください --" />
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>生年月日</CFormLabel>
                    <Field name="code" type="text" autocomplete="off" class="form-control"
                        placeholder="1990 / 01 / 01" />
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>性別</CFormLabel><br>
                    <Field name="" type="radio" class="radio" autocomplete="off" />男
                    <Field name="" type="radio" class="radio" autocomplete="off" />女
                    <Field name="" type="radio" class="radio" autocomplete="off" />その他
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>所在地</CFormLabel>
                    <Field name="" type="number" autocomplete="off" class="form-control"
                        placeholder="-- 都道府県を選択してください --" />
                    <Field name="" type="number" autocomplete="off" class="form-control"
                        placeholder="-- 市区町村を選択してください --" />
                    <Field name="code" type="text" autocomplete="off" class="form-control"
                        placeholder="丁番地 ビル・マンション名" />
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>職種</CFormLabel>
                    <Field name="code" type="nember" autocomplete="off" class="form-control"
                        placeholder="-- 職種を選択してください --" />
                    <ErrorMessage class="error" name="" /><br>
                </div>
                <div class="col-md-12 text-center btn-box">
                    <button class="btn btn-danger">登録する</button>
                </div>
                <div class="text-center">
                    <a href="">SMS認証に戻る</a>
                </div>
            </form>
        </VeeForm>
    </div>
</template>
<script>

import {
    Form as VeeForm,
    Field,
} from "vee-validate";
export default {
    components: {
        VeeForm,
        Field,
    },
};
</script>
>>>>>>> origin/feature/user-event
