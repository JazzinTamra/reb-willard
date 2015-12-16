<?php
/**
 * Created by PhpStorm.
 * User: Tamra
 * Date: 12/5/2015
 * Time: 8:24 AM
 */
require_once("php/header.php");
//require_once("../php/footer.php");
$PAGE_TITLE = "Selected Works";
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
			<link type="text/css" href="css/style.css" rel="stylesheet">
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
			<script src="lib/jquery-2.0.3.min.js"></script>
			<script src="js/jquery.swipebox.min.js"></script>
			<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/swipebox.min.css">
			<link rel="stylesheet" href="css/demo.css" type="text/css">
<!--			<link href='demo.css' rel='stylesheet' type='text/css'>-->

			<title><?php echo $PAGE_TITLE; ?></title>
		</head>


<!--		Simple lightbox start-->
	<main>
			<body>
				<div class="container">

					<div class="gallery">
						<a href="img/summer-humms-4500.jpg" class="big"><img src="img/summer-humms-4500.jpg" alt="Summer Humms!" title="Summer Humms!"/></a>


						<a href="img/fire-season600px.jpg" class="small"><img src="img/fire-season300px.jpg" alt="Fire Season" title="Fire Season"/></a>
						<a href="img/color-study-no102-600px.jpg" class="small"><img src="img/color-study-no102-300px.jpg" alt="Color Study No. 102" title="Color Study No. 102"/></a>
						<a href="img/extra-large/texas-sparkle-1420px.jpg" class="small"><img src="img/texas-sparkle-300px.jpg" alt="Texas Sparkle" title="Texas Sparkle" /></a>



						<a href="img/unexpected-path1400.jpg" class="big"><img src="img/unexpected-path1400.jpg" alt="Unexpected Path" title="Unexpected Path"/></a>

						<a href="img/santafe-walk-600.jpg"><img src="img/santafe-walk-300.jpg" alt="Santa Fe Walk" title="Santa Fe Walk"/></a>
						<a href="img/illusionar-progess-592px.jpg" class="small"><img src="img/illusionar-progess-300px.jpg" alt="Illusionary Progress" title="Illusionary Progress"/></a>



						<a href="img/chama-in-bloom.jpg"><img src="img/chama-in-bloom.jpg" alt="Chama in Bloom" title="Chama in Bloom"/></a>
						<a href="img/abiquiu-church-in-ruins-600px.jpg" class="big"><img src="img/abiquiu-church-in-ruins-300px.jpg" alt="Abiquiu Church in Ruins" title="Abiquiu Church in Ruins"/></a>

						<a href="img/synapsis-5600.jpg"><img src="img/synapsis-5600.jpg" alt="" title=""/></a>

						<a href="img/the-way-home-600px.jpg"><img src="img/the-way-home-300px.jpg" alt="The Way Home" title="The Way Home"/></a>
						<div class="clear"></div>
<!--						<a href="img/august19red-600px.jpg"><img src="img/august19red-300px.jpg" alt="" title=""/></a>-->






						<div class="clear"></div>
					</div>


				</div>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
				<script type="text/javascript" src="js/simple-lightbox.js"></script>
				<script>
					$(function(){
						var gallery = $('.gallery a').simpleLightbox();

					});
				</script>
		</html>

	</main>
	<?php require_once("php/footer.php"); ?>
</body>
</html>
