<ul>
    <li>
        <p name="tab">setCookie</p>
        <div name="pre" style="display:">
            <code>bool setcookie( string $name [, string $value [, int #expire = 0 [, string $path [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )</code>
            <pre>
                - (必)string $name - 쿠키 이름, 이름을 만들때에는 공백이나 마침표는 안되며, 대소문자를 구분함
                - string value - 쿠키 값
                - int expire - 쿠키 만료시간, 쿠키 사용이 끝나는 시간을 초단위로 설정, 1일후 만료 할경우: time()+60*60*24 -> 1970.1.1 + 현재시간 + 86400 초 
                - string path - 지정된 경로에 있을때에만 유효한 쿠키로 사용, /로 설정하면 사이트 전체에 쿠키가 노출됨
                - string domain - 지정된 도메인에 있을때에만 유효한 쿠키로 사용
                - book secure - 값이 1인 경우 HTTPS 접속을 통해서만 전송되어야 함
            </pre>
            <a href="http://php.net/manual/en/function.file-exists.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">$_COOKIE</p>
        <div name="pre" style="display:">
            <pre>
                - Superglobals 변수.
                - 친구로는 $_GET, $_POST, $_SERVER 등등이 있다.
                - 설정된 쿠키를 가져올때 사용
            </pre>
            <a href="http://php.net/manual/en/language.variables.superglobals.php" target="_new">예제</a>
        </div>
    </li>
</ul>
<pre>
$_myCookieVal = str_pad(rand(1, 1000000000), 10, '0', STR_PAD_LEFT);
echo "Set Cookie = " . $_myCookieVal;
<span class="commane">// 쿠키 설정</span>
setcookie('myCookie', $_myCookieVal, time()+60*60*24*3, '/', '.interpark.com');
<span class="commane">// 쿠키값 취득</span>
if(isset($_COOKIE['myCookie'])){
    echo $_COOKIE['myCookie'];
} else {
    echo "쿠키 취득 아직 안됨";
}
</pre>
<?php    
    $_myCookieVal = str_pad(rand(1, 1000000000), 10, '0', STR_PAD_LEFT);
    echo "Set Cookie = " . $_myCookieVal;    
    setcookie('myCookie', $_myCookieVal, time()+60*60*24*3, '/', '.interpark.com');
    if(isset($_COOKIE['myCookie'])){
        echo "<br>".$_COOKIE['myCookie'];
    } else {
        echo "<br>쿠키 취득 아직 안됨";
    }    
?>
<br>
<a href="ch_10-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>