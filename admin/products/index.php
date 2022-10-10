<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/brands.php';
require_once '../../dao/categories.php';
require_once '../../dao/vouchers.php';
require_once '../../dao/products.php';
require_once '../../dao/types.php';
require_once '../../dao/product_type.php';
require_once '../../dao/product_image.php';
if (isset($_GET['show'])) {
  $get_id = $_GET['id'] ?? "";
  $image_product =  product_image_select_by_product($get_id);
  $row = product_select_by_id($get_id);
  $rows_types = product_type_select_by_type($get_id);
  $row_cate = loai_select_by_id($row['category_id']);
  $row_brand = brand_select_by_id($row['brand_id']);
  $row_voucher = voucher_select_by_id($row['voucher_id']);
  $VIEW_NAME = 'show.php';
} elseif (isset($_GET['create'])) {
  $rows_cate = loai_select_all();
  $rows_brand = brand_select_all();
  $rows_types = type_select_all();
  $rows_voucher = voucher_select_all();
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $price = $_POST['price'];
    $featured = $_POST['featured'] ?? '';
    $active = $_POST['active'] ?? '';
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $voucher_id = $_POST['voucher_id'];
    $brand_id = $_POST['brand_id'];
    // mảng
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($price == '') {
      $err['price'] = "Cần có dữ liệu";
    }
    if ($featured == '') {
      $err['featured'] = "Cần có dữ liệu";
    }

    if ($active == '') {
      $err['active'] = "Cần có dữ liệu";
    }

    if ($category_id == '') {
      $err['category_id'] = "Cần có dữ liệu";
    }
    if ($voucher_id == '') {
      $err['voucher_id'] = "Cần có dữ liệu";
    }
    if ($brand_id == '') {
      $err['brand_id'] = "Cần có dữ liệu";
    }
    $imgs = $_FILES['images'];
    $images = $_FILES['images']['name'];
    $images_tmp = $_FILES['images']['tmp_name'];
    $images_size = $_FILES['images']['size'];
    if ($err == []) {
      product_insert($name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id);
      $product_id = product_select_last_by_id();
    }
    foreach ($images as $key => $image) {
      if ($images_size[$key] <= 0) {
        $err['image'] = "cần có dữ liệu";
      } elseif ($images_size[$key] > 2 * 1024 * 1024) {
        $err['image'] = "Hình đã lớn hơn 2mb";
      } elseif ($images_size[$key] > 0 && $images_size[$key] <= 2 * 1024 * 1024) {

        $ext = pathinfo($image, PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        if ($ext == 'jpg' || $ext == 'png') {
        } else {
          $err['image'] = "không đúng định dạng";
        }
      }
      if ($err == []) {
        product_image_insert($image, $product_id[0]['id']);
        move_uploaded_file($images_tmp[$key], "../../content/images/" . $image);
      }
    }
    if ($err == []) {

      header("location: " . $ADMIN_URL . '/products/index.php');
      die;
    }
  }

  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['edit'])) {
  $rows_cate = loai_select_all();
  $rows_brand = brand_select_all();
  $rows_types = type_select_all();
  $rows_voucher = voucher_select_all();
  $get_id = $_GET['id'] ?? "";
  $image_product =  product_image_select_by_product($get_id);
  $row = product_select_by_id($get_id);
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $price = $_POST['price'];
    $featured = $_POST['featured'] ?? '';
    $active = $_POST['active'] ?? '';
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $voucher_id = $_POST['voucher_id'];
    $brand_id = $_POST['brand_id'];
    // mảng
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($price == '') {
      $err['price'] = "Cần có dữ liệu";
    }
    if ($featured == '') {
      $err['featured'] = "Cần có dữ liệu";
    }

    if ($active == '') {
      $err['active'] = "Cần có dữ liệu";
    }

    if ($category_id == '') {
      $err['category_id'] = "Cần có dữ liệu";
    }
    if ($voucher_id == '') {
      $err['voucher_id'] = "Cần có dữ liệu";
    }
    if ($brand_id == '') {
      $err['brand_id'] = "Cần có dữ liệu";
    }
    $imgs = $_FILES['images'];
    $images = $_FILES['images']['name'];
    $images_tmp = $_FILES['images']['tmp_name'];
    $images_size = $_FILES['images']['size'];
    if ($err == []) {
      // product_insert($name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id);
      product_update($row['id'], $name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id);
    }
    foreach ($images as $key => $image) {
      if ($images_size[$key] > 2 * 1024 * 1024) {
        $err['image'] = "Hình đã lớn hơn 2mb";
      } elseif ($images_size[$key] > 0 && $images_size[$key] <= 2 * 1024 * 1024) {

        $ext = pathinfo($image, PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        if ($ext == 'jpg' || $ext == 'png') {
        } else {
          $err['image'] = "không đúng định dạng";
        }
      }
      if ($err == []) {
        if ($images_size[$key] <= 0) {
          foreach ($image_product as $image) {
            product_image_update($image['id'], $image['image'], $image['product_id']);
          }
        } else {
          foreach ($image_product as $image) {
            product_image_delete($image['id']);
          }
          product_image_insert($image, $row['id']);
          move_uploaded_file($images_tmp[$key], "../../content/images/" . $image);
        }
      }
    }

    if ($err == []) {

      header("location: " . $ADMIN_URL . '/products/index.php');
      die;
    }
  }
  $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  product_delete($get_id);
  header("location: " . $ADMIN_URL . '/products/index.php');
  die;
} elseif (isset($_GET['add-link-to-type'])) {
  $get_id = $_GET['id'];
  $types = type_select_all();

  $rows = product_type_select_by_type($get_id);
  if (isset($_POST['submit'])) {
    $type_id = $_POST['type_id'];
    $quantity = $_POST['quantity'];
    $product_id = $get_id;
    $err = [];
    if ($type_id == '') {
      $err['type_id'] = "Mời chọn, nhanh";
    }
    if ($quantity == '') {
      $err['quantity'] = "Mời thêm, mau";
    }
    if ($err == []) {
      product_type_insert($type_id, $product_id, $quantity);
      header("location: index.php?add-link-to-type&id=$product_id");
    }
  }
  $VIEW_NAME = 'add-link-to-type.php';
} elseif (isset($_GET['delete-link-to-type'])) {
  $get_id = $_GET['id'];
  $product_id = $_GET['product_id'];
  product_type_delete($get_id);
  header("location: index.php?add-link-to-type&id=$product_id");
} else {
  $rows = product_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
