<template>
  <a class="dropdown-item" @click="showAlert" style="cursor: pointer">
    Gia hạn gói cước
  </a>
  <loader :flag-show="flagShowLoader"></loader>
</template>

<script>
import Loader from './loader.vue'
import axios from 'axios'
import { Notyf } from 'notyf'

export default {
  data() {
    return {
      flagShowLoader: false
    }
  },
  components: {
    Loader
  },
  props: ['deleteAction', 'listUrl', 'messageConfirm', 'price'],
  mounted() {},
  methods: {
    showAlert() {
      let that = this
      this.$swal({
        title: that.messageConfirm,
        icon: 'warning',
        confirmButtonText: 'Gia hạn',
        cancelButtonText: 'Đóng lại',
        showCancelButton: true
      }).then((result) => {
        if (result.value) {
          axios
            .post(that.deleteAction, {
              _token: Laravel.csrfToken,
              price: that.price
            })
            .then(function (response) {
              const notyf = new Notyf({
                duration: 6000,
                position: {
                  x: 'right',
                  y: 'bottom'
                },
                types: [
                  {
                    type: 'error',
                    duration: 8000,
                    dismissible: true
                  }
                ]
              })
              if (response.data.status == 403) {
                setTimeout(function () {
                  location.reload()
                }, 1100)
                return notyf.error(response.data.message)
              }

              setTimeout(function () {
                location.reload()
              }, 1100)
              return notyf.success(response.data.message)
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
