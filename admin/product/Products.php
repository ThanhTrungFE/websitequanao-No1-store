<section class="main_content dashboard_part large_header_bg">
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Danh sách sản phẩm</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5 mt-5">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Mô tả</th>
                            <!-- <th scope="col">Lượt xem</th> -->
                            <th scope="col">Danh mục</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listAll as $sanpham) :
                            extract($sanpham);
                        ?>
                            <tr>
                                <td><?php echo $sanpham['product_id'] ?></td>
                                <td><?php echo $sanpham['name'] ?></td>
                                <td><img src="../uploades/<?php echo $sanpham['img'] ?>" width="150" height="150"></td>
                                <td><?php echo $sanpham['price'] ?></td>
                                <td><?php echo $sanpham['description'] ?></td>
                                <td><?php echo $sanpham['category_id'] ?></td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary">Xem</button></a>
                                    <a href="index.php?act=suasp&product_id=<?php echo $sanpham['product_id'] ?>"><button type="button" class="btn btn-success">Sửa</button></a>
                                    <a href="index.php?act=xoasp&product_id=<?php echo $sanpham['product_id'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2023 - Designed by DucNgoc<a href="#"> <i class="ti-heart"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../../js/jquery1-3.4.1.min.js"></script>

<script src="../../js/metisMenu.js"></script>

<script src="../../js/custom.js"></script>