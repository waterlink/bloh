<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class Session extends Base {
  public static $table_name = 'session';
  public static $sequence_id = 'bloh_session_id_seq';
  public static $columns = array('id', 'user_id', 'random_hash');
  private static $cookie_term =2592000;//60*60*24*30; //30 days
  private $term;

  function __construct($data=array()) {
    $this->term = time() + self::$cookie_term;
    $data['random_hash'] = crypt('mda512', rand());
    $data['death_time'] = $this->term;
    parent::__construct($data);
  }

  function save(){
    // if(setcookie("user_id", $this->data['user_id']/*, $this->term, '/~logic/users/','localhost:3000',true,true*/)){
    //   echo " user_id: ".$_COOKIE['user_id'];
    // }
    // if(setcookie("random_hash", $this->data['random_hash']/*, $this->term, '/~logic/users/','localhost:3000',true,true*/)){
    //   echo " hash: ".$_COOKIE['random_hash']; 
    // }
    // setcookie('user_id', $data['user_id'], $this->term, '/account', 'localhost:3000');
    // setcookie('random_hash', $data['random_hash'], $this->term, '/account', 'localhost:3000');
    // parent::save();
  }

}
?>
