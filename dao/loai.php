<?php
// lấy nhiều
function loai_select_all()
{
  $sql = "SELECT * FROM categories";
  return  pdo_query($sql);
}
//lấy 1
function loai_select_by_id($id)
{
  $sql = "SELECT * FROM categories Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function loai_insert($name, $image)
{
  $sql = "INSERT INTO categories (name, image) values(?,?)";
  pdo_execute($sql, $name, $image);
}
//sửa
function loai_update($id, $name, $image)
{
  $sql = "UPDATE categories SET name = ?, image = ? where id = ?";
  pdo_execute($sql, $name, $image, $id);
}
//xoá
function loai_delete($id)
{
  $sql = "DELETE FROM categories WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
