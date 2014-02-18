<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/models/base.php';

class Comment extends Base {
  public static $table_name = 'comment';
  public static $sequence_id = 'bloh_comment_id_seq';
  public static $columns = array('id', 'user_id', 'post_id', 'content', 'created_at');
}
