<?php
require_once '../global.php';
if (isset($_GET['giohang'])) {

  $VIEW_NAME = 'giohang.php';
} elseif (isset($_GET['phanhoi'])) {

  $VIEW_NAME = 'phanhoi.php';
} else {

  $VIEW_NAME = 'home.php';
}


include_once "./layout.php";
