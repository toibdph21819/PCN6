<?php
require './dao/pdo.php';
require './dao/vouchers.php';

$a =  vouchers_select_all();
foreach ($a as $f) {
  var_dump($f);
}
