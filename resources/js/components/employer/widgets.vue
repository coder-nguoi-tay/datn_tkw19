<template>
  <div>
    <WidgetsStatsA />
    <CRow>
      <CCol :md="12">
        <CCard class="mb-4">
          <CCardBody style="height: 470px">
            <CRow>
              <CCol :sm="5">
                <div class="small text-medium-emphasis">
                  Thống kê năm: <b>{{ newdate }}</b>
                </div>
              </CCol>
            </CRow>
            <CRow>
              <MainChartExample
                :NameDate="this.data"
                :test="'123'"
                style="height: 300px; max-height: 300px; margin-top: 40px"
              />
            </CRow>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
    <!-- đasad -->
    <WidgetsStatsD :dataTotal="data.totalMonny" :dataYear="data" />
  </div>
</template>

<script>
import MainChartExample from './charts/MainChartExample'
import moment from 'moment'
import WidgetsStatsD from './charts/WidgetsStatsTypeD.vue'

export default {
  props: ['data'],
  name: 'Dashboard',
  components: {
    MainChartExample,

    WidgetsStatsD
  },
  data: function () {
    return {
      newdate: moment(new Date()).format('YYYY')
    }
  },
  setup() {
    const progressGroupExample1 = [
      { title: 'Thứ 2', value1: 34, value2: 78 },
      { title: 'Thứ 3', value1: 56, value2: 94 },
      { title: 'Thứ 4', value1: 12, value2: 67 },
      { title: 'Thứ 5', value1: 43, value2: 91 },
      { title: 'Thứ 6', value1: 22, value2: 73 },
      { title: 'Thứ 7', value1: 53, value2: 82 },
      { title: 'Thứ 8', value1: 9, value2: 69 }
    ]
    const progressGroupExample2 = [
      { title: 'Male', icon: 'cil-user', value: 53 },
      { title: 'Female', icon: 'cil-user-female', value: 43 }
    ]
    const progressGroupExample3 = [
      {
        title: 'Organic Search',
        icon: 'cib-google',
        percent: 56,
        value: '191,235'
      },
      { title: 'Facebook', icon: 'cib-facebook', percent: 15, value: '51,223' },
      { title: 'Twitter', icon: 'cib-twitter', percent: 11, value: '37,564' },
      { title: 'LinkedIn', icon: 'cib-linkedin', percent: 8, value: '27,319' }
    ]
    const tableExample = [
      {
        avatar: { status: 'success' },
        user: {
          name: 'Yiorgos Avraamu',
          new: true,
          registered: 'Jan 1, 2021'
        },
        country: { name: 'USA', flag: 'cif-us' },
        usage: {
          value: 50,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'success'
        },
        payment: { name: 'Mastercard', icon: 'cib-cc-mastercard' },
        activity: '10 sec ago'
      },
      {
        avatar: { status: 'danger' },
        user: {
          name: 'Avram Tarasios',
          new: false,
          registered: 'Jan 1, 2021'
        },
        country: { name: 'Brazil', flag: 'cif-br' },
        usage: {
          value: 22,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'info'
        },
        payment: { name: 'Visa', icon: 'cib-cc-visa' },
        activity: '5 minutes ago'
      },
      {
        avatar: { status: 'warning' },
        user: { name: 'Quintin Ed', new: true, registered: 'Jan 1, 2021' },
        country: { name: 'India', flag: 'cif-in' },
        usage: {
          value: 74,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'warning'
        },
        payment: { name: 'Stripe', icon: 'cib-cc-stripe' },
        activity: '1 hour ago'
      },
      {
        avatar: { status: 'secondary' },
        user: { name: 'Enéas Kwadwo', new: true, registered: 'Jan 1, 2021' },
        country: { name: 'France', flag: 'cif-fr' },
        usage: {
          value: 98,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'danger'
        },
        payment: { name: 'PayPal', icon: 'cib-cc-paypal' },
        activity: 'Last month'
      },
      {
        avatar: { status: 'success' },
        user: {
          name: 'Agapetus Tadeáš',
          new: true,
          registered: 'Jan 1, 2021'
        },
        country: { name: 'Spain', flag: 'cif-es' },
        usage: {
          value: 22,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'primary'
        },
        payment: { name: 'Google Wallet', icon: 'cib-cc-apple-pay' },
        activity: 'Last week'
      },
      {
        avatar: { status: 'danger' },
        user: {
          name: 'Friderik Dávid',
          new: true,
          registered: 'Jan 1, 2021'
        },
        country: { name: 'Poland', flag: 'cif-pl' },
        usage: {
          value: 43,
          period: 'Jun 11, 2021 - Jul 10, 2021',
          color: 'success'
        },
        payment: { name: 'Amex', icon: 'cib-cc-amex' },
        activity: 'Last week'
      }
    ]

    return {
      tableExample,
      progressGroupExample1,
      progressGroupExample2,
      progressGroupExample3
    }
  }
}
</script>
