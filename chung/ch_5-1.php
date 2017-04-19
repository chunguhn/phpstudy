<?php 
	$_title = '챕터 5';
	require_once './inc/header.php';

    $_pg = ((isset($_GET['pg']) && $_GET['pg'] != '') ? $_GET['pg'] : '1');
    $includeFileName = 'ch5_inc_' . $_pg;
?>
<h3>함수 기초</h3>
<div>
    <div>
    <?           
        require_once __DIR__ . '/ex_5-1/' . $includeFileName . ".php"; 
    ?>
    </div>
</div>
<?php 
	require_once './inc/footer.php';
?>