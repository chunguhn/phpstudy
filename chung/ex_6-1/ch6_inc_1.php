<pre>
    <span class="comment">// Foo class</span>
    class Foo {        

        private $name;
        <span class="comment">// 생성자</span>
        function __construct($name='no name')
        {
            $this->name = $name;
        }

        <span class="comment">// getter</span>
        public function getName(){
            return $this->name;
        }

        <span class="comment">// setter</span>
        public function setName($name){
            $this->name = $name;
        }
    }
</pre>
<pre>
    <span class="comment">// class 파일 로딩</span>
    require_once './class/Foo.php';    

    <span class="comment">// 생성(인자값 없음)</span>
    $clsFoo = new Foo();

    <span class="comment">// 클래스 함수 사용 - no name</span>
    $arr[] = $clsFoo->getName();

    <span class="comment">// 생성(인자값 있음) - 앙앙</span>
    $arr[] = $clsFoo2->getName();

    <span class="comment">// 클래스 함수 사용3</span>
    $clsFoo2->setName('옹옹');

    <span class="comment">// 클래스 함수 사용4 - 옹옹</span>
    $arr[] = $clsFoo2->getName();

    <span class="comment">// 출력</span>
    foreach($arr as $val){
        echo $val;
    }
</pre>
<?php
    // class 파일 로딩
    require_once './class/Foo.php';    

    // 생성(인자값 없음)
    $clsFoo = new Foo();

    // 클래스 함수 사용
    $arr[] = $clsFoo->getName();

    // 생성(인자값 있음)
    $clsFoo2 = new Foo('앙앙');
    
    // 클래스 함수 사용2
    $arr[] = $clsFoo2->getName();

    // 클래스 함수 사용3
    $clsFoo2->setName('옹옹');

    // 클래스 함수 사용4
    $arr[] = $clsFoo2->getName();

    // 출력
    foreach($arr as $val){
        echo $val."<br>";
    }
?>

<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
