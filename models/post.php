<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';

class Post extends Base {
  public static $table_name = 'post';
  public static $sequence_id = 'bloh_post_id_seq';
  public static $columns = array('id', "user_id", 'title', 'content', 'created_at', 'updated_at');
}
