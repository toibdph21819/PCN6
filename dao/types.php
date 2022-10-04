<?php
// lấy nhiều
function types_select_all()
{
  $sql = "SELECT * FROM types";
  return  pdo_query($sql);
}
//lấy 1
function types_select_select_by_id($id)
{
  $sql = "SELECT * FROM types Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function types_select_insert($name)
{
  $sql = "INSERT INTO types (name) values(?)";
  pdo_execute($sql, $name);
}
//sửa
function types_select_update($id,$name)
{
  $sql = "UPDATE type SET name = ?,where id = ?";
  pdo_execute($sql,$name, $id);
}
//xoá
function types_select_delete($id)
{
  $sql = "DELETE FROM types WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}