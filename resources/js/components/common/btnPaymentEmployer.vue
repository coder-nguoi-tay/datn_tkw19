<template>
  <a
    class="
      mt-2
      btn btn-info
      font-weight-medium
      color-text-2
      mr-1
      text-white
      btn-link-unlock
    "
    color="primary"
    @click="
      () => {
        visibleLiveDemo = true
      }
    "
    style="cursor: pointer"
  >
    Mở khóa
  </a>
  <!-- Modal -->
  <CModal
    :visible="visibleLiveDemo"
    @close="
      () => {
        visibleLiveDemo = false
      }
    "
  >
    <CModalBody
      >Số tiền mà bạn cần thanh toán là:
      {{
        new Intl.NumberFormat('de-DE', {
          style: 'currency',
          currency: 'VND'
        }).format(getSkill)
      }}</CModalBody
    >
    <CModalFooter>
      <CButton
        class="
          mt-2
          btn btn-info
          font-weight-medium
          color-text-2
          mr-1
          text-white
        "
        @click="showAlert"
        >Thanh Toán</CButton
      >
    </CModalFooter>
  </CModal>

  <loader :flag-show="flagShowLoader"></loader>
</template>

<script>
import Loader from './loader.vue'
import axios from 'axios'
import $ from 'jquery'
import { Notyf } from 'notyf'

export default {
  data() {
    return {
      flagShowLoader: false,
      visibleLiveDemo: false,
      getSkill: this.countGetskill.total * 5000
    }
  },
  components: {
    Loader
  },
  props: ['deleteAction', 'listUrl', 'messageConfirm', 'countGetskill'],
  mounted() {},
  methods: {
    showAlert() {
      let that = this
      this.$swal({
        title: that.messageConfirm,
        icon: 'warning',
        confirmButtonText: 'Mở khóa',
        cancelButtonText: 'Đóng lại',
        showCancelButton: true
      }).then((result) => {
        if (result.value) {
          if (this.total < this.getSkill) {
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
            return notyf.error('Số Tiền Trong Tài Khoản Của Bạn Không Đủ')
          } else {
            that.flagShowLoader = true
            $('.loading-div').removeClass('hidden')
            axios
              .post(that.deleteAction, {
                _token: Laravel.csrfToken,
                total: that.getSkill
              })
              .then(function (response) {
                that.flagShowLoader = false
                $('.loading-div').addClass('hidden')
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
                console.log(response.data.status)
                if (response.data.status == 403) {
                  that.flagShowLoader = false
                  setTimeout(function () {
                    location.reload()
                  }, 1100)
                  return notyf.error(response.data.message)
                }
                if (response.data.status == 400) {
                  that.flagShowLoader = false
                  setTimeout(function () {
                    location.reload()
                  }, 1100)
                  return notyf.warning(response.data.message)
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
        }
      })
    }
  }
}
</script>
<style scoped>
.btn-link-unlock {
  margin-left: 90%;
}
</style>
