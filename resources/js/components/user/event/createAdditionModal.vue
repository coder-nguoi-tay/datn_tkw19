<template>
  <div
    class="modal fade addition-modal"
    id="additionModal"
    tabindex="-1"
    aria-labelledby="additionModal"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">実施地域を選択する</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="check-all"
                value="1"
              />
              <label class="form-check-label label" for="check-all">全国</label>
            </div>
          </div>
          <template v-for="area in data.areas" :key="area.id">
            <div class="form-group">
              <div class="form-check">
                <input
                  type="checkbox"
                  name="area_id[]"
                  class="form-check-input chk-area"
                  :id="'area_id_' + area.id"
                  :value="area.id"
                  :checked="areaIds.find((x) => x == area.id) ? true : false"
                />
                <label
                  class="form-check-label label"
                  :for="'area_id_' + area.id"
                  >{{ area.label }}</label
                >
              </div>
            </div>
            <div class="form-group d-flex flex-wrap">
              <div
                class="form-check"
                v-for="pref in data.prefectures.filter(
                  (x) => x.area_id == area.id
                )"
                :key="pref.id"
              >
                <input
                  type="checkbox"
                  class="form-check-input chk-pref"
                  :id="'pref_id_' + pref.id"
                  name="pref_id[]"
                  :data-area-id="area.id"
                  :value="pref.id"
                />
                <label
                  class="form-check-label label"
                  :for="'pref_id_' + pref.id"
                  >{{ pref.label }}</label
                >
              </div>
            </div>
          </template>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import $ from 'jquery'
export default {
  components: {},
  props: ['data', 'eventArea'],
  data: function () {
    return {
      areaIds: [],
      prefIds: []
    }
  },
  created() {
    let that = this
    $(document).on('change', '#check-all', function () {
      $('.chk-area').prop('checked', false)
      $('.chk-pref').prop('checked', false)
      if ($(this).is(':checked')) {
        $('.chk-area').prop('checked', true)
        $('.chk-pref').prop('checked', true)
      }
      that.updateArea()
    })
    $(document).on('change', '.chk-area', function () {
      $('#check-all').prop('checked', false)
      if ($('.chk-area:checked').length == $('.chk-area').length) {
        $('#check-all').prop('checked', true)
      }
      $('.chk-pref[data-area-id="' + $(this).attr('value') + '"]').prop(
        'checked',
        false
      )
      if ($(this).is(':checked')) {
        $('.chk-pref[data-area-id="' + $(this).attr('value') + '"]').prop(
          'checked',
          true
        )
      }
      that.updateArea()
    })
    $(document).on('change', '.chk-pref', function () {
      let areaId = $(this).attr('data-area-id')
      $('.chk-area[value="' + areaId + '"]').prop('checked', false)
      if (
        $('.chk-pref[data-area-id="' + areaId + '"]').length ==
        $('.chk-pref[data-area-id="' + areaId + '"]:checked').length
      ) {
        $('.chk-area[value="' + areaId + '"]').prop('checked', true)
      }
      $('#check-all').prop('checked', false)
      if ($('.chk-pref').length == $('.chk-pref:checked').length) {
        $('#check-all').prop('checked', true)
      }
      that.updateArea()
    })
    if (this.editMode) {
      this.areaIds = this.data.event.events_area.area_id
      this.prefIds = this.data.event.events_area.pref_id
    }
  },
  methods: {
    updateArea() {
      let data = {
        area_id: [],
        pref_id: [],
        check_all: $('#check-all').is(':checked')
      }
      $('.chk-area:checked').each(function () {
        data.area_id.push($(this).attr('value'))
      })
      $('.chk-pref:checked').each(function () {
        data.pref_id.push($(this).attr('value'))
      })
      this.$emit('updateArea', data)
    }
  }
}
</script>
