<?php
session_start();
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

// Obtenemos los post
$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

// Si no hay post entonces redirigimos
 if(!$posts){
	$_SESSION["nopost"] = "Actualmente No Existen Posteos";
	header('Location: error.php');
}

require 'views/index.view.php';

?>