<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 16:17:58
         compiled from "C:\wamp64\www\my-site\prestashop\admin324wehdw1\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16835874fb2674f716-07094858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244e1d6c4db4316892b128ec11853dded118c707' => 
    array (
      0 => 'C:\\wamp64\\www\\my-site\\prestashop\\admin324wehdw1\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1484037160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16835874fb2674f716-07094858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5874fb2677e1d5_51127959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5874fb2677e1d5_51127959')) {function content_5874fb2677e1d5_51127959($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
