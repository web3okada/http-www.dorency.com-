<?php
//-------------------------------------------------------------------
// 作成日： 2018/01/15
// 作成者： 岡田
// 内  容： お知らせカテゴリマスタ 一覧表示
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";

//----------------------------------------
//  メッセージ取得
//----------------------------------------
// 取得
$message = ( isset( $_SESSION["admin"][_CONTENTS_DIR]["message"] ) ) ? $_SESSION["admin"][_CONTENTS_DIR]["message"] : null;

// クリア
unset( $_SESSION["admin"][_CONTENTS_DIR]["message"] );

//----------------------------------------
//  SESSION取得
//----------------------------------------
$arr_post = ( isset($_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"]) ) ? $_SESSION["admin"][_CONTENTS_DIR]["search"]["POST"] : null;

//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage  = new DB_manage( _DNS );
$mainObject = new $class_name( $objManage );

// データ取得
$t_information_category = $mainObject->GetSearchList( $arr_post );


// クラス削除
unset( $objManage );
unset( $mainObject );

//----------------------------------------
// 表示
//----------------------------------------
// smarty設定
$smarty = new MySmarty("admin");
$smarty->compile_dir .= _CONTENTS_DIR. "/";

// テンプレートに設定
$smarty->assign( "message"                 , $message                          );
$smarty->assign( 't_information_category'  , $t_information_category["data"]   );
$smarty->assign( 'page_navi'               , $t_information_category["page"]   );

// 表示
$smarty->display("index.tpl");
?>
