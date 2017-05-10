<ul>
    <li>
        <p name="tab">file_get_contents</p>
        <div name="pre" style="display:">
            <code>string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = 0 [, int $maxlen ]]]] )</code>
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
    <span class="commane">// 간단...</span>
    $content = file_get_contents('http://chung.interpark.com/ex_11-1/API/res.html');
    
    $content2 = file_get_contents('http://chung.interpark.com/ex_11-1/API/res.php');
</pre>
<?php    
    $content = file_get_contents('http://chung.interpark.com/ex_11-1/API/res.html');    
    $content2 = file_get_contents('http://chung.interpark.com/ex_11-1/API/res.php');    
?>
<pre>
    <?=$content?>
    <?var_dump(json_decode($content2))?>
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