<?php
session_start();
require 'connect.php';

$update = $_POST['update'];
$product = $_POST['product'];
$price = $_POST['price'];
$categoryId = $_POST['categoryId'];
$update_product = $_POST['update_product'];
$update_id = $_POST['update_id'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$image = "../assets/images/" . $filename;
$delete = $_POST['delete'];
$year = $_POST['year'];
$country_id = $_POST['country'];

if ($update) {
    $productdata = mysqli_query($connect, "
      select * from products where id = $update
    ");

    $_SESSION['productdata'] = mysqli_fetch_assoc($productdata);
}

if ($product) {
    mysqli_query($connect, "
      INSERT INTO `products`
      VALUES 
      (null, '$product', '$categoryId', '$price','$image', '$year', '$country_id')
    ");

    move_uploaded_file($tempname, $image);

} else if ($delete) {
    mysqli_query($connect, "
      delete from products where id = $delete
    ");
} else if ($update_id) {
    mysqli_query($connect, "
      update products 
      set product = '$update_product', 
      price = '$price' 
      where id = '$update_id'
    ");
}

header('Location: ../adminproduct.php');
?>