<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlBack
      },
      page_name: 'ユーザー情報設定'
    }"
  ></UserHeader>
  <div class="event-create">
    <div class="container event-create__container user-setting">
      <VeeForm
        as="div"
        v-slot="{ handleSubmit }"
        @invalid-submit="onInvalidSubmit"
      >
        <form
          method="POST"
          @submit="handleSubmit($event, onSubmit)"
          :action="data.urlUpdate"
          ref="formData"
          id="formData"
        >
          <input type="hidden" value="PUT" name="_method" />
          <input type="hidden" :value="csrfToken" name="_token" />
          <div class="event-create__wrapper">
            <div class="input-section">
              <p class="title-page">
                ユーザー情報は公開されることはありません（ただし、ユーザー情報の表示設定を行っていた場合は性別が表示されます）、イベントへの参加や検索のおすすめ表示に活用されます。
              </p>
              <template v-if="data.user.type == 1">
                <div class="form-group">
                  <label class="form-label" require>性別</label>
                  <p class="note">
                    登録時に選択した内容が反映されます。本画面上で変更を行うことはできません。変更を希望の方はこちらからご相談ください。
                  </p>
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
                <div class="form-group">
                  <label class="form-label" require>生年月日</label>
                  <p class="note">
                    登録時に選択した内容が反映されます。本画面上で変更を行うことはできません。変更を希望の方はこちらからご相談ください。
                  </p>
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
              </template>
              <template v-else-if="data.user.type == 2 || data.user.type == 3">
                <div class="form-group">
                  <label class="form-label" require>{{
                    data.user.type == 2 ? '屋号' : '法人名'
                  }}</label>
                  <Field
                    name="name"
                    type="text"
                    v-model="model.name"
                    rules="required|max:255"
                    class="form-control"
                    :placeholder="
                      data.user.type == 2 ? 'LaLa+商店' : '株式会社LaLa+'
                    "
                  />
                  <ErrorMessage class="error-msg" name="name" />
                </div>
                <div class="form-group">
                  <label class="form-label" require>{{
                    data.user.type == 2 ? '屋号（カナ）' : '法人名（カナ）'
                  }}</label>
                  <Field
                    name="name_kana"
                    type="text"
                    v-model="model.name_kana"
                    rules="required|max:255|kata"
                    class="form-control"
                    :placeholder="
                      data.user.type == 2
                        ? 'ララプラス'
                        : 'カブシキガイシャララプラス'
                    "
                  />
                  <ErrorMessage class="error-msg" name="name_kana" />
                </div>
                <div class="form-group">
                  <label class="form-label" require>代表者名</label>
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
                <label class="form-label" require>所在地</label>
                <div class="custom-input">
                  <Field
                    as="select"
                    name="prefecture_id"
                    class="form-control"
                    rules="required"
                    :class="{ 'select-placeholder': !model.prefecture_id }"
                    v-model="model.prefecture_id"
                    @change="this.model.city_id = ''"
                  >
                    <option value="">-- 都道府県を選択してください --</option>
                    <option
                      :value="item.id"
                      v-for="item in data.prefectureOptions"
                      :key="item.id"
                    >
                      {{ item.label }}
                    </option>
                  </Field>
                  <span class="ic-arrow"
                    ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                  /></span>
                  <ErrorMessage class="error-msg" name="prefecture_id" />
                </div>
                <div class="custom-input mt-4px">
                  <Field
                    name="city_id"
                    as="select"
                    v-model="model.city_id"
                    class="form-control"
                    rules="required"
                    :class="{ 'select-placeholder': !model.city_id }"
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
                  <span class="ic-arrow"
                    ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                  /></span>
                  <ErrorMessage class="error-msg" name="city_id" />
                  <template v-if="data.user.type == 2 || data.user.type == 3">
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
                </div>
              </div>
              <template v-if="data.user.type == 1">
                <div class="form-group">
                  <label class="form-label" optional>職種</label>
                  <div class="custom-input">
                    <Field
                      name="job_type"
                      as="select"
                      v-model="model.job_type"
                      class="form-control"
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
                    <span class="ic-arrow"
                      ><img
                        src="/assets/img/user/event/ic_arrow_down.svg"
                        alt=""
                    /></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" optional
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
                  <label class="form-label" optional>出身大学</label>
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
                  <label class="form-label" optional>出身高校</label>
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
                  <label class="form-label" optional>出身中学校</label>
                  <Field
                    name="born_in_middle_schoole"
                    type="text"
                    v-model="model.born_in_middle_schoole"
                    rules="max:255"
                    class="form-control"
                    placeholder="○○中学校"
                  />
                  <ErrorMessage
                    class="error-msg"
                    name="born_in_middle_schoole"
                  />
                </div>
              </template>
              <div class="form-group">
                <label class="form-label" v-if="data.user.type == 1" optional
                  >業種</label
                >
                <label class="form-label" v-else require>業種</label>
                <div class="custom-input">
                  <Field
                    name="industry_id"
                    :rules="data.user.type == 1 ? '' : 'required'"
                    as="select"
                    v-model="model.industry_id"
                    class="form-control"
                    :class="{ 'select-placeholder': !model.industry_id }"
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
                  <span class="ic-arrow"
                    ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                  /></span>
                  <ErrorMessage class="error-msg" name="industry_id" />
                </div>
              </div>
              <template v-if="data.user.type == 2 || data.user.type == 3">
                <div class="form-group">
                  <label class="form-label" require>事業内容</label>
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
              <button class="btn btn-submit">保存する</button>
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
import Datepicker from '@vuepic/vue-datepicker'
import $ from 'jquery'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import UserHeader from '../../common/userHeader.vue'
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
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
    Datepicker,
    UserHeader,
    Toggle
  },
  props: ['data', 'dataModel'],
  data: function () {
    return {
      model: this.data.user,
      csrfToken: Laravel.csrfToken
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
              (this.data.user.type == 2 ? '屋号' : '法人名') +
              'を入力してください。',
            max: '255文字以内で入力してください。'
          },
          name_kana: {
            required:
              (this.data.user.type == 2 ? '屋号（カナ）' : '法人名（カナ）') +
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
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      let ele = $('[name="' + firstInputError + '"]')
      if (
        $('[name="' + firstInputError + '"]').hasClass('hidden') ||
        $('[name="' + firstInputError + '"]').attr('type') == 'hidden'
      ) {
        ele = $('[name="' + firstInputError + '"]').closest('div')
      }
      ele.focus()
      $('html, body').animate(
        {
          scrollTop: ele.offset().top - 150 + 'px'
        },
        500
      )
    },
    onSubmit() {
      $('.loading-div').removeClass('hidden')
      this.$refs.formData.submit()
    }
  }
}
</script>

