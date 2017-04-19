<?php 
require_once './../inc/header.php';
	echo "<pre>";
	include './ex_1.php';		// 한번
	echo "<br>";
	include './ex_1.php';		// 두번
	echo "<br>";
	include './ex_1-1.php';		// 워닝
	echo "<br>";
	include './ex_2.php';		// 한번
	echo "</pre>";
?>