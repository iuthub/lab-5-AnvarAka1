<?php 

	if(isset($_POST["input_text"])){
		$input = $_POST['input_text'];
		$length = strlen($input);
		$regex_start = "/\[|\{/";
		$regex_end = "/\]|\}/";
		$result = "";
		$flag = false;

		$j=0;
		for($i=0;$i<$length;$i++){
			if(preg_match($regex_end, $input[$i])){
				$flag = false;
				continue;
			}

			if($flag){
				$result[$j] = $input[$i];
				$j++;
			}

			if(preg_match($regex_start, $input[$i])){
				$flag = true;
				continue;
			}else{
				continue;
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task G</title>
</head>
<body>
	<?php 
		if(!empty($result)){
			echo "<p>".$result."</p>";
		}
	?>
	
	<form action="Task_G.php" method="post">
		<label for="input_text">Enter Your Text</label>
		<br>
		<input type="text" name="input_text" id="input_text">
		<button type="submit">Submit</button>
	</form>

</body>
</html>