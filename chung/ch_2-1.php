<?php 
	$_title = '챕터 2';
	require_once './inc/header.php';
	
	$a = "Hello world";
?>
		<b>텍스트</b>
		<?
			echo "<p>요렇게 <br>하귀</p>";
		?>
		<p><?= "double quote : [$a] \n은 문자열을 파싱한다." ?></p>
		<p><?= 'single quote : [$a] \n은 문자열을 그대로...' ?></p>
		<p><?= '글자 연결은' . ' [.] ' . '이걸로...'?>
		<script>
			// PHP 파싱 후에...
			//alert("<?= "double quote : [$a] \\n은 문자열을 파싱한다." ?>");
			//alert("<?= 'double quote : [$a] \n은 문자열을 파싱한다.' ?>");
		</script>
<?php 
	require_once './inc/footer.php';
?>
	
