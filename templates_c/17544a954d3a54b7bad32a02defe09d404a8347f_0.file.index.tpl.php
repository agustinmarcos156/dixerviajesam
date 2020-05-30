<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 00:02:41
  from 'C:\xampp\htdocs\dixerviajesam\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed18681803a75_14790088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17544a954d3a54b7bad32a02defe09d404a8347f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dixerviajesam\\templates\\index.tpl',
      1 => 1590789758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ed18681803a75_14790088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-md-2 cold-sm-1"></div>
        <div class="col-md-5 cold-sm-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
?>
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['destino']->value->nombre;?>
 </a></li>
                </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col-md-5 cold-sm-5"></div>
        <div class="col-md-2 cold-sm-1"></div>
    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
