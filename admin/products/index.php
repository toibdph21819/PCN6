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

  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['insert'])) {
  //bình thường
  $name = $_POST['name'];
  $price = $_POST['price'];
  $featured = $_POST['featured'];
  $active = $_POST['active'];
  $description = $_POST['description'];
  $category_id = $_POST['category_id'];
  $voucher_id = $_POST['voucher_id'];
  $brand_id = $_POST['brand_id'];
  $product_id = $_POST['product_id'];
  // mảng
  $images = $_FILES['images'];
  $type_id = $_POST['type_id'];

  product_insert($name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id);
  foreach ($images as $image) {
    product_image_insert($image, $product_id);
  }
  $rows = product_select_all();
  $VIEW_NAME = 'list.php';
} elseif (isset($_GET['update'])) {
  $VIEW_NAME = 'update.php';
} elseif (isset($_GET['delete'])) {
  header("location: " . $ADMIN_URL . '/products/index.php');
  die;
} else {
  $rows = product_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
