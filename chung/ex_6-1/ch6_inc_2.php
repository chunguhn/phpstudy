<?php
    
?>
<pre>
    <span class="comment">// class/Bar/My.php </span>
    namespace Bar;

    class My
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Bar`s My ' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
</pre>
<pre>
    <span class="comment">// class/Foo/My.php </span>
    namespace Foo;
    
    class My
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Foo`s my ' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
</pre>
<pre>
    include_once './class/Bar/My.php';
    include_once './class/Foo/My.php';

    <span class="comment">// use Foo 의 My 클래스</span>
    use Foo\My as FooMy;    <span class="comment">// FooMy 별칭</span>

    <span class="comment">// Foo\My 생성 </span>
    $clsFooMy = new FooMy();
    <span class="comment">// Bar\My 생성 </span>
    $clsBarMy = new Bar\My();
</pre>
<pre>
    echo $clsFooMy->getName() . " :: " . $clsBarMy->getName();
</pre>
<?
    include_once './class/Bar/My.php';
    include_once './class/Foo/My.php';

    use Foo\My as FooMy;

    $clsFooMy = new FooMy();
    $clsBarMy = new Bar\My();

    echo $clsFooMy->getName() . " :: " . $clsBarMy->getName();
?>
<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>