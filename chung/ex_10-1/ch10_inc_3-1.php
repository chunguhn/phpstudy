<?php
// page2
session_start();

// You may want to use SID here, like we did in page1.php
echo '<br /><a href="javascript:return false;" onclick="history.go(-1)">이전으로</a>';
?>
        <pre>  
            <span class="commane">// 세션 사용 시작</span>
            session_start();

            <span class="commane">// 세션 값 사용</span>
            echo $_SESSION['favcolor'];
            echo $_SESSION['animal'];
            echo $_SESSION['time'];
        </pre>
<?php
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>
