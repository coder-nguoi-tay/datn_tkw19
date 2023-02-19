<template>
  <CChart type="line" :data="data" :options="options" />
</template>

<script>
import { CChart } from '@coreui/vue-chartjs'
import { getStyle } from '@coreui/utils/src'
function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}
export default {
  props: ['dataPayment'],
  name: 'Payment',
  components: {
    CChart
  },
  created() {
    console.log(this.dataPayment.countPaymentMoth1)
    this.updateData()
  },
  data: function () {
    return {
      data: '',
      options: '',
      countPaymentMoth1: this.dataPayment.countPaymentMoth1,
      countPaymentMoth2: this.dataPayment.countPaymentMoth2,
      countPaymentMoth3: this.dataPayment.countPaymentMoth3,
      countPaymentMoth4: this.dataPayment.countPaymentMoth4,
      countPaymentMoth5: this.dataPayment.countPaymentMoth5,
      countPaymentMoth6: this.dataPayment.countPaymentMoth6,
      countPaymentMoth7: this.dataPayment.countPaymentMoth7,
      countPaymentMoth8: this.dataPayment.countPaymentMoth8,
      countPaymentMoth9: this.dataPayment.countPaymentMoth9,
      countPaymentMoth10: this.dataPayment.countPaymentMoth10,
      countPaymentMoth11: this.dataPayment.countPaymentMoth11,
      countPaymentMoth12: this.dataPayment.countPaymentMoth12
    }
  },
  methods: {
    updateData() {
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
              this.countPaymentMoth1,
              this.countPaymentMoth2,
              this.countPaymentMoth3,
              this.countPaymentMoth4,
              this.countPaymentMoth5,
              this.countPaymentMoth6,
              this.countPaymentMoth7,
              this.countPaymentMoth8,
              this.countPaymentMoth9,
              this.countPaymentMoth10,
              this.countPaymentMoth11,
              this.countPaymentMoth12
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

