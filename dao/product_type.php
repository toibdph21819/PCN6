<?php // lấy ra sản phẩm thuộc loại nào
function product_type_select_by_type($id)
{
  $sql = "SELECT types.name,quantity FROM product_type JOIN types ON type_id = types.id WHERE product_id =?";
  return pdo_query_all_by_reference_id($sql, $id);
}
