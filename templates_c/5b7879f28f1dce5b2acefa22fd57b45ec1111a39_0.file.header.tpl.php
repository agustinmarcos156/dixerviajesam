<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-27 21:36:35
  from 'C:\xampp\htdocs\dixerviajesam\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ecec143bf86b2_51720344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7879f28f1dce5b2acefa22fd57b45ec1111a39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dixerviajesam\\templates\\header.tpl',
      1 => 1590608190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecec143bf86b2_51720344 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="products" class="item-href-nav">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a href="collections" class="item-href-nav">COLECCIONES</a>
                </li>
                <li class="nav-item">
                    <a href="login" class="item-href-nav">LOGIN</a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
                    <li class="nav-item">
                        <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link " href="logout">Logout</a>
                    </li>
                <?php }?>
            </ul>
            
        </div>
    </nav>
<?php }
}
