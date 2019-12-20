<?php
//-------------------------------------------------------------------
// 作成日：2019/10/11
// 作成者：岡田
// 内  容：トップページ
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";


// 採用から
if( !empty( $arr_get["comment"] ) ){
	if( empty( $_POST["comment"] ) ){
		$_POST["comment"] = $arr_get["comment"] . "\n-----\n";
	}
}

//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "お問い合わせ";

// キーワード
$_HTML_HEADER["keyword"] = "";

// ディスクリプション
$_HTML_HEADER["description"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "contact/";

// オプション設定
$smarty->assign( "OptionContent"   , $OptionContent  );

// 表示
$smarty->display("index.tpl");
?>