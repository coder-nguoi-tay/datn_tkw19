<template>
  <button
    type="button"
    v-if="checkStep == 1"
    class="badge bg-secondary text-center"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
  >
    Chưa Xác Thức
  </button>
  <button
    v-if="checkStep == 2"
    type="button"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    class="badge bg-success text-center"
    style="border: 1px solid #b1b7c1; font-size: 12px; padding: 5px 10px"
  >
    Đã Xác Thức
  </button>
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Giấy xác nhận</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <img :src="'/' + fileXt" alt="" style="width: 300px; height: 300px" />
        </div>
        <div class="modal-body">
          <a :href="'/' + fileXt" target="_blank">Click vào để xem chi tiết </a>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            v-if="data.check == 1"
            class="btn btn-primary"
            @click="changeStatus(this.data.idCompany)"
          >
            Xác Nhận
          </button>
          <button
            v-if="data.check == 2"
            type="button"
            class="btn btn-danger"
            @click="andchangeStatus(this.data.idCompany)"
          >
            Hủy xác Nhận
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  props: ['data'],
  created() {
    let that = this
    axios.get(that.data.urlGetData).then((data) => {
      that.fileXt = data.data.data.images
    })
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      fileXt: '',
      checkStep: this.data.check
    }
  },
  methods: {
    changeStatus(id) {
      let that = this
      axios
        .post('company/change-status', {
          _token: Laravel.csrfToken,
          id: that.data.idCompany
        })
        .then(function (response) {
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
        .catch((error) => {})
    },
    andchangeStatus(id) {
      console.log(id)
      let that = this
      axios
        .post('company/end-change-status', {
          _token: Laravel.csrfToken,
          id: that.data.idCompany
        })
        .then(function (response) {
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
        .catch((error) => {})
    }
  }
}
</script>

<style>
</style>