<template>
  <section>
    <div class="container-xxl pt-2">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row flex-row-reverse">
          <div class="col-lg-12">
            <div
              class="
                row row-cols-1 row-cols-md-2 row-cols-lg-4
                job_listings
                mt-30
              "
              id="paginated-list1"
            >
              <div
                class="col jobbox-grid-item"
                v-for="(item, index) in data.job"
              >
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div
                      class="image-box"
                      data-toggle="tooltip"
                      title=""
                      data-placement="top"
                      data-container="body"
                      :data-original-title="item.logo"
                    >
                      <img :src="'/' + item.logo" width="52" alt="Percepta" />
                    </div>
                    <div class="right-info">
                      <a :href="'/detail-company/' + item.id_company"
                        ><span
                          class="name-job"
                          style="
                            -webkit-line-clamp: 1;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                          "
                          data-toggle="tooltip"
                          title=""
                          data-placement="top"
                          data-container="body"
                          :data-original-title="item.name_company"
                          >{{ item.name_company }}</span
                        ></a
                      >
                      <div
                        style="
                          -webkit-line-clamp: 1;
                          -webkit-box-orient: vertical;
                          overflow: hidden;
                          text-overflow: ellipsis;
                          display: -webkit-box;
                          text-align: justify;
                        "
                      >
                        <span
                          class="location-small"
                          data-toggle="tooltip"
                          data-html="true"
                          title=""
                          data-placement="top"
                          data-container="body"
                          :data-original-title="item.getlocation.name"
                          >{{ item.getlocation.name }}</span
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h6
                      class="mb-1"
                      data-toggle="tooltip"
                      title=""
                      data-placement="top"
                      data-container="body"
                      target="_blank"
                      :data-original-title="item.name_company"
                      style="
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        text-align: justify;
                      "
                    >
                      <a :href="'/home/detail/' + item.id"> {{ item.title }}</a>
                    </h6>
                    <div
                      class="
                        d-flex
                        align-items-center
                        gap-3
                        font-xs
                        color-text-mutted
                      "
                    >
                      <span
                        ><i class="fi-rr-briefcase ms-0 me-5"></i
                        >{{ item.get_time_work.name }}</span
                      ><span
                        ><i class="fi-rr-clock ms-0 me-5"></i
                        ><time datetime="2022-09-27">{{
                          item.end_job_time
                        }}</time></span
                      >
                    </div>
                    <div class="card-2-bottom mt-30">
                      <div class="row align-items-center">
                        <div class="col-lg-6 col-7">
                          <span
                            class="card-text-price"
                            data-toggle="tooltip"
                            title=""
                            data-placement="top"
                            data-container="body"
                            target="_blank"
                            :data-original-title="item.name_company"
                            >{{ item.get_wage.name }}</span
                          >
                        </div>
                        <div class="col-lg-6 col-5 text-end">
                          <a
                            class="btn btn-apply-now"
                            target="_blank"
                            :href="'/home/detail/' + item.id"
                            >Xem chi tiết</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--row job_listings-->
          </div>
          <!--col-lg-9-->
        </div>
        <!-- All jobs -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <br /><br /><span
              class="page-item text-center pagination-container d-flex"
            >
              <div id="pagination-numbers"></div>
            </span>
          </div>
        </div>
        <!-- paginate -->
      </div>
    </div>
  </section>
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