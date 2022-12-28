<template>
  <div class="container container_package content-wrapper">
    <VeeForm
      as="div"
      v-slot="{ handleSubmit }"
      @invalid-submit="onInvalidSubmit"
    >
      <form
        method="POST"
        @submit="handleSubmit($event, onSubmit)"
        ref="formData"
        :action="data.urlStore"
        enctype="multipart/form-data"
      >
        <input type="hidden" :value="csrfToken" name="_token" />
        <div class="col">
          <label class="form-label">Tiêu đề</label>
          <span class="required-lable">*</span>
          <Field
            type="text"
            name="title"
            rules="required|max:255"
            v-model="model.title"
            class="form-control"
          />
          <ErrorMessage class="error" name="title" />
        </div>
        <div class="col">
          <label class="form-label">Ảnh tin tức</label>
          <span class="required-lable">*</span>
          <Field
            type="file"
            name="new_image"
            rules="required|mimes:jpeg,jpg,png,gif|max:100000"
            v-model="model.new_image"
            class="form-control"
          />
          <ErrorMessage class="error" name="new_image" />
        </div>
        <div class="col">
          <label class="form-label">Mô tả</label>
          <span class="required-lable">*</span>
          <Field
            type="text"
            name="describe"
            rules="required|max:255"
            v-model="model.describe"
            class="form-control"
          />
          <ErrorMessage class="error" name="describe" />
        </div>
        <div class="mb-4">
          <label class="form-label" for="profession_id"
            >Chuyên ngành bài đăng
            <span class="required-lable">*</span>
          </label>
          <Field
            name="majors"
            as="select"
            v-model="model.profession_id"
            class="form-control"
            id="profession_id"
            rules="required"
          >
            <option value="" disabled selected>
              -- Chọn ngành --
            </option>
            <option
              v-for="item in this.data.majors"
              :key="item.id"
              :value="item.name"
            >
              {{ item.name }}
            </option>
          </Field>
          <ErrorMessage class="error" name="profession_id" />
        </div>
        <div class="text-center text-1">
          <a
            :href="data.urlBack"
            class="btn btn-danger"
            style="margin-right: 10px"
          >
            Cancel
          </a>
          <button class="btn btn-info">Thực hiện</button>
        </div>
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
  props: ['data', 'arr'],
  data: function() {
    return {
      csrfToken: Laravel.csrfToken,
      majors: this.data.majors,
      model: {}
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          title: {
            required: 'Tiêu đề  không được để trống',
            max: 'Tiêu đê không được vượt qua 255 ký tự'
          },
          new_image: {
            required: 'Ảnh không được để trống',
            mimes: 'Ảnh không đúng định dạng',
            max: 'Ảnh vượt mức cho phép'
          },
          describe: {
            required: 'Mô tả không được để trống',
            max: 'Mô tả không được quá 255 ký tự'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  mounted() {
    console.log(this.data.majors)
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
<style scoped>
.container_package {
  margin: 0 auto;
  width: 50%;
  margin-top: 10px;
}

.text-title {
  font-size: 30px;
  font-weight: 700;
}

.form-label {
  float: left;
  margin-top: 10px;
  font-size: 20px;
}

.btn-primary {
  margin-top: 50px;
  margin-bottom: 50px;
}

.text-1 {
  margin-top: 30px !important;
}
</style>
