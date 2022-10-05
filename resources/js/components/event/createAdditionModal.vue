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
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for=""
                >北海道・東北エリア</label
              >
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">北海道</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">青森県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">岩手県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">宮城県</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">秋田県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">山形県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">福島県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">関東エリア</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">東京都</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">千葉県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">埼玉県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">神奈川県</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">群馬県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">栃木県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">茨城県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">中部エリア</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">新潟県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">富山県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">石川県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">福井県</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">長野県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">山梨県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name="participation_condition_3"
              />
              <label class="form-check-label label" for="">静岡県</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="" name="" />
              <label class="form-check-label label" for="">岐阜県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">愛知県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">近畿エリア</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">三重都</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">滋賀県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">京都府</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">大阪府</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">兵庫県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">奈良県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">和歌山県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for=""
                >中国・四国エリア</label
              >
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">鳥取県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">島根県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">岡山県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">広島県</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">山口県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">徳島県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">香川県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">愛媛県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">中国・高知県</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">九州エリア</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">福岡県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">佐賀県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">長崎県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">熊本県</label>
            </div>
          </div>
          <div class="form-group d-flex flex-wrap">
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">大分県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">宮崎県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">鹿児島県</label>
            </div>
            <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id=""
                name=""
                value=""
              />
              <label class="form-check-label label" for="">沖縄県</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
