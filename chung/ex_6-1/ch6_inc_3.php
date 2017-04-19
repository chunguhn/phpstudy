<?php
    
?>
<pre>
    <span class="comment">// class/Bar/MyN.php </span>
    class MyN
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Bar`s MyN' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
</pre>
<pre>
    <span class="comment">// class/Foo/MyN.php </span>
    class MyN
    {        
        private $name;

        function __construct($name='no name')
        {
            $this->name = $name;
        }

        public function getName(){
            return 'Foo`s MyN' . $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }
</pre>
<pre>
    include_once './class/Bar/MyN.php';
    include_once './class/Foo/MyN.php';
</pre>
<code>
    <b>NameSpace</b> 미사용시,<br>
    <b>Foo/MyN.php</b> 와 <b>Bar.MyM.php</b> 이 <b>동일한 클래스명</b>을 사용함으로<br>
    아래와 같은 오류 발생 하면서 끝남<br>    
</code>
<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>
<?
    include_once './class/Bar/MyN.php';
    include_once './class/Foo/MyN.php';
?>
<br>
<a href="ch_6-1.php?pg=<?= ++$_pg ?>">다음 >> </a>