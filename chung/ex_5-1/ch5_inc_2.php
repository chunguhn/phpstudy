<?
    // 기본 인자값을 가지는 함수 만들기
    function initArgument($a=2, $b=2){
        $c = $a * $b;
        return $c;
    }

    // 인자값 없이 호출
    $ret_a = initArgument();

    // 하나만 넣어서 호출
    $ret_b = initArgument(random_int(0, 10));

    // 다 넣어서 호출
    $ret_c = initArgument(random_int(0, 10), random_int(0, 10));
?>
<pre>
    <span class="comment">// 기본 인자값을 가지는 함수 만들기</span>
    function initArgument($a=2, $b=2){
        $c = $a * $b;
        return $c;
    }
</pre>
<pre>
    <span class="comment">// 인자값 없이 호출</span>
    $ret_a = initArgument();
</pre>
    <p>결과 : <code><?=$ret_a?></code></p>
<pre>    
    <span class="comment">// 하나만 넣어서 호출</span>
    $ret_b = initArgument(random_int(0, 10));
</pre>
    <p>결과 : <code><?=$ret_b?></code></p>
<pre>
    <span class="comment">// 다 넣어서 호출</span>
    $ret_c = initArgument(random_int(0, 10), random_int(0, 10));
</pre>
    <p>결과 : <code><?=$ret_c?></code></p>
<br>
<a href="ch_5-1.php?pg=<?= ++$_pg ?>">다음 >> </a>