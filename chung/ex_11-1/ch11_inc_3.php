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
    cURL 실행. 성공 시 TRUE를, 실패 시 FALSE를 반환. 실제 응답값을 처리하기 위해선 CURLOPT_RETURNTRANSFER=true 설정이 필요
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
    function getContents($cURL, $isJson=false, $isPost=false, $aParam='', $isSSL=false){       
        // cURL 핸들러 취득
        $oCh = curl_init();

        // 헤더 출력 여부
		curl_setopt($oCh, CURLOPT_HEADER, 0);

        // 요청시 HTTP 헤더의 배열
        $_header = [
				'Accept-Encoding: gzip,deflate',
				'Connection: Keep-Alive'
		];
        if($isJson){
            array_push($_header, 'Content-Type: application/json; charset=utf-8');
        }
		curl_setopt($oCh, CURLOPT_HTTPHEADER, $_header);

        // 연결 시도를 기다리는 유지 초. 0은 무한
        curl_setopt($oCh, CURLOPT_CONNECTTIMEOUT, 10);
        // cURL 함수를 실행하는 데 걸린 시간의 최대값
        curl_setopt($oCh, CURLOPT_TIMEOUT, 30);
        // TRUE로 설정하면, 전체 DNS 캐시를 사용
        curl_setopt($oCh, CURLOPT_DNS_USE_GLOBAL_CACHE, 0);
        // DNS 항목을 메모리에 유지하는 시간 기본값은 120초
        curl_setopt($oCh, CURLOPT_DNS_CACHE_TIMEOUT, 120);
        // IP 버전 결정
		curl_setopt($oCh, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        // HTTP 사용 버전
		curl_setopt($oCh, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		// TRUE를 설정하면 curl_exec()의 리턴 값을 문자열로 반환
		curl_setopt($oCh, CURLOPT_RETURNTRANSFER, 1);		
		// TRUE를 설정하면 서버가 HTTP 헤더로 보내는 Location : 헤더의 내용을 무한 추적 CURLOPT_MAXREDIRS 참고
		curl_setopt($oCh, CURLOPT_FOLLOWLOCATION, 1);
		// CURLOPT_FOLLOWLOCATION 의 최대 리다이렉트 회수 제한
		curl_setopt($oCh, CURLOPT_MAXREDIRS, 3);
		// TRUE 로 설정하면 프로세스가 종료되었을 때 명시적으로 연결을 끊음
		curl_setopt($oCh, CURLOPT_FORBID_REUSE, 1);
		// 1 번 로드에 사용하는 버퍼의 크기, 하지만 늘 버퍼를 가득 채우지는 않음
		curl_setopt($oCh, CURLOPT_BUFFERSIZE, 131072);
		// Accept - Encoding 헤더의 내용
		curl_setopt($oCh, CURLOPT_ENCODING, 'gzip,deflate');

        if($isPost){
            curl_setopt($oCh, CURLOPT_POST, 1);
            curl_setopt($oCh, CURLOPT_POSTFIELDS, (is_array($aParam) ? http_build_query($aParam) : $aParam));
        }
        curl_setopt($oCh, CURLOPT_URL, $cURL);

        if($isSSL){
            // FALSE로 설정하면 cURL은 서버 인증서의 유효성을 검사하지 않습니다.
			curl_setopt($oCh, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($oCh, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($oCh, CURLOPT_SSLVERSION, 6);
        }

        $sRes['response'] = curl_exec($oCh);
        $sRes['error'] = curl_error($oCh);
		$sRes['error_no'] = curl_errno($oCh);
        $sRes['res_code'] = curl_getinfo($oCh, CURLINFO_HTTP_CODE);

        return $sRes;
    }

    <span class="commane">// html</span>
    $sURL_html = 'http://chung.interpark.com/ex_11-1/API/res.html';
    $res[] = getContents($sURL_html);

    <span class="commane">// json</span>
    $sURL_json = 'http://chung.interpark.com/ex_11-1/API/res.php';
    $res[] = getContents($sURL_json, 1);

    <span class="commane">// dns fail</span>
    $sURL_html2 = 'http://123.interpark.com/';
    $res[] = getContents($sURL_html2);

    <span class="commane">// 404</span>
    $sURL_html3 = 'http://m.interpark.com/123123/html';
    $res[] = getContents($sURL_html3);
</pre>
<?php
    function getContents($cURL, $isJson=false, $isPost=false, $aParam='', $isSSL=false){       
        // cURL 핸들러 취득
        $oCh = curl_init();

        // 헤더 출력 여부
		curl_setopt($oCh, CURLOPT_HEADER, 0);

        // 요청시 HTTP 헤더의 배열
        $_header = [
				'Accept-Encoding: gzip,deflate',
				'Connection: Keep-Alive'
		];
        if($isJson){
            array_push($_header, 'Content-Type: application/json; charset=utf-8');
        }
		curl_setopt($oCh, CURLOPT_HTTPHEADER, $_header);

        // 연결 시도를 기다리는 유지 초. 0은 무한
        curl_setopt($oCh, CURLOPT_CONNECTTIMEOUT, 10);
        // cURL 함수를 실행하는 데 걸린 시간의 최대값
        curl_setopt($oCh, CURLOPT_TIMEOUT, 30);
        // TRUE로 설정하면, 전체 DNS 캐시를 사용
        curl_setopt($oCh, CURLOPT_DNS_USE_GLOBAL_CACHE, 0);
        // DNS 항목을 메모리에 유지하는 시간 기본값은 120초
        curl_setopt($oCh, CURLOPT_DNS_CACHE_TIMEOUT, 120);
        // IP 버전 결정
		curl_setopt($oCh, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        // HTTP 사용 버전
		curl_setopt($oCh, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		// TRUE를 설정하면 curl_exec()의 리턴 값을 문자열로 반환
		curl_setopt($oCh, CURLOPT_RETURNTRANSFER, 1);		
		// TRUE를 설정하면 서버가 HTTP 헤더로 보내는 Location : 헤더의 내용을 무한 추적 CURLOPT_MAXREDIRS 참고
		curl_setopt($oCh, CURLOPT_FOLLOWLOCATION, 1);
		// CURLOPT_FOLLOWLOCATION 의 최대 리다이렉트 회수 제한
		curl_setopt($oCh, CURLOPT_MAXREDIRS, 3);
		// TRUE 로 설정하면 프로세스가 종료되었을 때 명시적으로 연결을 끊음
		curl_setopt($oCh, CURLOPT_FORBID_REUSE, 1);
		// 1 번 로드에 사용하는 버퍼의 크기, 하지만 늘 버퍼를 가득 채우지는 않음
		curl_setopt($oCh, CURLOPT_BUFFERSIZE, 131072);
		// Accept - Encoding 헤더의 내용
		curl_setopt($oCh, CURLOPT_ENCODING, 'gzip,deflate');

        if($isPost){
            curl_setopt($oCh, CURLOPT_POST, 1);
            curl_setopt($oCh, CURLOPT_POSTFIELDS, (is_array($aParam) ? http_build_query($aParam) : $aParam));
        }
        curl_setopt($oCh, CURLOPT_URL, $cURL);

        if($isSSL){
            // FALSE로 설정하면 cURL은 서버 인증서의 유효성을 검사하지 않습니다.
			curl_setopt($oCh, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($oCh, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($oCh, CURLOPT_SSLVERSION, 6);
        }

        $sRes['response'] = curl_exec($oCh);
        $sRes['error'] = curl_error($oCh);
		$sRes['error_no'] = curl_errno($oCh);
        $sRes['res_code'] = curl_getinfo($oCh, CURLINFO_HTTP_CODE);

        return $sRes;
    }

    $sURL_html = 'http://chung.interpark.com/ex_11-1/API/res.html';
    $res[] = getContents($sURL_html);
    $sURL_json = 'http://chung.interpark.com/ex_11-1/API/res.php';
    $res[] = getContents($sURL_json, 1);
    $sURL_html2 = 'http://123.interpark.com/';
    $res[] = getContents($sURL_html2);
    $sURL_html3 = 'http://m.interpark.com/123123/html';
    $res[] = getContents($sURL_html3);
?>
<pre>
<?var_dump($res)?>
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