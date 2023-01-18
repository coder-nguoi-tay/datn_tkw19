<template>
  <a
    class="btn gray custom-css-delete-job ft-medium apply-btn fs-sm rounded"
    @click="showAlert"
    style="cursor: pointer"
  >
    <i class="fas fa-trash mr-1"></i>Bỏ lưu
  </a>
  <loader :flag-show="flagShowLoader"></loader>
</template>

<script>
import Loader from './loader.vue'
import axios from 'axios'
import $ from 'jquery'

export default {
  data() {
    return {
      flagShowLoader: false
    }
  },
  components: {
    Loader
  },
  props: ['deleteAction', 'listUrl', 'messageConfirm'],
  mounted() {},
  methods: {
    showAlert() {
      let that = this
      this.$swal({
        title: that.messageConfirm,
        icon: 'warning',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Đóng lại',
        showCancelButton: true
      }).then((result) => {
        if (result.value) {
          that.flagShowLoader = true
          $('.loading-div').removeClass('hidden')
          axios
            .delete(that.deleteAction, {
              _token: Laravel.csrfToken
            })
            .then(function (response) {
              that.flagShowLoader = false
              $('.loading-div').addClass('hidden')
              that
                .$swal({
                  title: response.data.message,
                  icon: 'success',
                  confirmButtonText: 'đóng lại'
                })
                .then(function () {
                  //   window.location.href = that.listUrl;
                  location.reload()
                })
            })
            .catch((error) => {
              that.flagShowLoader = false
            })
        }
      })
    }
  }
}
</script>
