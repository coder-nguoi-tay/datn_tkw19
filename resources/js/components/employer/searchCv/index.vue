<template>
  <form method="POST" ref="formData" @submit="onSubmit">
    <input type="hidden" name="_token" :value="csrfToken" id="" />
    <div class="row">
      <div class="d-flex">
        <div class="col">
          <div class="p-1">
            <input
              type="text"
              class="form-control"
              name="key"
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
            >
              <option selected disabled>Trình độ</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="p-1">
            <select
              class="form-select"
              name="experience"
              aria-label="Default select example"
            >
              <option selected disabled>Kinh nghiệm</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="p-1">
            <select
              class="form-select"
              name="majors"
              aria-label="Default select example"
            >
              <option selected disabled>Mức lương</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="p-1">
            <select
              class="form-select"
              name="profession"
              aria-label="Default select example"
            >
              <option selected disabled>Vị trí ứng tuyển</option>
            </select>
          </div>
        </div>

        <div class="col">
          <div class="p-1">
            <select
              class="form-select select2-location"
              name="location"
              aria-label="Default select example"
            >
              <option selected disabled>Địa chỉ</option>
            </select>
          </div>
        </div>
      </div>

      <div class="d-flex">
        <div class="col-2">
          <div class="p-1">
            <select
              class="form-select"
              name="workingform"
              aria-label="Default select example"
            >
              <option selected disabled>Cấp Bậc</option>
            </select>
          </div>
        </div>
        <div class="col-2">
          <div class="p-1">
            <select
              class="form-select"
              name="timework"
              aria-label="Default select example"
            >
              <option selected disabled>Thời gian làm việc</option>
            </select>
          </div>
        </div>
        <div class="col-7">
          <div class="p-1">
            <div class="form-group">
              <Multiselect
                placeholder="Chọn Kỹ năng"
                v-model="value"
                mode="tags"
                :searchable="true"
                :options="options"
                label="label"
                track-by="label"
                :infinite="true"
                :object="true"
              />
            </div>
            <input type="hidden" v-model="value" name="skill[]" />
          </div>
        </div>
      </div>
    </div>
    <button class="nav-link py-0 btn-next-step">Tìm Kiếm</button>
  </form>
</template>

<script>
import Multiselect from '@vueform/multiselect'
export default {
  props: ['data'],
  components: {
    Multiselect
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {},
      filePreview: '',
      loading: false,
      value: [],
      options: [],
      checkImage: '',
      errmsgCheckImage: '',
      Media: '',
      deleteImage: ''
    }
  },
  created() {
    console.log()
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
    onSubmit() {
      console.log(this.value)
    }
  }
}
</script>

<style>
</style>