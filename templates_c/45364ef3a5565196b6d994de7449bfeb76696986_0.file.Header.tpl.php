<?php
/* Smarty version 4.0.4, created on 2022-05-24 03:41:36
  from 'C:\xampp\htdocs\ProyectoOnline2\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_628c37d0ca6c50_15599137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45364ef3a5565196b6d994de7449bfeb76696986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoOnline2\\templates\\Cabeceras\\Header.tpl',
      1 => 1653356493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c37d0ca6c50_15599137 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link type="text/css" rel="stylesheet" href="styles/stylesheet.css"/>
      
    </head>
   <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

      <?php } else { ?>
        Inicio
      <?php }?>
      </title>
    <body><?php }
}
