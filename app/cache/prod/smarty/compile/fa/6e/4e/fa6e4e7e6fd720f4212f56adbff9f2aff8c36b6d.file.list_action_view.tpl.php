<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 13:29:14
         compiled from "C:\wamp64\www\admin961miivxc\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2630659ce2e8a8d5f82-65694781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6e4e7e6fd720f4212f56adbff9f2aff8c36b6d' => 
    array (
      0 => 'C:\\wamp64\\www\\admin961miivxc\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1506614726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2630659ce2e8a8d5f82-65694781',
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
  'unifunc' => 'content_59ce2e8a9850d1_40355830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce2e8a9850d1_40355830')) {function content_59ce2e8a9850d1_40355830($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
