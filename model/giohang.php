<?php
   

    // function loadcart_theo_iduser($user_id){
    //     $sql ="SELECT * FROM cart 
    //     LEFT JOIN variants ON variants.Variant_id=cart.Variant_id
    //     LEFT JOIN products ON products.product_id=variants.product_id
    //     WHERE cart.users_id='$user_id'";
    //     $result = pdo_query($sql);
    //     return $result;
    // }

   

    // function addtocart($soluong,$user_id,$variant_id){
    //     $sql = "INSERT INTO `cart`(`quantity`,`users_id`,`Variant_id`)
    //         VALUES('$soluong','$user_id','$variant_id')";
    //         pdo_execute($sql);
    // }
    // function load_variants($product_id,$size){
    //     $sql = "SELECT * FROM variants WHERE product_id='$product_id' AND size_quan = '$size' OR size_ao='$size' OR size_phukien='$size'";
    //     $result = pdo_query_one($sql);
    //     return $result;
    // }
    function addtocart($quantity,$users_id, $Variant_id){
        $sql = "INSERT INTO `cart`(`cart_quantity`, `users_id`, `Variant_id`) 
        VALUES ('$quantity','$users_id','$Variant_id')";
         pdo_execute($sql);
    }
    
    
    function load_variant($product_id, $size){
        $sql = "SELECT * FROM variants 
        WHERE product_id = '$product_id' 
        AND size_quan = '$size' OR size_ao = '$size' OR size_phukien = '$size'";
        $result= pdo_query_one($sql);
        return $result;
    }
    

    function load_all_variant(){
        $sql = "SELECT * FROM variants WHERE 1";
        $result = pdo_query($sql);
        return $result;
    }
    function cart_load_all($user_id) {
        $sql = "SELECT * FROM cart 
        LEFT JOIN  variants ON variants.Variant_id = cart.Variant_id
        LEFT JOIN products ON products.product_id = variants.product_id
        WHERE cart.users_id = '$user_id'";
        return pdo_query($sql);
    }


  



// hàm dành cho check out 
function load_cart($variant,$user_id){
    $sql = "SELECT * FROM cart 
    WHERE variants = '$variant' 
    AND users_id='$user_id";
    $result= pdo_query_one($sql);
    return $result;
}
function load_cart2($user_id){
    $sql = "SELECT * FROM cart WHERE users_id='$user_id'";
    $result= pdo_query($sql);
    return $result;
}




?>