<?php
namespace Home\Controller;
use Think\Controller;

class AboutController extends Controller {

  public function index() {

    $this->redirect('index/index');
  }

  public function about(){
    $this->display('about');
  }
}