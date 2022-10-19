<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/orders.php';
require_once '../../dao/order_detail.php';
require_once '../../dao/products.php';
require_once '../../dao/users.php';
require_once '../../dao/product_image.php';
if (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  orders_delete($get_id);
  header("location: " . $ADMIN_URL . '/vouchers/index.php');
  die;
} elseif (isset($_GET['show'])) {
  $id = $_GET['id'];
  $rows = order_detail_get_order($id);
  $order = orders_select_by_id($id);


  $VIEW_NAME = 'show.php';
} else {
  $rows = orders_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
