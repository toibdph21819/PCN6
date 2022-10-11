<?php
require_once '../../global.php';
require_once '../../dao/pdo.php';


require_once '../../dao/users.php';

$rows = users_select_all();
$VIEW_NAME = 'list.php';
include_once '../layout.php';
