<?php
require_once '../global.php';
require_once '../dao/pdo.php';
require_once '../dao/users.php';

if (isset($_GET['giohang'])) {

  $VIEW_NAME = 'gio_hang.php';
} elseif (isset($_GET['thanhtoan'])) {

  $VIEW_NAME = 'thanhtoan.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} elseif (isset($_GET['sp'])) {
  $VIEW_NAME = 'products.php';
} elseif (isset($_GET['ctsp'])) {
  $VIEW_NAME = 'chitietsp.php';
} elseif (isset($_GET['doimk'])) {
  $VIEW_NAME = 'doimatkhau.php';
} elseif (isset($_GET['quenmk'])) {
  $VIEW_NAME = 'quenmk.php';
} elseif (isset($_GET['dangky'])) {

  $VIEW_NAME = 'dangky.php';
} elseif (isset($_GET['dangnhap'])) {
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
  $id = get_cookie('user_id');
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $avatar = $_FILES['avatar'];
    $avatar_name = $avatar['name'];
    $prev_img = $_POST['prev_img'];
    $err = [];
    if ($email == '') {
      $err['email'] = "Cần có dữ liệu";
    }
    if ($avatar['size'] > 2 * 1024 * 1024) {
      $err['avatar'] = "Hình đã lớn hơn 2mb";
    } elseif ($avatar['size'] > 0 && $avatar['size'] <= 2 * 1024 * 1024) {

      $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      if ($ext == 'jpg' || $ext == 'png') {
      } else {
        $err['avatar'] = "không đúng định dạng";
      }
    }

    if ($err == []) {
      if ($avatar['size'] == 0) {
        $avatar['name'] = $prev_img;
      }
      users_update($id, $name, $email, $avatar['name'], $phone);
      if ($avatar['size'] > 0) {
        move_uploaded_file($avatar['tmp_name'], "../content/images/" . $avatar['name']);
      }
    }
  }
  $row = users_select_by_id($id);
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
