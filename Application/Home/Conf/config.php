<?php
return array(
	//'配置项'=>'配置值'
  URL_ROUTER_ON => true,

  URL_ROUTE_RULES => array(
    /*'page/:id\d' => 'page/index',
    'news/:id\d' => 'news/index',
    /*'lists/:page\d' => 'newsList/page/index',*/
   /* 'list/[:page\d]/[:page_size\d]' => 'newsList/page/index'*/
    'about'                    =>    'About/about',
    'about-us'                 =>    'AboutUs/aboutUs',
    'case'                     =>    'ShowCase/showcase',
    'caseDetail/:excerpt\S'    =>    'ShowDetail/index',
    'gallery/:id\d'            =>    'Gallery/gallery'
  ),
);