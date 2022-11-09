<template>
  <div class="container">
    <VeeForm
      as="div"
      v-slot="{ handleSubmit }"
      @invalid-submit="onInvalidSubmit"
    >
      <form
        method="post"
        class="text-center"
        id="formUploadCv"
        enctype="multipart/form-data"
        @submit="handleSubmit($event, onSubmit)"
        ref="formData"
        :action="data.urlStore"
      >
        <Field type="hidden" :value="csrfToken" name="_token" />
        <div class="box-upload text-center">
          <p class="icon"><i class="fas fa-cloud-upload-alt"></i></p>
          <div class="not-cv">
            <p>Kéo CV của bạn vào đây hoặc bấm để chọn file CV của bạn</p>
          </div>
          <Field
            type="file"
            name="file_cv"
            class="file-upload-cv"
            id="file-upload-cv"
            rules="required|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx|max:2048"
          />
          <ErrorMessage class="error" name="file_cv" />
        </div>
        <div class="file-format">
          <div>Files hỗ trợ: PDF, DOC, DOCX</div>
          <div>File tải lên không quá: 5 MB</div>
        </div>
        <button class="btn btn-info btn-create-cv" style="margin-top: 10px">
          Tạo
        </button>
      </form>
    </VeeForm>
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
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
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
    ErrorMessage
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      job: []
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          file_cv: {
            required: 'Ảnh không được để trống',
            mimes: 'Ảnh chỉ hỗ trợ dạng jpeg,png,jpg,gif,svg,pdf,doc,docx',
            max: 'kích thước ảnh quá lớn'
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
</style>