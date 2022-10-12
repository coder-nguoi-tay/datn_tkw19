<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlBack
      },
      page_name: 'プロフィール設定'
    }"
  ></UserHeader>
  <div class="event-create">
    <div class="container event-create__container profile-container">
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
              <div class="form-group">
                <label class="form-label" require>アカウント名</label>
                <p class="note">
                  ユーザー間で同じアカウント名を持つことはできない一意の情報になります。プロフィール画面上部や、情報を共有する際のURLの一部としても使用されます。登録直後はランダムな文字列が使用されます。
                </p>
                <Field
                  name="show_name"
                  type="text"
                  v-model="model.show_name"
                  rules="required|max:255"
                  class="form-control"
                  placeholder=""
                />
                <ErrorMessage class="error-msg" name="show_name" />
              </div>
              <div class="form-group">
                <label class="form-label" require>イベントの詳細</label>
                <p class="note">
                  他のユーザーへ表示される表示名になります。他のユーザーと同じ表示名を設定することができます。
                </p>
                <Field
                  name="name"
                  type="text"
                  v-model="model.name"
                  rules="required|max:40"
                  class="form-control"
                  placeholder=""
                />
                <ErrorMessage class="error-msg" name="name" />
              </div>
              <div class="form-group">
                <label class="form-label" optional>自己紹介文</label>
                <Field
                  as="textarea"
                  name="self_introduction"
                  rules="max:1000"
                  v-model="model.self_introduction"
                  class="form-control"
                  rows="11"
                />
                <ErrorMessage class="error-msg" name="self_introduction" />
              </div>
              <div class="form-group">
                <label class="form-label" optional>活動地域</label>
                <div class="custom-input">
                  <Field
                    as="select"
                    name="prefecture_id"
                    class="form-control"
                    :class="{ 'select-placeholder': !model.prefecture_id }"
                    v-model="model.prefecture_id"
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
                </div>
                <div class="custom-input mt-4px">
                  <Field
                    name="address_building"
                    type="text"
                    v-model="model.address_building"
                    rules="max:255"
                    class="form-control"
                    placeholder=""
                  />
                  <ErrorMessage class="error-msg" name="address_building" />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">ユーザー情報表示</label>
                <p class="note">
                  プロフィール画面へ、ユーザー情報の性別や活動形態が表示されるようになります。非表示にするとプロフィールで入力した活動地域がも非表示になります。
                </p>
                <div class="custom-input display-flag">
                  <label class="form-label">表示する</label>
                  <Toggle
                    name="user_infor_display_flag"
                    v-model="model.user_infor_display_flag"
                    class="toggle-flag"
                    on-label=""
                    off-label=""
                  />
                </div>
              </div>
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
            required: 'アカウント名を入力してください。',
            max: '255文字以内で入力してください。'
          },
          name: {
            required: 'イベントの詳細を入力してください。',
            max: '255文字以内で入力してください。'
          },
          self_introduction: {
            max: '1000文字以内で入力してください。'
          },
          address_building: {
            max: '255文字以内で入力してください。'
          },
          prefecture_id: {
            required: '都道府県を入力してください。'
          },
          city_id: {
            required: '市を入力してください。'
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

