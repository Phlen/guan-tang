<?php
namespace Home\Controller;
use Think\Controller;

class LoadMapController extends Controller {

  public function index() {
    $this->display('loadMap');
  }
}