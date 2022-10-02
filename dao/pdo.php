<?php
function pdo_get_connection()
{
  $servername = "202.92.5.49";
  $username = "dfigfagghosting_nhom6";
  $password = "9I46KYJB2pJd";
  $dbname = "dfigfagghosting_nhom6";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Kết nối thành công";
    return $conn;
  } catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
  }
}

function pdo_execute($sql)
{
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
    // àhafhahfhf
  }
}
function pdo_query($sql)
{
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $rows = $stmt->fetchAll();
    return $rows;
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
  }
}
function pdo_query_one($sql)
{
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
  }
}

function pdo_query_value($sql)
{
  $sql_args = array_slice(func_get_args(), 1);
  try {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return array_values($row)[0];
  } catch (PDOException $e) {
    throw $e;
  } finally {
    unset($conn);
  }
}
