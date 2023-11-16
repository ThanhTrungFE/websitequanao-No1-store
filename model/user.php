<?php 
    function insert_taikhoan($user,$email,$password){
        $sql = "INSERT INTO `users`( `users_name`, `email`, `password`,) VALUES ('$user','$email','$password')";
    }
?>