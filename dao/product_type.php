<?php // lấy ra sản phẩm thuộc loại nào
function product_type_select_by_type($id)
{
  $sql = "SELECT product_type.id,types.name,quantity, type_id FROM product_type JOIN types ON type_id = types.id WHERE product_id =?";
  return pdo_query($sql, $id);
}
function product_type_insert($type_id, $product_id, $quantity)
{
  $sql = "INSERT INTO product_type(type_id,product_id,quantity) VALUES (?,?,?)";
  pdo_execute($sql, $type_id, $product_id, $quantity);
}
function product_type_delete($id)
{
  $sql = "DELETE FROM product_type WHERE id = ?";

  pdo_execute($sql, $id);
}
function product_type_decrease($type_id, $product_id, $quantity)
{
  $sql = "UPDATE product_type SET quantity = quantity - ? WHERE product_id = ? AND type_id = ?";
  pdo_execute($sql, $quantity, $product_id, $type_id);
}
