<?php
function insert_sanpham($tensp, $giasp, $filename, $mota, $iddm)
{
    $sql = "INSERT INTO products(name,price,img,description,category_id) 
    VALUES ('$tensp','$giasp','$filename','$mota','$iddm')";
    pdo_execute($sql);
}
function listAll()
{
    $sql = "SELECT * FROM products";
    $listAll = pdo_query($sql);
    return $listAll;
}
function delete_sanpham($id)
{
    $id = $_GET['product_id'];
    $sql = "DELETE FROM products WHERE product_id = '$id';";
    pdo_execute($sql);
}
function loadeone_sanpham($id)
{
    $sql = "SELECT * FROM products WHERE product_id = '$id';";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($idsp, $tensp, $giasp, $filename, $mota, $iddm)
{
    $sql = "UPDATE products SET name='$tensp', price='$giasp',img='$filename',description='$mota',category_id='$iddm' WHERE product_id = '$idsp';";
    pdo_execute($sql);
}
function loadsphome($category_id)
{
    $sql = "SELECT * FROM products WHERE category_id = '$category_id';";
    $sp = pdo_query($sql);
    return $sp;
}
function loade_sanpham($kyw="", $iddm=0){
    $sql = "SELECT * FROM products
    where 1";
    if($kyw != ""){
        $sql.= " and name like '%".$kyw."%'";
    }
    if($iddm > 0){
        $sql.= " and category_id = '".$iddm."'";
    }
    $sql.=" order by product_id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loade_tendm($iddm){
    if($iddm>0){
        $sql = "SELECT * FROM categorys WHERE categorys_id = '$iddm';";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function loadeone_sanphamCungloai($id, $iddm){
    $sql = "SELECT * FROM categorys WHERE category_id=".$iddm." AND  product_id <> ".$id;
    $listsphome = pdo_query($sql);
    return $listsphome;
}