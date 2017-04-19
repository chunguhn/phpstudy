<?php 
	$_title = '챕터 1';
	require_once './inc/header.php';
?>
		<b>Hello, World</b>
		<pre>
			include(), require(), include_once(), require_once()
			- 외부 파일을 포함하기 위해 사용하는 함수
			include : 포함할 파일이 없을경우 워닝 출력.
			require : 포함할 파일이 없을경우 fatal Error. 실행 종료
			include_once, require_once : 한번만!
		</pre>
		<a href="./ex_1-1/include_err.php">include error</a><br>
		<a href="./ex_1-1/require_err.php">require error</a><br>
		<a href="./ex_1-1/include_once.php">include once</a><br>
		<a href="./ex_1-1/require_once.php">require once</a>
<?php 
	require_once './inc/footer.php';
?>
	
