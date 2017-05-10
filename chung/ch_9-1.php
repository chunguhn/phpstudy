<?php 
	$_title = '챕터 9';
	require_once './inc/header.php';

    $_pg = ((isset($_GET['pg']) && $_GET['pg'] != '') ? $_GET['pg'] : '1');
    $includeFileName = 'ch9_inc_' . $_pg;
?>
<h3>파일 기초</h3>
<div>
    <div>
    <?           
        require_once __DIR__ . '/ex_9-1/' . $includeFileName . ".php"; 
    ?>
    </div>
</div>
<?php 
	require_once './inc/footer.php';
?>