<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlBack
      },
      page_name: '通知受信設定'
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
                <label class="form-label noti-lbl" optional
                  >通知受信用メールアドレス</label
                >
                <Field
                  name="notice_email"
                  type="text"
                  v-model="model.notice_email"
                  rules="email"
                  class="form-control"
                  placeholder=""
                />
                <ErrorMessage class="error-msg" name="notice_email" />
              </div>
              <div class="form-group">
                <label class="form-label noti-lbl">お得情報通知</label>
                <div class="custom-input display-flag">
                  <label class="form-label noti-lbl-child">受け取る</label>
                  <Toggle
                    name="deals_notification_flag"
                    v-model="model.deals_notification_flag"
                    class="toggle-flag"
                    on-label=""
                    off-label=""
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label noti-lbl">公開チャット通知</label>
                <div class="custom-input display-flag">
                  <label class="form-label noti-lbl-child">受け取る</label>
                  <Toggle
                    name="publish_chat_notification_flag"
                    v-model="model.publish_chat_notification_flag"
                    class="toggle-flag"
                    on-label=""
                    off-label=""
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label noti-lbl"
                  >参加者専用チャット通知</label
                >
                <div class="custom-input display-flag">
                  <label class="form-label noti-lbl-child">受け取る</label>
                  <Toggle
                    name="participant_chat_notification_flag"
                    v-model="model.participant_chat_notification_flag"
                    class="toggle-flag"
                    on-label=""
                    off-label=""
                  />
                </div>
              </div>
              <div class="form-group">
                <label class="form-label noti-lbl"
                  >参加イベントのアクション通知</label
                >
                <div class="custom-input display-flag">
                  <label class="form-label noti-lbl-child">受け取る</label>
                  <Toggle
                    name="event_join_notification_flag"
                    v-model="model.event_join_notification_flag"
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
      model: this.data.userNotification ?? {
        deals_notification_flag: 1,
        publish_chat_notification_flag: 1,
        participant_chat_notification_flag: 1,
        event_join_notification_flag: 1
      },
      csrfToken: Laravel.csrfToken
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          notice_email: {
            email: 'メールアドレスを正確に入力してください'
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

