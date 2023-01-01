<template>
  <Toggle
    name="status_profile"
    v-model="status_profile"
    class="toggle-flag"
    on-label=""
    off-label=""
    id="status_profile"
    @change="ChangeStatus"
  />
</template>

<script>
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
import axios from 'axios'
import { Notyf } from 'notyf'
export default {
  props: ['data', 'route'],
  created() {
    if (this.data == 0) {
      this.status_profile = false
    } else {
      this.status_profile = true
    }
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      status_profile: ''
    }
  },
  components: {
    Toggle
  },
  methods: {
    ChangeStatus(e) {
      let that = this
      if (e == true) {
        axios
          .post(that.route, {
            _token: Laravel.csrfToken,
            data: 1
          })
          .then((a) => {
            const notyf = new Notyf({
              duration: 6000,
              position: {
                x: 'right',
                y: 'bottom'
              },
              types: [
                {
                  type: 'error',
                  duration: 8000,
                  dismissible: true
                }
              ]
            })
            return notyf.success(a.data.message)
          })
      } else {
        axios
          .post(that.route, {
            _token: Laravel.csrfToken,
            data: 0
          })
          .then((a) => {
            const notyf = new Notyf({
              duration: 6000,
              position: {
                x: 'right',
                y: 'bottom'
              },
              types: [
                {
                  type: 'error',
                  duration: 8000,
                  dismissible: true
                }
              ]
            })
            return notyf.success(a.data.message)
          })
      }
    }
  }
}
</script>

<style>
</style>