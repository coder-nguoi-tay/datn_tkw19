<template>
  <div class="container">
    <div class="row">
      <h4 class="title-page fw-bold text-center">公開内容確認</h4>
      <img src="/assets/img/user/common/hand.png" alt="" />

      <div class="section-detail">
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>イベント名</label>
          <div>
            <p class="info-event">
              参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!
            </p>
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require
            >イベント概要</label
          >
          <div>
            <nl2br
              tag="p"
              class="info-event nl2br"
              :text="'参加者自由!! 私を見つけて企画!! \n \n 世界中を飛び回る私を初めて見つけた方に1億円をプレゼント!!'"
            />
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>達成条件</label>
          <div>
            <nl2br
              tag="p"
              class="info-event nl2br"
              :text="'第一条\n〇〇〇〇〇〇〇〇'"
            />
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>タグ</label>
          <div>
            <p class="info-event"># 冒険　# 賞金</p>
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>報奨金額</label>
          <div>
            <p class="info-event">1,000,000円</p>
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>参加費</label>
          <div>
            <p class="info-event">0円</p>
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require
            >コレクション設定</label
          >
          <div>
            <p class="info-event">
              『アドベンチャー』属性のアイテムステータスを付与
            </p>
          </div>
        </div>
        <div class="mb-2">
          <label for="" class="label-event col-sm-3" require>公開日時</label>
          <div>
            <p class="info-event">2022年9月1日　20:00頃</p>
          </div>
        </div>
      </div>

      <div class="mt-5 mb-5">
        <div class="row px-4">
          <div class="col-4 pe-1 text-center btn-box p-0 my-0 mb-3">
            <button type="submit" class="btn btn-100 btn-w-100">戻る</button>
          </div>
          <div class="col-4 text-center btn-box p-0 my-0 mb-3">
            <button type="submit" class="btn btn-100 btn-w-100">
              下書き保存
            </button>
          </div>
          <div class="col-4 ps-1 text-center btn-box p-0 my-0 mb-3">
            <button type="submit" class="btn btn-100 btn-save btn-w-100">
              投稿
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {}
</script>

