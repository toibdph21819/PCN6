<?php

//lấy ảnh cho products
function product_image_select_by_product($product_id)
{
  $sql = "SELECT * FROM product_image Where product_id = ?";
  return pdo_query($sql, $product_id);
}
function product_image_select_by_product_and_featured()
{
  $sql = "SELECT product_id,featured,image FROM product_image join products on product_id = products.id Where  products.featured = 1 limit 5";
  return pdo_query($sql);
}
//thêm
function product_image_insert($image, $product_id)
{
  $sql = "INSERT INTO product_image (image, product_id) values(?,?)";
  pdo_execute($sql, $image, $product_id);
}
//sửa
function product_image_update($id, $image, $product_id)
{
  $sql = "UPDATE product_image SET product_id = ?, image = ? where id = ?";
  pdo_execute($sql, $product_id, $image, $id);
}
//xoá
function product_image_delete($id)
{
  $sql = "DELETE FROM product_image WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}
