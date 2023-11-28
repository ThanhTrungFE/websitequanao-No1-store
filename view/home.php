<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Chúng Tôi Là No1 - Store</h4>
                            <span>Uy tín &amp; chất lượng tạo nên thương hiệu</span>
                            <div class="main-border-button">
                                <a href="?act=gioithieu">Xem về chúng tôi</a>
                            </div>
                        </div>
                        <img src="./view/assets/images/left-banner-image.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Áo</h4>
                                        <span>Áo đẹp cho nam giới</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Áo</h4>
                                            <p>Nâng tầm đẳng cấp, toát lên vẻ sang trọng</p>
                                            <div class="main-border-button">
                                                <a href="index.php?act=sanpham">Khám phá</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="./view/assets/images/bannerao.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Quần</h4>
                                        <span>Quần đẹp cho nam giới</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Quần</h4>
                                            <p>Nâng tầm đẳng cấp, toát lên vẻ sang trọng</p>
                                            <div class="main-border-button">
                                                <a href="index.php?act=sanpham">Khám phá</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="./view/assets/images/bannerquan.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4 style="color:black;">Dây lưng</h4>
                                        <span style="color:green">Ví da đẹp cho nam giới</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Ví da</h4>
                                            <p>Nâng tầm đẳng cấp, toát lên vẻ sang trọng</p>
                                            <div class="main-border-button">
                                                <a href="index.php?act=sanpham">Khám phá</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="./view/assets/images/bannerdaylung (2).jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Nón</h4>
                                        <span>Nón đẹp cho nam giới</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Nón</h4>
                                            <p>Nâng tầm đẳng cấp, toát lên vẻ sang trọng</p>
                                            <div class="main-border-button">
                                                <a href="index.php?act=sanpham">Khám phá</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="./view/assets/images/bannermu.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- product  -->
<?php foreach($listcategory as $category):?>
<section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2><?php echo $category['name']?></h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <?php 
                            $listSphome_theodanhmuc = loadsphome($category['categorys_id']);
                            foreach($listSphome_theodanhmuc as $sanpham):
                                
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                                            <li><a href="index.php?act=chitietsanpham&product_id=<?php echo $sanpham['product_id']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="uploades/<?php echo $sanpham['img']?>" alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?php echo $sanpham['name']?></h4>
                                    <span>$ <?php echo $sanpham['price']?></span>
                                    <ul class="stars">
                                        <li><i style="color:gold" class="fa fa-star"></i></li>
                                        <li><i style="color:gold" class="fa fa-star"></i></li>
                                        <li><i style="color:gold" class="fa fa-star"></i></li>
                                        <li><i style="color:gold" class="fa fa-star"></i></li>
                                        <li><i style="color:gold" class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        endforeach;
    ?>
    <section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Khám phá sản phẩm của chúng tôi</h2>
                    <span>Chúng tôi là shop quần áo nam với sản phẩm đa dạng gồm nhiều loại áo, quần và các phụ kiện
                        chất lượng.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>Với những kinh nghiệm của mình No1-Store muốn đem lại những sản phẩm chất lượng tốt nhất
                            cho khách hàng.</p>
                    </div>
                    <p>Bằng sự nghiên cứu và kinh nghiệm của mình, chúng tôi No1-Store đã đưa các sản phẩm tốt nhất
                        với tầm giá đến khách hàng.</p>
                    <p>Cảm ơn các bạn đã ửng hộ và nếu cần giúp đỡ các bạn hãy chọn <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">hỗ trợ </a> để chúng tôi hỗ trợ và
                        tư vấn để đạt được trải nghiệm tốt nhất. Thank you.</p>
                    <div class="main-border-button">
                        <a href="products.html">Khám phá</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Ví da</h4>
                                <span>Bộ sưu tập mới nhất</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="./view/assets/images/explore-image-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="./view/assets/images/explore-image-02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Các loại khác nhau</h4>
                                <span>Hơn 304 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Truyền thông xã hội ***** -->
<section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Truyền thông xã hội</h2>
                    <span>Chi tiết đến từng chi tiết là điều khiến No1-Store khác biệt so với các chủ đề
                        khác.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Fashion</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-01.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-02.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Brand</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-03.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Makeup</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-04.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Leather</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-05.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Bag</h6>
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                    <img src="./view/assets/images/instagram-06.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Đặt mua ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>Bằng cách đăng ký nhận bản tin của chúng tôi, bạn có thể được giảm giá 30%</h2>
                    <span>Chi tiết đến từng chi tiết là điều khiến No1-Store khác biệt so với các chủ đề
                        khác.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Tên của bạn..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-5">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Địa chỉ email của bạn..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-2">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Vị trí cửa hàng:<br><span>Tầng 2 - Tòa P - Phòng H210</span></li>
                            <li>Điện thoại:<br><span>010-020-0340</span></li>
                            <li>Địa điểm văn phòng:<br><span>Trường Cao Đẳng FPT Polytechnic</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Giờ làm việc:<br><span>07:30 sáng - 9:30 tối hàng ngày</span></li>
                            <li>Email:<br><span>info@company.com</span></li>
                            <li>Truyền thông xã hội:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>,
                                    <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>