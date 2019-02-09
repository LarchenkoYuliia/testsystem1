<?php
	session_start();

	$id = 'main';
	if(isset($_GET['id'])) {
		$id = $_GET['id'];


	$route = 'pages/'.$id.'.php';
	include_ones($route);
	include_ones('tpl/base.php');
}