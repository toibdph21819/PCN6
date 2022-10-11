<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';

require_once '../../dao/contacts.php';
if (isset($_GET['delete'])) {
  $get_id = $_GET['id'] ?? "";
  contact_delete($get_id);
  header("location: " . $ADMIN_URL . '/contact/index.php');
  die;
} else {
  $rows = contact_select_all();
  $VIEW_NAME = 'list.php';
}
include_once '../layout.php';
