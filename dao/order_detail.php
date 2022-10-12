<?php
// function order_detail_select_user($id)
// {
//   $sql = "SELECT * FROM order_detail join users on users.id =order_detail where user_id = ?";
//   return  pdo_query_all_by_reference_id($sql, $id);
// }
function order_detail_select_order($id)
{
  $sql = "SELECT order_detail.*,products.name as product_name,products.price as product_price FROM order_detail JOIN products on products.id = product_id where order_id = ?";
  return  pdo_query_all_by_reference_id($sql, $id);
}
