<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 15:51:32
  from 'C:\xampp\htdocs\dixerviajesam\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed264e43a8308_59515055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7879f28f1dce5b2acefa22fd57b45ec1111a39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dixerviajesam\\templates\\header.tpl',
      1 => 1590846689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed264e43a8308_59515055 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href=<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dixer Viajes</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="home" id="" class="item-href-nav"><img src="img/news_6.jpg" class="logo"></a>
                </li>
                <li class="nav-item">
                    <a href="destino" class="item-href-nav">DESTINOS</a>
                </li>
                <li class="nav-item">
                <a href="empresa" class="item-href-nav">EMPRESAS</a>
            </li>
                <li class="nav-item">
                    <a href="combos" class="item-href-nav">COMBOS</a>
                </li>
                <li class="nav-item">
                    <a href="login" class="item-href-nav">INICIAR SESION</a>
                </li>
                
            </ul>
            
        </div>
    </nav>
<?php }
}
