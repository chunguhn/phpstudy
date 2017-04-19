<?
	$_title = '챕터 8';
	require_once './inc/header.php';

    define('_HOST_', '10.20.4.51');
    define('__ID__', 'root');
    define('__PWD__', 'phpStudy1!');
    define('__DB__', 'php_study');

    try{
        $con = new PDO('mysql:host='._HOST_.';dbname='.__DB__.';charset=utf8', __ID__, __PWD__);
    } catch (PDOException $e){
        var_dump($e);
        exit;
    }

    // SELECT
    $statement  = $con->query('SELECT * FROM chung');

echo "<pre>";
    var_dump($statement);

    // FETCH_OBJ
    while($row = $statement->fetch(PDO::FETCH_OBJ)) {
        var_dump($row);
    }

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

    // FETCH_CLASS 
    $statement2  = $con->query('SELECT * FROM chung');
 
    $row = $statement2->fetchAll(PDO::FETCH_CLASS, 'Menu');
    foreach($row as $idx => $val){
        echo $val->getName() . " :: " . $val->getPrice();
        echo "<br>";
    }
    //var_dump($row);
echo "</pre>";    


?>    

<?
    require_once './inc/footer.php';
?>    