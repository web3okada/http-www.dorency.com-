<?php /* Smarty version Smarty-3.1.18, created on 2020-01-29 09:Jan:th
         compiled from "./index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21254271085e30cc8f5ea844-43123119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b82e36b14a5b32b9082c90cfde424dcce75e56' => 
    array (
      0 => './index.tpl',
      1 => 1580179976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21254271085e30cc8f5ea844-43123119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_meta' => 0,
    '_RENEWAL_DIR' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    't_base' => 0,
    'base' => 0,
    'template_contact' => 0,
    't_information' => 0,
    'information' => 0,
    'OptionInformationCategory' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e30cc8f715207_29108366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e30cc8f715207_29108366')) {function content_5e30cc8f715207_29108366($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/dorency.com/httpdocs/data/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/css/import.css">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/js/top.js"></script>
</head>
<body id="top">
<div id="base">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<main>
<div id="top_main">
	<div id="main_image">
		<div class="img_back"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/main.jpg" alt="ドレンシー株式会社"></div>
		<div class="img_back"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/main2.jpg" alt="ドレンシー株式会社"></div>
		<div class="img_back"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/main3.jpg" alt="ドレンシー株式会社"></div>
	</div>
	<div class="text">
		<div class="center img_back"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/main_text1.png" alt="食品の保存に関することはお気軽にお問い合わせください"></div>
	</div>
</div>
<div id="body">
	<section>
		<div id="development" class="wrapper">
			<div class="center2">
				<h2 class="hl_1"><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/base_i.png" alt=""></i>本社/生産/開発拠点<span class="sub">Development base</span></h2>
				<p class="pos_ac mb50"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/image2.png" alt="本社/生産/開発拠点"></p>
			</div>
			<div class="center">
				<div class="row mb50">
<?php  $_smarty_tpl->tpl_vars["base"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["base"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_base']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["base"]->key => $_smarty_tpl->tpl_vars["base"]->value) {
$_smarty_tpl->tpl_vars["base"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["base"]->key;
?>
					<div class="col-xs-6">
						<div class="box bor10 parallax" data-parallax-in="vertical">
							<div class="row no-gutters">
								<div class="col-xs-<?php if ($_smarty_tpl->tpl_vars['base']->value['image1']) {?>7<?php } else { ?>12<?php }?>">
									<div class="text height-1">
										<h3><?php echo $_smarty_tpl->tpl_vars['base']->value['name'];?>
</h3>
										<p>〒<?php echo $_smarty_tpl->tpl_vars['base']->value['zip'];?>
<?php if ($_smarty_tpl->tpl_vars['base']->value['image1']!=null) {?><br><?php } else { ?> <?php }?>
											<?php echo $_smarty_tpl->tpl_vars['base']->value['address1'];?>
<?php if ($_smarty_tpl->tpl_vars['base']->value['image1']!=null) {?><br><?php }?><?php echo $_smarty_tpl->tpl_vars['base']->value['address2'];?>

											<?php if ($_smarty_tpl->tpl_vars['base']->value['map']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value['map'];?>
" target="_blank" class="ga_link" data-text="<?php echo $_smarty_tpl->tpl_vars['base']->value['name'];?>
GoogleMap">[GoogleMap]</a><?php }?>
										</p>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['base']->value['image1']) {?>
								<div class="col-xs-5">
									<div class="photo img_back height-1"><img src="/common/photo/base/image1/m_<?php echo $_smarty_tpl->tpl_vars['base']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['base']->value['name'];?>
"></div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
<?php } ?>
				</div>
				<div class="pos_ac"><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/company/" class="button _green">会社概要<i class="arrow"></i></a></div>
			</div>
		</div>
	</section>
	<section>
		<div id="reserch" class="wrapper">
			<h2 class="hl_1"><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/deve_i.png" alt=""></i>研究開発<span class="sub">Research and Development</span></h2>
			<p class="mb50">従来の「鮮度保持剤」から一歩踏み出し新しい領域で<br>
				新しい製品の研究開発に取り組んでいます。</p>
			<div class="row no-gutters">
				<div class="col-xl-6 hidden-lg">
					<div class="row no-gutters">
						<div class="col-xs-2-5">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d1.jpg" alt="研究開発">
						</div>
						<div class="col-xs-3-5">
							<div class="row no-gutters">
								<div class="col-xs-8">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d2.jpg" alt="研究開発">
								</div>
								<div class="col-xs-4">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d3.jpg" alt="研究開発">
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-xs-4">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d4.jpg" alt="研究開発">
								</div>
								<div class="col-xs-8">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d5.jpg" alt="研究開発">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row no-gutters">
						<div class="col-xs-2-5">
							<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d1.jpg" alt="研究開発">
						</div>
						<div class="col-xs-3-5">
							<div class="row no-gutters">
								<div class="col-xs-8">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d2.jpg" alt="研究開発">
								</div>
								<div class="col-xs-4">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d3.jpg" alt="研究開発">
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-xs-4">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d4.jpg" alt="研究開発">
								</div>
								<div class="col-xs-8">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/r_d5.jpg" alt="研究開発">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="factory" class="wrapper">
			<div class="center">
				<div class="row">
					<div class="col-sm-4 pos_ac-sp">
						<div class="height-1 disp_tbl">
							<div class="disp_td">
								<h2 class="hl_1 pos_al"><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/fact_i.png" alt=""></i>生産工場<span class="sub">Factory</span></h2>
								<p class="mb50">厳格な品質保障の仕組を構築し、<br>安全・安心を最優先に生産体制を整えています。</p>
								<div class="mb30">
									<a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/virtual/" class="button _green">バーチャル工場見学<i class="arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row no-gutters height-1">
							<div class="col-xs-6 col-6">
								<div class="parallax" data-parallax-in="vertical-r">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/image5.png" alt="生産工場">
								</div>
							</div>
							<div class="col-xs-6 col-6">
								<div class="parallax" data-parallax-in="vertical">
									<img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/image6.png" alt="生産工場">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="brand" class="wrapper">
			<div class="center">
				<h2 class="hl_1"><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/brand_i.png" alt=""></i>ドレンシーブランド・製品情報<span class="sub">Brand and Items</span></h2>
				<p class="mb50 pos_ac">新しい領域から創り出された新しい製品。</p>
				<div class="box parallax" data-parallax-in="vertical">
					<div class="row no-gutters">
						<div class="col-xs-1-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/brand_k1.jpg" alt=""></div>
						</div>
						<div class="col-xs-2-5">
							<div class="text height-1">
								<h3 class="cg">X線対応脱酸素剤/アルコール揮散剤</h3>
								<p>より確実で高度な品質管理に対応した、<br>X線対応型脱酸素剤。</p>
							</div>
						</div>
						<div class="col-xs-2-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/d1.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="box parallax" data-parallax-in="vertical">
					<div class="row no-gutters">
						<div class="col-xs-1-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/brand_k2.jpg" alt=""></div>
						</div>
						<div class="col-xs-2-5">
							<div class="text height-1">
								<h3 class="cg">アルコール揮散併用脱酸素剤</h3>
								<p>アルコール揮散と脱酸素機能を併用し、<br>金属検出機にも対応</p>
							</div>
						</div>
						<div class="col-xs-2-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/d2.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="box parallax" data-parallax-in="vertical">
					<div class="row no-gutters">
						<div class="col-xs-1-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/brand_k3.jpg" alt=""></div>
						</div>
						<div class="col-xs-2-5">
							<div class="text height-1">
								<h3 class="cg">電子レンジ対応脱酸素剤</h3>
								<p>電子レンジにも対応した脱酸素剤。</p>
							</div>
						</div>
						<div class="col-xs-2-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/d3.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="box mb50 parallax" data-parallax-in="vertical">
					<div class="row no-gutters">
						<div class="col-xs-1-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/brand_k4.jpg" alt=""></div>
						</div>
						<div class="col-xs-2-5">
							<div class="text height-1">
								<h3 class="cg">酸素検知剤付キーピット</h3>
								<p>脱酸素状態を「より正確に」、「より速く」、<br>「より見やすく」確認出来る酸素検知剤。<br>（一体型脱酸素剤）</p>
							</div>
						</div>
						<div class="col-xs-2-5">
							<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/d4.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-6">
						<div class="pos_ar">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/product/" class="button _green">鮮度保持剤<i class="arrow"></i></a>
						</div>
					</div>
					<div class="col-xs-6 col-6">
						<div class="pos_al">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/use/" class="button _green">用途のご紹介<i class="arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="top_kairo">
			<div class="row">
				<div class="col-xl-3 col-xs-5 col-xs-push-7">
					<div class="disp_tbl height-1">
						<div class="disp_td">
							<h2 class="hl_1"><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/cairo_i.png" alt=""></i>楽々カイロ<span class="sub">Heat Pad</span></h2>
							<p class="mb20">脱酸素剤事業で培った鉄粉・包材技術を、<br>使い捨てカイロに応用し、製造しております。</p>
							<div class="mb20"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/cairo.png" alt="楽々カイロ"></div>
							<div class="mb20"><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/cairo/" class="button _green">用途のご紹介<i class="arrow"></i></a></div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-xl-pull-3 col-xs-7 col-xs-pull-5">
					<div class="photo img_back height-1"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/cairo_p.jpg" alt="楽々カイロ"></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="wrapper-t center">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_contact']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</section>
	<section>
		<div class="wrapper-t center">
			<div class="box mb0">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/recruit/" class="ov"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/recruit.jpg" alt="採用情報"></a>
			</div>
		</div>
	</section>
	<section>
		<div id="top_info" class="wrapper center">
			<div class="hl_2">
				<h2><i class="title_i"><img src="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/image/contents/top/news_i.png" alt=""></i>お知らせ<span class="sub">NEWS</span></h2>
				<div class="right"><a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/information/">一覧を見る</a></div>
			</div>
			<div class="info_list">
				<?php  $_smarty_tpl->tpl_vars["information"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_information']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information"]->key => $_smarty_tpl->tpl_vars["information"]->value) {
$_smarty_tpl->tpl_vars["information"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["information"]->key;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/information/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['information']->value['id_information'];?>
" class="fa_a">
					<dl>
						<dt><span class="tag_1"><?php echo $_smarty_tpl->tpl_vars['OptionInformationCategory']->value[$_smarty_tpl->tpl_vars['information']->value['information_category']];?>
</span></dt>
						<dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['information']->value['date'],"%Y/%m/%d");?>
　<?php echo $_smarty_tpl->tpl_vars['information']->value['title'];?>
</dd>
					</dl>
				</a>
				<?php }
if (!$_smarty_tpl->tpl_vars["information"]->_loop) {
?>
					<div>お知らせはありません。</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>
</main>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
