<template>
  <form :action="url" class="d-flex" method="get">
    <input
      name="free_word"
      class="custom-input"
      placeholder="Tìm Kiếm...."
      :value="dataQuery.free_word"
      autocomplete="off"
      id="free_word"
    />
    <button class="nav-link py-0 btn-next-step" href="">
      <i class="fa fa-search"></i>
    </button>
  </form>
</template>

<script>
export default {
  props: ['url', 'dataQuery'],
  created() {
    console.log(this)
  },
  data() {
    return {}
  }
}
</script>

<style>
.custom-input {
  border-radius: 5px !important;
}
</style>