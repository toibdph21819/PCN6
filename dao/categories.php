<?php
// lấy nhiều
function categories_select_all()
{
  $sql = "SELECT * FROM categories";
  return  pdo_query($sql);
}
//lấy 1
function categories_select_by_id($id)
{
  $sql = "SELECT * FROM categories Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function categories_insert($name, $image)
{
  $sql = "INSERT INTO categories (name, image) values(?,?)";
  pdo_execute($sql, $name, $image);
}
//sửa
function categories_update($id, $name, $image)
{
  $sql = "UPDATE categories SET name = ?, image = ? where id = ?";
  pdo_execute($sql, $name, $image, $id);
}
//xoá
function categories_delete($id)
{
  $sql = "DELETE FROM categories WHERE id = ?";
  pdo_execute($sql, $id);
}
// lấy ra số lượng của phản hồi
function category_select_count()
{
  $sql = "SELECT count(*) as count from categories";
  return pdo_query_one($sql);
}
