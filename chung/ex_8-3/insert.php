<?php
    $_title = '챕터 8';

    require_once './../inc/header.php';

?>
    <form name="f" method="post" action="./insert_prc.php">
        <div class="form-group">            
            <label for="dish_name">요리명:</label>
            <input type="text" class="form-control" id="dish_name" name="dish_name" placeholder="요리명">
            <label for="price">가격:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="음식가격">
            <label for="spicy">맵다?:</label>
            <select class="form-control" id="spicy" name="spicy">
                <option value="Y">맵다</option>
                <option value="N">보통</option>
            </select>
            <button type="submit" class="btn btn-default">등록</button>
            <button type="reset" class="btn btn-default">취소</button>
        </div>
    </form>
<?
    $conn=null;
    require_once '../inc/footer.php';
?>