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
                :action="data.urlUpdate"
                ref="formData"
                enctype="multipart/form-data"
              >
                <Field type="hidden" :value="csrfToken" name="_token" />
                <Field type="hidden" value="PUT" name="_method" />
                <CCardHeader>
                  <CFormLabel>{{ data.title }}</CFormLabel>
                </CCardHeader>
                <CCardBody>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >タイトル</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        name="title"
                        v-model="model.title"
                        rules="required|max:255"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="title" />
                    </div>
                  </CRow>
                  <!-- publish start time -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >公開を開始</CFormLabel
                    >
                    <div class="col-sm-3">
                      <Field
                        as="div"
                        name="publish_start_datetime"
                        v-model="model.publish_start_datetime"
                        rules="required"
                      >
                        <datepicker
                          autoApply
                          keepActionRow
                          :closeOnAutoApply="false"
                          v-model="model.publish_start_datetime"
                          :monthChangeOnScroll="false"
                          :maxDate="
                            model.publish_end_datetime
                              ? new Date(model.publish_end_datetime)
                              : null
                          "
                          :maxTime="setMaxTime()"
                          locale="ja"
                          name="publish_start_datetime"
                          selectText="選択"
                          cancelText="閉じる"
                          class="width-200"
                          format="yyyy/MM/dd HH:mm"
                        />
                      </Field>
                      <ErrorMessage
                        class="error"
                        name="publish_start_datetime"
                      />
                    </div>
                  </CRow>
                  <!-- publish end time -->
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >公開終了</CFormLabel
                    >
                    <div class="col-sm-3">
                      <Field
                        as="div"
                        name="publish_end_datetime"
                        v-model="model.publish_end_datetime"
                        rules="required"
                      >
                        <datepicker
                          autoApply
                          keepActionRow
                          :closeOnAutoApply="false"
                          v-model="model.publish_end_datetime"
                          :monthChangeOnScroll="false"
                          :minTime="checkMinTime"
                          :minDate="
                            model.publish_start_datetime
                              ? new Date(model.publish_start_datetime)
                              : null
                          "
                          locale="ja"
                          name="publish_end_datetime"
                          selectText="選択"
                          cancelText="閉じる"
                          class="width-200"
                          format="yyyy/MM/dd HH:mm"
                        />
                      </Field>
                      <ErrorMessage class="error" name="publish_end_datetime" />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >公開設定</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Toggle
                        name="publish_status"
                        v-model="model.publish_status"
                        on-label="公開"
                        off-label="非公開"
                      />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input" require
                      >本文</CFormLabel
                    >
                    <div class="col-sm-6">
                      <Field
                        as="textarea"
                        name="content"
                        v-model="model.content"
                        rules="required|max:20000"
                        rows="5"
                        class="form-control"
                      />
                      <ErrorMessage class="error" name="content" />
                    </div>
                  </CRow>
                  <CRow class="mb-2">
                    <CFormLabel class="col-sm-3 lbl-input"
                      >ファイルを添付</CFormLabel
                    >
                    <div class="col-sm-6">
                      <UploadFile
                        name="news_file"
                        :initFile="data.news.files"
                      ></UploadFile>
                      <ErrorMessage class="error" name="news_file" />
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
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

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
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
import UploadFile from '../../common/UploadFile.vue'

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
    Datepicker,
    Toggle,
    UploadFile
  },
  computed: {
    checkMinTime() {
      if (
        this.model.publish_start_datetime &&
        this.model.publish_end_datetime
      ) {
        let dateStart = new Date(this.model.publish_start_datetime)
        let dateEnd = new Date(this.model.publish_end_datetime)
        if (dateStart.getDate() === dateEnd.getDate()) {
          if (dateEnd.getTime() < dateStart.getTime()) {
            this.model.publish_end_datetime = dateStart
            return {
              hours: dateStart.getHours(),
              minutes: dateStart.getMinutes()
            }
          }
          return {
            hours: dateStart.getHours(),
            minutes: dateStart.getMinutes()
          }
        }
        return null
      }
      return null
    }
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      flagShowLoader: false,
      model: this.data.news
    }
  },
  mounted() {
    this.model = this.data.news
  },
  created() {
    let messError = {
      en: {
        fields: {
          title: {
            required: 'タイトルを入力してください。',
            max: 'タイトルは255文字を超えてはなりません。'
          },
          publish_start_datetime: {
            required: '日付を入力してください。'
          },
          publish_end_datetime: {
            required: '日付を入力してください。'
          },
          content: {
            required: '本文を入力してください。',
            max: '本文は20000文字を超えてはなりません。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    setMaxTime() {
      if (this.model.publish_end_datetime) {
        let dateEnd = new Date(this.model.publish_end_datetime)
        return {
          hours: dateEnd.getHours(),
          minutes: dateEnd.getMinutes()
        }
      }
      return null
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
      this.flagShowLoader = true
      this.$refs.formData.submit()
    }
  }
}
</script>
