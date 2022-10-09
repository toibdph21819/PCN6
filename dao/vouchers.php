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
