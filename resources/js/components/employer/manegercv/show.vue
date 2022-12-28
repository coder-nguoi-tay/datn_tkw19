<template>
  <div style="margin: 30px 0; padding: 0; box-sizing: border-box">
    <div class="main_gt">
      <div class="left_cv">
        <div class="box_img" style="overflow: hidden">
          <img
            :src="data.cv.images"
            alt="anh_cv"
            style="width: 100%; border: none"
          />
        </div>
        <div class="contact">
          <h3>Thông tin cá nhân</h3>
          <div class="box_contact">
            <div class="mail">
              <i class="fa-solid fa-envelope"></i>
              <!-- <p>{{ data.cv.email }}</p> -->
              <p>*****************</p>
            </div>
            <div class="mail">
              <i class="fa-solid fa-phone"></i>
              <!-- <p>{{ data.cv.phone }}</p> -->
              <p>*****************</p>
            </div>
            <div class="mail">
              <i class="fa-sharp fa-solid fa-location-dot"></i>
              <!-- <p>{{ data.cv.address }}</p> -->
              <p>*****************</p>
            </div>
            <div class="mail">
              <i class="fa-brands fa-facebook"></i>
              <!-- <p>{{ data.cv.address }}</p> -->
              <p>*****************</p>
            </div>
          </div>
        </div>
        <div class="contact">
          <h3>CÁC KỸ NĂNG</h3>
          <div class="box_contact">
            <div class="ky_nang">
              <h4 class="text-first">ngôn ngữ lập trình</h4>
              <p>
                <span v-for="skill in data.cv.getskill" :key="skill.id">
                  {{ skill.name }}
                </span>
              </p>
            </div>
            <div class="ky_nang">
              <h4 class="text-first">Kinh Nghiệm</h4>
              <p>{{ data.cv.experience_experience }}</p>
            </div>
          </div>
        </div>
        <div class="contact">
          <h3>CHỨNG CHỈ</h3>
          <div class="box_contact">
            <div class="ky_nang">
              <h4>2022</h4>
              <p>
                English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương
                đương Ielts 4.5)
              </p>
            </div>
            <div class="ky_nang">
              <h4>2023</h4>
              <p>
                English Topnotch 2.2 tại Trường Cao đẳng FPT Polytechnic (Tương
                đương Ielts 4.5)
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="right_cv">
        <div class="box_cv">
          <h2 class="name">{{ data.cv.user_name }}</h2>
          <h4>{{ data.cv.majors_name }}</h4>
        </div>
        <div class="box_cv mt_cv">
          <h3
            style="font-size: 18px; font-weight: 500; text-transform: uppercase"
          >
            MỤC TIÊU NGHỀ NGHIỆP
          </h3>
          <span class="bd_cv"></span>
          <p class="mt" v-if="data.cv.a">
            Ngắn hạn: Trong 1 năm tới, em sẽ trở thành một lập trình viên
            Back-end(PHP) chuyên nghiệp, tích lũy nhiều kinh nghiệm trong quá
            trình làm việc với các dự án.- Dài hạn: Trong vòng từ 2-3 năm tới,
            em sẽ trở thành lập trình viên fullstack, học hỏi thêm nhiều ngôn
            ngữ cũng như framework liên quan.
          </p>
          <p class="mt">- Chưa Cập Nhật</p>
        </div>
        <div class="box_cv">
          <h3
            style="font-size: 18px; font-weight: 500; text-transform: uppercase"
          >
            KINH NGHIỆM LÀM VIỆC
          </h3>
          <span class="bd_cv">dưqdqw</span>
          <div class="box_2_cv" style="margin-bottom: 30px">
            <div class="mt">- Chưa Cập Nhật</div>
          </div>
        </div>
        <div class="box_cv">
          <h3
            style="
              text-align: center;
              font-size: 18px;
              font-weight: 500;
              text-transform: uppercase;
            "
          >
            Hoạt động
          </h3>
          <span class="bd_cv">đewedwedew</span>
          <div class="box_2_cv" style="margin-bottom: 30px">
            <div class="mt">- Chưa Cập Nhật</div>
          </div>
        </div>
        <div class="box_cv">
          <h3
            style="
              text-align: center;
              font-size: 18px;
              font-weight: 500;
              text-transform: uppercase;
            "
          >
            dự án
          </h3>
          <span class="bd_cv">sdfsdfsdf</span>
          <div class="box_2_cv" style="margin-bottom: 30px">
            - Chưa Xác Nhận
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
  props: ['data']
}
</script>

 <style>
.main_gt {
  width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 350px 1fr;
  font-size: 12px !important;
}

.left_cv {
  height: auto;
  width: 100%;
  color: #bbbdbf;
  background: #284350;
  padding: 10px;
}

.left_cv .box_img {
  width: 100%;
  margin-bottom: 10px;
  border: 3px solid #ffc628;
  height: 300px;
}

.left_cv .box_img > img {
  border: 3px solid #ffc628;
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
  border-bottom: 1px solid #ffc628;
}

.left_cv > .contact .box_contact {
  line-height: 30px;
  margin: 10px 0;
}

.left_cv > .contact h4 {
  font-size: 12px;
  text-transform: capitalize;
  color: #f1f1f1;
}

.left_cv > .contact .box_contact .ky_nang {
  font-size: 14px;
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
  border-top: 1px solid #ffc628;
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

.main_gt .right_cv.title_cv > i {
  color: #ebad00;
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