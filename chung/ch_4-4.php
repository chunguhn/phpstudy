<?php 
	$_title = '챕터 4';
	require_once './inc/header.php';
?>
<title>배열 기초</title>
<div>
    <h3>배열 기타</h4>
    <pre>
<?
    $_arr = [
        1 => 'A',
        2 => 'B',
        4 => 'D',
        3 => 'C',
        0 => 'Z',
        -1 => 'X'
    ];

    echo "<h4>count(array) - array 의 원소 개수</h4>";
    var_dump($_arr);
    echo '원소의 개수는 : ' . count($_arr);
    echo '<hr/>';

    $_arr = [
        '강아지',
        '는',
        '멍멍멍',
        '고양이',
        '는',
        '?'
    ];

    echo "<h4>implode(string, array) - array 원소를 string으로 조합하여 문자열로 출력</h4>";
    var_dump($_arr);

    $_str = implode('^^', $_arr);
    echo "<br>";
    echo $_str . "<hr/>";

    echo "<h4>explode(string, target) - 문자열target을 string으로 구분하여 배열로 출력</h4>";
    $_arr2 = explode('^^', $_str);
    echo "<br>";
    var_dump($_arr2);
    echo "<hr/>";
?>
    </pre>
</div>
<?php 
	require_once './inc/footer.php';
?>