<?php
require_once '../global.php';
require_once '../dao/pdo.php';

if (isset($_GET['giohang'])) {

  $VIEW_NAME = 'gio_hang.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} elseif (isset($_GET['dangky'])) {

  $VIEW_NAME = 'dangky.php';
} elseif (isset($_GET['dangnhap'])) {
  require_once '../dao/users.php';
  if (isset($_POST['submit'])) {
    $err = [];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($password == "") {
      $err['password'] = "Dữ liệu đâu";
    }
    if ($email == "") {
      $err['email'] = "Dữ liệu đâu";
    }
    if ($err == []) {
      $user = users_select_by_email_password($email, $password);
      if (!empty($user)) {
        add_cookie('user_id', $user['id'], 1);
        add_cookie('name', $user['name'], 1);
        add_cookie('admin', $user['admin'], 1);
        check_login();
      } else {
        $err['user'] = "Sai tài khoản hoặc mật khẩu";
      }
    }
  }

  $VIEW_NAME = 'dangnhap.php';
} elseif (isset($_GET['taikhoan'])) {

  $VIEW_NAME = 'tai_khoan.php';
} elseif (isset($_GET['dangxuat'])) {
  delete_cookie('user_id');
  delete_cookie('name');
  delete_cookie('admin');
  header('Location: index.php');
  die;
} else {
  $VIEW_NAME = 'home.php';
}


include_once "./layout.php";
