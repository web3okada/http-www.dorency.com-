<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 15:Jan:nd
         compiled from "/var/www/vhosts/dorency.com/httpdocs/admin/common/inc/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14266795015e27e745e8f258-28820590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d89d76c8a85de09897eabbc0b11dfb505c3f22' => 
    array (
      0 => '/var/www/vhosts/dorency.com/httpdocs/admin/common/inc/image.tpl',
      1 => 1576218741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14266795015e27e745e8f258-28820590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_ARR_IMAGE' => 0,
    'imgKey' => 0,
    'key' => 0,
    'file' => 0,
    'message' => 0,
    'mode' => 0,
    'arr_post' => 0,
    'path' => 0,
    'dir' => 0,
    'preview_name' => 0,
    '_ADMIN' => 0,
    '_CONTENTS_DIR' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e27e7460a8bf5_43755833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e27e7460a8bf5_43755833')) {function content_5e27e7460a8bf5_43755833($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_ARR_IMAGE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['imgKey']->value)===null||$tmp==='' ? '' : $tmp)==''||((($tmp = @$_smarty_tpl->tpl_vars['imgKey']->value)===null||$tmp==='' ? '' : $tmp)!=''&&$_smarty_tpl->tpl_vars['key']->value==(($tmp = @$_smarty_tpl->tpl_vars['imgKey']->value)===null||$tmp==='' ? '' : $tmp))) {?>
<div class="form-group <?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['notnull'])===null||$tmp==='' ? '' : $tmp)==1) {?> required<?php }?>">
	<label class="col-sm-2 control-label"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['file']->value['column'])===null||$tmp==='' ? '' : $tmp);?>
</label>
	<div class="col-sm-6">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name']])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name']];?>
</p><?php }?>
		<?php $_smarty_tpl->tpl_vars['preview_name'] = new Smarty_variable("_preview_image_".((string)$_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?>
		<div class="mb5">
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name']])===null||$tmp==='' ? '' : $tmp)==null) {?>
				<div class="load_image">
					NOT IMAGE<br />
				</div>
			<?php } else { ?>
				<div class="registered_image">
					<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
/s_<?php echo $_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name']];?>
" class="mb10" />
					<?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['notnull'])===null||$tmp==='' ? '' : $tmp)!=1) {?>
					<label><input type="checkbox" name="_delete_image[<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name']])===null||$tmp==='' ? '' : $tmp);?>
" /> この写真を削除する</label>
					<?php }?>
				</div>
			<?php }?>
			<input type="hidden" name="_<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
_now" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name']])===null||$tmp==='' ? '' : $tmp);?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['preview_name']->value])) {?>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['preview_name']->value])===null||$tmp==='' ? '' : $tmp)!=null) {?>
				<div class="load_image">
					<img src="<?php echo $_smarty_tpl->tpl_vars['_ADMIN']->value['home'];?>
/common/php/imageDisp.php?dir=<?php echo $_smarty_tpl->tpl_vars['_CONTENTS_DIR']->value;?>
&image=<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" />
					<span class="c_red"> ※この画像はプレビュー用です。まだ保存されていません。</span>
					<input type="hidden" name="_preview_<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" />
					<input type="hidden" name="_preview_image_<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['preview_name']->value];?>
" />
					<input type="hidden" name="_preview_image_dir" value="<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['_preview_image_dir'];?>
" />
				</div>
			<?php }?>
		<?php }?>
		</div>
		<input type="file" class="file" name="<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" size="50" />
	</div>
</div>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['column1'])===null||$tmp==='' ? '' : $tmp)!=null) {?>
<div class="form-group<?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['notnull2'])===null||$tmp==='' ? '' : $tmp)==1) {?> required<?php }?>">
	<label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['file']->value['column1'];?>
</label>
	<div class="col-sm-6">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name1']])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name1']];?>
</p><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['type']->value)&&$_smarty_tpl->tpl_vars['type']->value=="text") {?>
		<textarea name="<?php echo $_smarty_tpl->tpl_vars['file']->value['name1'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['file']->value['name1'];?>
" rows="3" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name1']])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
		<?php } else { ?>
		<input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['file']->value['name1'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['file']->value['name1'];?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name1']])===null||$tmp==='' ? '' : $tmp);?>
" />
		<?php }?>
	</div>
</div>
<?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['column2'])===null||$tmp==='' ? '' : $tmp)!=null) {?>
<div class="form-group<?php if ((($tmp = @$_smarty_tpl->tpl_vars['file']->value['notnull2'])===null||$tmp==='' ? '' : $tmp)==1) {?> required<?php }?>">
	<label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['file']->value['column2'];?>
</label>
	<div class="col-sm-6">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name2']])===null||$tmp==='' ? '' : $tmp)!=null) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value['ng'][$_smarty_tpl->tpl_vars['file']->value['name2']];?>
</p><?php }?>
		<textarea name="<?php echo $_smarty_tpl->tpl_vars['file']->value['name2'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['file']->value['name2'];?>
" rows="3" class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr_post']->value[$_smarty_tpl->tpl_vars['file']->value['name2']])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
	</div>
</div>
<?php }?>
<div class="hr-line-dashed"></div>
<?php }?>
<?php } ?>
<?php }} ?>
