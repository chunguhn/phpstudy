<ul>
    <li>
        <p name="tab">session_start</p>
        <div name="pre" style="display:">
            <code>bool session_start ( void )</code>
            <pre>
                세션 데이터 초기화                
            </pre>
            <a href="http://php.net/manual/kr/function.session-start.php" target="_new">예제</a>
        </div>
    </li>
    <li>
        <p name="tab">$_SESSION</p>
        <div name="pre" style="display:">
            <pre>
                - Superglobals 변수.
                - 친구로는 $_GET, $_POST, $_SERVER 등등이 있다.
                - 설정된 세션을 가져오거나 등록할때 사용
            </pre>
            <a href="http://php.net/manual/kr/reserved.variables.session.php" target="_new">예제</a>
        </div>
    </li>
</ul>
<?php
session_start();

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

?>
<ul>
    <li>
        <pre>  
            <span class="commane">// 세션 사용 시작</span>
            session_start();

            <span class="commane">// 세션에 값 등록</span>
            $_SESSION['favcolor'] = 'green';
            $_SESSION['animal']   = 'cat';
            $_SESSION['time']     = time();
        </pre>
        <a href="./ex_10-1/ch10_inc_3-1.php">page 2</a><br /><br /><br />
    </li>
</ul>

<a href="ch_10-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).next().toggle('hide');
        });
    });
</script>