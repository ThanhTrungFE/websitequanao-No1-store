<?php
    function insert_size($size){
        $sql =" INSERT INTO `size`(`size`) VALUES ('$size')";
        pdo_execute($sql);
    }

    function load_size(){
        $sql = "SELECT * FROM `size`";
        $result = pdo_query($sql);
        return $result;
    }
    function delete_size($size_id){
        $sql = "DELETE FROM `size` WHERE size_id = '$size_id'";
        pdo_execute($sql);
    }
?>