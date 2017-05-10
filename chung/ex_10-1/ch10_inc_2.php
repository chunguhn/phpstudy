<pre>    
    if(isset($_COOKIE['myCookie'])){
        <span class="commane">// 쿠키값 취득</span>
        $_myCookieVal = $_COOKIE['myCookie'];

        var_dump($_myCookieVal);
        <span class="commane">// 쿠키 삭제</span>
        setcookie('myCookie', "", time() - 3600, '/', '.interpark.com');
    } else {
        echo "Cookie Empty";
    }
</pre>
<?php
    if(isset($_COOKIE['myCookie'])){
        $_myCookieVal = $_COOKIE['myCookie'];

        var_dump($_myCookieVal);

        setcookie('myCookie', "", time() - 3600, '/', '.interpark.com');
    } else {
        echo "Cookie Empty";
    }
?>
<br>
<a href="ch_10-1.php?pg=1"><< 이전</a>
<a href="ch_10-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>