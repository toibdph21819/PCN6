<?php
// lấy nhiều
function type_select_all()
{
  $sql = "SELECT * FROM types";
  return  pdo_query($sql);
}
//lấy 1
function types_select_by_id($id)
{
  $sql = "SELECT * FROM types Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function types_insert($name)
{
  $sql = "INSERT INTO types (name) values(?)";
  pdo_execute($sql, $name);
}
//sửa
function types_update($id, $name)
{
  $sql = "UPDATE types SET name = ? where id = ?";
  pdo_execute($sql, $name, $id);
}
//xoá
function types_delete($id)
{
  $sql = "DELETE FROM types WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
