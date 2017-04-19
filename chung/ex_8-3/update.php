<?php
    $_title = '챕터 8';

    require_once './../inc/header.php';

    require_once __DIR__.'/../ch8_cls/Db.php';
    require_once __DIR__.'/../ch8_cls/Menu.php';

    $_id = 1;
    if(isset($_GET['no'])){
        $_id = $_GET['no'];
    }

    $clsDb = new Db();
    $conn = $clsDb->getConn();

    // FETCH_CLASS 
    $stmt = $conn->prepare("SELECT * FROM chung WHERE dish_id = :id");
    $stmt->bindParam(':id', $_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Menu'); 
    // var_dump($stmt, $result[0]);

    $result = $result[0];
?>
    <form name="f" method="post" action="./update_prc.php">
        <div class="form-group">
            <input type="hidden" class="form-control" name="dish_id" value="<?=$result->getId()?>">
            <label for="dish_name">요리명:</label>
            <input type="text" class="form-control" id="dish_name" name="dish_name" placeholder="요리명" value="<?=$result->getName()?>">
            <label for="price">가격:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="음식가격" value="<?=$result->getPrice()?>">
            <label for="spicy">맵다?:</label>
            <select class="form-control" id="spicy" name="spicy">
                <option value="Y" <?=($result->getIs_spicy() == 'Y') ? 'selected' : ''?>>맵다</option>
                <option value="N" <?=($result->getIs_spicy() == 'N') ? 'selected' : ''?>>보통</option>
            </select>
            <button type="submit" class="btn btn-default">수정</button>
            <button type="reset" class="btn btn-default">취소</button>
        </div>
    </form>
<?
    $conn=null;
    require_once '../inc/footer.php';
?>