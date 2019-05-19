<?php
/* Smarty version 3.1.32, created on 2019-05-19 13:36:17
  from '/var/www/html/prestashop/admin756gqwhqa/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ce0f961a26a14_96875464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e223a0228d42afb01630e6fd192bf5f700b0987' => 
    array (
      0 => '/var/www/html/prestashop/admin756gqwhqa/themes/default/template/content.tpl',
      1 => 1532453264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce0f961a26a14_96875464 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
