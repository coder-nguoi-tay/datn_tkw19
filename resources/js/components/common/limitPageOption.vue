<template>
  <div class="pageSizeForm form-horizontal">
    <span class="left">表示件数</span>
    <select
      id="pageSize"
      class="form-select page-size-select cursor-point"
      name="limit"
      @change="onChange($event)"
    >
      <option
        v-for="value in limitPageOption"
        :key="'option_' + value"
        :value="value"
        v-bind:selected="value == newSizeLimit"
      >
        {{ value + "件" }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  props: {
    limitPageOption: {
      type: Array,
    },
    newSizeLimit: {
      type: Number,
    },
  },
  methods: {
    onChange(event) {
      let pathname = window.location.pathname;
      let search = window.location.search;
      if (search.indexOf("limit_page=") >= 0) {
        search = search.replace(
          /limit_page=([0-9]*)/gi,
          "limit_page=" + event.target.value
        );
      } else {
        if (search == "") {
          search = search + "?limit_page=" + event.target.value;
        } else {
          search = search + "&limit_page=" + event.target.value;
        }
      }
      // newURL = window.location.origin + pathname + search;
      window.location = window.location.origin + pathname + search;
    },
  },
};
</script>
