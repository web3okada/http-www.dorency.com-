<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 09:Jan:nd
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12606436705e2794bf8c0c47-52835157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1577339679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12606436705e2794bf8c0c47-52835157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    '_RENEWAL_DIR' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'message' => 0,
    'arr_post' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e2794bf9b0c04_23240274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e2794bf9b0c04_23240274')) {function content_5e2794bf9b0c04_23240274($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_ken')) include '/var/www/vhosts/dorency.com/httpdocs/data/smarty/libs/plugins/function.html_select_ken.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body id="contact">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top.jpg" alt="お問い合わせ"></div>
		<div class="page_title_wrap common">
			<div class="center mincho cg5">
				<h2><span class="main">お問い合わせ</span><span class="sub">Contact</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/"><i class="fa fa-home"></i></a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper center entry">
			<h2 class="hl_3">お問い合わせフォーム</h2>
			<form action="./check.php#form" method="post">
				<table class="tbl_form">
					<tbody>
						<tr class="first">
							<th scope="row">会社名<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['company'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['company'];?>
</span><?php }?>
								<input type="text" name="company" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['company'];?>
">
							</td>
						</tr>
						<tr>
							<th scope="row">部署</th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['post'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['post'];?>
</span><?php }?>
								<input type="text" name="post" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['post'];?>
">
							</td>
						</tr>
						<tr>
							<th scope="row">ご担当者名<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['name'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['name'];?>
</span><?php }?>
								<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
">
							</td>
						</tr>
						<tr>
							<th scope="row">フリガナ<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['ruby'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['ruby'];?>
</span><?php }?>
								<input type="text" name="ruby" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
">
							</td>
						</tr>
						<tr>
							<th class="pos-vt">住所<span class="need">必須</span></th>
							<td>
								<dl>
									<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['zip'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['zip'];?>
</span><?php }?>
									<dt>郵便番号<span class="c_red" style="font-size:12px;">　半角数字で入力してください</span></dt>
									<dd>
										<input name="zip" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['zip'])===null||$tmp==='' ? '' : $tmp);?>
" type="text" class="zip w150" placeholder="000-000" >
										<a href="javascript:AjaxZip3.zip2addr('zip','','prefecture','address');" class="bTn wp100 w_sm_A dis_b dis_sm_ib"><i class="fa fa-search" aria-hidden="true"></i>郵便番号から住所を自動入力する</a>
									</dd>
								</dl>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['prefecture'];?>
</span><?php }?>
								<dl>
									<dt>都道府県</dt>
									<dd>
										<?php echo smarty_function_html_select_ken(array('name'=>"prefecture",'class'=>"form-control inline input-s",'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['prefecture'])===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

									</dd>
								</dl>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['address'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['address'];?>
</span><?php }?>
								<dl>
									<dt>住所</dt>
									<dd class="w-420">
										<input name="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value['address'])===null||$tmp==='' ? '' : $tmp);?>
" type="text">
									</dd>
								</dl>
							</td>
						</tr>
						<tr>
							<th scope="row">電話番号<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['tel'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['tel'];?>
</span><?php }?>
								<input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
" maxlength="13" class="w150" placeholder="090-000-000">
							</td>
						</tr>
						<tr>
							<th scope="row">メールアドレス<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['mail'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['mail'];?>
</span><?php }?>
								<input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
" maxlength="255" >
							</td>
						</tr>
						<tr class="last">
							<th scope="row">お問い合わせ内容<span class="need">必須</span></th>
							<td>
								<?php if (!empty($_smarty_tpl->tpl_vars['message']->value['ng']['comment'])) {?><span class="error">※<?php echo $_smarty_tpl->tpl_vars['message']->value['ng']['comment'];?>
</span><?php }?>
								<textarea rows="10" name="comment"><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['comment'];?>
</textarea>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="pos_ac form_button">
					<button class="button" type="submit">確認する<i class="arrow_cg"></i></button>
				</div>
			</form>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
