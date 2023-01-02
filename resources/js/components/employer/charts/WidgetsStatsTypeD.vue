<template>
  <CRow>
    <CCol :sm="6" :lg="3">
      <CWidgetStatsD
        class="mb-4"
        style="--cui-card-cap-bg: #3b5998"
        :values="[
          { title: dataTotalYear, value: 'Tổng' },
          { title: 'Tháng', value: '12' }
        ]"
      >
        <template #icon
          ><CIcon icon="cib-facebook" height="52" class="my-4 text-white"
        /></template>
        <template #chart>
          <CChart
            class="position-absolute w-100 h-100"
            type="line"
            :data="{
              labels: [
                'Tháng 1',
                'Tháng 2',
                'Tháng 3',
                'Tháng 4',
                'Tháng 5',
                'Tháng 6',
                'Tháng 7',
                'Tháng 8',
                'Tháng 9',
                'Tháng 10',
                'Tháng 11',
                'Tháng 12'
              ],
              datasets: [
                {
                  backgroundColor: 'rgba(255,255,255,.1)',
                  borderColor: 'rgba(255,255,255,.55)',
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 2,
                  data: [
                    dataYear.totalMonnyMouth1,
                    dataYear.totalMonnyMouth2,
                    dataYear.totalMonnyMouth3,
                    dataYear.totalMonnyMouth4,
                    dataYear.totalMonnyMouth5,
                    dataYear.totalMonnyMouth6,
                    dataYear.totalMonnyMouth7,
                    dataYear.totalMonnyMouth8,
                    dataYear.totalMonnyMouth9,
                    dataYear.totalMonnyMouth10,
                    dataYear.totalMonnyMouth11,
                    dataYear.totalMonnyMouth12
                  ],
                  fill: true
                }
              ]
            }"
            :options="options"
          />
        </template>
      </CWidgetStatsD>
    </CCol>
    <CCol :sm="6" :lg="3">
      <CWidgetStatsD
        class="mb-4"
        style="--cui-card-cap-bg: #00aced"
        :values="[
          { title: 'followers', value: '973k' },
          { title: 'tweets', value: '1.792' }
        ]"
      >
        <template #icon
          ><CIcon icon="cib-twitter" height="52" class="my-4 text-white"
        /></template>
        <template #chart>
          <CChart
            class="position-absolute w-100 h-100"
            type="line"
            :data="{
              labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July'
              ],
              datasets: [
                {
                  backgroundColor: 'rgba(255,255,255,.1)',
                  borderColor: 'rgba(255,255,255,.55)',
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 2,
                  data: [1, 13, 9, 17, 34, 41, 38],
                  fill: true
                }
              ]
            }"
            :options="options"
          />
        </template>
      </CWidgetStatsD>
    </CCol>
    <CCol :sm="6" :lg="3">
      <CWidgetStatsD
        class="mb-4"
        style="--cui-card-cap-bg: #4875b4"
        :values="[
          { title: 'contacts', value: '500' },
          { title: 'feeds', value: '1.292' }
        ]"
      >
        <template #icon
          ><CIcon icon="cib-linkedin" height="52" class="my-4 text-white"
        /></template>
        <template #chart>
          <CChart
            class="position-absolute w-100 h-100"
            type="line"
            :data="{
              labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'July',
                'July',
                'July',
                'July',
                'July'
              ],
              datasets: [
                {
                  backgroundColor: 'rgba(255,255,255,.1)',
                  borderColor: 'rgba(255,255,255,.55)',
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 2,
                  data: [78, 81, 80, 45, 34, 12, 40, 40, 40, 40, 40, 40],
                  fill: true
                }
              ]
            }"
            :options="options"
          />
        </template>
      </CWidgetStatsD>
    </CCol>
    <CCol :sm="6" :lg="3">
      <CWidgetStatsD
        class="mb-4"
        color="warning"
        :values="[
          { title: 'events', value: '12+' },
          { title: 'meetings', value: '4' }
        ]"
      >
        <template #icon
          ><CIcon icon="cil-calendar" height="52" class="my-4 text-white"
        /></template>
        <template #chart>
          <CChart
            class="position-absolute w-100 h-100"
            type="line"
            :data="{
              labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July'
              ],
              datasets: [
                {
                  backgroundColor: 'rgba(255,255,255,.1)',
                  borderColor: 'rgba(255,255,255,.55)',
                  pointHoverBackgroundColor: '#fff',
                  borderWidth: 2,
                  data: [35, 23, 56, 22, 97, 23, 64],
                  fill: true
                }
              ]
            }"
            :options="options"
          />
        </template>
      </CWidgetStatsD>
    </CCol>
  </CRow>
</template>

<script>
import { CChart } from '@coreui/vue-chartjs'
export default {
  created() {
    if (this.dataTotal) {
      this.dataTotalYear = new Intl.NumberFormat('ja-JP', {
        style: 'currency',
        currency: 'VND'
      }).format(this.dataTotal)
    }
  },
  data: function () {
    return {
      dataTotalYear: 0
    }
  },
  props: ['dataTotal', 'dataYear'],
  name: 'WidgetsStatsD',
  components: {
    CChart
  },
  setup() {
    const options = {
      elements: {
        line: {
          tension: 0.4
        },
        point: {
          radius: 0,
          hitRadius: 10,
          hoverRadius: 4,
          hoverBorderWidth: 3
        }
      },
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        x: {
          display: false
        },
        y: {
          display: false
        }
      }
    }

    return {
      options
    }
  }
}
</script>
