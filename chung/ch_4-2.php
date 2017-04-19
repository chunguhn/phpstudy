<?php 
	$_title = '챕터 4';
	require_once './inc/header.php';
?>
<title>배열 기초</title>
<div>
    <h3>배열 정렬</h4>
    <pre>
<?
    // 1차원배열
    $fruits = array("lemon", "orange", "banana", "apple");
    echo "<h4>1차원배열 - 원본배열</h4>";
    var_dump($fruits);
    
    sort($fruits);

    echo "<h4>배열정렬</h4>";
    var_dump($fruits);

    echo "<hr/>";


    // key - value 1차원 배열
    $_arr = [
        1 => 'A',
        2 => 'B',
        4 => 'D',
        3 => 'C',
        0 => 'Z',
        -1 => 'X'
    ];
    
    echo "<h4>key : value - 원본배열</h4>";
    var_dump($_arr);
    
    ksort($_arr);

    echo "<h4>키 기준 배열정렬</h4>";
    var_dump($_arr);

    echo "<hr/>";


    // 다차원 배열
    $data[] = array('volume' => 67, 'edition' => 2);
    $data[] = array('volume' => 86, 'edition' => 1);
    $data[] = array('volume' => 85, 'edition' => 6);
    $data[] = array('volume' => 98, 'edition' => 2);
    $data[] = array('volume' => 86, 'edition' => 6);
    $data[] = array('volume' => 67, 'edition' => 7);

    // 열 목록 얻기
    foreach ($data as $key => $row) {
        $volume[$key]  = $row['volume'];
        $edition[$key] = $row['edition'];
    }
    
    echo "<h4>다차원 원본배열</h4>";
    var_dump($data);
    
    // volume 내림차순, edition 오름차순
    array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

    echo "<h4>다차원 배열정렬</h4>";
    var_dump($data);

    echo "<hr/>";

    function cmp($a, $b) {
        if($a["fruit"] == $b["fruit"]){
            return 0;
        } else if($a["fruit"] > $b["fruit"]){
            return 1;
        } else {
            return -1;
        }        
    }

    unset($fruits);
    $fruits[0]["fruit"] = "lemons";
    $fruits[1]["fruit"] = "apples";
    $fruits[2]["fruit"] = "grapes";

    echo "<h4>사용자 정의 함수를 이용한 정렬 - 원본배열</h4>";
    var_dump($fruits);
    
    usort($fruits, "cmp");

    echo "<h4>사용자 정의 함수를 이용한 정렬</h4>";
    var_dump($fruits);

    echo "<hr/>";

?>
    </pre>
</div>
<?php 
	require_once './inc/footer.php';
?>