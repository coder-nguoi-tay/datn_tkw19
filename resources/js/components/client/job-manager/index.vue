<template>
  <div class="row">
    <img
      src="https://www.onpassivians.vn/images/product-title-banner.png"
      style="height: 400px"
      alt=""
    />
  </div>
  <div class="container mt-24 bg-white mb-40">
    <div class="list-job">
      <div class="job-header">
        <br />
        <span
          >Tìm thấy <b class="text-highlight">{{ data.total }}</b> việc làm phù
          hợp với yêu cầu của bạn.</span
        >
      </div>

      <div class="job-body row" v-for="(item, index) in data.job">
        <div class="col-md-9">
          <br />
          <div class="lists">
            <div
              class="job-item bg-highlight job-ta result-job-hover"
              data-job-id="901667"
              data-job-position="1"
              data-box="BoxSearchResult"
            >
              <div class="avatar">
                <a target="_blank" href="" class="company-logo">
                  <img
                    src="https://cdn.topcv.vn/80/company_logos/cong-ty-tnhh-jollibee-viet-nam-5f64893730c37.jpg"
                    class="w-100"
                    alt="Công ty TNHH Jollibee Việt Nam"
                    title="Công ty TNHH Jollibee Việt Nam  Việc làm quản lý"
                  />
                </a>
              </div>
              <div class="body">
                <div class="content">
                  <div class="ml-auto content-left col-9">
                    <h3 class="title">
                      <a target="_blank" class="underline-box-job" href="">
                        <span
                          class="bold transform-job-title"
                          data-toggle="tooltip"
                          title=""
                          data-placement="top"
                          data-container="body"
                          :data-original-title="item.title"
                          >{{ item.title }}</span
                        >
                      </a>
                    </h3>
                    <p class="company underline-box-job">
                      <a
                        href="https://www.topcv.vn/cong-ty/cong-ty-tnhh-jollibee-viet-nam/31196.html"
                        data-toggle="tooltip"
                        title=""
                        data-placement="top"
                        data-container="body"
                        target="_blank"
                        :data-original-title="item.name_company"
                        >{{ item.name_company }}</a
                      >
                    </p>
                  </div>
                  <div class="mr-auto text-right">
                    <p class="deadline">
                      Còn
                      <strong>
                        {{ msToTime(item.duration) }}
                        <!-- {{ new Date().getDate() - new Date().getDate() / 1000 }} -->
                      </strong>
                      ngày để ứng tuyển
                    </p>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="label-content ml-auto">
                    <label class="salary">{{ item.get_wage.name }}</label>
                    <label
                      class="address"
                      data-toggle="tooltip"
                      data-html="true"
                      title=""
                      data-placement="top"
                      data-container="body"
                      :data-original-title="item.getlocation.name"
                      >{{ item.getlocation.name }}</label
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from 'moment'
export default {
  props: ['data'],
  created() {
    console.log(this.data)
  },
  components: {},
  methods: {
    getFormattedDate(date) {
      return moment(date).format('DD/MM/YYYY')
    },
    msToTime(ms) {
      let seconds = (ms / 1000).toFixed(1)
      let minutes = (ms / (1000 * 60)).toFixed(1)
      let hours = (ms / (1000 * 60 * 60)).toFixed(1)
      let days = (ms / (1000 * 60 * 60 * 24)).toFixed(0)
      if (seconds < 60) return seconds + ' Sec'
      else if (minutes < 60) return minutes + ' Min'
      else if (hours < 24) return hours + ' Hrs'
      else return days
    }
  }
}
</script>

<style  scoped>
.w-100 {
  height: 80px !important;
  width: 80px !important;
}
.company-logo {
  height: 80px !important;
  width: 90px !important;
}
.mb-40 {
  margin-bottom: 40px;
  width: 100%;
}
.bg-white {
  background: #fff;
}
.mt-24 {
  margin-top: 24px;
}

.ml-auto {
  width: 100%;
}
.content-left {
  text-align: left !important;
}

.list-job {
  background: #fff 0 0 no-repeat padding-box;
}
.list-job .job-header {
  border-bottom: 1px solid #eee;
  padding: 0 16px 20px;
}
.text-highlight {
  color: #00b14f;
}

.row {
  margin-right: -15px;
  margin-left: -15px;
}
.job-body .job-item.bg-highlight {
  background-color: #f2fbf6;
}
.job-body .job-item {
  background: #fff 0 0 no-repeat padding-box;
  border: 1px solid #f4f4f4;
  border-radius: 5px;
  display: flex;
  margin: auto auto 16px;
  padding: 16px;
}
.box-job,
.job-item {
  box-shadow: 0 5px 20px 0 transparent;
  transition: box-shadow 0.3s;
}
.job-body .job-item .avatar {
  height: 100px;
  width: 100px;
}
a {
  text-decoration: none;
}
a {
  color: #666;
}

a {
  background-color: transparent;
}
.job-body .job-item .avatar img {
  border-radius: 5px;
  height: 100%;
  -o-object-fit: contain;
  object-fit: contain;
  width: 100px;
}
img {
  vertical-align: middle;
}
img {
  border: 0;
}
.job-body .job-item .body {
  display: flex;
  flex-direction: column;

  width: 100%;
}
.job-body .job-item .body .content {
  display: flex;
  width: 100%;
}

.job-body .job-item .body .title {
  margin-bottom: 0;
  margin-top: 0;
  margin-left: -1px !important;
}
.h3,
h3 {
  font-size: 24px;
}
.job-body .job-item .body .title a {
  color: #212f3f;
  font-size: 16px;
  margin-bottom: 6px;
  text-decoration: none;
  vertical-align: top;
}
.icon-verified-employer {
  font-size: 16px;
}

p {
  margin: 0 0 10px;
}
.job-body .job-item .body .company a {
  color: #555;
  font-size: 13px;
  margin-bottom: 20px;
  text-decoration: none;
  text-transform: uppercase;
}
.job-body .job-item .text-right {
  min-width: 180px;
  text-align: right !important;
}
.job-body .job-item .mr-auto {
  margin-left: auto;
}
.job-body .job-item .body .deadline {
  color: #333;
  font-size: 14px;
  line-height: 1;
  margin-bottom: 5px;
}
p {
  margin: 0 0 10px;
}

.job-body .job-item .body .label-content label {
  background: #edeef0 0 0 no-repeat padding-box;
  border-radius: 3px;
  color: #636d78;
  font-size: 12px;
  font-weight: 400;
  padding: 2px 8px;
}
.label-content {
  padding-left: 15px !important;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}
.job-body .job-item .mr-auto {
  margin-left: auto;
}
.bold {
  font-weight: 700;
}
</style>