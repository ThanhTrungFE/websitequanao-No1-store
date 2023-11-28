
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Đăng kí tài khoản</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="vh-200" style="background-color: white;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-12">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-8 col-lg-5 d-none d-md-block">
                                <img src="view/assets/images/ao-khoac-gio-nam-dep-cao-cap.jpg" alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;height: 100%;" />
                            </div>
                            <div class="col-md-4 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="index.php?act=register" method="post">
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; font-size: 30px;">
                                            Đăng ký</h5>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Tên đăng nhập</label>
                                            <input type="text" name="user" id="form2Example17"
                                                class="form-control form-control-lg" />
                                                <span style="color:red;"><?php echo isset($error_user)?$error_user:''?></span>

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Địa chỉ Email</label>
                                            <input type="email" name="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                                <span style="color:red;"><?php echo isset($error_email)?$error_email:''?></span>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Mật khẩu</label>
                                            <input type="password" name="password" id="form2Example27"
                                                class="form-control form-control-lg" />
                                                <span style="color:red;"><?php echo isset($error_pass)?$error_pass:''?></span>

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27"> Nhập Lại Mật khẩu</label>
                                            <input type="password" name="repassword" id="form2Example27"
                                                class="form-control form-control-lg" />
                                                <span style="color:red;"><?php echo isset($error_repass)?$error_repass:''?></span>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <input name="register" value="Đăng kí" class="btn btn-dark btn-lg btn-block"
                                                type="submit">
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Bạn đã có tài khoản? <a
                                                href="?act=login" style="color: red;">Đăng nhập ở đây</a></p>
                                                <?php if (isset($thongbao))
                                                    echo $thongbao;
                                                ?>
                                            </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  