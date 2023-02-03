<template>
  <div>
    <div class="main_gt">
      <div class="left_cv">
        <div class="box_img">
          <img
            class="custom-image-cv"
            style="
              width: 340px;
              height: 300px;
              padding-top: 10px !important;
              object-fit: cover;
            "
            :src="'/' + data.cv.images"
            alt=""
          />
        </div>
        <div class="box-content">
          <div class="contact">
            <h3>Thông tin cá nhân</h3>
            <div class="box_contact">
              <div class="mail">
                <i class="fas fa-envelope"></i>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id == data.CheckUser
                  "
                >
                  {{ data.cv.email }}
                </p>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id != data.CheckUser
                  "
                >
                  **************
                </p>
              </div>
              <div class="mail">
                <i class="fas fa-phone"></i>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id == data.CheckUser
                  "
                >
                  {{ data.cv.phone }}
                </p>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id != data.CheckUser
                  "
                >
                  *****************
                </p>
              </div>
              <div class="mail">
                <i class="fas fa-map-marker-alt"></i>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id == data.CheckUser
                  "
                >
                  {{ data.cv.address }}
                </p>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id != data.CheckUser
                  "
                >
                  ********************
                </p>
              </div>
              <div class="mail">
                <i class="fab fa-facebook"></i>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id == data.CheckUser
                  "
                >
                  <a :href="data.cv.link_fb">{{ data.cv.link_fb }}</a>
                </p>
                <p
                  v-if="
                    data.cv.employer_payment[0].employer_id != data.CheckUser
                  "
                >
                  <a :href="data.cv.link_fb">*************</a>
                </p>
              </div>
            </div>
          </div>
          <div class="contact">
            <h3>CÁC KỸ NĂNG</h3>
            <div class="box_contact">
              <div
                class="ky_nang"
                v-for="(item, index) in JSON.parse(this.data.cv.skill)"
              >
                <b>- {{ item.name }}</b>
                <p>- {{ item.value }}</p>
              </div>
            </div>
          </div>
          <div class="contact">
            <h3>CHỨNG CHỈ</h3>
            <div class="box_contact">
              <div class="ky_nang">
                <p v-html="data.cv.certificate"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right_cv">
        <div class="box_cv">
          <h2 class="name">{{ data.cv.user.name }}</h2>
          <h4>{{ data.cv.majors }}</h4>
        </div>
        <div class="box_cv mt_cv">
          <h3>
            <p
              style="
                font-size: 18px;
                font-weight: 500;
                text-transform: uppercase;
              "
            >
              MỤC TIÊU NGHỀ NGHIỆP
            </p>
          </h3>
          <span class="bd_cv"></span>
          <p class="mt" v-html="data.cv.target"></p>
        </div>
        <div class="box_cv">
          <h3
            style="font-size: 18px; font-weight: 500; text-transform: uppercase"
          >
            KINH NGHIỆM LÀM VIỆC
          </h3>
          <span class="bd_cv"></span>
          <div class="box_2_cv">
            <div
              class="mt"
              v-for="(item, index) in JSON.parse(this.data.cv.project)"
            >
              <div class="title_cv">
                <i class="fab fa-creative-commons-nd"></i>
                <h4 v-html="item.name"></h4>
              </div>
              <div class="mt_cv">
                <p v-html="item.value"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  created() {
    console.log(this.data.cv)
  },
  data: function () {
    return {
      csrfToken: Laravel.csrfToken
    }
  },
  props: ['data']
}
</script>

 <style>
.box_cv h3 {
  border: 1px solid rgb(12 112 148 / 100%) !important;
  border-radius: 8px;
  width: 250px;
  text-align: center;
  padding: 8px 5px;
  position: absolute;
  top: -20px;
  color: #284350;
  background: white;
}

.box_cv .mt {
  margin: 40px 0;
}

.title_cv {
  display: flex;
  gap: 10px;
  align-items: center;
}

.title_cv > i {
  color: rgb(12 112 148 / 100%) !important;
  margin-top: -10px;
}

.main_gt {
  width: 100% !important;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 350px 1fr;
  font-size: 12px !important;
}

.left_cv {
  height: auto;
  width: 100%;
  color: #bbbdbf;
  background: #0a6586 !important;
  padding: 0px !important;
}
.box-content {
  height: auto;
  width: 100%;
  padding: 10px;
}
.left_cv .box_img {
  width: 100%;
  margin-bottom: 10px;
  background: rgb(12 112 148 / 100%);
}

.left_cv .box_img > img {
  padding: 10px;
  height: 300px !important;
}

.left_cv > .contact {
  margin: 0 auto;
  width: 100%;
}

.box_contact > .mail {
  display: grid;
  grid-template-columns: 25px 1fr;
  color: #bbbdbf;
  font-size: 14px;
  font-weight: 400;
  gap: 5px;
}

.box_contact > .mail > p {
  margin: 0;
}

.box_contact > .mail > i {
  text-align: center;
  margin: auto 0;
  color: beige;
}

.left_cv .contact > h3 {
  color: #f1f1f1;
  text-transform: uppercase;
  margin: 10px 0;
  font-size: 18px;
  border-bottom: 1px solid rgb(244, 244, 244) !important;
}

.left_cv > .contact .box_contact {
  line-height: 30px;
  margin: 10px 0;
}

.left_cv > .contact h4 {
  font-size: 16px;
  text-transform: capitalize;
  color: #f1f1f1;
}

.left_cv > .contact .box_contact .ky_nang {
  font-size: 16px;
  color: #f1f1f1;
}

.text-first {
  text-transform: capitalize;
}

.text-first::first-letter {
  text-transform: capitalize;
}

.main_gt .right_cv {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  background: white !important;
}

.main_gt .right_cv .box_cv {
  border-top: 1px solid rgb(12 112 148 / 100%) !important;
  position: relative;
  padding-left: 35px;
  color: #284350;
  font-size: 14px;
  padding-right: 30px;
  text-align: justify;
}

.main_gt .right_cv .box_cv:first-child {
  padding-top: 20px;
  border-top: none;
  text-transform: uppercase;
  padding-bottom: 20px;
}

.main_gt .right_cv .box_cv .name {
  font-size: 28px;
  color: #284350;
  margin-bottom: 20px;
}

.main_gt .right_cv .box_cv:first-child > h4 {
  font-size: 24px;
  color: #284350;
  margin-bottom: 20px;
}

.main_gt .right_cv > .box_cv:first-child h4 {
  border: none;
  border-radius: none;
}

.main_gt .right_cv > .box_cv > h3 {
  border: 1px solid #ffbb00;
  border-radius: 8px;
  width: 250px;
  text-align: center;
  padding: 8px 5px;
  position: absolute;
  top: -20px;
  color: #284350;
  background: white;
}

.main_gt .right_cv > .box_cv > h3 > {
  font-size: 14px;
}

.main_gt .right_cv .box_cv > .mt {
  margin: 40px 0;
}

.main_gt .right_cv.title_cv {
  display: flex;
  gap: 10px;
  align-items: center;
}

.main_gt .right_cv.title_cv > h4 {
  color: #284350;
}

.main_gt i {
  margin: auto 0;
  color: beige;
}

.main_gt .right_cv.mt .h4 {
  font-weight: 600;
  margin: 10px 0;
}

.main_gt .right_cv .mt_cv {
  font-size: 14px;
  text-align: justify;
}

.main_gt .right_cv.mt_cv > .h4 {
  color: #284350;
  padding: 10px 0;
  font-size: 14px;
}
</style>