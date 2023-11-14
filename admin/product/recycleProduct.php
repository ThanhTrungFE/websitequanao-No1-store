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
                    <li><a href="./addProduct.php">Thêm sản phẩm</a></li>
                    <li><a href="./recycleProduct.php">Thùng rác</a></li>
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
                                <h3 class="f_s_30 f_w_700 text_white">Thùng rác sản phẩm</h3>
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
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary">Khôi phục</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                                <td>@fat</td>
                                <td>@fat</td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary">Khôi phục</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary">Khôi phục</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-primary">Khôi phục</button></a>
                                    <a href=""><button type="button" class="btn btn-danger">Xóa</button></a>
                                </td>
                            </tr>
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
</body>

</html>