<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel = "Stylesheet" type = "text/css" href = "Styles/default.css" />
		<?php
			$page = 'Home';
		if (!empty($_GET['page'])) {
			$page = '';
			$page .= ucfirst($_GET['page']);
		}
		?>
		<title>Rama Tanieu | Avocet  | WEB250| <?= ' ' . $page ?></title>
	</head>
	<body>
		<header>
		<h1>Rama Tanieu | Avocet  | WEB250| WEB250</h1>
		<nav>
			 <li><a href="?p=contents/home.php">Home</a></li>
                    <li><a href="?p=contents/introduction.php">Introduction</a></li>
                    <li><a href="?p=contents/contract.php">Contract</a></li>
                    <li><a href="?p=contents/brand.php">Brand</a></li>
                    <li><a href="?p=contents/form.php">Form</a></li>
			<li><a href="?p=contents/fizzbuzzbang.php">FizzBuzzBang</a></li>
			
		
		</nav>

		</header>
	
	<!-- dynamic content goes here -->
	<main>
	<h2><?= $page ?></h2>
	<?php
	$url = 'contents/home.php';
	if (!empty($_GET['contents'])) {
		$url = 'contents/';
		$url .= $_GET['contents'] . '/';
	}
	if (!empty($_GET['page'])) {
		$url = 'contents/';
		$url .= $_GET['page'] . '.php';
	}
	include $url;
	?>
		</main>
	<footer> 
	<nav>
		<a href="https://www.freecodecamp.org/ramatanieu">Freecodecamp</a> |
			<a href="https://www.codecademy.com/profiles/ramatanieu">Codecadamey</a> |
			<a href="https://github.com/ramatanieu">Github</a> |
			<a href="https://jsfiddle.net/user/ramatanieu/fiddles/">JSfiddle</a> |
			<a href="https://ramatanieu.github.io">Github.io</a>
	</nav>
	
	<figure>
	<a href="http://validator.w3.org/check?uri=referer">
	  <img src="Images/html_validation_button.gif" alt="Validate HTML">
	</a>
	 
	<a href="http://jigsaw.w3.org/css-validator/validator?uri=https://http://ramatanieu.infinityfreeapp.com/<?=$page?>">
	 <img src="Images/validation_button_css_rectangle_blue.gif" alt="Validate CSS" >
	</a>
	</figure>
	</footer>
	</body>
</html>
