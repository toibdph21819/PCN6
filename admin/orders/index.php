<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/orders.php';
require_once '../../dao/order_detail.php';
require_once '../../dao/products.php';
require_once '../../dao/users.php';
if (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  orders_delete($get_id);
  header("location: " . $ADMIN_URL . '/vouchers/index.php');
  die;
} elseif (isset($_GET['show'])) {
  $get_id = $_GET['id'] ?? "";
  $row_order = orders_select_by_id($get_id);
  $rows = order_detail_select_order($get_id);

  $VIEW_NAME = 'show.php';
} else {
  $rows = orders_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
