<?php
/* Smarty version 4.0.4, created on 2022-05-24 08:33:10
  from 'C:\xampp\htdocs\ProyectoOnline2\templates\Cuerpo\Contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_628c7c2620be99_82254477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd1540865a1a8fba3e87c431eb3527f56ac44ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoOnline2\\templates\\Cuerpo\\Contacto.tpl',
      1 => 1653373148,
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
function content_628c7c2620be99_82254477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Cab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

<div class="texto-titulo"><h2>Contactanos</h2></div>

<h6>Número telefonico: 5960-0202</h6>
<h6> Correo electronico: Artesano@gmail.com</h6>
<h6>En todas las redes sociales: Artesano.Oficial</h6>
<h6> En cuentranos en: 13 Calle y 2 Avenida Esquina Zona 10, Plaza Rosa, Cdad. de Guatemala 01010</h6>
</div>
<br>
<br>
<div class="container">

<div class="row">
    <div class="center">
        <img src="Recursos/Salon1.jpg" height="40%" width="30%">
        <img src="Recursos/salon2.webp" height="40%" width="30%">
        <img src="Recursos/salon 3.jpg" height="40%" width="30%">
    </div>
    <div class="center">
        <img src="Recursos/salon4.jpg" height="40%" width="30%">
        <img src="Recursos/salon5.webp" height="40%" width="30%">
        <img src="Recursos/salon6.jpg" height="40%" width="30%">
    </div>

</div>
</div>
<br>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
