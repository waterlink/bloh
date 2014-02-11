<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class User extends Base {
  public static $table_name = 'user';
  public static $sequence_id = 'bloh_user_id_seq';
  public static $columns = array('id', 'name', 'soname', 'login', 'password');
}
?>
