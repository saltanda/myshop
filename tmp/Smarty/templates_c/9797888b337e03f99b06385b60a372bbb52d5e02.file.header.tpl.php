<?php /* Smarty version Smarty-3.1.6, created on 2013-08-22 11:51:13
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122952147bf6e34dd8-35031870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1377099278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122952147bf6e34dd8-35031870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52147bf6f3782',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52147bf6f3782')) {function content_52147bf6f3782($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
    </head>    
<body>
	<div id="header">
		<h1>my shop - интернет магазин</h1>
	</div>
	
	
 <?php echo $_smarty_tpl->getSubTemplate ('leftcolum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   	

	
<div id="centerColumn">

	centerColumn
<?php }} ?>