<template>
  <form id="search-form" :action="data.urlSeach" method="submit" role="search">
    <div class="row gap_row_form justify-content-center form-find">
      <div class="col-lg-3 align-self-center border p-2 custom-input">
        <fieldset>
          <input
            type="text"
            name="key"
            style="border: none"
            v-model="model.key"
            placeholder="Nhập từ khóa "
          />
        </fieldset>
      </div>
      <div class="col-lg-2 align-self-center border p-2 custom-input">
        <fieldset>
          <Field name="lever" as="select" v-model="model.lever">
            <option value selected>Kinh Nghiệm</option>
            <option v-for="item in data.lever" :key="item.id" :value="item.id">
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>
      <div class="col-lg-2 align-self-center border p-2 custom-input">
        <fieldset>
          <Field name="time_work" as="select" v-model="model.time_work">
            <option value selected>Chọn Thời Gian</option>
            <option
              v-for="item in data.timework"
              :key="item.id"
              :value="item.id"
            >
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>
      <div class="col-lg-2 align-self-center border p-2 custom-input">
        <fieldset>
          <Field name="profession" as="select" v-model="model.profession">
            <option value selected>Chọn Ngành Nghề</option>
            <option
              v-for="item in data.profession"
              :key="item.id"
              :value="item.id"
            >
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>

      <div class="col-lg-2 align-self-center border p-2 custom-input">
        <fieldset>
          <Field name="experience" as="select" v-model="model.experience">
            <option value selected>Chọn Kinh Nghiệm</option>
            <option
              v-for="item in data.experience"
              :key="item.id"
              :value="item.id"
            >
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>
      <div class="col-lg-3 align-self-center border p-2 custom-input mt-2">
        <fieldset>
          <Field name="majors" as="select" v-model="model.majors">
            <option value selected>Chọn lĩnh vực</option>
            <option v-for="item in data.majors" :key="item.id" :value="item.id">
              {{ item.name }}
            </option>
          </Field>
        </fieldset>
      </div>

      <div class="col-lg-3 align-self-center border p-2 custom-input  mt-2">
        <fieldset>
          <Field name="wage" as="select" v-model="model.wage">
            <option value selected>Chọn Mức Lương</option>
            <option v-for="item in data.wage" :key="item.id" :value="item.id">
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>
      <div class="col-lg-3 align-self-center border p-2 custom-input  mt-2">
        <fieldset>
          <Field name="location" as="select" v-model="model.location">
            <option value selected>Chọn địa chỉ</option>
            <option
              v-for="item in data.location"
              :key="item.id"
              :value="item.id"
            >
              {{ item.label }}
            </option>
          </Field>
        </fieldset>
      </div>
      <div
        class="col-lg-3 align-self-center border p-2"
        style="border: none !important"
      >
        <fieldset class="custom-multiselect">
          <Multiselect
            placeholder="Chọn Kỹ năng"
            mode="tags"
            v-model="value"
            :searchable="true"
            :options="options"
            label="label"
            track-by="label"
            :infinite="true"
            :object="true"
            :filterResults="true"
            :clearOnSearch="true"
            :clearOnSelect="true"
            @input="updateSelected"
          />
        </fieldset>
        <input type="hidden" name="skill[]" v-model="skill" />
      </div>
      <div class="col-lg-2 align-self-center p-2">
        <fieldset>
          <button class="btn btn-default btn-shadow ml-30 hover-up">
            <i class="fa fa-search"></i> Tìm Kiếm
          </button>
        </fieldset>
      </div>
      <!-- </div> -->
    </div>
  </form>
</template>
<script>
import { Field } from 'vee-validate'
import Multiselect from '@vueform/multiselect'
export default {
  components: {
    Multiselect,
    Field
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.request,
      value: [],
      options: [],
      skill: []
    }
  },
  created() {
    let array = []
    this.data.skill.map((e) => {
      this.options.push({
        value: e.id,
        label: e.label
      })
    })
    if (this.data.skillSearch) {
      if (this.data.skillSearch[0] != null) {
        this.data.skillSearch.map((e) => {
          this.value.push({
            value: e.id,
            label: e.name
          })
          array.push(e.id)
          this.skill = array
        })
      }
    }
  },
  methods: {
    updateSelected(e) {
      let array = []
      e.map((x) => {
        array.push(x.value)
      })
      array = [...new Set(array)]
      this.skill = array
    }
  }
}
</script>
<style src="@vueform/multiselect/themes/default.css">
</style>
<style lang="scss">
.custom-input {
  border-radius: 5px !important;
}

.gap_row_form {
  row-gap: 2px !important;
  column-gap: 6px !important;
}

.form-find {
  background: #ffffff;
  box-shadow: var(--jobbox-box-shadow-1);
  border-radius: 8px;

  width: 100%;
  margin-left: 3px;
  padding: 10px 10px;
}
</style>