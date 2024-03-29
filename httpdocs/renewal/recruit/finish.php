<?php
//-------------------------------------------------------------------
// 作成日： 2019/10/21
// 作成者： 岡田
// 内  容： エントリー　完了
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


//----------------------------------------
// SESSION受け取り
//----------------------------------------
$arr_post = $_SESSION["front"]["entry"]["POST"];

//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "エントリー";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";

//----------------------------------------
//  表示
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "recruit/";

// テンプレートに設定
$smarty->assign( "message"  , $message   );
$smarty->assign( "arr_post" , $arr_post  );

// 表示
$smarty->display("finish.tpl");
?>
