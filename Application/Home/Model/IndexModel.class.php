<?php

namespace Home\Model;
use Think\Model;

class IndexModel extends Model {
  protected $tableName = 'posts';

  function getCase() {
    return $this->where(array('post_type' => 'attachment','post_excerpt' =>'case'))->order('post_date DESC')->limit(5)
    ->field('ID','post_title','guid')
      ->select();
  }
}