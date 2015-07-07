<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\NavModel;
use Home\Model\GalleryModel;

class GalleryController extends Controller {
  function index() {
    $this->redirect('index/index');
  }

  function gallery($id) {
  $navModel = new NavModel();
  $title = $navModel->getTitleByPid($id);
  $nav = $navModel->getNav();
  $galleryModel = new GalleryModel();
  $img = $galleryModel->getGalleryByExcerpt();
  $date = $navModel->getDate();
  /*  dump($img);*/
  $this->assign('img' , $img);
  $this->assign('nav',$nav);
  $this->assign('title',$title);
  $this->assign('date',$date);
  $this->display('gallery','utf-8');
  }

  function getGalleryByDate($id,$date) {
    $navModel = new NavModel();
    $title = $navModel->getTitleByPid($id);
    $nav = $navModel->getNav();
    $galleryModel = new GalleryModel();
    $img = $galleryModel->getGalleryByDate($date);
    /*dump($img);*/
    $date = $navModel->getDate();
    /*  dump($img);*/
    $this->assign('img' , $img);
    $this->assign('nav',$nav);
    $this->assign('title',$title);
    $this->assign('date',$date);
    $this->display('gallery','utf-8');
  }
}