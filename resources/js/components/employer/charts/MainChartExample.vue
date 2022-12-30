<template>
  <CChart
    type="line"
    :data="data"
    :options="options"
    @get-dataset-at-event="aa"
    @get-element-at-event="aa"
    @get-elements-at-event="aa"
  />
</template>

<script>
import { CChart } from '@coreui/vue-chartjs'
import { getStyle, hexToRgba } from '@coreui/utils/src'

function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}

export default {
  created() {
    this.test()
  },
  data: function () {
    return {
      dataDate: '',
      data: '',
      options: ''
    }
  },
  props: ['NameDate'],
  name: 'MainChartExample',
  components: {
    CChart
  },
  setup() {},
  methods: {
    test() {
      console.log(this.NameDate)
      this.data = {
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
          'Tháng 11 ',
          'Tháng 12'
        ],
        datasets: [
          {
            label: 'Số người ứng tuyển: ',
            backgroundColor: hexToRgba(getStyle('--cui-info'), 10),
            borderColor: getStyle('--cui-info'),
            pointHoverBackgroundColor: getStyle('--cui-info'),
            borderWidth: 2,
            data: [
              // 50, 100, 100, 60, 100, 100, 70, 100, 100, 90, 100, 100
              this.NameDate.countCvMoth1,
              this.NameDate.countCvMoth2,
              this.NameDate.countCvMoth3,
              this.NameDate.countCvMoth4,
              this.NameDate.countCvMoth5,
              this.NameDate.countCvMoth6,
              this.NameDate.countCvMoth7,
              this.NameDate.countCvMoth8,
              this.NameDate.countCvMoth9,
              this.NameDate.countCvMoth10,
              this.NameDate.countCvMoth11,
              this.NameDate.countCvMoth12
            ],
            fill: true
          }
        ]
      }

      this.options = {
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          x: {
            grid: {
              drawOnChartArea: false
            }
          },
          y: {
            ticks: {
              beginAtZero: true,
              maxTicksLimit: 5,
              stepSize: Math.ceil(250 / 5),
              max: 250
            }
          }
        },
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
        }
      }

      // return {
      //   data,
      //   options
      // }
    }
  }
}
</script>
