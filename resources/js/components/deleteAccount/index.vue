<template>
  <UserHeader :data="{
    prev: {
      url: data.urlBack
    },
    page_name: 'アカウントを削除する'
  }">
  </UserHeader>
  <div class="container delete-account">
    <!-- Modal -->
    <div class="modal fade delete-modal" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog delete-modal-dialog">
        <div class="modal-content profile-modal-content">
          <img src="/assets/img/my_page/icon_modal_close.png" class="delete-modal-close" alt="" data-bs-dismiss="modal"
            aria-label="Close" />
          <div class="modal-body delete-modal-body">
            <div class="delete-modal-title">
              本当にアカウントを削除してもいいですか？
            </div>
            <div class="delete-modal-list">
              <div class="delete-modal-item d-flex align-items-center">
                <input type="checkbox" class="delete-modal-checkbox" id="checkedNames1" value="checkedNames1"
                  v-model="checkedNames" @change="changeCheckbox"/>
                <label for="checkedNames1" class="delete-modal-label">同じアカウントでログインできなくなることを確認しました。</label>
              </div>
              <div class="delete-modal-item d-flex align-items-center">
                <input type="checkbox" class="delete-modal-checkbox" id="checkedNames2" value="checkedNames2"
                  v-model="checkedNames" @change="changeCheckbox"/>
                <label for="checkedNames2" class="delete-modal-label">過去に参加/企画したイベント情報を確認できなくなることを確認しました。</label>
              </div>
              <div class="delete-modal-item d-flex align-items-center">
                <input type="checkbox" class="delete-modal-checkbox" id="checkedNames3" value="checkedNames3"
                  v-model="checkedNames" @change="changeCheckbox"/>
                <label for="checkedNames3" class="delete-modal-label">過去に参加/今までの入出金履歴、領収書の発行などできなくなることを確認しました。</label>
              </div>
              <div class="delete-modal-item d-flex align-items-center">
                <input type="checkbox" class="delete-modal-checkbox" id="checkedNames4" value="checkedNames4"
                  v-model="checkedNames" @change="changeCheckbox"/>
                <label for="checkedNames4" class="delete-modal-label">過去に参加/一度アカウントを削除すると二度と復元できなくなることを確認しました。</label>
              </div>
            </div>
            <button class="btn delete-modal-btn-next d-block" :disabled="submitNext" data-bs-toggle="modal"
              data-bs-target="#notiModal">アカウントを削除する</button>
            <button class="btn delete-modal-btn-close d-block" data-bs-dismiss="modal" aria-label="Close">戻る</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade delete-modal noti-modal" id="notiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog delete-modal-dialog">
        <div class="modal-content profile-modal-content">
          <img src="/assets/img/my_page/icon_modal_close.png" class="delete-modal-close" alt="" data-bs-dismiss="modal"
            aria-label="Close" />
          <div class="modal-body noti-modal-body">
            <img src="/assets/img/user/delete-account/img_noti.png" class="noti-modal-img" alt=""/>
            <div class="noti-modal-title">
              アカウントが凍結です
            </div>
            <div class="noti-modal-des">
              アカウントが凍結されているため退会することができません。アカウントの凍結を解除を希望する場合は、サービス運営者へ直接お問い合わせください。
            </div>
            <button class="btn delete-modal-btn-next d-block" :disabled="submitNext" data-bs-toggle="modal"
              data-bs-target="#deleteModal2">問い合わせる</button>
            <button class="btn delete-modal-btn-close d-block" data-bs-dismiss="modal" aria-label="Close">閉じる</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->
    <div class="block-preamble">
      <div class="block-preamble-heading">アカウントの削除をご検討の方へ</div>
      <div class="block-preamble-des">
        LaLa+アカウントはいつでも削除できますが、削除した後に思
        い直しても、復元できません。アカウント削除と同時に本サー
        ビスから退会扱いとなりこれまでの利用履歴の確認や公開情報
        へのアクセスができなくなります。それでもアカウントを削除
        したい方は以下の手順をお読みいただき、削除手続きをお進め ください。
      </div>
    </div>
    <div class="block-note">
      1. 本画面内の退会規約をお読みの上、退会規約へ同意してください。<br />
      2. 新たに表示されたポップアップの確認事項を再確認の上、アカウン
      トを削除するするボタンを選択してください。<br />
      3. 削除ボタン選択後設定されたメールアドレスへ通知が行われます。
      通知送信後アカウント削除の適正確認が行われます。<br />
      4.
      アカウント削除が可能なアカウントの場合は削除が行われ、アカウント削除完了通知が行われます。
    </div>
    <div class="block-rules">
      <div class="block-rules-title">退会規約</div>
      <div class="block-rules-frame">
        <div class="block-rules-scroll" @scroll="handleScroll">
          <div class="block-rules-heading">退会手続きについて</div>
          <div class="block-rules-des">
            ご利用者が退会を希望する場合には、本ページから弊社の指定する方法に従い退
            会申請を行うものとします。
          </div>
          <div class="block-rules-heading">退会にあたっての注意事項</div>
          <div class="block-rules-des">
            退会ご希望の方は、以下の事項にご注意下さい。<br />
            １．ご利用者が退会手続きを行った場合、参加履歴、企
            画履歴等のログイン後に閲覧できた情報は閲覧できなくなります。<br />
            ２．過去に投稿した企画、トーク履歴、公開プロフィールが削除さ
            れることはございません。<br />
            ３．退会後、同じメールアドレスまたは同じ電話番号でアカウント登録を行うことはできません。
          </div>
          <div class="block-rules-heading">企画公開中の退会について</div>
          <div class="block-rules-des">
            ご利用者が退会手続きを行った場合でも、企画が公開中である場合はイベントの終了まで退会することはできません。退会に失敗した場合、メールで通知が行われます。
          </div>
          <div class="block-rules-date">2022年3月12日 制定</div>
        </div>
      </div>
      <button class="btn btn-submit block-rules-button" :disabled="submitDisabled" data-bs-toggle="modal"
        data-bs-target="#deleteModal">
        退会規約に同意する
      </button>
      <!-- <button class="btn btn-submit block-rules-button" v-if="hasScrolledToBottom">退会規約に同意する</button> -->
    </div>
  </div>
</template>

<script>
import UserHeader from '../common/userHeader.vue'
export default {
  created: function () {},
  data() {
    return {
      checkedNames: [],
      hasScrolledToBottom: false,
      submitDisabled: true,
      submitNext: true,
    }
  },
  mounted() { },
  props: ['data'],
  components: { UserHeader },
  methods: {
    handleScroll: function (el) {
      if (
        el.srcElement.offsetHeight + el.srcElement.scrollTop >=
        el.srcElement.scrollHeight
      ) {
        this.submitDisabled = false
      }
    },
    changeCheckbox: function () { 
      if (this.checkedNames.length == 4) {
        this.submitNext = false;
      } else {
        this.submitNext = true;
      }
    }
  }
}
</script>
