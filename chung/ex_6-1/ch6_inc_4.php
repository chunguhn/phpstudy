<pre>
    <span class="comment">//부모 클래스</span>
    include 'Foo.php';
    <span class="comment">//extends 부모 클래스 상속</span>
    class Bar extends Foo
    {        
        function __construct()
        {
            <span class="comment">//부모 생성자</span>
            parent::__construct();
        }

        public function getName(){
            <span class="comment">//부모 getName()</span>
            return 'child`s ' . parent::getName();
        }
    }
</pre>
<pre>
    require_once './class/Bar.php';    

    $clsChildBar = new Bar();
    <span class="comment">// 출력 : child`s no name</span>
    echo $clsChildBar->getName();    
</pre>
<?php
    require_once './class/Bar.php';    

    $clsChildBar = new Bar();
    
    echo $clsChildBar->getName();    
?>
<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>