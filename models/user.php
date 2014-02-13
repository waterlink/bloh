<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';
class User extends Base {
  public static $table_name = 'bloher';
  public static $sequence_id = 'bloh_user_id_seq';
  public static $columns = array('id', 'email', 'password');
  private static $salt = "pigeon_guanissimo";

  function __construct($data = array()) {
    $data['password'] = self::crypt_pass($data['password']);
    parent::__construct($data);
  }
  function save() {
    $this->password = crypt_pass($this->password);
    parent::save();
  }

  function validate() {
    $found = $this->where(array('email'=>$this->email, 'password'=>$this->password));
    if(count($found)>0)
    {
      $this->id = $found[0]->id;
      return true;
    }
    return false;
  }
  private static function crypt_pass ($pass){
    return crypt('mda512', $pass.self::$salt);
  }
}
?>
<!-- Хешина пользователя должна храниться в куках -->
