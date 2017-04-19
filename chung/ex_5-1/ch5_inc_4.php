<?php
    // 참조변수
    // 리턴값은 true, 참조값에는 배열을 담는다
    // GLOBAL 변수
    $_globalArg = 0;
    $_chamzoArg = [];
    function chamzo(&$b){        
        $GLOBALS['_globalArg']++;
        $random = $GLOBALS['_globalArg'] + $GLOBALS['_globalArg'];
        array_push($b, $random);
        return true;
    }    
?>
<pre>
    <span class="comment">// 참조변수
    // 리턴값은 true, 참조값에는 배열을 담는다
    // GLOBAL 변수</span>
    $_globalArg = 0;
    $_chamzoArg = [];
    function chamzo(&$b){        
        $GLOBALS['_globalArg']++;
        $random = $GLOBALS['_globalArg'] + $GLOBALS['_globalArg'];
        array_push($b, [$random]);
        return true;
    }         
</pre>
<pre>
<?
    echo '<span class="comment">// int(0)</span>'.PHP_EOL;
    echo 'var_dump($_globalArg);'.PHP_EOL;
    echo '<span class="comment">// []</span>'.PHP_EOL;
    echo 'var_dump($_chamzoArg);';
    //var_dump($_globalArg, $_chamzoArg);
?>
</pre>
<pre>
<?    
    echo '<span class="comment">// 한번 </span>'.PHP_EOL;
    echo '$_ret_1 = chamzo($_chamzoArg);'.PHP_EOL;
    echo '<span class="comment">// bool(true) </span>'.PHP_EOL;
    echo 'var_dump($_ret_1);'.PHP_EOL;
    echo '<span class="comment">// int(1) </span>'.PHP_EOL;
    echo 'var_dump($_globalArg);'.PHP_EOL;
    echo '<span class="comment">// [0=>2]</span>'.PHP_EOL;
    echo 'var_dump($_chamzoArg);'.PHP_EOL;
?>
<?    
    $_ret_1 = chamzo($_chamzoArg);
    //var_dump($_ret_1, $_globalArg, $_chamzoArg);
?>
</pre>
<pre>
<?    
    echo '<span class="comment">// 한번 </span>'.PHP_EOL;
    echo '$_ret_1 = chamzo($_chamzoArg);'.PHP_EOL;
    echo '<span class="comment">// bool(true) </span>'.PHP_EOL;
    echo 'var_dump($_ret_1);'.PHP_EOL;
    echo '<span class="comment">// int(2) </span>'.PHP_EOL;
    echo 'var_dump($_globalArg);'.PHP_EOL;
    echo '<span class="comment">// [0=>2, 1=>4]</span>'.PHP_EOL;
    echo 'var_dump($_chamzoArg);'.PHP_EOL;
?>
<?        
    $_ret_2 = chamzo($_chamzoArg);
    //var_dump($_ret_2, $_globalArg, $_chamzoArg);
?>
</pre>
<pre>
<?    
    echo '<span class="comment">// 한번 </span>'.PHP_EOL;
    echo '$_ret_1 = chamzo($_chamzoArg);'.PHP_EOL;
    echo '<span class="comment">// bool(true) </span>'.PHP_EOL;
    echo 'var_dump($_ret_1);'.PHP_EOL;
    echo '<span class="comment">// int(3) </span>'.PHP_EOL;
    echo 'var_dump($_globalArg);'.PHP_EOL;
    echo '<span class="comment">// [0=>2, 1=>4, 2=>6]</span>'.PHP_EOL;
    echo 'var_dump($_chamzoArg);'.PHP_EOL;
?>
<?
    //var_dump(chamzo($_chamzoArg), $_globalArg, $_chamzoArg);
?>
</pre>