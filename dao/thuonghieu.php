<?php
// lấy nhiều
function brand_select_all()
{
  $sql = "SELECT * FROM brands";
  return  pdo_query($sql);
}
//lấy 1
function brand_select_by_id($id)
{
  $sql = "SELECT * FROM brands Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function brand_insert($name, $image)
{
  $sql = "INSERT INTO brands (name, image) values(?,?)";
  pdo_execute($sql, $name, $image);
}
//sửa
function brand_update($id, $name, $image)
{
  $sql = "UPDATE brands SET name = ?, image = ? where id = ?";
  pdo_execute($sql, $name, $image, $id);
}
//xoá
function brand_delete($id)
{
  $sql = "DELETE FROM brands WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
