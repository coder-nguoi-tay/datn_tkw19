<template>
  <div class="container my-event">
    <TabsMyEvent :tabList="tabList">
      <template v-slot:tabPanel-1>
        <PostEvent
          :imgPost="'/assets/img/user/common/post_1.jpg'"
          :title="'取引先の50周年祝いの品を選んでください!!'"
          :name="'商社太郎'"
          :fee="1000"
          :reward="500000"
          :conditions="'--- / 企画者により決定'"
          :period="'5日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
        >
        </PostEvent>

        <PostEvent
          :imgPost="'/assets/img/user/common/post_2.jpg'"
          :title="'お忍びデートスポットをリサーチしてください!!'"
          :name="'デート大輔'"
          :reward="10000"
          :conditions="'--- / 企画者により決定'"
          :period="'6日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
        >
        </PostEvent>
      </template>
      <!-- tabPanel-2 -->
      <template v-slot:tabPanel-2>
        <PostEvent
          :imgPost="'/assets/img/user/common/post_1.jpg'"
          :title="'取引先の50周年祝いの品を選んでください!!'"
          :name="'商社太郎'"
          :fee="1000"
          :reward="500000"
          :conditions="'--- / 企画者により決定'"
          :period="'5日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
          :note-btn="true"
        >
        </PostEvent>

        <PostEvent
          :imgPost="'/assets/img/user/common/post_2.jpg'"
          :title="'お忍びデートスポットをリサーチしてください!!'"
          :name="'デート大輔'"
          :reward="10000"
          :conditions="'--- / 企画者により決定'"
          :period="'6日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
        >
        </PostEvent>
      </template>
      <!-- tabPanel-3 -->
      <template v-slot:tabPanel-3>
        <PostEvent
          :imgPost="'/assets/img/user/common/post_1.jpg'"
          :title="'取引先の50周年祝いの品を選んでください!!'"
          :name="'商社太郎'"
          :fee="1000"
          :reward="500000"
          :conditions="'--- / 企画者により決定'"
          :period="'5日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
          :hidden-btn="true"
          :eventDone="true"
        >
        </PostEvent>

        <PostEvent
          :imgPost="'/assets/img/user/common/post_2.jpg'"
          :title="'お忍びデートスポットをリサーチしてください!!'"
          :name="'デート大輔'"
          :reward="10000"
          :conditions="'--- / 企画者により決定'"
          :period="'6日'"
          :tags="'# 娯楽　# 収益　# 探偵系'"
          :hidden-btn="true"
          :eventDone="true"
        >
        </PostEvent>
      </template>
    </TabsMyEvent>
  </div>
</template>

<script>
import TabsMyEvent from '../common/tabsMyEvent.vue';
import PostEvent from '../common/postEvent.vue';
export default {
  created: function () {},
  data() {
    return {
      tabList: ['投稿中(2)', '参加中(1)', '終了済み(0)']
    };
  },
  mounted() {},
  props: ['data'],
  components: { TabsMyEvent, PostEvent },
  methods: {}
};
</script>
