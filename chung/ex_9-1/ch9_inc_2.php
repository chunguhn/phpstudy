<?php    
    define('BIRD', 'Dodo bird'); 

    // ex. #1
    $ini_array = parse_ini_file(__DIR__."/files/test.ini"); 
    //print_r($ini_array); 

    // ex. #2
    $ini_array2 = parse_ini_file(__DIR__."/files/test.ini", true); 
    //print_r($ini_array); 
?>
<ul>
    <li>
        <p name="tab">parse_ini_file</p>
        <div name="pre" style="display:">
            <code>array parse_ini_file ( string $filename [, bool $process_sections = false [, int $scanner_mode = INI_SCANNER_NORMAL ]] )</code>
            <pre>
                - (必)string $filename : ini파일
                - bool $process_sections : true로 하면 다차원 배열로 가져온다.([] 기준 배열)
            </pre>
            <a href="http://php.net/manual/en/function.parse-ini-file.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">test.ini</p>
        <div name="pre" style="display:none">
            <pre>
; user.ini
; 이 파일은 샘플 구성파일입니다.
; 문자 앞에 ;를 넣으면 주석문자로 처리해 줍니다.

[first_section]
one = 1
five = 5
; BIRD php 에서 상수로 정의하겠습니다.
animal = BIRD

[second_section]
; $process_sections=false일 경우, [first_section]의 one=1값은 무시됨
one = 2
path = "/usr/local/bin"
URL = "http://www.example.com/~username"

[third_section]
phpversion[] = "5.0"
phpversion[] = "5.1"
phpversion[] = "5.2"
phpversion[] = "5.3"
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">parse_ini_file</p>
        <div name="pre" style="display:">            
            <pre>
define('BIRD', 'Dodo bird'); 

$ini_array1 = parse_ini_file(__DIR__."/files/test.ini"); 

$ini_array2 = parse_ini_file(__DIR__."/files/test.ini", true); 
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">$ini_array1</p>
        <div name="pre" style="display:">            
            <pre>
<? print_r($ini_array); ?>
            </pre>
        </div>
    </li>
    <li>
        <p name="tab">$ini_array2</p>
        <div name="pre" style="display:">            
            <pre>
<? print_r($ini_array2); ?>
            </pre>
        </div>
    </li>
</ul>
<br>

<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>