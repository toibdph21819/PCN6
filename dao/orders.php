<?php
// lấy nhiều
function orders_select_all()
{
  $sql = "SELECT * FROM orders";
  return  pdo_query($sql);
}
//lấy 1
function orders_select_by_id($id)
{
  $sql = "SELECT * FROM orders Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function orders_insert($total, $unit_price)
{
  $sql = "INSERT INTO orders (total, unit_price) values(?,?)";
  pdo_execute($sql, $total, $unit_price);
}
//sửa
function orders_update($id, $total, $unit_price)
{
  $sql = "UPDATE orders SET  total = ?, unit_price = ? where id = ?";
  pdo_execute($sql, $total, $unit_price, $id);
}
//xoá
function orders_delete($id)
{
  $sql = "DELETE FROM orders WHERE id = ?";
  pdo_execute($sql, $id);
}
