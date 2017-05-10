<ul>
    <li>
        <p name="tab">file_exists</p>
        <div name="pre" style="display:none">
            <code>bool file_exists ( string $filename )</code>
            <pre>
                - (必)string $filename : 파일 혹은 디렉토리가 존재하는지 여부 확인
            </pre>
            <a href="http://php.net/manual/en/function.file-exists.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">is_readable</p>
        <div name="pre" style="display:none">
            <code>bool is_readable ( string $filename )</code>
            <pre>
                - (必)string $filename : 읽기 가능 파일인가?
            </pre>
            <a href="http://php.net/manual/en/function.is-readable.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">is_writable </p>
        <div name="pre" style="display:none">
            <code>bool is_writable ( string $filename )</code>
            <pre>
                - (必)string $filename : 쓰기 가능 파일인가?
            </pre>
            <a href="http://php.net/manual/en/function.is-writable.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">fopen</p>
        <div name="pre" style="display:none">
            <code>resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )</code>
            <pre>
                - (必)string $filename : 파일명 혹은 URL
                - (必)string $mode : 파일 컨트롤 모드
            </pre>
            <a href="http://unikys.tistory.com/273" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">fgets</p>
        <div name="pre" style="display:none">
            <code>string fgets ( resource $handle [, int $length ] )</code>
            <pre>
                - (必)resource $handle : fopen 으로 생성된 파일 포인터.
                - int $length : 한번에 읽어들이는 "1라인"의 바이트 수(예1024 바이트). 
                -- 1라인이 바이트 지정된 바이트 보다 작을 경우 라인 끝까지만(EOF). 
                -- 미지정의 경우 파일 끝까지
            </pre>
            <a href="http://php.net/manual/kr/function.fgets.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">fwrite</p>
        <div name="pre" style="display:none">
            <code>int fwrite ( resource $handle , string $string [, int $length ] )</code>
            <pre>
                - (必)resource $handle : fopen 으로 생성된 파일 포인터.
                - (必)string $string : 적을 내용
                - int $length : 한번에 읽어들이는 "1라인"의 바이트 수(예1024 바이트). 
            </pre>
            <a href="http://php.net/manual/kr/function.fgets.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">feof</p>
        <div name="pre" style="display:none">
            <code>bool feof ( resource $handle )</code>
            <pre>
                - (必)resource $handle : fopen 으로 생성된 파일 포인터.
                - 포인트가 파일 끝까지 왔으면 true.
            </pre>
            <a href="http://php.net/manual/en/function.feof.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">fclose</p>
        <div name="pre" style="display:none">
            <code>bool fclose ( resource $handle )</code>
            <pre>
                - (必)resource $handle : fopen 으로 생성된 파일 포인터.
                - 핸들러를 닫는다.
            </pre>
        </div>
    </li>
    <li>    
        <p name="tab">예제</p>
        <div name="pre" style="display:none">
        <pre>
<?php
    define('_FILE_DIR_', __DIR__.'/files/');    

    if(file_exists(_FILE_DIR_)){
        echo "폴더가 존재하네요<br><br>";
    }

    $fileName = _FILE_DIR_ . 'readTest.txt';

    if(file_exists($fileName)){
        echo "폴더에 파일이 존재하네요<br><br>";
    }

    if(is_readable($fileName)){
        echo "읽을 수 있네요<br><br>";
    }

    $fh = fopen($fileName, 'r');

    while( !feof($fh) && $line = fgets($fh)){
        echo $line."<br>";
    }
    fclose($fh);

    $fh = null;

    if(is_writable($fileName)){
        echo "쓸 수 있네요&lt<br><br>";
    }

    $fh = fopen($fileName, 'a+');

    $line = PHP_EOL."이것은 랜덤하게 생기는 숫자를 찍는 것이여! 이번 숫자는!!!!![".rand()."]";

    fwrite($fh, $line);

    fclose($fh);
?>
        </pre>
    </li>
</ul>    
<pre>
define('_FILE_DIR_', __DIR__.'/files/');

<span class="comment">// 폴더가 존재하네요</span>
if(file_exists(_FILE_DIR_)){
    echo "폴더가 존재하네요&lt;br&gt;";
}

$fileName = _FILE_DIR_ . 'readTest.txt';

<span class="comment">// 폴더가 파일이 존재하네요</span>
if(file_exists($fileName)){
    echo "폴더에 파일이 존재하네요&lt;br&gt;";
}

<span class="comment">// 읽을 수 있네요</span>
if(is_readable($fileName)){
    echo "읽을 수 있네요&lt;br&gt;";
}

<span class="comment">// r:읽어 파일</span>
$fh = fopen($fileName, 'r');

<span class="comment">// 포인터의 끝을 잡거나...읽을께 없으면 와일끝</span>
while( !feof($fh) && $line = fgets($fh)){
    echo $line."&lt;br&gt;";
}

<span class="comment">// 핸들러 닫기</span>
fclose($fh);

$fh = null;

<span class="comment">// 쓸 수 있네요</span>
if(is_writable($fileName)){
    echo "쓸 수 있네요&lt;br&gt;";
}

<span class="comment">// a:어팬드..., +:overwrite</span>
$fh = fopen($fileName, 'a+');

$line = PHP_EOL."이것은 랜덤하게 생기는 숫자를 찍는 것이여! 이번 숫자는!!!!![".rand()."]";

<span class="comment">// 한줄 쓰기</span>
fwrite($fh, $line);

fclose($fh);
</pre>
<br>
<a href="ch_9-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>
