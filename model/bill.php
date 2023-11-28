<?php
  function insert_order($pttt,$ngaydathang,$cart_id,$user_id){
        $sql = "INSERT INTO orders(`pttt`,`ngaydathang`,`cart_id`,`users_id`) VALUES
        ('$pttt','$ngaydathang','$cart_id','$user_id')";
        pdo_execute($sql);
  }

 
   


?>