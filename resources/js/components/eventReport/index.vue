<template>
  <div class="container event-report">
    <div class="report-block-top">
      <div class="d-flex justify-content-between report-title">
        <div class="report-title-left">取引先の50周年祝いの品を選んでください!!</div>
        <div class="report-title-right d-flex">
          詳細
          <img src="" alt="">
        </div>
      </div>
      <div class="report-meta d-flex align-items-center">
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_fee.png" alt="" />
          </div>
          <div class="report-meta-des">{{ formatPrice(1000) }}円</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_reward.png" alt="" />
          </div>
          <div class="report-meta-des">{{ formatPrice(500000) }}円</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_period.png" alt="" />
          </div>
          <div class="report-meta-des">残り5日</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_noti.png" alt="" />
          </div>
          <div class="report-meta-des"><b>商社太郎</b></div>
        </div>
      </div>
      <div class="report-condition">
        <div class="report-heading">達成条件</div>
        <div class="report-condition-des">
          取引先が喜びそうなお祝いの品の写真と商品名を報告してくれた方を達成承
          諾したいと考えています。
        </div>
      </div>
      <div class="report-reward">
        <div class="report-heading">報酬</div>
        <b class="report-reward-note">
          残額　\200,000/\1,000,000　残枠　2枠/3枠
        </b>
        <div class="report-reward-table">
          <div class="table-reward">
            <div class="table-reward-row align-items-center d-flex table-reward-row-active">
              <div class="table-reward-name">1番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\800,000</div>
              <div class="table-reward-slot">残り0枠</div>
            </div>
            <div class="table-reward-row align-items-center d-flex">
              <div class="table-reward-name">2番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\150,000</div>
              <div class="table-reward-slot">残り1枠</div>
            </div>
            <div class="table-reward-row align-items-center d-flex">
              <div class="table-reward-name">3番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\50,000</div>
              <div class="table-reward-slot">残り1枠</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="report-content report-frame">
      <div class="report-frame-heading">申請内容</div>
      <textarea class="report-content-textarea" name="" placeholder="ここに申請する内容を記載ください。"
      ></textarea>
      <div class="d-flex justify-content-between align-items-center report-content-file">
        <div class="report-content-label">ファイルを添付する</div>
        <!-- <input type="file" id="report-content-input"> -->
        <input
          type="file"
          name="uploadFile"
          id="uploadFile"
          style="display: none"
          @change="addFile('addFile', $event)"
        />
        <label class="report-content-input" for="uploadFile">ファイルを選択</label>
      </div>
      <div v-if="files[0]" class="upfile-list">
        <div class="upfile-item d-flex align-items-center" v-for="(file, index) in files" :key="index">
          <div class="upfile-item-icon d-flex">
            <img src="/assets/img/user/common/icon_link_simplei.png" alt="">
          </div>
          <span class="upfile-item-name">{{ file.title }}</span>
          <div class="upfile-item-button" @click="removeFile(file, index)">+</div>
        </div>
        <span v-if="errorFile" class="error">ファイルを入力してください。</span>
      </div>
      <button class="report-content-button btn-red">申請する</button>
    </div>
    <div class="report-history report-frame">
      <div class="report-frame-heading">申請履歴</div>
      <div class="history-upfile-list">
        <template v-for="(item, index) in historyUpFile" :key="index" >
          <HistoryUpFile 
            :title="item.title" 
            :files="item.files" 
            :isActive="item.isActive"
          >
          </HistoryUpFile>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
import HistoryUpFile from '../common/historyUpFile.vue';
export default {
  created: function () {},
  data() {
    return {
      hiden_list: true,
      files: [
        {
          title: "S_23243242.jpg",
        },
        {
          title: "S_23243242.HEIC",
        },
      ],
      errorFile: false,
      historyUpFile: [
        {
          date: "2022年3月12日<br>22:00:12",
          title: "これでどうでしょうか？表と裏を記載しています。",
          files:
            [
              "S_23243241.HEIC",
              "S_23243241.HEIC"
            ],
        },
        {
          date: "2022年3月12日<br>22:00:12",
          title: "これでどうでしょうか？",
          files:
            [
              "S_23243241.HEIC"
            ],
        },
        {
          date: "2022年3月12日<br>22:00:12",
          title: "これでどうでしょうか？",
          files:
            [
              "S_23243241.HEIC"
            ],
        }
      ]
    };
  },
  mounted() {},
  props: ['data'],
  components: { HistoryUpFile },
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(',', '.');
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    },
    removeFile(file, index){
      if(this.files.length > 1){
        this.$parent.$emit('remove-from-cart', file.id);
        this.files.splice(index, 1);
      }else{
        this.errorFile = true;
      }
    },
    addFile (type,e) {
      const files = e.target.files || e.dataTransfer.files
      const typeImport = files.length > 0 ? files[0].type : ''
      if((typeImport.split('/')[0] == 'image') || (typeImport.split('/')[0] == 'audio') || (files[0].name.split('.')[1] == 'heic') || (files[0].name.split('.')[1] == 'HEIC') || (files[0].name.split('.')[1] == 'heif') || (files[0].name.split('.')[1] == 'HEIF')){
        this.files.push({
          title: files[0].name
        })
        this.hiden_list=false
      }
      // this.fileInputKey++;
    }
  }
};
</script>
