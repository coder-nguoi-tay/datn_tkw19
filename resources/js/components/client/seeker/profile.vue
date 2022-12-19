<template>
  <div>
    <label class="typo__label">Tagging</label>
    <Multiselect
      v-model="value"
      :options="options"
      :multiple="true"
      @tag="addTag"
    ></Multiselect>
    <pre class="language-json"><code>{{ value  }}</code></pre>
  </div>
</template>
<script>
import Multiselect from 'vue-multiselect'

export default {
  components: {
    Multiselect
  },
  data() {
    return {
      value: [{ name: 'Javascript', code: 'js' }],
      options: [
        { name: 'Vue.js', code: 'vu' },
        { name: 'Javascript', code: 'js' },
        { name: 'Open Source', code: 'os' }
      ]
    }
  },
  methods: {
    addTag(newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor(Math.random() * 10000000)
      }
      this.options.push(tag)
      this.value.push(tag)
    }
  }
}
</script>
<style>
.error {
  color: rgb(255, 80, 80);
  margin-left: 5px;
  margin-top: 5px;
}
.display-div_custom {
  border: solid 1px;
  border-radius: 4px;
  height: 170px;
  width: 200px;
}
.img-display_author {
  height: 168px;
  max-width: 200px;
}
.img {
  max-width: 135px;
  margin-left: 30px;
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>