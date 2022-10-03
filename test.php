<?php
require './dao/pdo.php';
require './dao/products.php';
// require './dao/thuonghieu.php';
// require './dao/sanpham.php';
// product_insert('abc', 1234, 3, 1, 1, 'abđhhhhh', 2, 1, 3);
$por = product_select_all();
var_dump($por);
