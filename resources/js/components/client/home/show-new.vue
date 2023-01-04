<template>
  <div class="search-book">
    <h2 class="ft-bold">Tin tuyển dụng, việc làm tốt nhất</h2>
    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a
          href="#"
          id="home-tab"
          class="badge bg-location active"
          data-toggle="tab"
          >Hà Nội</a
        >
      </li>
      <li class="nav-item">
        <a href="#" id="home-tab" class="badge bg-location" data-toggle="tab"
          >Hà Nội</a
        >
      </li>
      <li class="nav-item">
        <a
          class="badge bg-location"
          id="contact-tab"
          data-toggle="tab"
          href="#contact"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
          >Contact</a
        >
      </li>
      <li class="nav-item">
        <a
          class="badge bg-location"
          id="contact-tab"
          data-toggle="tab"
          href="#contact"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
          >Contact</a
        >
      </li>
      <li class="nav-item">
        <a
          class="badge bg-location"
          id="contact-tab"
          data-toggle="tab"
          href="#contact"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
          >Contact</a
        >
      </li>
      <li class="nav-item">
        <a
          class="badge bg-location"
          id="contact-tab"
          data-toggle="tab"
          href="#contact"
          role="tab"
          aria-controls="contact"
          aria-selected="false"
          >Contact</a
        >
      </li>
    </ul> -->
  </div>
  <div class="row justify-content-center">
    <div class="container">
      <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        <div
          class="col"
          v-for="(jobs, index) in job"
          :key="index"
          ref="changePage"
        >
          <div class="p-3 border bg-light box-showdow">
            <div class="position-absolute ab-right">
              <a
                type="button"
                class="
                  p-3
                  border
                  circle
                  d-flex
                  align-items-center
                  justify-content-center
                  bg-white
                  text-gray
                "
                v-if="data.checkLogin == false"
                href="/owner"
                title="bạn cần đăng nhập"
              >
                <i
                  class="
                    lni lni-heart-filled
                    position-absolute
                    snackbar-wishlist
                  "
                ></i>
              </a>
              <a
                type="button"
                class="
                  p-3
                  border
                  circle
                  d-flex
                  align-items-center
                  justify-content-center
                  bg-white
                  text-gray
                "
                v-if="data.checkLogin == true"
                title="Yêu thích"
                @click="add(jobs.id)"
                :class="{ pink: favourite == 1 && idjob == jobs.id }"
              >
                <i
                  class="
                    lni lni-heart-filled
                    position-absolute
                    snackbar-wishlist
                  "
                ></i>
              </a>
            </div>
            <div class="row">
              <div class="job_grid_thumb mb-3 title-name px-3 col-4">
                <a
                  :href="
                    data.url + 'home/detail/' + [jobs.title + '-' + jobs.id]
                  "
                  class="d-block m-auto"
                  ><img :src="jobs.logo" class="img-fluid" alt=""
                /></a>
              </div>
              <div class="job_grid_caption title-name px-3 col-8 g-1">
                <h4 class="mb-0 ft-medium medium ml-20">
                  <a
                    :href="
                      data.url + 'home/detail/' + [jobs.title + '-' + jobs.id]
                    "
                    class="text-dark fs-md"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Tooltip on top"
                  >
                    <p
                      style="
                        width: 200px !important,
                        overflow: hidden !important,
                        text-overflow: ellipsis !important,
                        white-space: nowrap,
                      "
                      :title="jobs.title"
                    >
                      {{ jobs.title }}
                    </p>
                  </a>
                </h4>

                <div class="jbl_location ml-20" style="margin-top: -10px">
                  <a
                    :href="
                      data.url +
                      'home/detail/' +
                      [jobs.nameCompany + '-' + jobs.idCompany]
                    "
                    class="text-dark fs-md"
                    >{{ jobs.nameCompany }}</a
                  >
                </div>
              </div>
            </div>
            <div
              class="
                job_grid_footer
                d-flex
                align-items-center
                justify-content-between
                text-mute-footer
              "
            >
              <div class="df-1 text-muted">
                <i class="lni lni-wallet mr-1"></i>{{ jobs.get_wage.name }}
              </div>
              <div class="df-1 text-muted ml-2">
                <i class="lni lni-timer mr-1"></i
                >{{ getFormattedDate(jobs.end_time_job) }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav aria-label="Page navigation example" v-if="panigate.last_page !== 1">
        <ul class="pagination">
          <li class="page-item">
            <a
              class="page-item first"
              v-bind:class="[{ disabled: !panigate.prev_page_url }]"
              aria-label="Previous"
              @click="fetchJob(panigate.prev_page_url)"
              id="contact-tab"
              data-toggle="tab"
              href="#contact"
              role="tab"
              aria-controls="contact"
              aria-selected="false"
            >
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item">
            <a
              class="page-item first disabled"
              id="contact-tab"
              data-toggle="tab"
              href="#contact"
              role="tab"
              aria-controls="contact"
              aria-selected="false"
              >{{ panigate.current_page }}-{{ panigate.last_page }}</a
            >
          </li>
          <li class="page-item">
            <a
              class="page-item last"
              v-bind:class="[{ disabled: !panigate.next_page_url }]"
              aria-label="Next"
              @click="fetchJob(panigate.next_page_url)"
              id="contact-tab"
              data-toggle="tab"
              href="#contact"
              role="tab"
              aria-controls="contact"
              aria-selected="false"
            >
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>
<script>
import moment from 'moment'
import axios from 'axios'
export default {
  props: {
    data: {
      type: Object,
      default: 'data'
    }
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      job: [],
      panigate: [],
      locations: this.data.locations,
      favourite: false,
      idjob: []
    }
  },
  created() {
    this.fetchJob()
  },
  methods: {
    getFormattedDate(date) {
      return moment(date).format('DD/MM/YYYY')
    },
    fetchJob(page_url) {
      let vm = this
      page_url = page_url || this.data.url + 'show-new'
      axios.get(page_url).then(function (res) {
        let shownew = res.data.job.data
        console.log(res.data.job)
        vm.job = shownew
        vm.Panigate(res.data.job)
      })
    },
    Panigate(data) {
      let panigate = {
        current_page: data.current_page,
        last_page: data.last_page,
        next_page_url: data.next_page_url,
        prev_page_url: data.prev_page_url
      }
      this.panigate = panigate
    },
    add(id) {
      console.log(id)
      this.favourite = 1
      this.idjob = id
      let url = 'favourite/' + id
      axios
        .post(url, {
          id: id
        })
        .then(function (data) {
          console.log(data.data)
        })
        .catch(function (error) {})
    }
  }
}
</script>