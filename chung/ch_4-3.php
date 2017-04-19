<?php 
	$_title = '챕터 4';
	require_once './inc/header.php';
?>
<title>배열 기초</title>
<div>
    <h3>배열 값 검색</h4>
    <pre>
<?
    // key - value 1차원 배열
    $_arr = [
        1 => 'A',
        2 => 'B',
        4 => 'D',
        3 => 'C',
        0 => 'Z',
        -1 => 'X'
    ];

    echo "<h4>array_key_exists(needle, array) - 키값이 있으면 true, 없으면 false</h4>";
    var_dump($_arr);

    // array_key_exists($needle, array) - 키값이 있으면 true, 없으면 false
    if(array_key_exists(1, $_arr)){
        echo "배열에 키값 [1] 이 있음";
    } else {
        echo "배열에 키값 [1] 이 없음";
    }
    echo "<br>";
    if(array_key_exists(10, $_arr)){
        echo "배열에 키값 [10] 이 있음";
    } else {
        echo "배열에 키값 [10] 이 없음";
    }
    echo "<br><hr>";

    // 
    $_arr = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

    echo "<h4>array_search(needle, search) - 주어진 값(needle)으로 배열(search)을 검색하여 성공시 해당하는 키를 반환. 없으면 false</h4>";
    var_dump($_arr);

    $key['search_result']['green'] = array_search('green', $_arr);     // $key = 2;
    $key['search_result']['white'] = array_search('white', $_arr);     // false;
    
    var_dump($key);
    echo "<br><hr>";

    echo "<h4>in_array(needle, search) - 주어진 값(needle)으로 배열(search) 안에 존재하면 true. 없으면 false</h4>";

    $key2['search_result']['green'] = in_array('green', $_arr);     // true;
    $key2['search_result']['white'] = in_array('white', $_arr);     // false;
    
    var_dump($key2);
    echo "<br><hr>";
?>
    </pre>
</div>
<?php 
	require_once './inc/footer.php';
?>