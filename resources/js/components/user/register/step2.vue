<template>
  <VeeForm
    as="div"
    v-if="step == 1"
    v-slot="{ handleSubmit }"
    @invalid-submit="onInvalidSubmit"
  >
    <form
      method="POST"
      id="form-data"
      class="form-step"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
    >
      <div class="step__container">
        <div class="step">
          <div class="input-label">アカウント情報</div>
          <div class="form-group">
            <label class="input-label" require>表示名</label>
            <Field type="hidden" :value="csrfToken" name="_token" />
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
            <label class="input-label" require>パスワード</label>
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
            <label class="input-label" require>認証済み電話番号</label>
            <input
              type="text"
              class="form-control"
              disabled
              v-model="model.phone_number"
            />
          </div>
          <div class="form-group">
            <label class="input-label" require>登録タイプ</label>
            <label class="input-label"
              ><span>登録後変更はできません。</span></label
            >
            <Field
              name="type"
              as="select"
              v-model="model.type"
              rules="required"
              @change="setMessageError"
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
          <template v-if="model.type == 1">
            <div class="form-group">
              <label class="input-label" require>生年月日</label>
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
              <label class="input-label" require>性別</label>
              <label class="input-label"
                ><span>登録後変更はできません。</span></label
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
          <template v-else-if="model.type == 2 || model.type == 3">
            <div class="form-group">
              <label class="input-label" require>{{
                model.type == 2 ? '屋号' : '法人名'
              }}</label>
              <Field
                name="name"
                type="text"
                v-model="model.name"
                rules="required|max:255"
                class="form-control"
                :placeholder="model.type == 2 ? 'LaLa+商店' : '株式会社LaLa+'"
              />
              <ErrorMessage class="error-msg" name="name" />
            </div>
            <div class="form-group">
              <label class="input-label" require>{{
                model.type == 2 ? '屋号（カナ）' : '法人名（カナ）'
              }}</label>
              <Field
                name="name_kana"
                type="text"
                v-model="model.name_kana"
                rules="required|max:255|kata"
                class="form-control"
                :placeholder="
                  model.type == 2 ? 'ララプラス' : 'カブシキガイシャララプラス'
                "
              />
              <ErrorMessage class="error-msg" name="name_kana" />
            </div>
            <div class="form-group">
              <label class="input-label" require>代表者名</label>
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
          <template v-if="model.type != ''">
            <div class="form-group">
              <label class="input-label" require>所在地</label>
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
            <template v-if="model.type == 2 || model.type == 3">
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
            <template v-if="model.type == 1">
              <div class="form-group">
                <label class="input-label" optional>職種</label>
                <Field
                  name="job_type"
                  as="select"
                  v-model="model.job_type"
                  class="form-select"
                >
                  <option value="" disabled selected>
                    -- 職種を選択してください --
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
              <div class="form-group">
                <label class="input-label" optional
                  >現在所属している組織・団体</label
                >
                <Field
                  name="currently_member"
                  type="text"
                  v-model="model.currently_member"
                  rules="max:255"
                  class="form-control"
                  placeholder="○○株式会社"
                />
                <ErrorMessage class="error-msg" name="currently_member" />
              </div>
              <div class="form-group">
                <label class="input-label" optional>出身大学</label>
                <Field
                  name="university_of"
                  type="text"
                  v-model="model.university_of"
                  rules="max:255"
                  class="form-control"
                  placeholder="○○大学"
                />
                <ErrorMessage class="error-msg" name="university_of" />
              </div>
              <div class="form-group">
                <label class="input-label" optional>出身高校</label>
                <Field
                  name="born_in_college"
                  type="text"
                  v-model="model.born_in_college"
                  rules="max:255"
                  class="form-control"
                  placeholder="○○高等学校"
                />
                <ErrorMessage class="error-msg" name="born_in_college" />
              </div>
              <div class="form-group">
                <label class="input-label" optional>出身中学校</label>
                <Field
                  name="born_in_middle_schoole"
                  type="text"
                  v-model="model.born_in_middle_schoole"
                  rules="max:255"
                  class="form-control"
                  placeholder="○○中学校"
                />
                <ErrorMessage class="error-msg" name="born_in_middle_schoole" />
              </div>
            </template>
            <template v-else-if="model.type == 2 || model.type == 3">
              <div class="form-group">
                <label class="input-label" require>業種</label>
                <Field
                  name="industry_id"
                  rules="required"
                  as="select"
                  v-model="model.industry_id"
                  class="form-select"
                >
                  <option value="" disabled selected>
                    -- 業種を選択してください --
                  </option>
                  <option
                    v-for="item in data.industries"
                    :key="item.id"
                    :value="item.id"
                  >
                    {{ item.label }}
                  </option>
                </Field>
                <ErrorMessage class="error-msg" name="industry_id" />
              </div>
              <div class="form-group">
                <label class="input-label" require>事業内容</label>
                <Field
                  name="industry_content"
                  type="text"
                  as="textarea"
                  v-model="model.industry_content"
                  rules="required|max:1000"
                  rows="5"
                  class="form-control"
                  placeholder="こちらに現在行っている事業について記載ください。"
                />
                <ErrorMessage class="error-msg" name="industry_content" />
              </div>
            </template>
          </template>
          <input type="hidden" name="code" :value="model.code" />
          <input
            type="hidden"
            name="phone_number"
            :value="model.phone_number"
          />
          <div class="submit__container have-capcha">
            <div class="form-group">
              <div class="form-inline">
                <div class="form-check" style="margin: 0 auto">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    v-model="model.term"
                    id="term"
                    value="1"
                  /><label class="form-check-label label" for="term"
                    >利用規約・プライバシーポリシーに同意する</label
                  >
                </div>
              </div>
            </div>
            <button
              type="submit"
              :disabled="model.term != 1"
              class="btn-submit"
            >
              送信する
            </button>
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
            required:
              (this.model.type == 2 ? '屋号' : '法人名') +
              'を入力してください。',
            max: '255文字以内で入力してください。'
          },
          name_kana: {
            required:
              (this.model.type == 2 ? '屋号（カナ）' : '法人名（カナ）') +
              'を入力してください。',
            max: '255文字以内で入力してください。',
            kata: 'カタカナで入力してください'
          },
          representative_name: {
            required: '代表者名を入力してください。',
            max: '255文字以内で入力してください。'
          },
          currently_member: {
            max: '255文字以内で入力してください。'
          },
          university_of: {
            max: '255文字以内で入力してください。'
          },
          born_in_college: {
            max: '255文字以内で入力してください。'
          },
          born_in_middle_schoole: {
            max: '255文字以内で入力してください。'
          },
          industry_id: {
            required: '業種を入力してください。'
          },
          industry_content: {
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
    setMessageError() {
      let messError = {
        en: {
          fields: {}
        }
      }
      messError.en.fields['name'] = {
        required:
          (this.model.type == 2 ? '屋号' : '法人名') + 'を入力してください。',
        max: '255文字以内で入力してください。'
      }
      messError.en.fields['name_kana'] = {
        required:
          (this.model.type == 2 ? '屋号（カナ）' : '法人名（カナ）') +
          'を入力してください。',
        max: '255文字以内で入力してください。',
        kata: 'カタカナで入力してください'
      }

      configure({
        generateMessage: localize(messError)
      })
    },
    onSubmit() {
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.urlStore, $('#form-data').serialize())
        .then(function (response) {
          $('.loading-div').addClass('hidden')
          that.$emit('nextStep')
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
        })
    }
  }
}
</script>
