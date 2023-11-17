<?php
ob_start();
include "model/pdo.php";
include "model/user.php";
include "model/danhmuc.php";
include "model/sanpham.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="./view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./view/assets/css/font-awesome.css">
    <link rel="stylesheet" href="./view/assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="./view/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="./view/assets/css/lightbox.css">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    include "view/header.php";
    $listcategory = loade_danhmuc();
    ?>
    <?php
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                if (isset($_GET['categorys_id']) && ($_GET['categorys_id'] > 0)) {
                    $iddm = $_GET['categorys_id'];
                } else {
                    $iddm = 0;
                }
                $dssp = loade_sanpham($kyw, $iddm);
                $tendm = loade_tendm($iddm);
                include "view/products.php";
                break;
            case 'chitietsanpham':
                if (isset($_GET['product_id']) && ($_GET['product_id'] > 0)) {
                    $id = $_GET['product_id'];
                    $ctsanpham = loadeone_sanpham($id);
                    // $spcungloai = loadeone_sanphamCungloai($id, $iddm);
                    include "view/productdetails.php";
                } else {
                    include "view/productdetails.php";
                }
                break;
            case 'register':
                if (isset($_POST['register'])) {
                    if (empty($_POST['user'])) {
                        $_SESSION['user'] = "Không được bỏ trống trường này";
                    } else {
                        $user = $_POST['user'];
                    }

                    if (empty($_POST['email'])) {
                        $_SESSION['email'] = "Không được bỏ trống trường này";
                    } else {
                        $email = $_POST['email'];
                    }

                    if (empty($_POST['password'])) {
                        $_SESSION['password'] = "Không được bỏ trống trường này";
                    } else {
                        $password = $_POST['password'];
                    }

                    if (empty($_POST['repassword'])) {
                        $_SESSION['repassword'] = "Không được bỏ trống trường này";
                    } else if ($_POST['repassword'] != $_POST['password']) {
                        $_SESSION['repassword'] = "Không đúng định dạng password";
                    }

                    if (!isset($_SESSION['user']) && !isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['repassword'])) {
                        insert_taikhoan($user, $email, $password);
                        $thongbao = "<span style='color: red'>Đăng ký tài khoản thành công</span>";
                    } else {
                        echo "Add không thành công";
                    }
                }
                include "view/register.php";
                break;
            case 'login':
                if (isset($_POST['login']) && $_POST['login']) {
                    $check = true;
                    if (empty($_POST['email'])) {
                        $check = false;
                        $_SESSION['email'] = "Không được để trống trường này";
                    } else {
                        $email = $_POST['email'];
                    }
                    if (empty($_POST['password'])) {
                        $check = false;
                        $_SESSION['password'] = "Không được để trống trường này";
                    } else {
                        $password = $_POST['password'];
                    }
                    if ($check == true) {
                        $checkuser = checkuser($email, $password);
                        if (is_array($checkuser)) {
                            $_SESSION['user'] = $checkuser;
                            header('Location: index.php');
                        } else {
                            $thongbao = "Tai khoan khong ton tai";
                        }
                    }
                }
                include 'view/login.php';
                break;
            case 'thoat':
                if (isset($_SESSION['user'])) {
                    unset($_SESSION['user']);
                    header("location: index.php");
                }
                break;
            case 'admin':
                include 'admin/index.php';
                break;
            case 'reviews':
                include 'view/reviews.php';
                break;
            case 'Forgotpassword':
                include 'view/Forgotpassword.php';
                break;
            case 'product':
                include 'view/products.php';
                break;
            case 'productdeltai':
                include 'view/productdetails.php';
                break;
            case 'gioithieu':
                include 'view/about.php';
                break;
            case 'lienhe':
                include 'view/contact.php';
                break;
            case 'cart':
                include 'view/cart.php';
                break;
        }
    } else {
        include "view/home.php";
    }
    ?>
    <!-- ***** Footer ***** -->
    <?php
    include "view/footer.php";
    ?>
    <!-- jQuery -->
    <script src="./view/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="./view/assets/js/popper.js"></script>
    <script src="./view/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="./view/assets/js/owl-carousel.js"></script>
    <script src="./view/assets/js/accordions.js"></script>
    <script src="./view/assets/js/datepicker.js"></script>
    <script src="./view/assets/js/scrollreveal.min.js"></script>
    <script src="./view/assets/js/waypoints.min.js"></script>
    <script src="./view/assets/js/jquery.counterup.min.js"></script>
    <script src="./view/assets/js/imgfix.min.js"></script>
    <script src="./view/assets/js/slick.js"></script>
    <script src="./view/assets/js/lightbox.js"></script>
    <script src="./view/assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="./view/assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>