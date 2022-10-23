<?php

function order_detail_get_order($id)
{
  $sql = "SELECT
  od.quantity,
  od.unit_price_one,
  od.sum_product,
  od.product_id,
  od.order_id,
  p.name,
  t.name as t_name
FROM order_detail od
  JOIN products p ON product_id = p.id
  JOIN types t ON type_id = t.id
WHERE order_id = ?";
  return  pdo_query($sql, $id);
}
function order_detail_select_order($id)
{
  $sql = "SELECT order_detail.*,products.name as product_name,products.price as product_price FROM order_detail JOIN products on products.id = product_id where order_id = ?";
  return  pdo_query($sql, $id);
}
function order_detail_select_order_from_user($id)
{
  $sql = "SELECT * FROM order_detail od JOIN orders on od.order_id = orders.id WHERE user_id = ? GROUP BY order_id order by order_id desc";
  return  pdo_query($sql, $id);
}

function order_detail_insert($quantity, $product_id, $order_id, $user_id, $type_id, $sum_product, $unit_price_one)
{
  $sql = "INSERT INTO order_detail(quantity,product_id,order_id,user_id,type_id,sum_product, unit_price_one) VALUES (?,?,?,?,?,?,?)";
  pdo_execute($sql, $quantity, $product_id, $order_id, $user_id, $type_id, $sum_product, $unit_price_one);
}

function order_detail_delete($id)
{
  $sql = "DELETE FROM order_detail WHERE id = ?";
  pdo_execute($sql, $id);
}
function order_detail_select_count_by_order($order_id)
{
  $sql = "SELECT COUNT(*) as count FROM order_detail od WHERE od.order_id = ?";
  return pdo_query_one($sql, $order_id);
}
