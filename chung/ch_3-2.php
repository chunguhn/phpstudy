<?php 
	$_title = '챕터 3';
	require_once './inc/header.php';
	
// 	$intDan = $_REQUEST['dan'];

	/**
	 * $_REQUEST : parameter 의 GET, POST 구분없이 처리
	 * $_POST : post 파라메터만
	 * $_GET : get 파라메터만
	 * 
	 *  isset : 변수가 세트되어있으면서 NULL 이 아닌지를 체크하는 함수입니다.
					변수가 존재하고 NULL 이 아닌 값을 가지고 있으면 TRUE를 리턴합니다.
					그 외에는 FALSE를 리턴합니다.
	 */
	$intDan = isset($_POST['dan']) ? $_POST['dan'] : $_GET['dan'];
	
	// 빈배열 생성
	$arrResult = array();
	
	// if ... else if ... else 
	if($intDan == 1){
		$strResult = '1단도 모르셈?';
	} else if($intDan <= 0){
		$strResult = '2이상 정수만 입력하세요.';
	} else if($intDan > 9){
		$strResult = '10미만의 정수만 입력하세요.';
	} else {
		// java랑 뭐가 다름??
		for($i=2;$i<10;$i++){
			$arrResult[] = sprintf ("<li>%d X %d = %s</li>", $intDan, $i, number_format($intDan*$i));
// 			$arrResult[] = sprintf ("<li>%s X %d = %s</li>", $intDan, $i, ($intDan*$i));
		}	
		// 배열 값 체크
		if(count($arrResult) > 0){
			$strResult = implode('<br>', $arrResult);
		}
	}
?>
	<p>입력하신 단은<b><?=$intDan?></b>입니다.</p>
	<p>결과는 아래......</p>
	<ul>
		<?=$strResult?>
	</ul>
<?php 
	require_once './inc/footer.php';
?>