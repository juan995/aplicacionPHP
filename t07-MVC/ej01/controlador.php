<?php
//obtene modelo
	require_once ('modelo.php');
//Preparar datos para al vista
$resultado = getMensaje();

//Mostrar la vista

	require_once 'vista.php';
?>