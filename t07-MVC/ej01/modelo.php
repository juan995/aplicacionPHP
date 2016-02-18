<?php
 
function getMensaje(){
	$db = new PDO("mysql:host=localhost;dbname=mvc", "wordpress","wordpress");
	//Query
	$resultado = $db->query("select mensaje from ej01");
	
	//Cierro
	$db = null;
	return $resultado;
}
?>
