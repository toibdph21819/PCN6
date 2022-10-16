<?php
// lấy nhiều
function reviews_select_all()
{
  $sql = "SELECT reviews.*,products.name as product_name, users.name as user_name FROM reviews join products on products.id = product_id join users on users.id = user_id";
  return  pdo_query($sql);
}
//lấy 1
function reviews_select_by_id($id)
{
  $sql = "SELECT reviews.*,products.name as product_name, users.name as user_name FROM reviews join products on products.id = product_id join users on users.id = user_id Where reviews.id = ?";
  return pdo_query_one($sql, $id);
}
function reviews_select_by_product($product_id)
{
  $sql = "SELECT reviews.*,users.name,avatar FROM reviews join users on users.id = user_id Where product_id = ?";
  return pdo_query_all_by_reference_id($sql, $product_id);
}
function reviews_select_avg($id)
{
  $sql = "SELECT AVG(stars) as avg_star,COUNT(*) as quantity FROM reviews where product_id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function reviews_insert($stars, $comment, $user_id, $product_id)
{
  $sql = "INSERT INTO reviews (stars, comment, user_id, product_id) values(?,?,?,?)";
  pdo_execute($sql, $stars, $comment, $user_id, $product_id);
}
//sửa
function reviews_update($id, $stars, $comment, $user_id, $product_id)
{
  $sql = "UPDATE reviews SET stars = ?, comment = ?, user_id = ?, product_id = ? where id = ?";
  pdo_execute($sql, $stars, $comment, $user_id, $product_id, $id);
}
//xoá
function reviews_delete($id)
{
  $sql = "DELETE FROM reviews WHERE id = ?";
  pdo_execute($sql, $id);
}
