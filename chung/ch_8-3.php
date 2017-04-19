<?php
    $_title = '챕터 8';

    require_once './inc/header.php';

    require_once __DIR__.'/ch8_cls/Db.php';
    require_once __DIR__.'/ch8_cls/Menu.php';

    $clsDb = new Db();
    $conn = $clsDb->getConn();

    // FETCH_CLASS 
    $stmt = $conn->prepare("SELECT * FROM chung");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Menu'); 
    $conn=null;
?>
<div class="container">
    <h2>메뉴판</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>이름</th>
                <th>가격</th>
                <th>매운맛</th>
            </tr>
        </thead>
        <tbody>
<?php
    foreach($result as $key => $val){
?>
            <tr>
                <th><a href="./ex_8-3/update.php?no=<?=$val->getId()?>"><?=$val->getId()?></a></td>
                <td><?=$val->getName()?></td>
                <td><?=number_format($val->getPrice())?></td>
                <td><?=($val->getIs_spicy() == 'Y') 
                    ? '<em style="color:red">매운맛</em>' 
                    : '<em style="color:blue">보통</em>'?></td>
            </tr>
<?php
    }
?>            
        </tbody>
    </table>
    <a href="./ex_8-3/insert.php">추가</button>
</div>
<?
    require_once './inc/footer.php';
?>