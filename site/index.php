<?php
require_once '../global.php';
require_once '../dao/pdo.php';
require_once '../dao/users.php';
require_once '../dao/categories.php';
require_once '../dao/brands.php';
require_once '../dao/products.php';
require_once '../dao/product_image.php';
require_once '../dao/product_type.php';
require_once '../dao/reviews.php';
require_once '../dao/order_detail.php';
require_once '../dao/orders.php';
require_once '../dao/recipients.php';

if (isset($_GET['giohang'])) {
  if (!get_cookie('user_id')) {
    header('Location: index.php?dangnhap');
    die;
  }
  $user_id =  get_cookie('user_id');
  $detail_order = order_detail_select_user($user_id);
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    order_detail_delete($id);
    header('Location: index.php?giohang');
    die;
  }

  $VIEW_NAME = 'gio_hang.php';
} elseif (isset($_GET['thanhtoan'])) {
  if (!get_cookie('user_id')) {
    header('Location: index.php?dangnhap');
    die;
  }
  $err = [];
  $user_id =  get_cookie('user_id');
  $detail_order = order_detail_select_user($user_id);
  $last_order = order_select_last_by_id();
  if (isset($_POST['submit'])) {
    $msg = $_POST['msg'] ?? '';
    $total = $_POST['sum'];
    $unit_prc = $_POST['unit_price'];

    if ($err == []) {
      orders_insert($total, $unit_prc, $msg);
      foreach ($detail_order as $detail) {
        order_detail_add_ordersid($last_order[0]['id'], $detail['id']);
      }
      header('Location: index.php');
      exit;
    }
  }

  $recipients = recipients_select_by_user($user_id);
  $sum = 0;
  $unit_price = 0;
  $VIEW_NAME = 'thanhtoan.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} elseif (isset($_GET['products'])) {
  if (isset($_GET['brand_id'])) {
    $brand_id = $_GET['brand_id'];
    $rows_product = product_select_by_brand($brand_id);
  } elseif (isset($_GET['cate_id'])) {
    $cate_id = $_GET['cate_id'];
    $rows_product = product_select_by_category($cate_id);
  } elseif (isset($_GET['value'])) {
    $value = $_POST['search'];
    $rows_product = product_select_value($value);
  }
  $VIEW_NAME = 'products.php';
} elseif (isset($_GET['ctsp'])) {
  $id = $_GET['id'];
  product_increase_view($id);
  $product = product_select_by_id($id);
  $reviews = reviews_select_avg($id);
  $rows_type =  product_type_select_by_type($id);
  $rows_rv = reviews_select_by_product($id);
  $rows_product = product_select_by_category($product['category_id']);
  if (isset($_POST['add_product'])) {
    $err = [];
    $type_id = $_POST['type_id'] ?? "";
    $numberProduct = $_POST['numberProduct'];
    if (!get_cookie('user_id')) {
      header('Location: index.php?dangnhap');
    }
    if ($type_id == "") {
      $err['type_id'] = 'Cần chọn loại hàng';
    }
    if ($numberProduct <= 0) {
      $err['numberProduct'] = 'Cần chọn số lượng';
    }
    if ($err = []) {
      $user_id = get_cookie('user_id');
      order_detail_insert($numberProduct, $id, $user_id, $type_id);
      header('Location: index.php?giohang');
    }
  } elseif (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $err = [];
    $comment = $_POST['comment'];
    $star = $_POST['star'] ?? "";
    if (!get_cookie('user_id')) {
      header('Location: index.php?dangnhap');
    }
    if ($star == "") {
      $err['star'] = "Cần đánh giá";
    }
    if ($comment == "") {
      $err['comment'] = "Cần bình luận";
    }
    if ($err == []) {
      $user_id = get_cookie('user_id');
      reviews_insert($star, $comment, $user_id, $id);
      header('Location: index.php?ctsp&id=' . $id);
      exit;
    }
  }

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
} elseif (isset($_GET['recipients'])) {
  $user_id = get_cookie('user_id');
  $rows = recipients_select_by_user($user_id);
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $err = [];
    if ($name == '') {
      $err['name'] = "Cần có dữ liệu";
    }
    if ($phone == '') {
      $err['phone'] = "Cần có dữ liệu";
    }
    if ($address == '') {
      $err['address'] = "Cần có dữ liệu";
    }
    if ($err == []) {
      recipients_insert($name, $phone, $address, $user_id);
      header('Location: index.php?thanhtoan ');
      exit;
    }
  }
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    recipients_delete($id);
    header('Location: index.php?recipients');
    exit;
  }
  $VIEW_NAME = 'address.php';
} else {
  $rows_cate = categories_select_all();
  $rows_brand = brand_select_all();
  $rows_product = product_select_top10_best_sellers();
  $features = product_image_select_by_product_and_featured();
  $VIEW_NAME = 'home.php';
}


include_once "./layout.php";
