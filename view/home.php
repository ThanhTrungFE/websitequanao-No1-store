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
                                    <img src="./view/assets/images/thatlung.jpg">
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
                                    <img src="./view/assets/images/baner-right-image-02.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Ví da</h4>
                                        <span>Ví da đẹp cho nam giới</span>
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
                                    <img src="./view/assets/images/vida.jpg">
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
                                    <img src="./view/assets/images/mu.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
foreach ($listcategory as $category) :
?>
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2><?= $category['name'] ?></h2>
                        <span>Chi tiết đến từng chi tiết là điều khiến No1-Store khác biệt so với các chủ đề
                            khác.</span>
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
                            $listsphome = loadsphome($category['categorys_id']);
                            foreach ($listsphome as $sp):
                                extract($sp);
                            ?>
                                <div class="item">
                                    <div class="thumb">
                                        <div class="hover-content">
                                            <ul>
                                                <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-star"></i></a></li>
                                                <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <img src="./uploades/<?php echo $sp['img'] ?>" alt="" width="150" height="450">
                                    </div>
                                    <div class="down-content">
                                        <h4><?= $sp['name'] ?></h4>
                                        <span><?= $sp['price'] ?></span>
                                        <ul class="stars">
                                            <li><i style="color:gold" class="fa fa-star"></i></li>
                                            <li><i style="color:gold" class="fa fa-star"></i></li>
                                            <li><i style="color:gold" class="fa fa-star"></i></li>
                                            <li><i style="color:gold" class="fa fa-star"></i></li>
                                            <li><i style="color:gold" class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endforeach;
?>
