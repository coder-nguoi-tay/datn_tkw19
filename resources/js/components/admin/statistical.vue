<template>
  <div>
    <WidgetsStatsA />
    <CRow>
      <CCol :md="12">
        <CCard class="mb-4">
          <CCardBody style="height: 550px">
            <!-- <CRow>
              <CCol :sm="8">
                <div class="small text-medium-emphasis">
                  Thống kê năm: <b></b>
                </div>
              </CCol>
            </CRow> -->
            <CRow>
              <div class="col-6">
                <CCol :sm="4" class="d-flex" style="margin-left: 500px">
                  <form action="" method="get" class="row">
                    <div class="col-8 text-center">
                      <div class="small text-medium-emphasis">
                        <DatePicker
                          v-model="dataPayment"
                          name="date_payment"
                          year-picker
                          textInput
                        />
                      </div>
                    </div>
                    <div class="col-2">
                      <button class="btn btn-info text-white">Lọc</button>
                    </div>
                  </form>
                </CCol>
                Tổng doanh thu : {{ data.totalPayment }}
                <MainChartExample
                  :dataPayment="this.data"
                  style="height: 300px; max-height: 300px; margin-top: 40px"
                />
              </div>
              <div class="col-6">
                <CCol :sm="4" class="d-flex" style="margin-left: 500px">
                  <form action="" method="get" class="row">
                    <div class="col-8 text-center">
                      <div class="small text-medium-emphasis">
                        <DatePicker
                          name="date_new"
                          v-model="dataNew"
                          year-picker
                          textInput
                        />
                      </div>
                    </div>
                    <div class="col-2">
                      <button class="btn btn-info text-white">Lọc</button>
                    </div>
                  </form>
                </CCol>
                Tổng doanh thu :{{ data.totalJob }}
                <MainNewExample
                  :dataNew="this.totalNew"
                  style="height: 300px; max-height: 300px; margin-top: 40px"
                />
              </div>
            </CRow>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
    <!-- đasad -->
    <WidgetsStatsD />
  </div>
</template>

<script>
import MainChartExample from './chart/MainChartExample'
import MainNewExample from './chart/TotalNew'

import WidgetsStatsD from './chart/WidgetsStatsTypeD.vue'
import DatePicker from './../common/datePickerYear.vue'

export default {
  props: ['data', 'totalNew'],
  name: 'Dashboard',
  components: {
    MainChartExample,
    DatePicker,
    WidgetsStatsD,
    MainNewExample
  },
  data: function () {
    return {
      dataPayment: '',
      dataNew: ''
    }
  },
  created() {
    if (this.data.request.date_payment) {
      this.dataPayment = this.data.request.date_payment
    }
    if (this.data.request.date_new) {
      this.dataNew = this.data.request.date_new
    }
  },
  methods: {}
}
</script>

