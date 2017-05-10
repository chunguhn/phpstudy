<?php 
	$_title = '챕터 11';
	require_once './inc/header.php';

    $_pg = ((isset($_GET['pg']) && $_GET['pg'] != '') ? $_GET['pg'] : '1');
    $includeFileName = 'ch11_inc_' . $_pg;
?>
<h3>통신(?) 기초</h3>
<div>
    <div>
    <?           
        require_once __DIR__ . '/ex_11-1/' . $includeFileName . ".php"; 
    ?>
    </div>
</div>
<?php 
	require_once './inc/footer.php';
?>