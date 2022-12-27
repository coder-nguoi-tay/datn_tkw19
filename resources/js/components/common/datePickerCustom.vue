<template>
  <datepicker
    autoApply
    keepActionRow
    :closeOnAutoApply="false"
    v-model="date"
    :monthChangeOnScroll="false"
    locale="vi"
    :name="NameDate"
    selectText="chọn"
    cancelText="đóng lại"
    format="yyyy-MM-dd"
  />
</template>

<script>
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'
export default {
  props: {
    NameDate: {
      type: String
    }
  },
  data() {
    return {
      date: new Date()
    }
  },
  components: {
    Datepicker
  }
}
</script>
