<template>
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-5">
          <!-- src="assets/images/login.jpg" -->
          <img
            src="public/assets/img/login.jpg"
            alt="login"
            class="login-card-img"
          />
        </div>
        <div class="col-md-7">
          <div class="card-body">
            <h3 class="login-card-description">Chào mừng bạn đến với ITWork</h3>
            <p class="login-card-description-text">
              Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp
              lý tưởng
            </p>
            <form action="#!" class="form-register-employer">
              <div class="form-group ">
                <label for="name">Họ và tên</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control"
                  placeholder="Nhập họ và tên của bạn"
                />
              </div>
              <div class="form-group ">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control"
                  placeholder="Nhập email của bạn"
                />
              </div>
              <div class="form-group mb-4 ">
                <label for="password">Mật khẩu</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control"
                  placeholder="Nhập mật khẩu"
                />
              </div>
              <div class="form-group mb-4 ">
                <label for="password_old">Xác nhận mật khẩu</label>
                <input
                  type="password_old"
                  name="password_old"
                  id="password_old"
                  class="form-control"
                  placeholder="Nhập lại mật khẩu"
                />
              </div>
              <input
                name="login"
                id="login"
                class="btn btn-block login-btn mb-4"
                type="button"
                value="Đăng ký"
              />
            </form>

            <p class="login-card-footer-text">
              Bạn đã có tài khoản?
              <a href="#!" class="text-reset">Đăng nhập ngay</a>
            </p>
            <nav class="login-card-footer-nav">
              <a href="#!">Bạn gặp khó khăn khi tạo tài khoản?</a>
              <br>
              <a href="#!">Vui lòng gọi tới số 096 252 3872 (giờ hành chính).</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
body {
  font-family: 'Karla', sans-serif;
  background-color: #d0d0ce;
  min-height: 100vh;
}

.brand-wrapper {
  margin-bottom: 19px;
}

.brand-wrapper .logo {
  height: 37px;
}

.login-card {
  border: 0;
  border-radius: 27.5px;
  box-shadow: 0 10px 30px 0 rgba(172, 168, 168, 0.43);
  overflow: hidden;
}

.login-card-img {
  border-radius: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.login-card .card-body {
  padding: 10px 60px 60px;
}

@media (max-width: 422px) {
  .login-card .card-body {
    padding: 35px 24px;
  }
}

.login-card-description {
  font-size: 25px;
  color: #000;
  font-weight: normal;
  margin-bottom: 10px;
}
.login-card-description-text{
  font-size: 14px;
  color: #000;
  width: 70%;
  text-align: justify;
 
  margin-bottom: 10px;
}

.login-card form {
  max-width: 420px;
}

.login-card .form-control {
  border: 1px solid #d5dae2;
  padding: 15px 25px;
  margin-bottom: 20px;
  min-height: 45px;
  font-size: 13px;
  line-height: 15;
  font-weight: normal;
}

.login-card .form-control::-webkit-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-moz-placeholder {
  color: #919aa3;
}

.login-card .form-control:-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::-ms-input-placeholder {
  color: #919aa3;
}

.login-card .form-control::placeholder {
  color: #919aa3;
}

.login-card .login-btn {
  padding: 13px 20px 12px;
  background-color: #000;
  border-radius: 4px;
  font-size: 17px;
  font-weight: bold;
  line-height: 20px;
  color: #fff;
  margin-bottom: 24px;
}

.login-card .login-btn:hover {
  border: 1px solid #000;
  background-color: transparent;
  color: #000;
}

.login-card .forgot-password-link {
  font-size: 14px;
  color: #919aa3;
  margin-bottom: 12px;
}

.login-card-footer-text {
 
  font-size: 16px;
  color: #0d2366;
  margin-bottom: 20px;
}

@media (max-width: 767px) {
  .login-card-footer-text {
    margin-bottom: 24px;
  }
}

.login-card-footer-nav a {
  font-size: 14px;
  color: #919aa3;
}

/*# sourceMappingURL=login.css.map */
</style>