<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Kiểm tra sản phẩm của chúng tôi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Sản Phẩm <?= $tendm ?></h2>
                    <span>Kiểm tra tất cả các sản phẩm của chúng tôi</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            foreach ($dssp as $sanpham) :
                extract($sanpham);
                $linksp = "index.php?act=chitietsanpham&idsp=" . $product_id;
            ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-star"></i></a></li>
                                    <li><a href="index.php?act=chitietsanpham&product_id=<?=$product_id?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="./uploades/<?php echo $img ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?= $sanpham['name'] ?></h4>
                            <span><?= $sanpham['price'] ?></span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            endforeach
            ?>
            <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                        <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>