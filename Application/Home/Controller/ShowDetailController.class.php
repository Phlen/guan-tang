<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\showDetailModel;
use Home\Model\showCaseModel;

class ShowDetailController extends Controller {

  public function index($excerpt) {
    $detailModel = new showDetailModel();
    $detail = $detailModel->getCaseDetailByExcerpt($excerpt);
    $caseImage = $detailModel->getCaseImageByTitle($excerpt);
    $this->assign('caseImage',$caseImage);
    /*dump($detail);*/
    $this->assign('detail',$detail);

    $caseModel = new showCaseModel();
    $case = $caseModel->getRandCase();
    /*dump($case);*/
    $this->assign('case',$case);

    $this->display('showDetails');
  }

  public function showDetail(){
    $this->display('showDetails');
  }

/*  public function getDetailByExcerpt($excerpt) {
    $detailModel = new showDetailModel();
    $detail = $detailModel->getCaseDetailByExcerpt($excerpt);
    $caseImage = $detailModel->getCaseImageByTitle($excerpt);
    $this->assign('caseImage',$caseImage);
    $this->assign('detail',$detail);

    $caseModel = new showCaseModel();
    $case = $caseModel->getRandCase();
    $this->assign('case',$case);

    $this->display('showDetails');
  }*/

  /*public function getCaseImageByTitle($excerpt) {
    $caseModel = new showDetailModel();
    $caseImage = $caseModel->getCaseImageByTitle($excerpt);

  }*/
}