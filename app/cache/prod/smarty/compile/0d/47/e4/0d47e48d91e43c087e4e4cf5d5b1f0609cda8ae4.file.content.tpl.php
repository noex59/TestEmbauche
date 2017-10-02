<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 13:18:28
         compiled from "C:\wamp64\www\admin961miivxc\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2902659d22084c42d67-59765522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2902659d22084c42d67-59765522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d22084c57c20_60266947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d22084c57c20_60266947')) {function content_59d22084c57c20_60266947($_smarty_tpl) {?>
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
