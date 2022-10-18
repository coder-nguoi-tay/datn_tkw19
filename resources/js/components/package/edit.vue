<template>
  <div class="container container_package">
    <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
      <form method="POST" @submit="handleSubmit($event, onSubmit)" ref="formData" :action="data.urlUpdate">
        <input type="hidden" :value="csrfToken" name="_token" />
        <Field type="hidden" value="PUT" name="_method" />
        <div class="col">
          <label class="form-label">Tên gói cước</label>
          <Field type="text" name="name" v-model="model.name" rules="required|max:255" class="form-control" />
          <ErrorMessage class="error" name="name" />
        </div>
        <div class="col">
          <label class="form-label">Giá gói cước</label>
          <Field type="text" name="price" rules="required|integer" v-model="model.price" class="form-control" />
          <ErrorMessage class="error" name="price" />
        </div>
        <div class="col">
          <label class="form-label">Mô tả gói cước</label>
          <Field type="text" name="describe" rules="required|max:255" v-model="model.describe" class="form-control" />
          <ErrorMessage class="error" name="describe" />
        </div>
        <div class="col">
          <label class="form-label">Thời gian gói cước</label>
          <Field name="time_offer_id" as="select" v-model="model.time_offer_id" rules="required" class="form-select">
            <option value="" disabled selected>-- Thời gian gói cước--</option>
            <option v-for="item in data.timeoff" :key="item.id" :value="item.id">
              {{ item.label }}
            </option>
          </Field>
          <ErrorMessage class="error" name="time_offer_id" />
        </div>
        <div class="text-align">
          <a :href="data.urlBack" class="btn btn-danger" style="margin-top: 15px; margin-right: 10px ;">Quay lại</a>
          <button class="btn btn-primary">Thực hiện</button>
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
  configure,
} from "vee-validate";
import { localize } from "@vee-validate/i18n";
import * as rules from "@vee-validate/rules";
export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != "default") {
        defineRule(rule, rules[rule]);
      }
    });
  },
  components: {
    VeeForm,
    Field,
    ErrorMessage,
  },
  props: ["data"],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.package,
    };
  },
  created() {
    let messError = {
      en: {
        fields: {
          name: {
            required: "Tên  không được để trống",
            max: "Tên không được vượt qua 255 ký tự",
          },
          price: {
            required: "Giá tiền không được để trống",
            integer: "Giá tiền phải là số",
          },
          describe: {
            required: "Mô tả không được để trống",
            max: "Mô tả không được quá 255 ký tự",
          },
          time_offer_id: {
            required: "Thời gian không được để trống",
          },
        },
      },
    };
    configure({
      generateMessage: localize(messError),
    });
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0];
      this.$el.querySelector("input[name=" + firstInputError + "]").focus();
      $("html, body").animate(
        {
          scrollTop:
            $("input[name=" + firstInputError + "]").offset().top - 150,
        },
        500
      );
    },
    onSubmit() {
      this.$refs.formData.submit();
    },
  },
};
</script>
<style>
.container_package {
  margin: 0 auto;
  width: 50%;
  margin-top: 10px;
  height: auto;
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

.text-align {
  text-align: center;
}

</style>