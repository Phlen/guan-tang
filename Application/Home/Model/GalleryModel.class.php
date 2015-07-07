<?php
namespace Home\Model;
use Think\Model;

class GalleryModel extends Model {
  protected $tableName = "posts";

  function getGalleryByExcerpt() {
    return $this->where(array("post_type" => 'attachment'))->select();
  }

  function getGalleryByDate($date) {
    /*$list = $this->field('post_date')->find();
    $where = $list.date("Y");*/
    $where['post_date'] = array('like',"$date%");
    return $this->where(array("post_type"=>'attachment', $where))->select();
  }
}