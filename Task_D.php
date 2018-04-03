<?php 

	if(isset($_POST['input_text'])){

		$input = $_POST["input_text"];
		$length = strlen($input);
		$regex = "/ /";
		$result = '';

		$j=0;
		for($i=0;$i<$length;$i++){
			if(preg_match($regex, $input[$i])){
				continue;
			}else{
				$result[$j] = $input[$i];
				$j++;
			}
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 	D</title>
</head>
<body>
	<?php 
		if(!empty($result)){
			echo "<p>".$result."</p>";
		}
	?>

	<form action="Task_D.php" method="post">
		<label for="input_text">Enter Your Text</label>
		<br>
		<input type="text" name="input_text" id="input_text">
		<button type="submit">Submit</button>
	</form>

</body>
</html>
