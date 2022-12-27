<template>
  <form :action="url" class="d-flex" method="get">
    <picker-new-employer
      :NameDate="'start_date'"
      v-model="start_date"
      class="date-time custom-date"
    ></picker-new-employer>
    <picker-new-employer
      :NameDate="'end_date'"
      v-model="end_date"
      class="date-time custom-date"
    ></picker-new-employer>
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
import { CDropdownHeader } from '@coreui/vue'
export default {
  props: ['url', 'dataQuery'],
  components: {
    CDropdownHeader
  },
  data() {
    return {
      start_date: this.dataQuery.start_date,
      end_date: this.dataQuery.end_date
    }
  }
}
</script>

<style>
</style>