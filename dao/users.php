<?php
// lấy nhiều
function users_select_all()
{
  $sql = "SELECT * FROM users order by admin desc";
  return  pdo_query($sql);
}
//lấy 1
function users_select_by_id($id)
{
  $sql = "SELECT * FROM users Where id = ?";
  return pdo_query_one($sql, $id);
}

function users_select_by_email($email)
{
  $sql = "select * from users where email=?";
  return pdo_query_one($sql, $email);
}
//thêm
function users_insert($name, $email, $password, $phone)
{
  $sql = "INSERT INTO users (name, email, password, phone) values(?,?,?,?)";
  pdo_execute($sql, $name, $email, $password, $phone);
}
//sửa
function users_update($id, $name, $email, $avatar, $phone)
{
  $sql = "UPDATE users SET name = ?, email = ?, avatar = ?, phone = ? where id = ?";
  pdo_execute($sql, $name, $email, $avatar, $phone, $id);
}
function users_update_password($id, $password)
{
  $sql = "UPDATE users SET password=? where id = ?";
  pdo_execute($sql, $password, $id);
}
//xoá
function users_delete($id)
{
  $sql = "DELETE FROM users WHERE id = ?";

  pdo_execute($sql, $id);
}

// lấy ra số lượng của khách hàng
function users_select_count()
{
  $sql = "SELECT count(*) as count from users where admin = 0";
  return pdo_query_one($sql);
}
