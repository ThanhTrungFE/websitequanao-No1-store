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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body class="crm_body_bg">


    <!-- menu  -->
    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="../index.php" class="text-decoration-none">
                <span style="color: black;" class="h4 text-uppercase  px-2">No1 - Store</span>
            </a>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="../index.php" aria-expanded="false">
                    <div></div>
                    <span>Bảng điều khiển</span>
                </a>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Sản phẩm</span>
                </a>
                <ul>
                    <li><a href="./Products.php">Danh sách sản phẩm</a></li>
                    <li><a href="../addProduct.php">Thêm sản phẩm</a></li>
                    <li><a href="../recycleProduct.php">Thùng rác</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Danh mục</span>
                </a>
                <ul>
                    <li><a href="../category/category.php">Danh sách danh mục</a></li>
                    <li><a href="../category/addCategory.php">Thêm danh mục</a></li>
                    <li><a href="../category/rycycleCategory.php">Thùng rác</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Tài khoản</span>
                </a>
                <ul>
                    <li><a href="../taikhoan/account.php">Danh sách tài khoản</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Bình luận</span>
                </a>
                <ul>
                    <li><a href="../binhluan/comment.php">Danh sách bình luận</a></li>
                    <li><a href="../binhluan/rycycleCmt.php">Thùng rác</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Đơn hàng</span>
                </a>
                <ul>
                    <li><a href="../orders/order.php">Danh sách đơn hàng</a></li>
                    <li><a href="#">Thùng rác</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div></div>
                    <span>Thống kê</span>
                </a>
                <ul>
                    <li><a href="data_table.php">Data Tables</a></li>
                    <li><a href="bootstrap_table.php">Bootstrap</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- end menu  -->

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
                <div class="container pt-5 mt-5">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ID sản phẩm</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled value="123">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="Sản phẩm 1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label><br>
                            <img src="../image/card.jpg" alt="" width="200px" height="250px">
                            <input type="file" class="form-control mt-3" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="Giá sản phẩm 1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Sản phẩm tuyệt vời</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Áo polo</option>
                                <option value="1">Áo chống nắng</option>
                                <option value="2">Áo phông</option>
                                <option value="3">Áo khoác</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Cập nhật</button>
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
</body>

</html>