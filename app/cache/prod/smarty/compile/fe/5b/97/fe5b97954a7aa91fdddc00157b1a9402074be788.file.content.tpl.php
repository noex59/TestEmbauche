<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 11:02:07
         compiled from "C:\wamp64\www\admin961miivxc\themes\new-theme\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368459ce0c0f4066e6-56094492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5b97954a7aa91fdddc00157b1a9402074be788' => 
    array (
      0 => 'C:\\wamp64\\www\\admin961miivxc\\themes\\new-theme\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1506614733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368459ce0c0f4066e6-56094492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ce0c0f5caba1_29981382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce0c0f5caba1_29981382')) {function content_59ce0c0f5caba1_29981382($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
