<?php 
require_once './../inc/header.php';
	echo "<pre>";
	include_once './ex_1.php';		// 한번
	echo "<br>";
	include_once './ex_1.php';		// X
	echo "<br>";
	include_once './ex_2.php';		// 한번
	echo "<br>";
	require './ex_1-1.php';		// 워닝
	echo "<br>";
	include_once './ex_1.php';		// X
	echo "</pre>";
?>