<template>
  <div class="card-body" v-for="(jobs, index) in job" :key="index">
    <p>{{ jobs.title }}</p>
    <p>{{ jobs.idCompany }}</p>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item">
        <a
          class="page-link"
          href="#"
          v-bind:class="[{ disabled: !panigate.prev_page_url }]"
          aria-label="Previous"
          @click="fetchJob(panigate.prev_page_url)"
        >
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item">
        <a
          class="page-link"
          href="#"
          v-bind:class="[{ disabled: !panigate.next_page_url }]"
          aria-label="Next"
          @click="fetchJob(panigate.next_page_url)"
        >
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
import axios from 'axios'
export default {
  data: function () {
    return {
      job: [],
      panigate: []
    }
  },
  created() {
    this.fetchJob()
  },
  methods: {
    fetchJob(page_url) {
      let vm = this
      page_url = page_url || 'http://127.0.0.1:8000/show-new'
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
      console.log(panigate)
      this.panigate = panigate
    }
  }
}
</script>

<style>
</style>