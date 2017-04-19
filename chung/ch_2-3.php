<?
    $a = 1; 
    $b = $a; 
    $c = &$a; 

    echo "".$b; // 결과: 1 
    echo "<br>";
    echo $c; // 결과: 1 
    echo "<br>";
    // 참조 변수에 5를 대입해 보겠습니다. 
    $a = 5; 

    echo $b; // 결과: 1 
    echo "<br>";
    echo $c; // 결과: 5 
    echo "<br>";
?>
