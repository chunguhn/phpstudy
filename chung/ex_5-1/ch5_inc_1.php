<?php
    // 기본적인 함수 사용
    // 인수 a, b 를 받음.
    // a+b 한 값을 리턴함.
    function calc_plus($a, $b){
        return $a + $b;
    }    

    $_a = random_int(0, 10);
    $_b = random_int(0, 10);

    $_plus = calc_plus($_a, $_b);
?>
<p>함수 기초</p>
<pre>
    <span class="comment">// 기본적인 함수 사용
    // 인수 a, b 를 받음.
    // a+b 한 값을 리턴함.</span>
    function calc_plus($a, $b){
        return $a + $b;
    }
</pre>
<p>결과 : <code><var><?=$_a?></var> + <var><?=$_b?></var> = <var><?=$_plus?></var></code></p>
<br>
<a href="ch_5-1.php?pg=<?= ++$_pg ?>">다음 >> </a>