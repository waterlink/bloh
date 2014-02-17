<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class Session extends Base {
  public static $table_name = 'session';
  public static $sequence_id = 'bloh_session_id_seq';
  public static $columns = array('id', 'user_id', 'random_hash');
  private static $cookie_term =2592000;//60*60*24*30; //30 days
  private $term;

  function __construct($data=array()) {
    $data['random_hash'] = crypt('mda512', rand());
    $data['death_time'] = time() + self::$cookie_term;
    parent::__construct($data);
  }

  function save(){
    // ini_set('dispaly_errors', 1);
    // error_reporting(E_ALL);
    // var_dump($data);
    // exit;
    setcookie("user_id", $this->user_id, $this->death_time, '/');
    setcookie("random_hash", $this->random_hash, $this->death_time, '/');
    parent::save();
  }

}
