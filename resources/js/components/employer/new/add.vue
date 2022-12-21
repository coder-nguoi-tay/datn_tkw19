
<template>
  <div class="col-12 recuitment-inner">
    <form class="recuitment-form">
      <div class="card-create-employer">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Đăng tin tuyển dụng</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="mb-4">
                  <label class="form-label"
                    >Tiêu đề<span class="required-lable">*</span></label
                  >
                  <input type="text" class="form-control form-text" />
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Số lượng cần tuyển<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <input type="number" class="form-control form-text" min="0" />
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Giới tính<span class="required-lable">*</span></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option value="">chọn giới tính</option>
                    <option value="không yêu cầu">
                      không yêu cầu giới tính
                    </option>
                    <option value="nam">Nam</option>
                    <option value="nữ">Nữ</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn nơi làm việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn địa chỉ cụ thể<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <input type="text" class="form-control form-text" />
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Hạn nộp hồ sơ<span class="required-lable">*</span></label
                  >
                  <input type="date" class="form-control form-text" />
                </div>
                <div class="mb-4">
                  <label class="form-label col-12"
                    >Mô tả công việc<span class="required-lable">*</span></label
                  >
                  <Editor
                    class="ckedit"
                    api-key="no-api-key"
                    :init="{
                      plugins: 'lists link image table code help wordcount'
                    }"
                  />
                </div>

                <div class="mb-4">
                  <label class="form-label col-12"
                    >Quyền lơi công việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <Editor
                    api-key="no-api-key"
                    :init="{
                      plugins: 'lists link image table code help wordcount'
                    }"
                  />
                </div>
              </div>
              <div class="col-6">
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn nghành nghề<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Chọn chuyên ngành<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >chọn trình độ<span class="required-lable">*</span></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>

                <div class="mb-4">
                  <label class="form-label"
                    >chọn kinh nghiệm<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >chọn mức lương<span class="required-lable">*</span></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Thời gian làm việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <select
                    class="form-control form-text"
                    required
                    aria-label="select example"
                  >
                    <option></option>
                  </select>
                </div>

                <div class="mb-4">
                  <label class="form-label col-12"
                    >Yêu cầu công việc<span class="required-lable"
                      >*</span
                    ></label
                  >
                  <div>
                    <Editor
                      api-key="no-api-key"
                      :init="{
                        plugins: 'lists link image table code help wordcount'
                      }"
                    />
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label"
                    >Kỹ năng<span class="required-lable">*</span></label
                  >
                </div>
              </div>
            </div>

            <div class="rec-submit">
              <button type="submit" class="btn btn-primary">Đăng Tin</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import Editor from '@tinymce/tinymce-vue'
export default {
  components: {
    Editor
  }
}
</script>

<style>
.form-text {
  height: 4no2px;
  padding: 10px 15px;
  font-size: 15px;
  border-radius: 1px;
  border-color: #e5e5e5;
}
.ckedit {
  margin-top: 2%;
}
.check-edit-ter {
  width: 100%;
}
</style>