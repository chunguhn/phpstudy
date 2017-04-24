<?php
	$_title = '챕터 8';
	require_once './inc/header.php';
    require_once './inc/dbInfo.php';

    require_once __DIR__.'/ch8_cls/Db.php';
    require_once __DIR__.'/ch8_cls/Menu.php';

    $clsDb = new Db();
    $conn = $clsDb->getConn();

    // SELECT
    $statement = $conn->query('SELECT * FROM chung');

    // FETCH_OBJ
    while($row = $statement->fetch(PDO::FETCH_OBJ)) {
        $arrRows[] = $row;
    }

    // FETCH_CLASS 
    $statement2  = $conn->query('SELECT * FROM chung');
 
    $row = $statement2->fetchAll(PDO::FETCH_CLASS, 'Menu');
    
    // close connection
    $conn = null;
?>  
<h3>PDO 사용</h3>
    <ul>
        <li>
            <p name="tab">Db.php</p>
            <pre name="pre" style="display:none">   

    class Db {
        private $con;

        public function __construct($useDb = __DB__){
            try{
                $this->con = new PDO('mysql:host='._HOST_.';dbname='.__DB__.';charset=utf8', __ID__, __PWD__);                                
            } catch (PDOException $r){
                print "Error!: " . $e->getMessage();
                die();
            }
        }

        public function getConn(){
            return $this->con;
        }
    }
            </pre>
        </li>
        <li>
            <p name="tab">Menu.php</p>
            <pre name="pre" style="display:none">
    class Menu
    {
        protected $dish_id;
        protected $dish_name;
        protected $price;
        protected $is_spicy;

        public function getId()
        {
            return $this->dish_id;
        }

        public function setId($dish_id)
        {
            $this->dish_id = $dish_id;
        }

        public function getName()
        {
            return $this->dish_name;
        }

        public function setName($dish_namename)
        {
            $this->dish_name = $dish_name;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getIs_spicy()
        {
            return $this->is_spicy;
        }

        public function setIs_spicy($is_spicy)
        {
            $this->is_spicy = $is_spicy;
        }

    }
            </pre>
        </li>
    </ul>
<pre>
    require_once __DIR__.'/ch8_cls/Db.php';
    require_once __DIR__.'/ch8_cls/Menu.php';

    <span class="comment">// Db클래스</span>
    $clsDb = new Db();
    <span class="comment">// get Connnection</span>
    $conn = $clsDb->getConn();
    <span class="comment">// SELECT</span>
    $statement = $conn->query('SELECT * FROM chung');
    
    <span class="comment">// FETCH_OBJ</span>
    while($row = $statement->fetch(PDO::FETCH_OBJ)) {
        $arrRows[] = $row;
    }

    <span class="comment">// FETCH_CLASS </span>
    $statement2  = $conn->query('SELECT * FROM chung');
 
    <a href="https://www.ibm.com/support/knowledgecenter/ko/SSEPGG_10.1.0/com.ibm.swg.im.dbclient.php.doc/doc/t0023505.html" target="_new">// PDO 상수</a>
    $row = $statement2->fetchAll(PDO::FETCH_CLASS, 'Menu');
    
    <span class="comment">// close connection</span>
    $conn = null;
</pre>  
<ul>
    <li>
        <p name="tab">fetch 값</p>
        <pre name="pre" style="display:none">
            <span class="comment">// $arrRows</span>            
            <?= var_dump($arrRows); ?>
        </pre>
    </li>
    <li>
        <p name="tab">fetchAll 값</p>
        <pre name="pre" style="display:none">
            <span class="comment">// $row</span>            
            <?= var_dump($row); ?>
        </pre>
    </li>
</ul>

<script>
    $(function(){
        $('p[name=tab]').on('click', function(){
            $(this).parent().find('pre[name=pre]').toggle('hide');
        });
    });
</script>
<?
    require_once './inc/footer.php';
?>