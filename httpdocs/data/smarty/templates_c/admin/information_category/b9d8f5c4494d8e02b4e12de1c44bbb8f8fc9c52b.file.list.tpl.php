<?php /* Smarty version Smarty-3.1.18, created on 2020-01-09 17:Jan:th
         compiled from "/var/www/vhosts/dorency.com/httpdocs/admin/contents/information_category/template/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16552454215e16eb4fb51433-95143102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d8f5c4494d8e02b4e12de1c44bbb8f8fc9c52b' => 
    array (
      0 => '/var/www/vhosts/dorency.com/httpdocs/admin/contents/information_category/template/list.tpl',
      1 => 1575597295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16552454215e16eb4fb51433-95143102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_pagenavi' => 0,
    't_information_category' => 0,
    'information_category' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e16eb4fb88929_65001797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e16eb4fb88929_65001797')) {function content_5e16eb4fb88929_65001797($_smarty_tpl) {?>			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<table class="footable table table-stripped toggle-arrow-tiny tbl_1" data-page-size="15">
				<thead>
					<tr>
						<th>お知らせカテゴリ名</th>
						<th class="showhide">表示</th>
						<th class="delete">削除</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars["information_category"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["information_category"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t_information_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["information_category"]->key => $_smarty_tpl->tpl_vars["information_category"]->value) {
$_smarty_tpl->tpl_vars["information_category"]->_loop = true;
?>
					<tr>
						<td><a href="./edit.php?id=<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['information_category']->value['name'];?>
</a></td>
						<td class="pos_ac">
							<div class="switch">
								<div class="onoffswitch">
									<input type="checkbox" value="1" class="onoffswitch-checkbox btn_display" id="display<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
"<?php if ($_smarty_tpl->tpl_vars['information_category']->value['display_flg']==1) {?> checked<?php }?>>
									<label class="onoffswitch-label" for="display<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
">
										<span class="onoffswitch-inner"></span>
										<span class="onoffswitch-switch"></span>
									</label>
								</div>
							</div>
						</td>
						<td class="pos_ac" style="text-align:unset;">
							<a href="javascript:void(0)" class="btn btn-sm btn-danger btn_delete" data-id="<?php echo $_smarty_tpl->tpl_vars['information_category']->value['id_information_category'];?>
">削除</a>
						</td>
					</tr>
					<?php }
if (!$_smarty_tpl->tpl_vars["information_category"]->_loop) {
?>
					<tr>
						<td colspan="6"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
は見つかりません。</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="10"><ul class="pagination pull-right">
							</ul></td>
					</tr>
				</tfoot>
			</table>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_pagenavi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
