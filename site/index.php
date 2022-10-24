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
require_once '../dao/contacts.php';
require_once '../dao/types.php';
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
if (isset($_GET['giohang'])) {
  if (!get_cookie('user_id')) {
    header('Location: index.php?dangnhap');
    die;
  }
  if (isset($_GET['delete'])) {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      array_splice($_SESSION['cart'], $id, 1);
    } else {
      $_SESSION['cart'] = array();
    }
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
  if (isset($_POST['submit'])) {
    $recipient_id  = $_POST['recipient_id'];
    $msg = $_POST['msg'] ?? '';
    $total = $_POST['sum'];
    $unit_prc = $_POST['unit_price'];
    if ($recipient_id == '') {
      $err['recipient_id'] = 'Cần có địa chỉ';
    }
    if ($err == []) {
      $id_order = orders_insert($total, $unit_prc, $msg, $recipient_id);
      foreach ($_SESSION['cart'] as $cart) {
        order_detail_insert($cart[4], $cart[0], $id_order, $user_id, $cart[7], $cart[6], $cart[3]);
        product_increase_sales($cart[0], $cart[4]);
        product_type_decrease($cart[7], $cart[0], $cart[4]);
      }
      $_SESSION['cart'] = [];
      header('Location: index.php?cam_on_mua_hang&id=' . $id_order);
      exit;
    }
  }

  $recipients = recipients_select_by_user($user_id);
  $sum = 0;
  $unit_price = 0;
  $VIEW_NAME = 'thanhtoan.php';
} elseif (isset($_GET['cam_on_mua_hang'])) {
  $id = $_GET['id'];
  $rows = order_detail_get_order($id);
  $order = orders_select_by_id($id);

  $recipient = order_get_recipient($id);
  $VIEW_NAME = 'cam_on_mua_hang.php';
} elseif (isset($_GET['my_order'])) {
  $user_id = get_cookie('user_id');
  $orders = order_detail_select_order_from_user($user_id);

  $VIEW_NAME = "my_order.php";
} elseif (isset($_GET['detail_order'])) {
  $id = $_GET['id'];
  $rows = order_detail_get_order($id);
  $order = orders_select_by_id($id);

  $VIEW_NAME = 'detail_order.php';
} elseif (isset($_GET['phanhoi'])) {
  $user_id = get_cookie('user_id');
  if (isset($_POST['submit'])) {
    $err = [];
    $title = $_POST['title'];
    $msg = $_POST['msg'];
    if ($title == "") {
      $err['title'] = "Dữ liệu đâu";
    }
    if ($msg == "") {
      $err['msg'] = "Dữ liệu đâu";
    }
    if ($err == []) {
      contact_insert($title, $user_id, $msg);
      header("Location: index.php");
    }
  }
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
  $rows_product = array_filter($rows_product, function ($item) use ($product) {
    return $item['id'] != $product['id'];
  });
  $product_img = product_image_select_by_product($product['id']);

  if (isset($_POST['add_product'])) {
    $err = [];
    $type_id_quantity = $_POST['type_id'] ?? "";
    $numberProduct = $_POST['numberProduct'];
    if (!get_cookie('user_id')) {
      header('Location: index.php?dangnhap');
      die;
    }
    $array_type = explode('|', $type_id_quantity) ?? "";
    if ($type_id_quantity == "") {
      $err['type_id'] = 'Cần chọn loại hàng';
    }
    $type_id = $array_type[0] ?? "";
    $type_quantity = $array_type[1] ?? "";
    if ($numberProduct <= 0) {
      $err['numberProduct'] = 'Cần chọn số lượng';
    } elseif ($numberProduct > $type_quantity) {
      $err['numberProduct'] = 'Nhìn lại số lượng';
    }
    if ($err == []) {
      $user_id = get_cookie('user_id');
      $price = $product['price'] - ($product['voucher_discount'] ?? '0');
      $quantity = $numberProduct;
      $product_name = $product['name'];
      $voucher_discount = $product['voucher_discount'];
      $img = $product_img[0]['image'];
      $total_one_product = $price * $quantity;
      array_push($_SESSION['cart'], [$id, $product_name, $img, $price, $quantity, $voucher_discount, $total_one_product, $type_id]);

      header('Location: index.php?giohang');
      die;
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
  if (isset($_POST['submit'])) {
    $err = [];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if ($email == "") {
      $err['email'] = "Dữ liệu đâu";
    }
    if ($password == "") {
      $err['password'] = "?????";
    }
    $user = users_select_by_email($email);
    if (empty($user)) {
      $err['user'] = "sai là sai";
    }
    if ($err == []) {
      $hash_password = password_hash($password, PASSWORD_BCRYPT);
      users_update_password($user['id'], $hash_password);
      header("Location: index.php?dangnhap");
      die;
    }
  }
  $VIEW_NAME = 'quenmk.php';
} elseif (isset($_GET['dangky'])) {
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $err = [];
    if ($name == "") {
      $err['name'] = "Cần nhập";
    }
    if ($email == "") {
      $err['email'] = "Cần nhập";
    }
    if ($phone == "") {
      $err['phone'] = "Cần nhập";
    }
    if ($password == "") {
      $err['password'] = "Cần nhập";
    }
    if ($repeat_password == "") {
      $err['repeat_password'] = "Cần nhập";
    } elseif ($repeat_password != $password) {
      $err['repeat_password'] = "Cần nhập giống với mật khẩu";
    }
    $users = users_select_all();
    foreach ($users as $user) {
      if ($user['email'] == $email) {
        $err['email'] = "email đã tồn tại";
      }
    }
    if ($err == []) {
      $hash_password = password_hash($password, PASSWORD_BCRYPT);
      users_insert($name, $email, $hash_password, $phone);
      header('Location: index.php?dangnhap');
    }
  }
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
    $users = users_select_all();

    if ($err == []) {
      $user = users_select_by_email($email);
      if (password_verify($password, $user['password']) == true) {
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
  $msg = $_GET['msg'] ?? "";
  $rows_cate = categories_select_all();
  $rows_brand = brand_select_all();
  $rows_product = product_select_top10_best_sellers();
  $features = product_image_select_by_product_and_featured();
  $VIEW_NAME = 'home.php';
}


include_once "./layout.php";
