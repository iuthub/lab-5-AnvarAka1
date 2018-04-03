<?php 
	if(isset($_POST["input_text"])){
		$input = $_POST['input_text'];

		$length = strlen($input);
		$regex = "/[<br>|<\/br>]/";
		$result = "";

		$j=0;
		for($i=0;$i<$length;$i++){
			if(!preg_match($regex, $input[$i])){
				$result[$j] = $input[$i];
				$j++;
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
	<title>Task F</title>
</head>
<body>
	<?php 
		if(!empty($result)){
			echo "<p>".$result."</p>";
		}
	?>
	
	<form action="Task_F.php" method="post">
		<label for="input_text">Enter Your Text</label>
		<br>
		<textarea name="input_text" id="input_text" cols="30" rows="10"></textarea>
		<button type="submit">Submit</button>
	</form>

</body>
</html>