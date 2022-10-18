<?php
// lấy nhiều
function product_select_all()
{
  $sql = "SELECT products.* ,categories.name as cate_name,brands.name as brand_name, vouchers.discount as voucher_discount FROM products join categories on category_id = categories.id join brands on brand_id = brands.id join vouchers on voucher_id = vouchers.id";
  return  pdo_query($sql);
}
//lấy 1
function product_select_by_id($id)
{
  $sql = "SELECT products.*,vouchers.discount as voucher_discount FROM products join vouchers on voucher_id = vouchers.id Where products.id = ?";
  return pdo_query_one($sql, $id);
}
//lấy ra id cuối cùng vừa mới tạo
function product_select_last_by_id()
{
  $sql = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
  return pdo_query($sql);
}
//thêm
function product_insert($name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id)
{
  $sql = "INSERT INTO products (name, price, featured, active, description, category_id, voucher_id, brand_id) values(?,?,?,?,?,?,?,?)";
  pdo_execute($sql, $name, $price, $featured, $active, $description, $category_id, $voucher_id, $brand_id);
}
//sửa
function product_update($id, $name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id)
{
  $sql = "UPDATE products SET name = ?, price = ?,  featured = ?, active = ?, description = ?, category_id = ?, voucher_id = ?, brand_id = ? where id = ?";
  pdo_execute($sql, $name, $price,  $featured, $active, $description, $category_id, $voucher_id, $brand_id, $id);
}
//xoá
function product_delete($id)
{
  $sql = "DELETE FROM products WHERE id = ?";

  pdo_execute($sql, $id);
}

//tăng lượt xem
function product_increase_view($id)
{
  $sql = "UPDATE products SET views=views+1 WHERE id = ?";
  pdo_execute($sql, $id);
}
//tăng số lượng bán
function product_increase_sales($id)
{
  $sql = "UPDATE products SET saleable=saleable+1 WHERE id = ?";
  pdo_execute($sql, $id);
}
//top 10 lượt xem nhiều nhất
function product_select_top10_views()
{
  $sql = "SELECT * FROM products WHERE views>0 Order by views desc limit 0,10";
  return pdo_query($sql);
}
//top 10 hàng bán chạy
function product_select_top10_best_sellers()
{
  $sql = "SELECT products.*,discount as voucher_discount FROM products join vouchers  on vouchers.id = voucher_id WHERE saleable > 0 Order by saleable desc limit 0,10";
  return pdo_query($sql);
}
//sản phẩm nổi bật
function product_select_features()
{
  $sql = "SELECT * FROM products WHERE featured=1 limit 0,5";
  return pdo_query($sql);
}
//tìm kiếm bằng loại
function product_select_by_category($category_id)
{
  $sql = "SELECT * FROM products WHERE category_id=?";
  return pdo_query($sql, $category_id);
}
//tìm kiếm bằng thương hiệu
function product_select_by_brand($brand_id)
{
  $sql = "SELECT * FROM products WHERE brand_id=?";
  return pdo_query($sql, $brand_id);
}


//tìm kiếm bằng value của loại hoặc sản phẩm
function product_select_value($value)
{
  $sql = "SELECT products.* FROM products join categories on products.id = categories.id WHERE categories.name LIKE ? OR products.name LIKE ?";
  return pdo_query($sql, '%' . $value . '%', '%' . $value . '%');
}
//sắp xếp theo giá giảm dần
function product_sort_by_price()
{
  $sql = "SELECT * FROM products WHERE price>0 order by price desc";
  return pdo_query($sql);
}

// lấy ra số lượng của sản phẩm
function product_select_count()
{
  $sql = "SELECT count(*) as count from products";
  return pdo_query_one($sql);
}

function product_select_stats_by_category()
{
  $sql = "SELECT COUNT(*) as count,categories.name as name from products join categories on products.category_id = categories.id GROUP BY category_id";
  return pdo_query($sql);
}
//trang