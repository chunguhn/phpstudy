<ul>
    <li>
        <p name="tab">fopen</p>
        <div name="pre" style="display:">
            <code>resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )</code>
            <pre>
    - (必)string $filename - 파일명 혹은 URL입력시 해당 페이지의 응답값을 취득
            </pre>
        </div>
    </li>    
</ul>
<ul>
    <li>
        <p name="tab">html</p>
        <div name="pre" style="display:none">
            <pre>
<!doctype html>
<html>
    i am a html!
</html>
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">json</p>
        <div name="pre" style="display:none">
            <pre>
$res_data = [
    'a' => 'i',
    'b' => '2',
    'c' => 'ㅇㅇ'
];

header('Content-Type:application/json; charset=utf-8');

die(json_encode($res_data));            
            </pre>
        </div>
    </li>
</ul>

<pre>
    if ($fp = fopen('http://chung.interpark.com', 'r')) {
        $content = '';
        <span class="commane">// 전부 읽을때까지 계속 읽음</span>
        while ($line = fread($fp, 1024)) {
            $content .= $line;
        }        
    } else {
        <span class="commane">// 파일 open시 에러 발생</span>
    }
    if ($fp = fopen('http://chung.interpark.com/ex_11-1/API/res.html', 'r')) {
        $content = '';
        <span class="commane">// 전부 읽을때까지 계속 읽음</span>
        while ($line = fread($fp, 1024)) {
            $content .= $line;
        }       
    } else {
        <span class="commane">// 파일 open시 에러 발생</span>
    }
    fclose($fp);
    if ($fp = fopen('http://chung.interpark.com/ex_11-1/API/res.php', 'r')) {
        $content2 = '';
        <span class="commane">// 전부 읽을때까지 계속 읽음</span>
        while ($line = fread($fp, 1024)) {
            $content2 .= $line;
        }       
        <span class="commane">// 문자열을 json오브젝트로 변환. <a href="http://docs.php.net/manual/en/function.json-encode.php" target="_blank">참조</a></span>
        $content2 = json_decode($content2, true);
    } else {
        <span class="commane">// 파일 open시 에러 발생</span>
    }
    fclose($fp);
</pre>
<?php    
    if ($fp = fopen('http://chung.interpark.com/ex_11-1/API/res.html', 'r')) {
        $content = '';
        // 전부 읽을때까지 계속 읽음
        while ($line = fread($fp, 1024)) {
            $content .= $line;
        }       
    } else {
        // 파일 open시 에러 발생
    }
    fclose($fp);
    if ($fp = fopen('http://chung.interpark.com/ex_11-1/API/res.php', 'r')) {
        $content2 = '';
        // 전부 읽을때까지 계속 읽음
        while ($line = fread($fp, 1024)) {
            $content2 .= $line;
        }       
        $content2 = json_decode($content2, true);
    } else {
        // 파일 open시 에러 발생
    }
    fclose($fp);
?>
<pre>
    <?=$content?>
    <?var_dump($content2)?>
</pre>    
<br>
<a href="ch_11-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>