<!DOCTYPE html>
<html lang="ja">
<head>
{include file=$template_meta}
<link rel="stylesheet" href="{$_RENEWAL_DIR}/common/css/import.css" type="text/css" />
{literal}
<style type="text/css">
<!--
	/*html  { width:900px;  }*/
-->
</style>
{/literal}
</head>
<body>
<div id="iframe" class="popup">
	<div id="base">
		<section>
			<div class="center2 wrapper">
				<div class="item">
					<h2 class="hl_1"><span>3</span>ドーナッツ</h2>
					<div class="pos_ac"><img src="{$_RENEWAL_DIR}/common/image/contents/way/item3.jpg" alt="ドーナッツ"></div>
					<h2 class="hl_4">効果/特徴</h2>
					<div class="row feature">
						<div class="col-xs-6 cg2">
							<p>カビの発生防止</p>
						</div>
						<div class="col-xs-6 cg2">
							<p>油脂の酸化防止</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="wrapper bg_1">
				<div class="center2">
					<h2 class="hl_3"><span>使用されている製品</span></h2>
					<div class="row product">
						{foreach from=$t_product item="product" key="category" name="loopProduct"}
						<div class="col-xs-6{if $smarty.foreach.loopProduct.total >= 2} height-1{/if}">
							<div class="bg_f">
								<p class="pos_ac mb20"><img src="{if !empty( $t_product_category.$category.image1 )}/common/photo/product_category/image1/m_{$t_product_category.$category.image1}{else}{$_RENEWAL_DIR}/common/image/contents/null_sq.jpg{/if}" alt="{$t_product_category.$category.name}"></p>
								<div class="pos_ac">
									<p class="type">{foreach from=$product item="product_parts" name="loopProductParts"}<a href="{$_RENEWAL_DIR}/product/detail.php?id={$category}" onclick="window.parent.location.href='{$_RENEWAL_DIR}/product/detail.php?id={$category}'"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>キーピット{$product_parts.type}タイプ</a>{if !$smarty.foreach.loopProductParts.last}<br>{/if}{/foreach}</p>
								</div>
							</div>
						</div>
						{/foreach}
						{*
						<div class="col-xs-6 height-1">
							<div class="bg_f">
								<p class="pos_ac mb20"><img src="{$_RENEWAL_DIR}/common/image/contents/way/test.jpg" alt=""></p>
								<div class="pos_ac">
									<p class="type"><a href="###"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>キーピットPQ-PWタイプ</a></p>
								</div>
							</div>
						</div>
						<div class="col-xs-6 height-1">
							<div class="bg_f">
								<p class="pos_ac mb20"><img src="{$_RENEWAL_DIR}/common/image/contents/way/test.jpg" alt=""></p>
								<div class="pos_ac">
									<p class="type"><a href="###"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>キーピットPQ-PWタイプ</a></p>
								</div>
							</div>
						</div>
						*}
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
</body>
</html>
