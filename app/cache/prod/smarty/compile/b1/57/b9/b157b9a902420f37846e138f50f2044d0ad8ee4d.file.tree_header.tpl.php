<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 16:17:58
         compiled from "C:\wamp64\www\my-site\prestashop\admin324wehdw1\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121625874fb26720c36-45043500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b157b9a902420f37846e138f50f2044d0ad8ee4d' => 
    array (
      0 => 'C:\\wamp64\\www\\my-site\\prestashop\\admin324wehdw1\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1484037160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121625874fb26720c36-45043500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5874fb2673cf10_68972177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874fb2673cf10_68972177')) {function content_5874fb2673cf10_68972177($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
