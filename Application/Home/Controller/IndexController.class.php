<?php
namespace Home\Controller;
use Home\Model\IndexModel;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

      $indexModel = new IndexModel();
      $case = $indexModel->getCase();
      /*dump($case);*/
      $this->assign('case',$case);
      $this->display('index');
    }
}