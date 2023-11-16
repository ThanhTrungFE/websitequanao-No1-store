<?php
function isert_danhmuc($tenloai)
{
    $sql = "INSERT INTO `categorys`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function loade_danhmuc()
{
    $sql = "SELECT * FROM categorys order by categorys_id";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function delete_danhmuc($id)
{
    $id = $_GET['categorys_id'];
    $sql = "DELETE FROM categorys WHERE categorys_id = '$id';";
    pdo_execute($sql);
}
function loadeone_danhmuc($id)
{
    $id = $_GET['categorys_id'];
    $sql = "SELECT * FROM categorys WHERE categorys_id = '$id';";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($tenloai, $id)
{
    $sql = "UPDATE `categorys` SET `name`='$tenloai' where categorys_id='$id';";
    pdo_execute($sql);
}
