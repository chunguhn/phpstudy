<?php 
require_once './../inc/header.php';
	echo "<pre>";
	require_once './ex_1.php';		// 한번
	echo "<br>";
	require_once './ex_1.php';		// X
	echo "<br>";
	require_once './ex_2.php';		// 한번
	echo "<br>";
	require './ex_1-1.php';		// Fatal error - 여기서 멈춤
	echo "<br>";
	require_once './ex_1.php';		// X
	echo "</pre>";
?>