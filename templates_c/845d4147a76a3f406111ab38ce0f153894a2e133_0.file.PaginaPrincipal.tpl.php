<?php
/* Smarty version 4.0.4, created on 2022-05-24 15:48:33
  from 'C:\xampp\htdocs\ProyectoOnline2\templates\PaginaPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_628ce2313fb477_55097677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845d4147a76a3f406111ab38ce0f153894a2e133' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoOnline2\\templates\\PaginaPrincipal.tpl',
      1 => 1653398527,
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
function content_628ce2313fb477_55097677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Cab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
 <p></p>
 <img src="Recursos/Fondo 2.jpg" height="70%" width="100%">
</div>

<br><br>
<div class="container">

<div class="row">

    <div class="row">
        <div class="col s12 m7">
        <div class="card amber lighten-4">
            <div class="card-content black-text">
            <span class="card-title">Nuestros Productos</span>
            <p>Pasteles hechos con amor, de manera artesanal, y elaborados con ingredientes de la más alta calidad.
            Te ofrecemos una gran variedad de pasteles de diferentes sabores. No te los pierdas.</p>
            </div>
            <div class="card-action">
            <a href="?controller=Direccion&method=Productos">Ver</a>
            
            
            </div>
        </div>
        </div>
    
        <div class="col s8 m5">
        <div class="card white">
            <div class="texto-imagenes">
            <img src="Recursos/recetas-pasteles.jpg" height="38%" width="100%">
            </div>
        </div>
        </div>
        </div>
 </div> 
</div>


<div class="container">
<div class="row">

    <div class="row">
        <div class="col s12 m7">
        <div class="card amber lighten-4">
            <div class="card-content black-text">
            <span class="card-title">Nuestra Historia</span>
            <p>Desde hace más de 29 años, hemos formado parte de los mejores momentos en la vida de las familias guatemaltecas,
             ofreciendo dulces recuerdos de felicidad acompañando a seres queridos, compartiendo con familia y amigos.</p>
            </div>
            <div class="card-action">
            <a href="?controller=Direccion&method=Nosotros">Ver</a>
            
            </div>
        </div>
        </div>
    
        <div class="col s8 m5">
        <div class="card white">
            <div class="texto-imagenes">
            <img src="Recursos/Fondo 1.jpg" height="38%" width="100%">
            </div>
        </div>
        </div>
        </div>
 </div> 
</div>

<div class="container">
<div class="row">

    <div class="row">
        <div class="col s12 m7">
        <div class="card amber lighten-4">
            <div class="card-content black-text">
            <span class="card-title">Contactanos</span>
            <p>Nuestro número telefonico: 5940-0202.
            Correo electronico: Artesano@gmail.com
            En todas las redes sociales: Artesano.Oficial</p>
            </div>
            <div class="card-action">
            <a href="?controller=Direccion&method=Contacto">Ver</a>
            
            </div>
        </div>
        </div>
    
        <div class="col s8 m5">
        <div class="card white">
            <div class="texto-imagenes">
            <img src="Recursos/Fondo 3.jpg" height="38%" width="100%">
            </div>
        </div>
        </div>
        </div>
 </div> 
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Down.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
