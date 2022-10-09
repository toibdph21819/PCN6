<?php
// lấy nhiều
function type_select_all()
{
  $sql = "SELECT * FROM types";
  return  pdo_query($sql);
}
