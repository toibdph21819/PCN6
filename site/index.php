<?php
require_once '../global.php';
if (isset($_GET['giohang'])) {

  $VIEW_NAME = 'gio_hang.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} elseif (isset($_GET['dangky'])) {

  $VIEW_NAME = 'dangky.php';
} elseif (isset($_GET['dangnhap'])) {

  $VIEW_NAME = 'dangnhap.php';
} elseif (isset($_GET['taikhoan'])) {

  $VIEW_NAME = 'tai_khoan.php';
} else {
  $VIEW_NAME = 'home.php';
}


include_once "./layout.php";
