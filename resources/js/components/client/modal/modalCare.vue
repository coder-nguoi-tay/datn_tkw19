<template>
  <div>
    <div
      v-if="test == 1"
      id="support-ticket-root"
      class="custom-modal1"
      @click="checkModal(1)"
    >
      <!---->
      <div
        id="support-ticket-laucher"
        class="custom-modal1"
        @click="checkModal(1)"
      >
        <i class="fab fa-facebook-messenger" @click="checkModal(1)"></i>
      </div>
    </div>
    <div
      v-if="test == 2"
      id="support-ticket-root"
      class="custom-modal1"
      @click="checkModal(2)"
    >
      <div
        id="support-ticket-laucher"
        class="custom-modal1"
        @click="checkModal(2)"
      >
        <i
          aria-hidden="true"
          class="fa fa-times custom-modal1"
          @click="checkModal(2)"
        ></i>
      </div>
    </div>

    <!-- {{--  cskh --}} -->
    <div id="support-ticket-panel" class="custom-modal hidden" style="">
      <div class="support-ticket-panel-header">
        <div class="support-ticket-panel-title">
          <i class="fa fa-life-ring"></i> Trung tâm hỗ trợ dịch vụ
        </div>
        <div class="support-ticket-cs">
          <div class="support-ticket-cs-people">
            <div class="support-ticket-cs-avatar">
              <img
                src="https://scontent.fhan2-5.fna.fbcdn.net/v/t1.6435-9/53668486_310405126324726_8837568941564887040_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=CEJiy6-gU1EAX-cTENe&_nc_oc=AQlyKOlLRw3t4gPBtgCiWPo9S3KTlzvxQmGvkY1SAAb99p9URNo0TWADnCZ6eYNeLok&_nc_ht=scontent.fhan2-5.fna&oh=00_AfBwP14dA9bnGUB_zNkIjdWqcdy6jN8q5DfuiDJikE-IeA&oe=63DB9602"
                alt="Trung tâm hỗ trợ dịch vụ"
                title="Trung tâm hỗ trợ dịch vụ"
              />
            </div>
            <div class="support-ticket-cs-name">Mr. Người Tày</div>
          </div>
        </div>
        <div class="support-ticket-cs-heading">ITWork hỗ trợ 24/7</div>
      </div>
      <div class="support-ticket-panel-body">
        <ul>
          <li>
            <a href="" data-toggle="modal" data-target="#exampleModal3"
              ><i class="fas fa-dollar-sign"></i> Lỗi thanh toán nạp tiền tài
              khoản
            </a>
          </li>

          <li>
            <a href="" target="_blank"
              ><i class="fa fa-question"></i> Các câu hỏi thường gặp</a
            >
          </li>
          <li>
            <a href="" data-toggle="modal" data-target="#exampleModal2"
              ><i class="fas fa-headset"></i> Yêu cầu hỗ trợ khác / Góp ý sản
              phẩm</a
            >
          </li>
          <li>
            <a href="" data-toggle="modal" data-target="#exampleModal"
              ><i aria-hidden="true" class="fa fa-phone"></i> Liên hệ ITWork</a
            >
          </li>
        </ul>
      </div>
    </div>

    <div
      class="modal fade"
      id="exampleModal"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-body">
            <modal-contract></modal-contract>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="exampleModal2"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-body">
            <modal-required></modal-required>
          </div>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="exampleModal3"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-body">
            <modal-support></modal-support>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      test: 1
    }
  },
  methods: {
    checkModal(id) {
      if (id == 1) {
        this.test = 2
        $('.custom-modal').removeClass('hidden')
      } else {
        this.test = 1
        $('.custom-modal').addClass('hidden')
      }
    }
  }
}
</script>

<style>
</style>