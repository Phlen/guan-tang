<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\showCaseModel;
use Home\Model\NavModel;
class ShowCaseController extends Controller {

  public function index() {
    $this->redirect('index/index');
  }

  public function showcase() {
    $caseModel = new showCaseModel();
    $case = $caseModel->getCase();
    $this->assign('case',$case);
    $navModel = new NavModel();
    $nav = $navModel->getNav();
    $this->assign('nav',$nav);
    /*dump($nav);*/
    $this->display('showcase');
  }
}