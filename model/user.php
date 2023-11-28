<?php 
    function insert_taikhoan($user,$email,$password){
        $sql = "INSERT INTO `users` ( `users_name`, `email`, `password`) VALUES ('$user','$email','$password')";
        pdo_execute($sql);
    }

    function checkuser($email, $password)
{
    $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
    $p = pdo_query_one($sql);
    return $p;
}

    function updatetaikhoan($users_id,$user,$email,$phone,$address){
        $sql="UPDATE `users` SET `users_name`='$user',`email`='$email',`phone`='$phone',`address`='$address' WHERE users_id='$users_id'";
        pdo_execute($sql);
    }

    function load_user($user_id){
        $sql = "SELECT * FROM users WHERE users_id='$user_id'";
        $result= pdo_query_one($sql);
        return $result;
    }
    function loadall_taikhoan(){
        $sql = "SELECT * FROM users WHERE 1";
        $taikhoan = pdo_query($sql);
       
        return $taikhoan;
    }
?>