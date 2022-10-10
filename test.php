<?php
require './dao/pdo.php';
require './dao/products.php';
require './dao/product_image.php';

$a = product_select_last_by_id();
echo $a[0]['id'];
