
  <!-- breadcrumb start-->
  <div class="page-heading about-page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--================Checkout Area =================-->
  <form action="view/vnpay.php" method="post">
  <section class="checkout_area padding_top">

    <?php 
        if(isset($_SESSION['user'])){
            $name = $_SESSION['user']['users_name'];
            $phone = $_SESSION['user']['phone'];
            $email = $_SESSION['user']['email'];
            $address = $_SESSION['user']['address'];
        
        }else{
            $name ="" ;
            $phone = "" ;
            $email = "" ;
            $address = "" ;
        }
    
    
    
    ?>
    <div class="container">
     
      <div class="billing_details">
        <div class="row">
            <!-- thông tin khách hàng  -->
          <div class="col-lg-5">
            <h3>Thông tin khách hàng</h3>
    
              <div class="col-md-12 form-group p_star">
                <label for="">Họ</label>
                <input type="text" class="form-control" id="first" name="" value="<?php echo $name?>" />
                
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="last" name=""value="<?php echo $name?>"  />
           
              </div>
              <div class="col-md-12 form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="company" name="name" placeholder="Company name" value="<?php echo $name?>"  />
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="tel" name="tel"value="<?php echo $phone?>"  />
                
              </div>
              <div class="col-md-6 form-group p_star">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email?>" />
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="email" name="address" value="<?php echo $address?>" />
              </div>
              <div class="col-md-12 form-group p_star">
                <label for="">Địa chỉ cụ thể</label>
                <input type="text" class="form-control" id="email" name="compemailany" value="<?php echo $address?>" />
              </div>
        
          </div>

          <!-- end thông tin khách hàng  -->

          <!-- thông tin đơn hàng  -->
          <div class="col-lg-7">
            <div class="order_box" style="background:#f0eeee">
              <h2>Thông tin đơn hàng của bạn</h2>
              <table class="table">
              <thead  style="text-align:center;">
                <tr>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Kích cỡ</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Tiền</th>
                </tr>
              </thead>
              <?php
                $tongtien=0;
                $thanhtien=0;
                foreach($user as $checkout):
                    extract($checkout);
                    $tongtien = $price *$cart_quantity;
                    $thanhtien +=$tongtien; 
              ?>
              <tbody style="text-align:center;">
                <tr>
                  <td>
                    <span class="font-weight-bold"><?php echo $name;?></span>
                  </td>
                  <td><?php echo $size_quan?><?php echo $size_ao?><?php echo $size_phukien?></td>
                  <td><?php echo $price?></td>
                  <td>
                    <?php echo $cart_quantity?>
                  </td>
                  <td><?php echo $tongtien?></td>
                </tr>
              </tbody>
              <?php endforeach;?>
            </table>
              <ul class="list list_2">
                <li>
                  <a href="#">Tổng Tiền
                    <span>$ <?php echo $thanhtien?></span>
                  </a>
                </li>
                <li>
                  <a href="#">Phí giao hàng
                    <span>Flat rate: $50.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Thành tiền
                    <span><?php echo $thanhtien?></span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="thanhtoan" />
                  <label for="f-option5">Thanh toán khi nhận hàng</label>
                  <div class="check"></div>
                </div>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="thanhtoan" onclick="thanhtoan()"/>
                  <label for="f-option6">Vnpay</label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
              </div>
              
              <!-- <a class="btn_3" name href="#">Đặt hàng</a> -->
             <div style="text-align:center;">
                <input type="submit" name="dathang" value="Đặt hàng"  class="btn btn-dark" style="text-align:center;">
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>

  <?php
    if(isset($_POST['thanhtoan'])){
      header("Location: vnpay.php");
    }
  ?>