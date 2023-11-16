<?php 
    function insert_taikhoan($user,$email,$password){
        $sql = "INSERT INTO `users`( `users_name`, `email`, `password`,) VALUES ('$user','$email','$password')";
        pdo_execute($sql);
    }

    function checkuser($email, $password)
    {
        $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
        $p = pdo_query_one($sql);
        return $p;
    }
    

?>