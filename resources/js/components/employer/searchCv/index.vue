<template>
  <form action="" method="GET">
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
                mode="tags"
                :searchable="true"
                label="label"
                track-by="label"
                :infinite="true"
                :object="true"
                style="width: 760px"
              />
            </div>
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
  components: {
    Multiselect
  }
}
</script>

<style>
</style>