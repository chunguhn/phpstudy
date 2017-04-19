<?php 
// http://ggachi.ncity.net/TIP/5778
//error_reporting(0);		// 에러 보고 안함(운영일때)
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!doctype html>
<html lang="ko">
	<head>
		<title>PHP 스터디<?=(isset($_title) ? ' - ' . $_title : '')?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
			crossorigin="anonymous">
		<style>
			span.comment {
				color:green
			}
		</style>
	</head>
	<body class="container">