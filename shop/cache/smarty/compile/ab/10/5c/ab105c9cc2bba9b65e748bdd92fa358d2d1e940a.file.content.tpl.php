<?php /* Smarty version Smarty-3.1.19, created on 2015-03-20 02:25:29
         compiled from "C:\Users\Admin\Documents\GitHub\OnlineStore\DEV\shop\admin\themes\default\template\controllers\not_found\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3709550b7709486f64-26127697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab105c9cc2bba9b65e748bdd92fa358d2d1e940a' => 
    array (
      0 => 'C:\\Users\\Admin\\Documents\\GitHub\\OnlineStore\\DEV\\shop\\admin\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1425618560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3709550b7709486f64-26127697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550b770949eae6_23138371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b770949eae6_23138371')) {function content_550b770949eae6_23138371($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['controller']->value)&&!empty($_smarty_tpl->tpl_vars['controller']->value)&&$_smarty_tpl->tpl_vars['controller']->value!='adminnotfound') {?>
	<h1><?php echo smartyTranslate(array('s'=>'The controller %s is missing or invalid.','sprintf'=>$_smarty_tpl->tpl_vars['controller']->value),$_smarty_tpl);?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo smartyTranslate(array('s'=>'Back to the previous page'),$_smarty_tpl);?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo smartyTranslate(array('s'=>'Go to the dashboard'),$_smarty_tpl);?>

</a><?php }} ?>
