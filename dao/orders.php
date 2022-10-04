<?php
// lấy nhiều
function loai_select_all()
{
  $sql = "SELECT * FROM orders";
  return  pdo_query($sql);
}
//lấy 1
function loai_select_by_id($id)
{
  $sql = "SELECT * FROM orders Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function loai_insert($total, $unit_price, $created_at)
{
  $sql = "INSERT INTO orders (total, unit_price, created_at) values(?,?,?)";
  pdo_execute($sql, $total, $unit_price,$created_at );
}
//sửa
function loai_update($id, $total, $unit_price, $created_at)
{
  $sql = "UPDATE orders SET  total = ?, unit_price = ?, created_at = ?, where id = ?";
  pdo_execute($sql, $id, $total, $unit_price, $created_at);
}
//xoá
function loai_delete($id)
{
  $sql = "DELETE FROM orders WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}