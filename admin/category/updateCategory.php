<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/Products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 18:12:24 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>

    <link rel="stylesheet" href="../vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="../vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="../../css/metisMenu.css">

    <link rel="stylesheet" href="../../css/style1.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body class="crm_body_bg">
    <section class="main_content dashboard_part large_header_bg">
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 text_white">Cập nhật danh mục</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (is_array($dm)) {
                    extract($dm);
                }
                ?>
                <div class="container pt-5 mt-5">
                    <form action="index.php?act=updatedm" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Id</label>
                            <input type="text" name="maloai" class="form-control" id="exampleFormControlInput1" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                            <input type="text" name="tenloai" class="form-control" id="exampleFormControlInput1" value="<?php if (isset($name) && $name != "") echo $name; ?>">
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <input type="" name="id" class="form-control" id="exampleFormControlInput1" value="<?php if (isset($categorys_id) && ($categorys_id > 0)) echo $categorys_id; ?>">
                            <button type="reset" class="btn btn-secondary mx-2">Nhập lại</button>
                            <input type="submit" name="capnhat" class="btn btn-success mx-2" value="Cập nhật">
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
                            <p>2023 - Designed by quang<a href="#"> <i class="ti-heart"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end main  -->
    <script src="../../js/jquery1-3.4.1.min.js"></script>

    <script src="../../js/metisMenu.js"></script>

    <script src="../../js/custom.js"></script>
</body>

</html>