<template>
  <a
    class="nav-link py-0 btn-next-step"
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
    <CModalBody>Số tiền mà bạn cần thanh toán là: 30.000đ</CModalBody>
    <CModalFooter>
      <CButton class="nav-link py-0 btn-next-step" @click="showAlert"
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
      total: '',
      getSkill: this.countGetskill.data * 10000
    }
  },
  components: {
    Loader
  },
  props: ['deleteAction', 'listUrl', 'messageConfirm', 'countGetskill'],
  mounted() {
    if (this.countGetskill.accPayment != null) {
      this.total = this.countGetskill.accPayment.surplus
    }
  },
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
          if (this.total < 30000) {
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
                _token: Laravel.csrfToken
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
