<?php
function change($str) {
  $uper = strtoupper($str);
  $changed = str_replace('-',' ',$uper);
  /*$uper = str_replace('　', ' ', $uper); //替换全角空格为半角
  $uper = str_replace(' ', ' ', $uper); //替换连续的空格为一个*/
  /*$noe = flase;
  for ($i=0 ; $i<strlen($uper); $i++) { //遍历整个字符串
    if($noe && $uper[$i]==' ')
      $uper[$i] = ','; //如果当前这个空格之前出现了不是空格的字符
    elseif($uper[$i]!=' ')
      $noe=true; //当前这个字符不是空格，定义下 $noe 变量
  }
  dump($uper);
  return $uper;*/
  dump($changed);
  return $changed;
}

