<?php
namespace Home\Model;
use Think\Model;

class showCaseModel extends Model {
  protected $tableName = "posts";
  public function getCase() {
    return $this->where(array('post_type' => 'attachment','post_excerpt' =>'case'))->field('ID','post_title','guid')->order('post_date DESC')->select();
  }

  public function getRandCase() {
    return $this->where(array('post_type' => 'attachment','post_excerpt' =>'case'))->limit(4)->order('rand()')->select();
  }

}