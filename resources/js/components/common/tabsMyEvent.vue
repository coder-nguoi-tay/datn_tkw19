<template>
  <div class="tabs-event" :class="{ 'flex': variant === 'horizontal' }">
    <ul
      class="tabs-event-nav d-flex align-items-center justify-content-between"
      :class="{
          'flex items-center': variant === 'vertical'
      }"
    >
      <li
        v-for="(tab, index) in tabList"
        :key="index"
        class="tabs-event-link"
        :class="{
          'tabs-event-link-active': index + 1 === activeTab
        }"
      >
        <label
          :for="`${_uid}${index}`"
          v-text="tab"
          class="cursor-pointer block"
        />
        <input
          :id="`${_uid}${index}`"
          type="radio"
          :name="`${_uid}-tab`"
          :value="index + 1"
          v-model="activeTab"
          class="hidden"
        />
      </li>
    </ul>
    <template v-for="(tab, index) in tabList">
      <div
        :key="index"
        v-if="index + 1 === activeTab"
        class="tabs-event-body"
      >
        <slot :name="`tabPanel-${index + 1}`" />
      </div>
    </template>
  </div>
</template>

<script>
export default {
  props: {
    tabList: {
      type: Array,
      required: true
    },
    variant: {
      type: String,
      required: false,
      default: () => 'vertical',
      validator: (value) => ['horizontal', 'vertical'].includes(value)
    }
  },
  data() {
    return {
      activeTab: 1
    }
  }
}
</script>