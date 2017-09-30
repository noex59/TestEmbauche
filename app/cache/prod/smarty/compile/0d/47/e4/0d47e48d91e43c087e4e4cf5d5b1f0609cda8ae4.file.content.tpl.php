<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 10:51:32
         compiled from "C:\wamp64\www\admin961miivxc\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2462759ce0994cf5f95-33854295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d47e48d91e43c087e4e4cf5d5b1f0609cda8ae4' => 
    array (
      0 => 'C:\\wamp64\\www\\admin961miivxc\\themes\\default\\template\\content.tpl',
      1 => 1506614703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2462759ce0994cf5f95-33854295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ce0994dcbab5_96835096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce0994dcbab5_96835096')) {function content_59ce0994dcbab5_96835096($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
