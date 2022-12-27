<template>
  <div
    class="modal fade"
    id="exampleModalbuyPackage"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Tât Cả Các Gói Cước
          </h5>
          <button
            type="button"
            class="btn-close"
            data-coreui-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body text-center">
          <div class="row">
            <div
              class="col-lg-3 col-6"
              v-for="payment in data.data"
              :key="payment.id"
            >
              <!-- small box -->
              <div class="small-box bg-info p-3 text-white box-custom-layout">
                <div class="inner">
                  <h3>{{ new Intl.NumberFormat('de-DE', {
                            style: 'currency',
                            currency: 'VND'
                          }).format(payment.price) }}</h3>
                  <p>{{ payment.name }}</p>
                  <p>{{ payment.timeofer.name }}</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a
                  href="#"
                  data-coreui-toggle="modal"
                  data-coreui-target="#exampleModalDetailPayment"
                  class="small-box-footer text-view"
                  >Xem chi tiết<i class="fas fa-arrow-circle-right"></i
                ></a>
                <button
                  class="nav-link py-0 btn-next-step btn-buy-package"
                  style="margin-top: 10px !important"
                  data-coreui-toggle="modal"
                  data-coreui-target="#exampleModalBuyPayment"
                  @click="nextModal(payment.id)"
                >
                  Mua ngay
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- {{-- model detail payment --}} -->
  <div
    class="modal fade"
    id="exampleModalDetailPayment"
    data-coreui-backdrop="static"
    data-coreui-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button
            type="button"
            class="btn-close"
            data-coreui-toggle="modal"
            data-coreui-target="#exampleModalbuyPackage"
          ></button>
        </div>
        <div class="modal-body"></div>
      </div>
    </div>
  </div>
  <div
    class="modal fade"
    id="exampleModalBuyPayment"
    data-coreui-backdrop="static"
    data-coreui-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Thanh Toán</h5>
          <button
            type="button"
            class="btn-close"
            data-coreui-toggle="modal"
            data-coreui-target="#exampleModalbuyPackage"
          ></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form :action="data.urlStore" method="post">
              <input type="hidden" name="_token" :value="csrfToken" />
              <input type="hidden" name="name" :value="model.name" />
              <input type="hidden" name="id" :value="model.id" />
              <input type="hidden" name="price" :value="model.price" />
              <div class="box-seting-payment">
                <div class="col-12">
                  <!-- small box -->
                  <div
                    class="small-box bg-info p-3 text-white box-custom-layout"
                  >
                    <div class="inner">
                      <h3>{{ new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(model.price) }} </h3>
                      <p>{{ model.name }}</p>
                      <p>{{ timePackage }}</p>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <CButton
                          class="nav-link py-0 btn-next-step btn-buy-package"
                          color="secondary"
                          v-c-tooltip="{
                          content: 'Số Dư:' +
                          new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'VND' }).format(data.total.surplus),
                            placement: 'top'
                          }"
                          @click="checkAccount()"
                          >Số Du Tài Khoản</CButton
                        >
                      </div>
                      <div class="col-6">
                        <button
                          class="nav-link py-0 btn-next-step btn-buy-package"
                          color="secondary"
                          name="redirect"
                        >
                          Thanh Toán Trực Tiếp
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { CTooltip } from '@coreui/vue'
import axios from 'axios'
import { Notyf } from 'notyf'

export default {
  components: {
    CTooltip
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: [],
      timePackage: []
    }
  },
  created() {},
  methods: {
    nextModal(id) {
      axios
        .get('package/payment/show-detail/' + id)
        .then((data) => {
          this.model = data.data.data
          this.timePackage = this.model.timeofer.name
          console.log(this.model.timeofer.name)
        })
        .catch((error) => {
          console.log(error)
        })
    },
    checkAccount() {
      if (this.data.total.surplus < this.model.price) {
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
            return notyf.error('Số dư trong tài khoản của bạn không đủ')
      } else {
        axios.post('package/payment/buy-account', {
          _token: Laravel.csrfToken,
          data: this.model
        }).then((data) => {
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
          console.log(data);
          if (data.data.status == 403) {
            return notyf.error(data.data.message)
          }
          setTimeout(function () {
            location.reload()
          }, 2000)
          return notyf.success(data.data.message)
        }).catch((error) => {
          console.log(error);
        })
      }
    }
  }
}
</script>

<style>
</style>