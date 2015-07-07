<?php
namespace Home\Model;
use Think\Model;

class showDetailModel extends Model {
  protected $tableName = 'posts';

  public function getCaseDetailByExcerpt($excerpt) {
    return $this->where(array('post_excerpt' => $excerpt))->field('ID','post_title','guid')->limit(5)->select();

  }

  public function getCaseImageByTitle($excerpt) {
    return $this->where(array('post_title' => $excerpt))->field('ID','post_title','guid')->select();
  }
}