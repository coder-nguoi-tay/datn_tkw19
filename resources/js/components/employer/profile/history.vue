<template>
  <div>
    <!-- Lịch sử giao dịch -->
    <div class="col-12 recuitment-inner">
      <div class="card-create-employer">
        <div class="row">
          <div class="col-lg-12">
            <div class="billing-form-item">
              <!-- billing-title-wrap -->
              <div class="billing-content">
                <div class="contact-form-action">
                  <div class="MultiFile-intercepted">
                    <div class="card h-100">
                      <div class="card-body">
                        <form action="" class="d-flex" method="get">
                          <div class="col-4"></div>
                          <div class="col-8 d-flex">
                            <picker-new-employer
                              name="start_date"
                              v-model="DateStart"
                              class="date-time custom-date mr-1"
                            ></picker-new-employer>
                            <picker-new-employer
                              name="end_date"
                              v-model="DateEnd"
                              class="date-time custom-date mr-1"
                            ></picker-new-employer>
                            <input
                              name="free_word"
                              class="custom-input imput-history mr-1"
                              placeholder="Tìm Kiếm...."
                              :value="datePicker.free_word"
                              autocomplete="off"
                              id="free_word"
                            />
                            <select
                              name="status"
                              v-model="datePicker.status"
                              class="custom-form-select border mr-1"
                              id=""
                            >
                              <option value="0">Tất cả</option>
                              <option value="1">Thành công</option>
                              <option value="2">Thất bại</option>
                            </select>
                            <button
                              class="
                                btn btn-info
                                font-weight-medium
                                color-text-2
                                mr-1
                                text-white
                              "
                              href=""
                            >
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </form>
                        <div
                          class="col-12 form-update-company"
                          v-for="item in data.paymentHistory"
                          :key="item.id"
                        >
                          <div class="mb-3 row">
                            <div data-v-79f03480="" class="card-body">
                              <!---->
                              <div data-v-79f03480="" class="d-flex history">
                                <span data-v-79f03480="" class="line-date">{{
                                  moment(item.created_at).format('YYYY-MM-DD')
                                }}</span>
                                <div data-v-79f03480="" class="line">
                                  <div data-v-79f03480="" class="line-content">
                                    <div data-v-79f03480="" class="content">
                                      <p data-v-79f03480="">
                                        <span data-v-79f03480="" class="time"
                                          >Số tiền</span
                                        ><span data-v-79f03480="">{{
                                          new Intl.NumberFormat('de-DE', {
                                            style: 'currency',
                                            currency: 'VND'
                                          }).format(item.price)
                                        }}</span>
                                      </p>
                                    </div>
                                    <div data-v-79f03480="" class="content">
                                      <p data-v-79f03480="">
                                        <span data-v-79f03480="" class="time"
                                          >Nội dung</span
                                        ><span data-v-79f03480="">{{
                                          item.desceibe
                                        }}</span>
                                      </p>
                                    </div>
                                    <div data-v-79f03480="" class="content">
                                      <p data-v-79f03480="">
                                        <span data-v-79f03480="" class="time"
                                          >Trạng thái</span
                                        ><span data-v-79f03480="">{{
                                          item.status == 1
                                            ? 'Thành công'
                                            : 'Thất bại'
                                        }}</span>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import Datepicker from '@vuepic/vue-datepicker'
// import '@vuepic/vue-datepicker/dist/main.css'
import moment from 'moment'
export default {
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: this.data.Company ?? '',
      employer: this.data.employer,
      preview: null,
      image: null,
      preview_list: [],
      image_list: [],
      filePreview: '',
      Image: null,
      statusImage: '',
      dataCompany: '',
      DateStart: this.datePicker.start_date,
      DateEnd: this.datePicker.end_date
    }
  },
  props: ['data', 'datePicker'],
  created() {
    console.log(this.datePicker)
    if (this.data.Company) {
      this.dataCompany = this.data.Company
    }
    if (this.data.accuracy) {
      this.Image = this.data.accuracy.images
      if (this.data.accuracy.status == 0) {
        this.statusImage = 0
      } else {
        this.statusImage = 1
      }
    }
  },
  components: {
    // Datepicker
  },
  methods: {
    moment: function () {
      return moment()
    },
    chooseImage() {
      this.$refs['fileInput'].click()
    },
    onChange(e) {
      let fileInput = this.$refs.fileInput
      let imgFile = fileInput.files
      if (imgFile && imgFile[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
          this.filePreview = e.target.result
        }
        reader.readAsDataURL(imgFile[0])
      }
    },
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('input[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('input[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      this.$refs.formData.submit()
    },
    previewImage: function (event) {
      var input = event.target
      if (input.files) {
        var reader = new FileReader()
        reader.onload = (e) => {
          this.preview = e.target.result
        }
        this.image = input.files[0]
        reader.readAsDataURL(input.files[0])
      }
    }
  }
}
</script>

<style>
.custom-form-select {
  width: 150px;
  border-radius: 5px;
}
.imput-history {
  width: 100px;
}
.justify-content-between {
  justify-content: space-between !important;
}

.d-flex {
  display: flex !important;
}
.line-date[data-v-79f03480] {
  font-weight: 700;
}
.line[data-v-79f03480] {
  padding-left: 1rem;
  position: relative;
}
.line .line-content[data-v-79f03480] {
  border-left: 1px solid #ebf3fe;
}
.line .line-content .time[data-v-79f03480] {
  margin-right: 5px;
  padding: 3px;
  border-radius: 5px;
  background: #ebf3fe;
  color: #4285f4;
}
.line .content[data-v-79f03480] {
  position: relative;
  padding-left: 1rem;
}

.form-update-company {
  width: 60%;
}

.shadow-none {
  box-shadow: none !important;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

.content[data-v-4ad9e6f8] {
  width: calc(100% - 230px);
}

.card {
  border: none;
}
.align-items-center {
  font-size: 18px;
  font-weight: 500px;
}
.card-employer-content {
  width: 94%;
  border: 1px solid #f1f3f4;
  margin: 15px 10px 20px 40px;
  border-radius: 15px;
}
</style>