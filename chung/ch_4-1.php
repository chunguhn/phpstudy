<?php 
	$_title = '챕터 4';
	require_once './inc/header.php';
?>
<h3>배열 기초</h3>
<div>
    <p>생성</p>
    <?
        // 빈배열
        $arrBlank = [];     
        // 배열선언과 값 생성
        $arrDefaultKey = ['정병화', '임병용', '이대규'];     
        // 문자열 키
        $arrStringKey = [
            '3' => '정병화',
            '1' => '임병용',
            '2' => '이대규'
        ];
        // 숫자열 키
        $arrNumKey = [
            3 => '정병화',
            1 => '임병용',
            2 => '이대규'
        ];
        // 배열 요렇게도 된다
        $arrDefaultKey2[] = ['나는' => '임병용'];
        $arrDefaultKey2[] = ['나는' => '정병화'];

        echo '<pre>';
        var_dump($arrBlank, $arrDefaultKey, $arrStringKey, $arrNumKey, $arrDefaultKey2);
        echo '</pre>';
    ?>
</div>
<?php 
	require_once './inc/footer.php';
?>