<h3>cURL : libcurl 라이브러리 에서 제공하는 함수를 이용하여 http,https 데이타 통신(요청,응답)을 손쉽게 사용가능</h3>
<ul>
    <li>
        <p name="tab">curl_init</p>
        <div name="pre" style="display:">
            <code>resource curl_init ([ string $url = NULL ] )</code>
            <pre>
    cURL 사용을 위한 핸들러 생성.
    - string $url - URL. url없이 상요할 경우 curl_setopt 에서 정의도 가능
            </pre>
        </div>
    </li> 
    <li>
        <p name="tab">curl_setopt</p>
        <div name="pre" style="display:">
            <code>bool curl_setopt ( resource $ch , int $option , mixed $value )</code>
            <pre>
    cURL 의 세부 옵션 정의
      예:
        > CURLOPT_URL : 요청할 URL
        > CURLOPT_POSTFIELDS : POST 호출일 경우, 요청 Parameter 값
        > CURLOPT_POST : POST Method 사용 여부(기본 flase는 GET)
        > CURLOPT_RETURNTRANSFER : TRUE를 설정하면 curl_exec()의 리턴 값을 문자열로 반환
    - (必) resource $ch - curl_init()가 반환한 cURL 핸들.
    - (必) int $option - 옵션. 자세한 내용은 <a href="http://php.net/manual/kr/function.curl-setopt.php" target="_new">여기</a>에서
    - (必) mixed $value - 옵션 설정 값.
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">curl_exec</p>
        <div name="pre" style="display:">
            <code>mixed curl_exec ( resource $ch )</code>
            <pre>        
    cURL 실행. 성공 시 TRUE를, 실패 시 FALSE를 반환. 실제 응답값을 처리하기 위해선 CURLOPT_RETURNTRANSFER 설정이 필요
    - resource $ch - curl_init()가 반환한 cURL 핸들.
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">curl_close</p>
        <div name="pre" style="display:">
            <code>void curl_close ( resource $ch )</code>
            <pre>
    cURL 세션을 닫고 모든 리소스를 해제합니다.
    - resource $ch - curl_init()가 반환한 cURL 핸들.
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