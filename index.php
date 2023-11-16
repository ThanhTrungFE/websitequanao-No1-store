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
    include "view/header.php";
    ?>
    <?php
    if ((isset($_GET['act'])) && ($_GET['act']) != "") {
        $act = $_GET['act'];
        switch ($act) {
            case 'login':
                include 'view/login.php';
                break;
            case 'register':
                include "view/register.php";
                break;
            case 'password':
                include "view/Forgotpassword.php";
                break;
            case 'gioithieu':
                include "view/about.php";
                break;
            case 'lienhe':
                include "view/contact.php";
                break;
            case 'hoidap':
                include "view/Forgotpassword.php";
                break;
            default:
                # code...
                break;
        }
    } else {
        include "view/home.php";
    }
    ?>
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