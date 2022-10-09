<?php
// lấy nhiều
function voucher_select_all()
{
  $sql = "SELECT * FROM vouchers";
  return  pdo_query($sql);
}
//lấy 1
function voucher_select_by_id($id)
{
  $sql = "SELECT * FROM vouchers Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function vouchers_insert($name, $discount, $created_at, $due)
{
  $sql = "INSERT INTO vouchers (name, discount, created_at, due) values(?,?)";
  pdo_execute($sql, $name, $discount, $created_at, $due);
}
//sửa
function vouchers_update($id, $name, $discount, $created_at, $due)
{
  $sql = "UPDATE vouchers SET name = ?, discount= ?, created_at = ?, due = ? where id = ?";
  pdo_execute($sql, $name, $discount, $created_at, $due, $id);
}
//xoá
function vouchers_delete($id)
{
  $sql = "DELETE FROM vouchers WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
