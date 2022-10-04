<?php
// lấy nhiều
function recipients_select_all()
{
  $sql = "SELECT * FROM recipients";
  return  pdo_query($sql);
}
//lấy 1
function recipients_select_by_id($id)
{
  $sql = "SELECT * FROM recipients Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function recipients_insert($name, $phone, $address, $user_id)
{
  $sql = "INSERT INTO recipients (name, phone, address, user_id) values(?,?)";
  pdo_execute($sql, $name, $phone, $address, $user_id);
}
//sửa
function recipients_update($id, $phone, $address, $user_id)
{
  $sql = "UPDATE recipients SET name = ?, phone = ? , address = ?, user_id = ? where id = ?";
  pdo_execute($sql, $name, $phone, $address, $user_id, $id);
}
//xoá
function recipients_delete($id)
{
  $sql = "DELETE FROM recipients WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
