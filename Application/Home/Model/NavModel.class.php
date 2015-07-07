<?php
namespace Home\Model;
use Think\Model;

class NavModel extends Model {
  protected $tableName = "term_taxonomy";
  public function getNav() {
    return $this->where(array("parent" => 0 , "count" =>0))->select();
  }

  public function getTitleByPid($id) {
    return $this->where(array('parent' =>$id))->select();
  }

  public function getDate() {
    return $this->where(array('parent' => '1'))->order("term_id DESC")->select();
  }
}
