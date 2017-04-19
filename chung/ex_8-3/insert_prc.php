<?php
    $_title = '챕터 8';

    require_once __DIR__.'/../ch8_cls/Db.php';

    $clsDb = new Db();
    $conn = $clsDb->getConn();

    // FETCH_CLASS 
    $conn->beginTransaction();
    $stmt = $conn->prepare("INSERT INTO chung (dish_name, price, is_spicy) VALUES (:name, :price, :spicy);");    

    $stmt->bindValue(':name',$_POST['dish_name']);
    $stmt->bindValue(':price', $_POST['price']);
    $stmt->bindValue(':spicy',$_POST['spicy']);
    $stmt->execute();
    $conn->commit();
    
    $conn=null;
    header("Location: /ch_8-3.php");
?>