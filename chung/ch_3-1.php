<?php 
	$_title = '챕터 3';
	require_once './inc/header.php';
?>
		<p>구구단을 외자</p>
		<form method="POST" action="./ch_3-2.php">
			<div>
				<span>몇단? :</span>
				<span><input id="dan" type="text" name="dan"></span>
			</div>
			<div>
				<button type="submit">외자!</button>
			</div> 
		</form>
		<script>
			$(function(){
				$('form').on('submit', function(e){
					var dan = $('#dan').val();
					if(dan == ''){
						alert('뭘 어쩌라고?');
						return false;
					}
					$(this).submit();
				});
			});
		</script>
<?php 
	require_once './inc/footer.php';
?>
	
