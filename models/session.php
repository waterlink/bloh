<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class Session extends Base {
  public static $table_name = 'session';
  public static $sequence_id = 'bloh_session_id_seq';
  public static $columns = array('id', 'user_id', 'random_hash');
  private static $cookie_term =2592000;//60*60*24*30; //30 days

  function __construct($data=array()) {
    $term = time() + self::$cookie_term;
    $data['random_hash'] = crypt('mda512', rand());
    $data['death_time'] = $term;
    parent::__construct($data);
  }

  function save(){
    setcookie("user_id", $data['user_id'], $term);
    setcookie("random_hash", $data['random_hash'], $term);
    parent::save();
  }

}
?>
