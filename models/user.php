<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class User extends Base {
  public static $table_name = 'bloher';
  public static $sequence_id = 'bloh_user_id_seq';
  public static $columns = array('id', 'email', 'password');

  function save() {
    $this->password = crypt('mda512', $this->password);
    parent::save();
  }
}
?>
