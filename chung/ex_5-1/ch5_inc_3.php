<pre>
    <span class="comment">// 반환 형 선언</span>
    function chkReturnType($type) : bool {
        switch ($type) {
            case 'String Number':
                $_ret = '1';
                break;
            case 'Number':
                $_ret = 1;
                break;
            case 'Bool':
                $_ret = false;
                break;
            case 'String Float':
                $_ret = '1.5';
                break;
            case 'Float':
                $_ret = 1.5;
                break;
            case 'blank':
                $_ret = '';
                break;                
            default:
                $_ret = NULL;
                break;
        }
        return $_ret;
    }

    <span class="comment">// 문자로 치환가능한 숫자 리턴</span>
    $_a = chkReturnType('String Number'); 

    var_dump($_a);  <span class="comment">// int(1)</span>

    <span class="comment">// 숫자 리턴</span>
    $_a = chkReturnType('Number');

    var_dump($_a);  <span class="comment">// int(1)</span>

    <span class="comment">// boolean false 리턴</span>
    $_a = chkReturnType('Bool');

    var_dump($_a);  <span class="comment">// int(0)</span>

    <span class="comment">// 문자로 치환가능한 숫자 리턴</span>
    $_a = chkReturnType('String Float');

    var_dump($_a);  <span class="comment">// int(1)</span>

    <span class="comment">// 숫자 리턴</span>
    $_a = chkReturnType('Float');

    var_dump($_a);  <span class="comment">// int(1)</span>

    <span class="comment">// 공백 리턴</span>
    $_a = chkReturnType('blank');      

    var_dump($_a);  <span class="comment">// 오류</span>

    <span class="comment">// 널 리턴</span>
    $_a = chkReturnType('asdasd');

    var_dump($_a);  <span class="comment">// 오류</span>
</pre>
<br>
<a href="ch_5-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<?
    // 반환 형 선언
    function chkReturnType($type) : int {
        switch ($type) {
            case 'String Number':
                $_ret = '1';
                break;
            case 'Number':
                $_ret = 1;
                break;
            case 'Bool':
                $_ret = false;
                break;
            case 'String Float':
                $_ret = '1.5';
                break;
            case 'Float':
                $_ret = 1.5;
                break;
            case 'blank':
                $_ret = '';
                break;                
            default:
                $_ret = NULL;
                break;
        }
        return $_ret;
    }

    $_a = chkReturnType('String Number'); 

    var_dump($_a);

    $_a = chkReturnType('Number');

    var_dump($_a);

    $_a = chkReturnType('Bool');

    var_dump($_a);

    $_a = chkReturnType('String Float');

    var_dump($_a);

    $_a = chkReturnType('Float');

    var_dump($_a);

    $_a = chkReturnType('blank');

    var_dump($_a);

    $_a = chkReturnType('asdasd');

    var_dump($_a);
?>