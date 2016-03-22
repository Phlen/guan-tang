<?php
// URL_PARAMS_BIND_TYPE
$db_config = include("db_config.php");

// 其他配置
$config = array(
  'VAR_URL_PARAMS' => '_URL_', // PATHINFO URL参数变量
  'URL_HTML_SUFFIX'=>'html',

  'TMPL_PARSE_STRING' => array(
   /* '__ROOT__' => './index.php/Home',*/
  )
);

return array_merge($db_config, $config);