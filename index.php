<?php
  require dirname(__FILE__) . '\\template.inc.php';
  
  //实例化模板类
  $tpl = new Templates();

  //注入变量
  $name = '此景、哏美';
  $array = array(1, 2, 3, 4, 5);

  $tpl->assign('name', $name);
  $tpl->assign('condition', 5<4);
  $tpl->assign('array', $array);

  //载入tpl文件
  $tpl->display('index.tpl');
?>