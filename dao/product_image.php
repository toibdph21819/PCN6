<?php
// lấy nhiều
function loai_select_all()
{
  $sql = "SELECT * FROM product_image";
  return  pdo_query($sql);
}
//lấy 1
function loai_select_by_id($id)
{
  $sql = "SELECT * FROM product_image Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function loai_insert($image, $product_id)
{
  $sql = "INSERT INTO product_image (image, product_id) values(?,?)";
  pdo_execute($sql, $image, $product_id);
}
//sửa
function loai_update($id, $image, $product_id)
{
  $sql = "UPDATE product_image SET product_id = ?, image = ? where id = ?";
  pdo_execute($sql,  $image, $id, $product_id);
}
//xoá
function loai_delete($id)
{
  $sql = "DELETE FROM product_image WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}