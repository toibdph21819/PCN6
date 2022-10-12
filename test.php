<?php
require './dao/pdo.php';
require './dao/products.php';
require './dao/order_detail.php';

$a = order_detail_select_all();
print_r($a);
