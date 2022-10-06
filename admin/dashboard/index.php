<?php

$VIEW_NAME = 'home.php';
include_once "../../global.php";
include_once "../../dao/pdo.php";
include_once "../../dao/products.php";
include_once "../../dao/users.php";
include_once "../../dao/contacts.php";
include_once "../../dao/brands.php";
include_once "../../dao/categories.php";
$product_count = product_select_count();
$user_count = users_select_count();
$contact_count = contact_select_count();
$brand_count = brand_select_count();
$category_count = category_select_count();



require_once "../layout.php";
