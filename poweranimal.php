<?php 
		session_start();
		$animals = array("Tiger", "Lion", "Panther", "Leopard", "Cheetah", "Jaguar");
		$length = count($animals);

		if(!isset($_SESSION["animal"]) || empty($_SESSION["animal"])){
			$index = rand()%$length;	
			$_SESSION["animal"] = $animals[$index];
		}

		$powerAnimal = $_SESSION["animal"];

		if(!isset($_SESSION['entries'])){
			$_SESSION['entries'] = 0;
		}

		$entries = $_SESSION["entries"];
		$entries += 1;
		$_SESSION['entries'] = $entries;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PowerAnimal</title>
</head>
<body>
	
	<h1>Hello User! Your Power Animal is <?=$powerAnimal;?></h1>
	<h2>Number of Entries: <?=$entries;?></h2>
	
	<form action="session_reset.php" method="get">
		<input type="hidden" name="over" value='true'>
		<button type="submit" name="submit" value="over">Start Over</button>
	</form>
</body>
</html>