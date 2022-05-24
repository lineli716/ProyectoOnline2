<?php
/* Smarty version 4.0.4, created on 2022-05-24 08:29:36
  from 'C:\xampp\htdocs\ProyectoOnline2\templates\Cuerpo\Compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_628c7b50e17b45_52123661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc6ec2413b0ad9af41c66f33319c98b0e857f2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoOnline2\\templates\\Cuerpo\\Compra.tpl',
      1 => 1653373661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Cab.tpl' => 1,
    'file:templates/Cabeceras/Down.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_628c7b50e17b45_52123661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Cab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

<div class="texto-titulo"><h2>Mira tus compras</h2></div>
<br>
<br>
<br>
<br>
<br>





<h6>Total a pagar</h6> <a class="waves-effect waves-light btn-small"><i class="material-icons left">shopping_basket</i>Pagar</a>
</div>
<br>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
