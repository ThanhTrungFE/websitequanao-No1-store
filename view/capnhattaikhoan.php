
  <section class="checkout_area padding_top " style="width:50%;margin:auto">
    <div class="container" style="width:100%;margin:auto">
      <div class="billing_details">
        <div class="row">
            <!-- thông tin khách hàng  -->
       
          <div class="col-lg-5">
            <h3>Cập nhật thông tin khách hàng</h3>
            <form action="?act=capnhattaikhoan" method="post">
              <div class="col-md-12 form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="user" placeholder="Company name" value="<?php echo $users_name;?>"  />
                <span style="color:red;"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" name="tel"value="<?php echo $phone?>"  />
                <span style="color:red;"><?php echo isset($_SESSION['tel']) ? $_SESSION['tel'] : '' ?></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Email</label>
                <input type="text" class="form-control"  name="email" value="<?php echo $email?>" />
                <span style="color:red;"><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control"  name="address" value="<?php echo $address?>" />
                <span style="color:red;"><?php echo isset($_SESSION['address']) ? $_SESSION['address'] : '' ?></span>
              </div>
              <div class="col-md-12 " style="text-align: center;">
              <input type="submit" name="capnhat" value="Cập nhật tài khoản" class="btn btn-dark">
              </div>
              
          </div>

          <!-- end thông tin khách hàng  -->

          <!-- thông tin đơn hàng  -->
         
        </div>
      </div>
      </div>
  </section>
  </form>
