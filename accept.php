<?php 
	if(isset($_POST['name']) && !empty($_POST['name']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		isset($_POST['phone']) && !empty($_POST['phone']) &&
		isset($_POST['word']) && !empty($_POST['word']) &&
		isset($_POST['price']) && !empty($_POST['price']) &&
		isset($_POST['lines']) && !empty($_POST['lines'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$word = $_POST['word'];
		$price = $_POST['price'];
		$lines = $_POST['lines'];
	}
	else{
		echo "NOT VALID!";
		$name = '';
		$email = '';
		$phone = '';
		$word = '';
		$price = '';
		$lines = '';	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<div class="responded">
		<ul>
	<?php if(preg_match("/quick/", $name)){ ?>
			<li><?="Name is right  \n"; ?></li>
		
	<?php	}else{ ?>
			<li><?="Name is NOT right\n"; ?></li>
	<?php	} if(preg_match("/([\w\.\-_]+)?\w+@[\w-_]+(\.\w+){1,}/", $email)){ ?>
			<li><?="Email is valid\n"; ?></li>
	<?php	}else{ ?>
			<li><?="Email is NOT valid\n";	?></li>
	<?php	}	if(preg_match("/^\+998-\d{2}-\d{3}-\d{4}$/", $phone)){ ?>
			<li><?="Phone number is correct\n"; ?></li>
	<?php	}	else{ ?>
			<li><?="Phone number is NOT correct\n"; ?></li>
	<?php	}
		$pattern = '/ /';
		$replacement = ''; 
		$pattern_price = '/[^.,0-9]/';
		$replacement_price = '';
		?>
		<li><?=preg_replace($pattern, $replacement, $word); ?></li>
		<li><?=preg_replace($pattern_price, $replacement_price, $price); ?></li>
	 </ul>
	</div>
</body>
</html>