<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 18:12:16 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin GROUP9</title>
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <link rel="stylesheet" href="../css/metisMenu.css">
    <link rel="stylesheet" href="../css/style1.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="crm_body_bg">
    <?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    $listdanhmuc = loade_danhmuc();
    ?>
    <?php
    if ((isset($_GET['act'])) && ($_GET['act']) != "") {
        $act = $_GET['act'];
        switch ($act) {
            case 'addddm':
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    if (empty($_POST['tenloai'])) {
                        $_SESSION['tenloai'] = "Không được bỏ trống";
                    } else {
                        $tenloai = $_POST['tenloai'];
                    }
                    if (!isset($_SESSION['tenloai'])) {
                        isert_danhmuc($tenloai);
                    }
                }
                include 'category/addCategory.php';
                break;
            case 'listdm':
                $listdanhmuc = loade_danhmuc();
                include 'category/category.php';
                break;
            case 'xoadm':
                if (isset($_GET['categorys_id']) && ($_GET['categorys_id'] > 0)) {
                    delete_danhmuc($_GET['categorys_id']);
                }
                $listdanhmuc = loade_danhmuc();
                include 'category/category.php';
                break;
            case 'suadm':
                if (isset($_GET['categorys_id']) && ($_GET['categorys_id'] > 0)) {
                    $dm = loadeone_danhmuc($_GET['categorys_id']);
                }
                include 'category/updateCatefory.php';
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($tenloai, $id);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loade_danhmuc();
                include 'category/category.php';
                break;
                //product
            case 'addproduct':
                if (isset($_POST['themmoi'])) {
                    if (empty($_POST['tensp'])) {
                        $_SESSION['tensp'] = "Không được bỏ trống";
                        $_SESSION['giasp'] = "Không được bỏ trống";
                        $_SESSION['mota'] = "Không được bỏ trống";
                        $_SESSION['iddm'] = "Không được bỏ trống";
                        $_SESSION['img'] = "Không được bỏ trống";
                    } else {
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $iddm = $_POST['iddm'];
                        $filename = $_FILES['img']['name'];
                        $duongdan = "../uploades/";
                        $chiden = $duongdan . basename($_FILES['img']['name']);
                        if (move_uploaded_file($_FILES['img']['tmp_name'], $chiden)) {
                        } else {
                        }
                    }
                    if (!isset($_SESSION['tensp']) && !isset($_SESSION['giasp']) && !isset($_SESSION['mota']) && !isset($_SESSION['iddm']) && !isset($_SESSION['img'])) {
                        insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                    }
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loade_danhmuc();
                include 'product/addProduct.php';
                break;
            case 'listproduct':
                $listAll = listAll();
                include 'product/Products.php';
                break;
            case 'xoasp':
                if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                    delete_sanpham($_GET['product_id']);
                }
                $listAll = listAll();
                include 'product/Products.php';
                break;
            case 'suasp':
                if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                    $sanpham = loadeone_sanpham($_GET['product_id']);
                }
                $listdanhmuc = loade_danhmuc();
                $listAll = listAll();
                include 'product/updateProduct.php';
                break;
            case 'updatesp':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $idsp = $_POST['idsp'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $filename = $_FILES['img']['name'];
                    $duongdan = "../uploades/";
                    $chiden = $duongdan . basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $chiden)) {
                    } else {
                    }
                    update_sanpham($idsp, $tensp, $giasp, $filename, $mota, $iddm);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loade_danhmuc();
                $listAll = listAll();
                include 'product/Products.php';
                break;
        }
    } else {
        include "home.php";
    }
    ?>
    <script src="../js/jquery1-3.4.1.min.js"></script>

    <script src="../js/popper1.min.js"></script>

    <script src="../js/bootstrap.min.html"></script>

    <script src="../js/metisMenu.js"></script>

    <script src="../js/chart.min.js"></script>
    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/datepicker/datepicker.js"></script>
    <script src="vendors/datepicker/datepicker.en.js"></script>
    <script src="vendors/datepicker/datepicker.custom.js"></script>
    <script src="vendors/chartjs/roundedBar.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/am_chart/amcharts.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="vendors/apex_chart/apex-chart2.js"></script>
    <script src="vendors/apex_chart/apex_dashboard.js"></script>
    <script src="vendors/echart/echarts.min.js"></script>
    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="../js/dashboard_init.js"></script>
    <script src="../js/custom.js"></script>
</body>


</html>