<?php /* Smarty version Smarty-3.1.18, created on 2020-01-10 12:Jan:th
         compiled from "./detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13499404655e17f65581b801-60650529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2188843651849d229ec72d945b4ebcb639e332' => 
    array (
      0 => './detail.tpl',
      1 => 1577339677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13499404655e17f65581b801-60650529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    '_RENEWAL_DIR' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_information' => 0,
    'OptionInformationCategory' => 0,
    'arr_get' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e17f6558f7c30_05649126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e17f6558f7c30_05649126')) {function content_5e17f6558f7c30_05649126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/dorency.com/httpdocs/data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body id="information">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="body">
	<div id="page_title">
		<div><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top.jpg" alt="お知らせ"></div>
		<div class="page_title_wrap common">
			<div class="center mincho cg5">
				<h2><span class="main">News</span><span class="sub">お知らせ</span></h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/"><i class="fa fa-home"></i></a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/information/">お知らせ</a></li>
				<li><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</li>
			</ul>
		</div>
	</div>
	<section>
		<div id="info_detail" class="wrapper-t center">
			<div class="box">
				<div class="box_in">
					<div class="mb20"><span class="date cg2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['t_information']->value['date'],"%Y/%m/%d");?>
</span><span class="tag_1"><?php echo $_smarty_tpl->tpl_vars['OptionInformationCategory']->value[$_smarty_tpl->tpl_vars['t_information']->value['information_category']];?>
</span></div>
					<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
</h2>
					<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image1']!=null) {?>
					<div class="pos_ac mb50"><img src="/common/photo/information/image1/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div>
					<?php }?>
					<div class="entry mb50">
						<?php echo $_smarty_tpl->tpl_vars['t_information']->value['comment'];?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']!=null||$_smarty_tpl->tpl_vars['t_information']->value['image3']!=null||$_smarty_tpl->tpl_vars['t_information']->value['image4']!=null||$_smarty_tpl->tpl_vars['t_information']->value['image5']!=null) {?>
					<div class="row">
						<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image2']!=null) {?>
						<div class="col-xs-3 col-6 height-1 mb20">
							<a class="ov" href="/common/photo/information/image2/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" rel="lightbox">
								<div class="img_rect"><img src="/common/photo/information/image2/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image3']!=null) {?>
						<div class="col-xs-3 col-6 height-1 mb20">
							<a class="ov" href="/common/photo/information/image3/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" rel="lightbox">
								<div class="img_rect"><img src="/common/photo/information/image3/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image3'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image4']!=null) {?>
						<div class="col-xs-3 col-6 height-1 mb20">
							<a class="ov" href="/common/photo/information/image4/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" rel="lightbox">
								<div class="img_rect"><img src="/common/photo/information/image4/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image4'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['t_information']->value['image5']!=null) {?>
						<div class="col-xs-3 col-6 height-1 mb20">
							<a class="ov" href="/common/photo/information/image5/l_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image5'];?>
" rel="lightbox">
								<div class="img_rect"><img src="/common/photo/information/image5/m_<?php echo $_smarty_tpl->tpl_vars['t_information']->value['image5'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t_information']->value['title'];?>
"></div></a>
						</div>
						<?php }?>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="button _type_2"><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/information/<?php if ($_smarty_tpl->tpl_vars['arr_get']->value['page']!=null) {?>?page=<?php echo $_smarty_tpl->tpl_vars['arr_get']->value['page'];?>
<?php }?>"><i class="arrow_cg2"></i>一覧へ戻る</a></div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
