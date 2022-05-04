<?php
/* Smarty version 4.0.4, created on 2022-05-04 20:18:47
  from 'C:\xampp\htdocs\ProyectoOnline2\templates\Cuerpo\Nosotros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6272c3873c2118_89804409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d427aef2e2106aaf94b0478d032207392a7f011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoOnline2\\templates\\Cuerpo\\Nosotros.tpl',
      1 => 1651688324,
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
function content_6272c3873c2118_89804409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Cab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="stylesheet.css">
<div class="container">
<div class="center"><h2> Sobre Nosotros</h2></div>
<img src="Recursos/Nosotros.jpg" height="70%" width="100<?php echo '%>'; ?>

</div>
<div class="container">

<h5> Acerca de Panito</h5>
<div class="texto-justificado">
<h6>Fue fundada en el año 1967 por el señor Ciro Carrieri, gran chef italiano quien trajo sus conocimientos y su amplia experiencia en pastelería. A través de sus productos nos dio a conocer los sabores de su Italia natal, esto permitió el crecimiento de la empresa y fue creando fuentes de trabajo para numerosas familias guatemaltecas. Desde su inicio se han utilizado materias primas de alta calidad en la elaboración de sus productos garantizando su frescura y sabor. Durante 50 años hemos formado parte de los eventos especiales de muchas familias con variedad de pasteles y otros productos. Trabajamos en equipo para dar el mejor servicio y el mejor producto a nuestros clientes</h6>

<h5> Nuestra Misión</h5>
<h6>Pastelería Italiana Panito, S.A. es una empresa que elabora repostería fina para clientes que saben que detrás del sabor y arte italiano se encuentra un valioso equipo de personas que se entregan, dedican y cumplen su trabajo con responsabilidad y calidad.</h6>

<h5> Nuestra Visión</h5>
<h6> Ser una pastelería líder a nivel nacional que ofrece productos de panadería y repostería de alta calidad. Deleitando a nuestros clientes en los momentos más importantes.</h6>
</div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
