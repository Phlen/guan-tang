<?php

namespace Home\Controller;
use Think\Controller;

class AboutUsController extends Controller {

  public function index() {
    $this->redirect('index/index');

  }

  public function aboutUs() {
    $this->display('about_us');
  }

}