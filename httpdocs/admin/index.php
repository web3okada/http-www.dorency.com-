<?php
//-------------------------------------------------------------------
// 作成日: 2016/11/01
// 作成者: 鈴木
// 内  容: 管理TOP表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("admin");
$smarty->template_dir = "./";
$smarty->compile_dir .= "";

// 表示
$smarty->display("index.tpl");

?>