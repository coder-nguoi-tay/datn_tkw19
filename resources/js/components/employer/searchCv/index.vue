<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      :action="data.urlGet + '234234'"
      method="POST"
      ref="formData"
      @submit="handleSubmit($event, onSubmit($event))"
      id="submit-form"
    >
      <input type="hidden" name="_token" :value="csrfToken" id="" />
      <div class="row">
        <div class="d-flex">
          <div class="col">
            <div class="p-1">
              <input
                type="text"
                class="form-control"
                name="key"
                v-model="model.key"
                id=""
                placeholder="Tìm kiếm...."
              />
            </div>
          </div>
          <div class="col">
            <div class="p-1">
              <select
                class="form-select"
                name="lever"
                aria-label="Default select example"
                v-model="model.lever"
              >
                <option value disabled selected>Chọn Trình Độ</option>
                <option
                  v-for="item in data.lever"
                  :key="item.id"
                  :value="item.id"
                >
                  {{ item.label }}
                </option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="p-1">
              <select
                class="form-select"
                name="experience"
                aria-label="Default select example"
                v-model="model.experience"
              >
                <option value disabled selected>Chọn Kinh Nghiệm</option>
                <option
                  v-for="item in data.experience"
                  :key="item.id"
                  :value="item.id"
                >
                  {{ item.label }}
                </option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="p-1">
              <select
                class="form-select"
                name="wage"
                aria-label="Default select example"
                v-model="model.wage"
              >
                <option value disabled selected>Chọn Mức Lương</option>
                <option
                  v-for="item in data.wage"
                  :key="item.id"
                  :value="item.id"
                >
                  {{ item.label }}
                </option>
              </select>
            </div>
          </div>
          <!-- <div class="col">
            <div class="p-1">
              <select
                class="form-select"
                name="profession"
                aria-label="Default select example"
              >
                <option selected disabled>Vị trí ứng tuyển</option>
              </select>
            </div>
          </div> -->

          <div class="col">
            <div class="p-1">
              <select
                class="form-select select2-location"
                name="location"
                aria-label="Default select example"
                v-model="model.location"
              >
                <option value disabled selected>Chọn Địa Chỉ</option>
                <option
                  v-for="item in data.location"
                  :key="item.id"
                  :value="item.id"
                >
                  {{ item.label }}
                </option>
              </select>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <!-- <div class="col-2">
            <div class="p-1">
              <select
                class="form-select"
                name="workingform"
                aria-label="Default select example"
              >
                <option selected disabled>Cấp Bậc</option>
              </select>
            </div>
          </div> -->
          <div class="col-2">
            <div class="p-1">
              <select
                class="form-select"
                name="timework"
                aria-label="Default select example"
                v-model="model.timework"
              >
                <option value disabled selected>Chọn Mức Lương</option>
                <option
                  v-for="item in data.timework"
                  :key="item.id"
                  :value="item.id"
                >
                  {{ item.label }}
                </option>
              </select>
            </div>
          </div>
          <div class="col-7">
            <div class="p-1">
              <div class="form-group">
                <Field name="skill_id" v-model="value">
                  <Multiselect
                    placeholder="Chọn Kỹ năng"
                    v-model="value"
                    mode="tags"
                    :searchable="true"
                    :options="options"
                    label="label"
                    track-by="label"
                    :object="false"
                  />
                </Field>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="nav-link py-0 btn-next-step">Tìm Kiếm</button>
    </form>
  </VeeForm>
</template>

<script>
import { Form as VeeForm, Field } from 'vee-validate'
import Multiselect from '@vueform/multiselect'
export default {
  props: ['data'],
  components: {
    Multiselect,
    VeeForm,
    Field
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      filePreview: '',
      loading: false,
      value: [
        {
          id: 1,
          label: 'PHP'
        }
      ],
      options: []
    }
  },
  created() {
    console.log(this.value)
    // this.data.skill.getskill.map((e) => {
    //   this.value.push({
    //     value: e.id,
    //     label: e.name
    //   })
    // })
    this.data.skill.map((e) => {
      this.options.push({
        value: e.id,
        label: e.label
      })
    })
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {},
    onSubmit(e) {
      e.preventDefault()
      e.target.submit()
    }
  }
}
</script>

<style>
</style>