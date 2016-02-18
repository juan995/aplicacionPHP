<?php
	require_once 'UriParser.class.php';
	$basename=UriParser::getBaseName();
	$action= UriParser::getActionName();
	$uri= UriParser::getBaseUri();
	echo $basename;
	echo "<br>";
	echo $action;
	echo "<br>";
	echo $uri;
?>