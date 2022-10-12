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
function voucher_insert($name, $discount, $due)
{
  $sql = "INSERT INTO vouchers (name, discount, due) values(?,?,?)";
  pdo_execute($sql, $name, $discount, $due);
}
//sửa
function voucher_update($id, $name, $discount, $due)
{
  $sql = "UPDATE vouchers SET name = ?, discount= ?, due = ? where id = ?";
  pdo_execute($sql, $name, $discount,  $due, $id);
}
//xoá
function voucher_delete($id)
{
  $sql = "DELETE FROM vouchers WHERE id = ?";
  pdo_execute($sql, $id);
}
