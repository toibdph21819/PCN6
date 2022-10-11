<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/brands.php';
if (isset($_GET['create'])) {
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($image['size'] == 0) {
      $err['image'] = "Cần có hình";
    } elseif ($image['size'] > 2 * 1024 * 1024) {
      $err['image'] = "Hình đã lớn hơn 2mb";
    } elseif ($image['size'] > 0 && $image['size'] <= 2 * 1024 * 1024) {

      $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      if ($ext == 'jpg' || $ext == 'png') {
      } else {
        $err['image'] = "không đúng định dạng";
      }
    }

    if ($err == []) {
      brand_insert($name, $image['name']);
      move_uploaded_file($image['tmp_name'], "../../content/images/" . $image['name']);
      header("location: " . $ADMIN_URL . '/brands/index.php');
      die;
    }
  }

  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['edit'])) {
  $get_id = $_GET['id'] ?? "";
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $image = $_FILES['image'];
    $prev_img = $_POST['prev_img'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($image['size'] > 2 * 1024 * 1024) {
      $err['image'] = "Hình đã lớn hơn 2mb";
    } elseif ($image['size'] > 0 && $image['size'] <= 2 * 1024 * 1024) {

      $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      if ($ext == 'jpg' || $ext == 'png') {
      } else {
        $err['image'] = "không đúng định dạng";
      }
    }

    if ($err == []) {
      if ($image['size'] == 0) {
        $image['name'] = $prev_img;
      }
      brand_update($get_id, $name, $image['name']);
      if ($image['size'] > 0) {
        move_uploaded_file($image['tmp_name'], "../../content/images/" . $image['name']);
      }
      header("location: " . $ADMIN_URL . '/brands/index.php');
      die;
    }
  }
  $row =  brand_select_by_id($get_id);
  $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  brand_delete($get_id);
  header("location: " . $ADMIN_URL . '/brands/index.php');
  die;
} else {
  $rows = brand_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
