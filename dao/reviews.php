<?php
// lấy nhiều
function reviews_select_all()
{
  $sql = "SELECT * FROM reviews";
  return  pdo_query($sql);
}
//lấy 1
function reviews_select_by_id($id)
{
  $sql = "SELECT * FROM reviews Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function reviews_insert($stars, $comment, $user_id, $product_id, $created_at)
{
  $sql = "INSERT INTO reviews (stars, comment, user_id, product_id, created_at) values(?,?)";
  pdo_execute($sql, $stars, $comment, $user_id, $product_id, $created_at);
}
//sửa
function reviews_update($id, $stars, $comment, $user_id, $product_id, $created_at)
{
  $sql = "UPDATE reviews SET stars = ?, comment = ?, user_id = ?, product_id = ?, created_at = ?  where id = ?";
  pdo_execute($sql, $stars, $comment, $user_id, $product_id, $created_at);
}
//xoá
function reviews_delete($id)
{
  $sql = "DELETE FROM reviews WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
