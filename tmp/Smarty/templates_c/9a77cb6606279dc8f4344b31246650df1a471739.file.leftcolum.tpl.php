<?php /* Smarty version Smarty-3.1.6, created on 2013-08-22 14:42:47
         compiled from "../views/default\leftcolum.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267452147bf7047295-90143894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a77cb6606279dc8f4344b31246650df1a471739' => 
    array (
      0 => '../views/default\\leftcolum.tpl',
      1 => 1377168165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267452147bf7047295-90143894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52147bf706f4f',
  'variables' => 
  array (
    'rsCategorie' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52147bf706f4f')) {function content_52147bf706f4f($_smarty_tpl) {?>	

<div id="leftColumn">


<div id="leftMenu">
	<div class="menuCaption">Меню:</div>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategorie']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
             <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
                 <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
                  -- -- <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br />  
                 <?php } ?>   
             <?php }?>
        <?php } ?>
        
</div>  

</div><?php }} ?>