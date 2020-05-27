<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-27 23:23:57
  from 'C:\xampp\htdocs\dixerviajesam\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eceda6d90d183_56952637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17544a954d3a54b7bad32a02defe09d404a8347f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dixerviajesam\\templates\\index.tpl',
      1 => 1590614632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5eceda6d90d183_56952637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
?>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
 </a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
