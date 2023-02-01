<template>
  <CChart type="line" :data="data" :options="options" />
</template>
<script>
import { CChart } from '@coreui/vue-chartjs'
import { getStyle } from '@coreui/utils/src'
export default {
  props: ['dataNew'],
  name: 'new',
  components: {
    CChart
  },
  created() {
    this.updateDataNew()
  },
  data: function () {
    return {
      data: '',
      options: ''
    }
  },
  methods: {
    updateDataNew() {
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
            label: 'Doanh thu',
            // backgroundColor: hexToRgba(getStyle('--cui-info'), 10),
            borderColor: getStyle('--cui-info'),
            pointHoverBackgroundColor: getStyle('--cui-info'),
            borderWidth: 2,
            data: [
              this.dataNew.countNewMoth1,
              this.dataNew.countNewMoth2,
              this.dataNew.countNewMoth3,
              this.dataNew.countNewMoth4,
              this.dataNew.countNewMoth5,
              this.dataNew.countNewMoth6,
              this.dataNew.countNewMoth7,
              this.dataNew.countNewMoth8,
              this.dataNew.countNewMoth9,
              this.dataNew.countNewMoth10,
              this.dataNew.countNewMoth11,
              this.dataNew.countNewMoth12
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
    }
  }
}
</script>

