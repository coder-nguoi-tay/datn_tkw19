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
  created() {},
  data: function () {
    return {
      dataDate: ''
    }
  },
  props: ['NameDate'],
  name: 'MainChartExample',
  components: {
    CChart
  },
  setup() {
    const data = {
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
            50, 100, 100, 60, 100, 100, 70, 100, 100, 90, 100, 100
            // timeData.countCvMoth1,
            // timeData.countCvMoth2,
            // timeData.countCvMoth3,
            // timeData.countCvMoth4,
            // timeData.countCvMoth5,
            // timeData.countCvMoth6,
            // timeData.countCvMoth7,
            // timeData.countCvMoth8,
            // timeData.countCvMoth9,
            // timeData.countCvMoth10,
            // timeData.countCvMoth11,
            // timeData.countCvMoth12
          ],
          fill: true
        }
      ]
    }

    const options = {
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

    return {
      data,
      options
    }
  },
  methods: {}
}
</script>
