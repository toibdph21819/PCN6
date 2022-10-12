<?php
$ROOT_URL = "/PCN6";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";

function add_cookie($name, $value, $day)
{
  setcookie($name, $value, time() + (86400 + $day), "/");
}
function delete_cookie($name)
{
  add_cookie($name, "", -1);
}
function get_cookie($name)
{
  return $_COOKIE[$name] ?? '';
}
function check_login()
{
  global $SITE_URL;
  global $ADMIN_URL;
  if (isset($_COOKIE['admin'])) {
    if ($_COOKIE['admin'] == 1) {
      header('Location: ' . $ADMIN_URL);
      die;
    } elseif ($_COOKIE['admin'] == 0) {
      header('Location: ' . $SITE_URL);
      die;
    }
  } else {
    header('Location: ' . $SITE_URL);
  }
}
