<?php
// lấy nhiều
function users_select_all()
{
  $sql = "SELECT * FROM users";
  return  pdo_query($sql);
}
//lấy 1
function users_select_by_id($id)
{
  $sql = "SELECT * FROM users Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function users_insert($name, $email, $password, $avatar, $admin, $phone, $created_at)
{
  $sql = "INSERT INTO users (name, email, password, avatar, admin, phone, created_at) values(?,?)";
  pdo_execute($sql, $name, $email, $password, $avatar, $admin, $phone, $created_at);
}
//sửa
function users_update($id, $name, $email, $password, $avatar, $admin, $phone, $created_at)
{
  $sql = "UPDATE users SET name = ?, email = ?, password = ?, avatar = ?, admin = ?, phone = ?, created_at = ? where id = ?";
  pdo_execute($sql, $name, $email, $password, $avatar, $admin, $phone, $created_at, $id);
}
//xoá
function users_delete($id)
{
  $sql = "DELETE FROM users WHERE id = ?";
  if (is_array($id)) {
    foreach ($id as $item) {
      pdo_execute($sql, $item);
    }
  }
  pdo_execute($sql, $id);
}

// lấy ra số lượng của khách hàng
function users_select_count()
{
  $sql = "SELECT count(*) as count from users where admin = 0";
  return pdo_query_one($sql);
}
