<template>
  <form :action="url" class="d-flex" method="get">
    <picker-new-employer
      :NameDate="'start_date'"
      v-model="start_date"
      class="date-time custom-date mr-1"
    ></picker-new-employer>
    <picker-new-employer
      :NameDate="'end_date'"
      v-model="end_date"
      class="date-time custom-date mr-1"
    ></picker-new-employer>
    <input
      name="free_word"
      class="custom-input mr-1"
      placeholder="Tìm Kiếm...."
      :value="dataQuery.free_word"
      autocomplete="off"
      id="free_word"
    />
    <select
      name="expired"
      v-model="dataQuery.expired"
      class="select-custom border mr-1"
      v-if="checkStep == 1"
    >
      <option value="0">tất cả</option>
      <option value="1">còn hạn</option>
      <option value="2">hết hạn</option>
    </select>
    <button
      class="btn btn-info font-weight-medium color-text-2 mr-1 text-white"
      href=""
    >
      <i class="fa fa-search"></i>
    </button>
  </form>
</template>

<script>
export default {
  props: ['url', 'dataQuery', 'data'],
  created() {
    console.log(this.dataQuery)
  },
  data() {
    return {
      start_date: this.dataQuery.start_date,
      end_date: this.dataQuery.end_date,
      checkStep: this.data
    }
  }
}
</script>

<style>
.select-custom {
  margin-left: 5px;
  border-radius: 5px;
  width: 80px !important;
}
.custom-input {
  border: 1px solid #ccc;
  border-radius: 2px !important;
}
</style>