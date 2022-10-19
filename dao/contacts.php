<?php
// lấy nhiều
function contact_select_all()
{
  $sql = "SELECT contacts.*,users.name,email FROM contacts join users on user_id = users.id";
  return  pdo_query($sql);
}
//lấy 1
function contact_select_by_id($id)
{
  $sql = "SELECT * FROM contacts Where id = ?";
  return pdo_query_one($sql, $id);
}
//thêm
function contact_insert($title, $user_id, $msg)
{
  $sql = "INSERT INTO contacts(title,user_id,msg) VALUES (?,?,?)";
  pdo_execute($sql, $title, $user_id, $msg);
}

//xoá
function contact_delete($id)
{
  $sql = "DELETE FROM contacts WHERE id = ?";
  pdo_execute($sql, $id);
}
// lấy ra số lượng của phản hồi
function contact_select_count()
{
  $sql = "SELECT count(*) as count from contacts";
  return pdo_query_one($sql);
}
