<section class="main_content dashboard_part large_header_bg">
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Cập nhật sản phẩm</h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (is_array($sanpham)) {
                extract($sanpham);
            }
            ?>
            <div class="container pt-5 mt-5">
                <form action="index.php?act=suasp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ID sản phẩm</label>
                        <input type="text" class="form-control" name="idsp" id="exampleFormControlInput1" disabled value="<?php echo $sanpham['product_id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensp" id="exampleFormControlInput1" value="<?php echo $sanpham['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label><br>
                        <img src="../uploades/<?php echo $sanpham['img'] ?>" width="150" height="150"><br>
                        <input type="file" class="form-control mt-3" name="img" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Giá sản phẩm</label>
                        <input type="text" class="form-control" name="giasp" id="exampleFormControlInput1" value="<?php echo $sanpham['price'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                        <textarea class="form-control" name="mota" id="exampleFormControlTextarea1" rows="3"><?php echo $sanpham['description'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                        <select class="form-select" name="iddm" aria-label="Default select example">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) :
                                extract($danhmuc);
                            ?>
                                <?php
                                if ($iddm == $categorys_id) $s = "selected";
                                else $s = "";
                                echo '<option value="' . $categorys_id . '" ' . $s . '>' . $name . '</option>';
                                ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" name="update" class="btn btn-success">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2023 - Designed by Quang<a href="#"> <i class="ti-heart"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../js/jquery1-3.4.1.min.js"></script>

<script src="../../js/metisMenu.js"></script>

<script src="../../js/custom.js"></script>