<template>
  <button
    class="badge bg-secondary text-center"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
  >
    Chưa Xác Thức
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
          <img :src="'http://127.0.0.1:8000/' + fileXt" alt="" style="width: 300px; height: 300px;"/>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-primary"
            @click="changeStatus(this.data.idCompany)"
          >
            Xác Nhận
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
      console.log(data.data.data.images)
      that.fileXt = data.data.data.images
    })
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      fileXt: ''
    }
  },
  methods: {
    changeStatus(id) {
      console.log(id)
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
    }
  }
}
</script>

<style>
</style>