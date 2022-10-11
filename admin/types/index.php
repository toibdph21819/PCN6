<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/types.php';
require_once '../../dao/product_type.php';
if (isset($_GET['create'])) {
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($err == []) {
      types_insert($name);
      header("location: " . $ADMIN_URL . '/types/index.php');
      die;
    }
  }

  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['edit'])) {
  $get_id = $_GET['id'] ?? "";
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];

    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($err == []) {
      types_update($get_id, $name);
      header("location: " . $ADMIN_URL . '/types/index.php');
      die;
    }
  }
  $row =  types_select_by_id($get_id);
  $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  types_delete($get_id);
  header("location: " . $ADMIN_URL . '/types/index.php');
  die;
} else {
  $rows = type_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
