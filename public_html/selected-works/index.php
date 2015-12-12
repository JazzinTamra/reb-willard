<?php
/**
 * Created by PhpStorm.
 * User: Tamra
 * Date: 12/5/2015
 * Time: 8:24 AM
 */
require_once("../php/header.php");
require_once("../php/footer.php");
?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

			<!-- optional theme -->
			<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
					rel="stylesheet"/>
			<!-- My CSS style sheet -->
			<link type="text/css" href="../css/style.css" rel="stylesheet">
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]-->
			<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->

			<!-- js-cookie -->
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<!-- Latest compiled and minified Bootstrap JavaScript, all compiled pugins included -->
			<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

			<!--		necessary for swipebox-->
			<script src="lib/jquery-2.0.3.js"></script>
			<script src="src/js/jquery.swipebox.js"></script>
			<link rel="stylesheet" href="src/css/swipebox.css">


		</head>
	<title><?php echo $PAGE_TITLE; ?></title>
<body>
	<main>

			<a href="../img/synapsis-250.jpg" title="synapsis"></a>
			<a href="../img/synapsis-594.jpg" title="synapsis"></a>
			<a href="big/../image" class="swipebox" title="My Caption">
				<img src="small/image.jpg" alt="image">
			</a>
			<!-- Gallery 1 -->
			<a rel="gallery-1" href="big/image1.jpg" class="swipebox">
				<img src="small/image1.jpg" alt="image">
			</a>
			<a rel="gallery-1" href="big/image2.jpg" class="swipebox">
				<img src="small/image2.jpg" alt="image">
			</a>
			<!-- Gallery 2 -->
			<a rel="gallery-2" href="big/image3.jpg" class="swipebox">
				<img src="small/image3.jpg" alt="image">
			</a>
			<a rel="gallery-2" href="big/image4.jpg" class="swipebox">
				<img src="small/image4.jpg" alt="image">
			</a>

	</main>
</body>
</html>
