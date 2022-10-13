<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/vouchers.php';
if (isset($_GET['create'])) {
  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['insert'])) {
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $discount = $_POST['discount'];
    $due = $_POST['due'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($discount == '') {
      $err['discount'] = "Cần có dữ liệu";
    }
    if ($due == '') {
      $err['due'] = "Cần có dữ liệu";
    }
    if ($err == []) {
      voucher_insert($name, $discount, $due);
      header("location: " . $ADMIN_URL . '/vouchers/index.php');
      die;
    }
  }
  $VIEW_NAME = 'create.php';
} elseif (isset($_GET['edit'])) {
  $get_id = $_GET['id'] ?? "";
  $row =  voucher_select_by_id($get_id);
  $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['update'])) {
  $get_id = $_GET['id'] ?? "";
  if (isset(($_POST['submit']))) {
    //bình thường
    $name = $_POST['name'];
    $discount = $_POST['discount'];
    $due = $_POST['due'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($discount == '') {
      $err['discount'] = "Cần có dữ liệu";
    }
    if ($due == '') {
      $err['due'] = "Cần có dữ liệu";
    }
    if ($err == []) {
      voucher_update($get_id, $name, $discount, $due);
      header("location: " . $ADMIN_URL . '/vouchers/index.php');
      die;
    }
  }
  $row =  voucher_select_by_id($get_id);
  $VIEW_NAME = 'edit.php';
} elseif (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  voucher_delete($get_id);
  header("location: " . $ADMIN_URL . '/vouchers/index.php');
  die;
} else {
  $rows = voucher_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
