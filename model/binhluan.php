<?php
    // function insert_binhluan($content,$time,$product_id,$users_id){
    //     $sql="INSERT INTO comments(`content`,`time`,`product_id`,`users_id`) VALUES
    //      ('$content','$time','$product_id','$users_id')";
    //     pdo_execute($sql);
    // }
    // function loadall_binhluan($product_id){
    //     $sql = "SELECT * FROM comments where product_id='".$product_id."'";
    //     $bl = pdo_query($sql);
    //     return $bl;
    // }

  
//comment
function insert_binhluan($content, $time, $stars, $product_id, $users_id)
{
    $sql = "INSERT INTO comments(`content`,`time`,`star`,`product_id`,`users_id`) VALUES
         ('$content','$time',' $stars,','$product_id','$users_id')";
    pdo_execute($sql);
}
function loadall_binhluan($product_id)
{
    $sql = "SELECT * FROM `comments` 
    LEFT JOIN users ON comments.users_id = users.users_id
    WHERE product_id = '$product_id'
    ";
    $bl = pdo_query($sql);
    return $bl;
}
    // function tatca_binhluan(){
    //     $sql = "SELECT * FROM binhluan";
    //     $bl = pdo_query($sql);
    //     return $bl;
    // }

    // function delete_binhluan($id){
    //     $sql = "DELETE FROM  binhluan WHERE id='$id'";
    //     pdo_execute($sql);
    // }
?>