<?php 
	$_title = '챕터 2';
	require_once './inc/header.php';
?>
		<b>숫자 & 변수</b>
		<p>변수는 $로 시작하면됨. 끗</p>
		<p>
		<?
			// 뭐....그렇죠?
			$_a = 1111111; $_b = 2; $_c = $_a + $_b;
			echo "${_a} + ${_b} = " . number_format($_c);	// number_format - 천단위 쿰마 찍어준다
		?>
		</p>
		<p>PHP는 형변환 에러 따윈 안키운다. 따라서 예상치 못한 결과과 발생할수도 있음.</p>
        <p><b>7.1 부터 워닝 나오네요~</b></p>
        <?
            $_a = '가나다'; $_b=4; $_c = $_a+$_b;
            var_dump($_a, $_b, $_c);
        ?>
		<p>
		<?php 
			// PHP 욜라 편한점! 형변환 따위 오류는 없다!
			$_a = '1'; $_b = false; $_c = 2; $_d = 1.5; $_e = $_a + $_b + $_c + $_d;
			echo "문자열 '1' + boolean false + inteager 3 + float 1.5 = 무슨타입????<br>";
			echo "<pre>";
			var_dump($_a, $_b, $_c, $_d);
			echo "<br>";
			var_dump($_e);
			echo "</pre>";
		?>
		<p>그렇다고 PHP에 형변환이 없는건 아니다!</p>
		<?php			
			echo "문자열 변환 : "; var_dump((string)$_e); echo "<br>";
			echo "숫자로 : "; var_dump((int)$_e); echo "<br>";
			echo "참/거짓 : "; var_dump((boolean)$_e); echo "<br>";
			echo "배열로 변해라 : "; var_dump((array)$_e); echo "<br>";
			echo "set null : "; var_dump((unset)$_e); echo "<br>";
			echo "??? : "; var_dump((boolean)(unset)$_e); echo "<br>";
		?>
		</p>
<?php 
	require_once './inc/footer.php';
?>
	
