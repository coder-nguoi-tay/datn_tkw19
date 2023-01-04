<template>
  <div id="modalSubmitTicket" class="support-ticket-modal">
    <form action="" method="post" id="frmSubmitTicket">
      <div class="support-ticket-modal-header">
        <h4 class="support-ticket-modal-title st-text-highlight">
          Gửi yêu cầu hỗ trợ
        </h4>
      </div>
      <div class="support-ticket-modal-body">
        <div class="st-row">
          <div class="st-form-group st-col-12">
            <span class="st-text-dark-gray" for="exampleFormControlInput1"
              >Họ tên <span class="st-text-red">*</span></span
            >
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Nhập họ tên"
            />
          </div>
        </div>
        <div class="st-row">
          <div class="st-form-group st-col-6">
            <span class="st-text-dark-gray" for="email"
              >Email <span class="st-text-red">*</span></span
            >
            <input
              type="text"
              class="form-control"
              id="email"
              placeholder="Nhập email"
            />
          </div>
          <div class="st-form-group st-col-6">
            <span class="st-text-dark-gray" for="phone"
              >Số điện thoại <span class="st-text-red">*</span></span
            >
            <input
              type="text"
              class="form-control"
              id="phone"
              placeholder="Nhập số điện thoại"
            />
          </div>
        </div>
        <div class="st-row">
          <div class="st-form-group st-col-12">
            <span class="st-text-dark-gray"
              >Vấn đề cần hỗ trợ <span class="st-text-red">*</span></span
            >
            <select class="form-select" aria-label="Default select example">
              <option value="">-- Chọn vấn đề --</option>
              <option value="3">Thanh toán dịch vụ</option>
              <option value="1">Sử dụng công cụ tạo CV</option>
              <option value="2">Tìm Việc làm</option>
              <option value="50">Góp ý tính năng, sản phẩm</option>
              <option value="4">Bảo mật thông tin cá nhân</option>
              <option value="100">Hỗ trợ khác</option>
            </select>
          </div>
        </div>
        <div class="st-row">
          <div class="st-form-group st-col-12">
            <span class="st-text-dark-gray"
              >Gói dịch vụ <span class="st-text-red">*</span></span
            >
            <select class="form-select" aria-label="Default select example">
              <option value="">-- Chọn gói dịch vụ --</option>
              <option value="premium_1day">VIP 1 ngày (20k)</option>
              <option value="premium_pro">VIP 1 tháng (50k)</option>
              <option value="premium_vip">VIP 1 năm (200k)</option>
            </select>
          </div>
        </div>
        <div class="st-row">
          <div class="st-form-group st-col-12">
            <span class="st-text-dark-gray" for="mo_ta"
              >Mô tả vấn đề cần hỗ trợ <span class="st-text-red">*</span></span
            >
            <textarea
              class="form-control"
              id="mo_ta"
              rows="3"
              placeholder="Mô tả rõ vấn đề bạn gặp phải hoặc thông tin góp ý để ITWork có thể xử lý chính xác nhất."
            ></textarea>
          </div>
        </div>
      </div>
      <div class="support-ticket-modal-footer text-center">
        <a
          href="#"
          class="st-btn st-btn-primary"
          style="min-width: 117px; margin-left: 10px"
          >Gửi yêu cầu</a
        >
      </div>
    </form>
  </div>
</template>