<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 16:08:27
         compiled from "C:\wamp64\www\my-site\prestashop\admin324wehdw1\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255115874f8ebe4d537-51174275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec38e7921e2a2a153e2afe9005ddf2aa8d9e548a' => 
    array (
      0 => 'C:\\wamp64\\www\\my-site\\prestashop\\admin324wehdw1\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1484037160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255115874f8ebe4d537-51174275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5874f8ebe6bd15_51203100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874f8ebe6bd15_51203100')) {function content_5874f8ebe6bd15_51203100($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a><?php }} ?>
