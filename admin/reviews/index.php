<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/reviews.php';
if (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  reviews_delete($get_id);
  header("location: " . $ADMIN_URL . '/reviews/index.php');
  die;
} elseif (isset($_GET['show'])) {
  $get_id = $_GET['id'];
  $row = reviews_select_by_id($get_id);
  $VIEW_NAME = 'show.php';
} else {
  $rows = reviews_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
