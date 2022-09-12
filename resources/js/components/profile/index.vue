<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      method="POST"
      :action="data.urlUpdate"
      class="form-step"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      enctype="multipart/form-data"
    >
      <Field type="hidden" :value="csrfToken" name="_token" />
      <Field type="hidden" value="PUT" name="_method" />
      <div class="profile_container">
        <div class="profile">
          <div class="form-group">
            <label class="input-label">アカウント名</label>
            <span class="category">必須</span>
            <Field
              name="show_name"
              type="text"
              v-model="dataUser.show_name"
              rules="required|max:255"
              class="form-control"
              placeholder=""
            />
            <ErrorMessage class="error-msg" name="show_name" />
          </div>
          <div class="form-group">
            <label class="input-label">性別</label>
            <span class="category">必須</span>
            <Field
              v-model="dataUser.gender"
              as="select"
              name="gender"
              class="form-control"
              readonly
            >
              <option
                v-for="(item, index) in data.genderOptions.filter(
                  (x) => x.id == dataUser.gender
                )"
                :key="item.id"
                :value="item.id"
                :id="'gender' + index"
              >
                {{ item.label }}
              </option>
            </Field>
            <ErrorMessage class="error-msg" name="gender" />
          </div>
          <div class="form-group">
            <label class="input-label">生年月日</label>
            <span class="category">必須</span>
            <Field
              v-model="dataUser.birthday"
              name="birthday"
              class="form-control"
              rules="required"
              type="text"
              readonly
            />
            <!--              <Field-->
            <!--                  as="div"-->
            <!--                  name="birthday"-->
            <!--                  v-model="dataUser.birthday"-->
            <!--                  rules="required"-->
            <!--              >-->
            <!--                  <datepicker-->
            <!--                      autoApply-->
            <!--                      keepActionRow-->
            <!--                      :closeOnAutoApply="false"-->
            <!--                      v-model="dataUser.birthday"-->
            <!--                      :monthChangeOnScroll="false"-->
            <!--                      :maxDate="new Date()"-->
            <!--                      locale="ja"-->
            <!--                      name="birthday"-->
            <!--                      selectText="選択"-->
            <!--                      cancelText="閉じる"-->
            <!--                      format="yyyy/MM/dd"-->
            <!--                      placeholder="1990 / 01 / 01"-->
            <!--                      :enableTimePicker="false"-->
            <!--                      readonly-->
            <!--                  />-->
            <!--              </Field>-->
            <ErrorMessage class="error-msg" name="birthday" />
          </div>
          <div class="form-group">
            <label class="input-label">活動地域</label>
            <span class="category">必須</span>
            <Field
              as="select"
              name="prefecture_id"
              v-model="dataUser.prefecture_id"
              rules="required"
              class="form-select"
              @change="this.model.city_id = ''"
            >
              <option value="" disabled selected></option>
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
              v-model="dataUser.city_id"
              rules="required"
              class="form-select"
            >
              <option value="" disabled selected>
                -- 市区を選択してください --
              </option>
              <option
                v-for="item in data.cityOptions.filter(
                  (x) => x.prefecture_id == dataUser.prefecture_id
                )"
                :key="item.id"
                :value="item.id"
              >
                {{ item.label }}
              </option>
            </Field>
            <ErrorMessage class="error-msg" name="city_id" />
            <Field
              name="address_building"
              type="text"
              v-model="dataUser.address_building"
              class="form-control"
              placeholder="丁番地 ビル・マンション名称（任意）"
            />
            <ErrorMessage class="error-msg" name="address_building" />
          </div>
          <div class="form-group">
            <label class="input-label">職業</label>
            <span class="category-b">任意</span>
            <Field
              as="select"
              name="job_type"
              type="select"
              rules="required"
              class="form-select"
            >
              <option value="" disabled selected></option>
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
        </div>
        <div class="submit__container">
          <button type="submit" class="btn-submit">保存する</button>
          <button type="submit" class="btn-submit-primary">
            <a :href="data.urlBack">戻る</a>
          </button>
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
import Datepicker from '@vuepic/vue-datepicker'
import $ from 'jquery'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
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
    Datepicker
  },
  props: ['data', 'dataModel'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.dataModel,
      dataUser: this.data.user,
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
          birthday: {
            required: '生年月日を入力してください。'
          },
          prefecture_id: {
            required: '都道府県を入力してください。'
          },
          city_id: {
            required: '市を入力してください。'
          },
          job_type: {
            required: '所在地を入力してください。'
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
      this.$el.querySelector('[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('[name=' + firstInputError + ']').offset().top - 150
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

