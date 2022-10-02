<?php
// lấy nhiều
function product_select_all()
{
  $sql = "SELECT * FROM products";
  return  pdo_query($sql);
}
//lấy 1
function product_select_by_id($id)
{
  $sql = "SELECT * FROM products Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function product_insert($name, $price, $quantity, $featured, $active, $description, $category_id, $voucher_id, $brand_id)
{
  $sql = "INSERT INTO products (name, price,quantity, featured, active, description, category_id, voucher_id, brand_id) values(?,?,?,?,?,?,?,?,?)";
  pdo_execute($sql, $name, $price, $quantity, $featured, $active, $description, $category_id, $voucher_id, $brand_id);
}
//sửa
function product_update($id, $name, $price, $quantity, $featured, $active, $description, $category_id, $voucher_id, $brand_id)
{
  $sql = "UPDATE products SET name = ?, price = ?, quantity = ?, featured = ?, active = ?, description = ?, category_id = ?, voucher_id = ?, brand_id = ? where id = ?";
  pdo_execute($sql, $name, $price, $quantity, $featured, $active, $description, $category_id, $voucher_id, $brand_id, $id);
}
//xoá
function product_delete($id)
{
  $sql = "DELETE FROM products WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}

//tăng lượt xem
function product_increase_view()
{
}
//tăng số lượng bán
function product_increase_sales()
{
}
//top 10 lượt xem nhiều nhất
function product_select_top10_views()
{
}
//top 10 hàng bán chạy
function product_select_top10_best_sellers()
{
}
//sản phẩm nổi bật
function product_select_features()
{
}
//tìm kiếm bằng loại
function product_select_by_category()
{
}
//tìm kiếm bằng thương hiệu
function product_select_by_brand()
{
}
//tìm kiếm bằng value của loại hoặc sản phẩm
function product_select_value()
{
}
//giảm số lượng hàng trong kho khi thanh toán
function product_decrease_quantity()
{
}
//sắp xếp theo giá
function product_sort_by_price()
{
}
// lấy ra top 10 sản phẩm cùng loại
function product_select_top10_relate($category_id)
{
}
//trang
