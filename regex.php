<?php 
	$result = "No Pattern or Text";

	if(!empty($_POST['pattern']) && !empty($_POST["text"])){
		$pattern = $_POST['pattern'];
		$text = $_POST['text'];
		if(!empty($_POST['replace'])){
			$replace = $_POST['replace'];
			$result = preg_replace($pattern, $replace, $text);
		}else{
			try {
				if(preg_match($pattern, $text)){
					$result = "Matches!";
				}else{
					$result = "Does not match!";
				}
			} catch (Exception $e) {
				$result = "Regular Expresssion Error";
			}
		}
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RegEx Check</title>
	<style type="text/css">
		.form_group{
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			justify-content: center;
			-ms-align-items: center;
			align-items: center;
		}
		.form_group>form{
			padding: 10px;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	
	<div class="form_group">
		<form action="regex.php" method='post'>
			<dl>
				<dt>Pattern</dt>
				<dd>
					<input type="text" name="pattern">
				</dd>

				<dt>
					Text
				</dt>
				<dd>
					<input type="text" name="text">
				</dd>	

				<dt>
					Replace Text
				</dt>
				<dd>
					<input type="text" name="replace">
				</dd>

				<dt>
					Output Text
				</dt>
				<dd>
					<?=$result ?>
				</dd>

				<dd>
					<button type="submit">Check</button>
				</dd>
			</dl>
		</form>
	</div>

</body>
</html>