<template>
  <div class="wrapper-page page-sales">
    <div class="wrapper-container container-insurance-information mb-4">
      <div class="wrapper-scroll">
        <div class="row">
          <div class="col-sm-12 commentary-scroll">
            <form action="" method="POST">
              <div class="card-body">
                <input type="hidden" name="_token" :value="csrfToken">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div v-for="item, index in insurance_contract_info" class="wrapper-item">
                    <div class="flow-root">
                      <button v-if="(insurance_contract_info.length > 1)" @click.prevent="deleteItem(index)"
                        class="btn-close-item"><span class="">x</span></button>
                    </div>
                    <div class="mb-4">
                      <label for="exampleFormControlInput1">123<span class="required-label">*</span></label>
                      <Field v-model="item.bx01" rules="required" :name="'name1[ ' + index['1'] + index['2'] + ' ]'"
                        :disabled="isReadOnly" type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="123" />
                      <ErrorMessage class="error" :name="'name1[' + index[index] + ']'" />
                    </div>
                    <div class="mb-4">
                      <label for="exampleFormControlInput2">321<span class="required-label">*</span></label>
                      <Field v-model="item.vx01" rules="required" :name="'name2[' + index[index] + ']'"
                        :disabled="isReadOnly" type="text" class="form-control" id="exampleFormControlInput2"
                        placeholder="321" />
                      <ErrorMessage class="error" :name="'name3[' + index + ']'" />
                    </div>

                  </div>
                  <div class="text-center">
                    <button @click.prevent="addForm()" type="button"
                      class="btn btn-radius-auto btn-submit">Thêm</button>
                  </div>
                </div>
              </div>
              <button class="btn">submit</button>
            </form>

          </div>
        </div>
      </div>
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
} from "vee-validate";
import { localize } from "@vee-validate/i18n";
import * as rules from "@vee-validate/rules";
import Toggle from "@vueform/toggle";
import "@vueform/toggle/themes/default.css";

export default {
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != "default") {
        defineRule(rule, rules[rule]);
      }
    });
  },
  data() {
    return {
      csrfToken: Laravel.csrfToken,
      isReadOnly: false,
      insurance_contract_info: [
        {
          name1: "",
          name2: "",

        }
      ],
      numberForm: 1
    };
  },
  watch: {
    $data: {
      handler: function (val, oldVal) {
        this.$emit('updateData', val);
      },
      deep: true,
    },
  },
  mounted() {
    this.numberForm = this.insurance_contract_info.length;
  },
  props: ["isDetail"],
  components: {
    VeeForm,
    Field,
    ErrorMessage,
    Toggle
  },
  methods: {
    addForm() {
      this.insurance_contract_info.push({
        bx01: "",
        vx01: "",
        type: "X3612"
      });
      this.numberForm += 1;

    },
    deleteItem(index) {
      this.insurance_contract_info.splice(index, 1);
    }
  }
};
</script>
