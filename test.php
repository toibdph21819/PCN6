<?php
require './dao/pdo.php';
require './dao/products.php';

$pro =  product_sort_by_price();
foreach ($pro as $pr) {
  extract($pr);
  echo '<pre>' . $id . '</pre>';
}
