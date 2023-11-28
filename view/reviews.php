<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";
    $product_id = $_SESSION['product_id'];
    $dsbl = loadall_binhluan($product_id);
    ?>
    <div class="media mb-4 ps-2 pt-2">

        <div class="media-body">
            <?php
            foreach ($dsbl as $comment) :
                extract($comment);
            ?>
                <h6><?= $users_name ?><small> - <i><?= $time ?></i></small></h6>
                <div class="text-warning mb-2">
                    <?php
                    if ($comment['star'] == 5) {
                        echo '
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>';
                    }
                    else if ($comment['star'] == 4) {
                        echo '
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>';
                    }
                    else if ($comment['star'] == 3) {
                        echo '
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>';
                    }
                    else if ($comment['star'] == 2) {
                        echo '
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>';
                    }
                    else if ($comment['star'] == 1) {
                        echo '
                        <i class="fa fa-star"></i>';
                    }
                    ?>
                </div>
                <p><?= $content ?></p><br>
            <?php
            endforeach;
            ?>
        </div>

    </div>
</body>

</html>