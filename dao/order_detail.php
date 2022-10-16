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
function order_detail_select_user($id)
{
  $sql = "SELECT order_detail.*,name FROM order_detail join types on type_id = types.id WHERE user_id =?";
  return  pdo_query_all_by_reference_id($sql, $id);
}
function order_detail_insert($quantity, $product_id, $user_id, $type_id)
{
  $sql = "INSERT INTO order_detail(quantity,product_id,user_id,type_id) VALUES (?,?,?,?)";
  pdo_execute($sql, $quantity, $product_id, $user_id, $type_id);
}
function order_detail_add_ordersid($order_id, $id)
{
  $sql = "UPDATE order_detail SET order_id = ? where id = ?";
  pdo_execute($sql, $order_id, $id);
}

function order_detail_delete($id)
{
  $sql = "DELETE FROM order_detail WHERE id = ?";
  pdo_execute($sql, $id);
}
