<?php
// lấy nhiều
function order_detail_select_all()
{
  $sql = "SELECT * FROM order_detail";
  return  pdo_query($sql);
}
//lấy 1
function  order_detail_select_by_id($id)
{
  $sql = "SELECT * FROM order_detail Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function  order_detail_insert( $quantity, $product_id, $order_id ,$user_id)
{
  $sql = "INSERT INTO order_detail (quantity, product_id, order_id ,user_id) values(?,?,?,?)";
  pdo_execute($sql, $quantity, $product_id, $order_id, $user_id,);
}
//sửa
function  order_detail_update($id, $quantity, $product_id, $order_id , $user_id)
{
  $sql = "UPDATE order_detail SET quantity = ?, product_id = ? order_id user_id = ? where id = ?";
  pdo_execute($sql,$id, $quantity, $product_id, $order_id , $user_id);
}
//xoá
function order_detail_delete($id)
{
  $sql = "DELETE FROM order_detail WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}