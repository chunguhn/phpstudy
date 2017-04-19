<?php
	/**
	 * PHP 선언
	 * <?php ~ ?> 나 <? ?> 나 동일.(다만, php.ini 설정에 <? ?>도 인식되게끔 설정 해주어야 함
	 */
	/*
	 * $arrLink = array();		// 빈 배열 샐성 - php 5.3 까지
	 	$arrLink = [];			// 5.4 부터
		$arrLink[] = array['ln' => './ch_1-1.php', 'nm' => '챕터1-1', 'info' => 'Hello 월드'];		// 배열 하나 추가
	 */

	// 배열
	$arrLink = [
			''		=> [
				['ln' => 'phpinfo.php', 'nm' => 'PHP INFO', 'info' => ''],
			],
			'ch1'	=> [
					['ln' => './ch_1-1.php', 'nm' => '챕터1-1', 'info' => 'Hello 월드'],
			],
			'ch2'	=> [
					array('ln' => './ch_2-1.php', 'nm' => '챕터2-1', 'info' => '문자열'),
					['ln' => './ch_2-2.php', 'nm' => '챕터2-2', 'info' => '변수 및 형변환'],
					['ln' => './ch_2-3.php', 'nm' => '챕터2-3', 'info' => '변수 참조'],
			],			
	];
	$arrLink['ch3'][0] = ['ln' => './ch_3-1.php', 'nm' => '챕터3-1', 'info' => '구구단 월드 - 단 입력'];
	
	// int array_push ( array &$array , mixed $var [, mixed $... ] )
	array_push($arrLink['ch3'], ['ln' => './ch_3-2.php?dan=2', 'nm' => '챕터3-2', 'info' => '구구단 월드 - 단 출력']);

	$arrLink['ch4'] = [
			['ln' => './ch_4-1.php', 'nm' => '챕터4-1', 'info' => '배열 기초'],
			['ln' => './ch_4-2.php', 'nm' => '챕터4-2', 'info' => '배열 정렬'],
			['ln' => './ch_4-3.php', 'nm' => '챕터4-3', 'info' => '배열 값 검색'],
			['ln' => './ch_4-4.php', 'nm' => '챕터4-4', 'info' => '배열 기타'],
	];

	$arrLink['ch5'] = [
			['ln' => './ch_5-1.php', 'nm' => '챕터5-1', 'info' => '배열 기초']
	];

	$arrLink['ch6'] = [
			['ln' => './ch_6-1.php', 'nm' => '챕터6-1', 'info' => '배열 기초']
	];
	
?>
<!doctype html>
<html lang="ko">
	<head>
		<title>PHP 스터디</title>
	</head>
	<body>
		<?
			/**
			 * // 배열의 원소($value)만
			 * foreach (array_expression as $value) {
			 * 
			 * // 배열의 키($key) 와 원소($value) 모두 
			 * foreach (array_expression as $key => $value) {
			 */
			foreach($arrLink as $chapterName => $value){
				echo "<ul>";
				echo sprintf("<p><b>%s</b></p>", $chapterName);
				foreach($value as $key => $val){
					echo '<li><a href="'.$val['ln'].'">'.$val['nm'].'</a>';
					echo "<p><b>${key}.</b> 주제 : ${val['info']}</p>";
					echo "</li>";
				}
				echo "</ul><br>";
			}
		?>
	</body>
</html>