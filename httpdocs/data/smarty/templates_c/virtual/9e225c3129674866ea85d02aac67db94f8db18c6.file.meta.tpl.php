<?php /* Smarty version Smarty-3.1.18, created on 2020-01-22 09:Jan:nd
         compiled from "/var/www/vhosts/dorency.com/httpdocs/renewal/common/include/meta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7523320385e279ae580e7a7-88748340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e225c3129674866ea85d02aac67db94f8db18c6' => 
    array (
      0 => '/var/www/vhosts/dorency.com/httpdocs/renewal/common/include/meta.tpl',
      1 => 1578551284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7523320385e279ae580e7a7-88748340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_HTML_HEADER_ORIGINAL' => 0,
    '_HTML_HEADER' => 0,
    '_HTML_HEADER_DEFAULT' => 0,
    '_RENEWAL_DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5e279ae59392b7_48552720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e279ae59392b7_48552720')) {function content_5e279ae59392b7_48552720($_smarty_tpl) {?><title><?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
<?php } else { ?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 | <?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?></title>
<meta name="keywords" content="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['keyword'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
<?php } else { ?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword'])===null||$tmp==='' ? '' : $tmp)) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
,<?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?>">
<meta name="description" content="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['description'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php } else { ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, viewport-fit=cover">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/favicon/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['_RENEWAL_DIR']->value;?>
/common/favicon/apple-touch-icon.png">

<meta property="og:title" content="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
<?php } else { ?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
 | <?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?>">
<meta property="og:site_name" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
<meta property="og:description" content="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['description'])===null||$tmp==='' ? '' : $tmp)!=null) {?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_ORIGINAL']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php } else { ?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_HTML_HEADER_DEFAULT']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?>">
<meta name="apple-mobile-web-app-title" content=" ドレンシー株式会社" />
<?php }} ?>
