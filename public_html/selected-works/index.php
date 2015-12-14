<?php
/**
 * Created by PhpStorm.
 * User: Tamra
 * Date: 12/5/2015
 * Time: 8:24 AM
 */
require_once("../php/header.php");
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
			<script src="../lib/jquery-2.0.3.min.js"></script>
			<script src="../js/jquery.swipebox.min.js"></script>
			<link rel="stylesheet" href="../css/swipebox.min.css">

<!--<!--			from searchcode-->
<!--			<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--<!--			<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />-->
<!--			<script>-->
<!--				$(document).on('pageinit', function() {-->
<!--					$("#home").on('swipe','#swipe', function(event, ui) {-->
<!--						$("#caption").html("Swipe detected!");-->
<!--					});-->
<!--					$("#home").on('swipeleft','#swipe-box', function(event, ui) {-->
<!--						$("#caption").html("Swipe to the left detected!");-->
<!--					});-->
<!--					$("#home").on('swiperight','#swipe-box', function(event, ui) {-->
<!--						$("#caption").html("Swipe to the right detected!");-->
<!--					});-->
<!--				});-->
<!--			</script>-->
<!--			<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>-->
<!--			<style type="text/css">-->
<!--				#swipe-box {width: 200px;height: 200px;background: #FFF;border: 2px solid #000}-->
<!--				.comment {background: #FFF;border-radius: 5px;border: 2px solid #000;padding: 5px}-->
<!--			</style>-->

		</head>
	<title><?php echo $PAGE_TITLE; ?></title>
<body>
	<main>

<!--		<div data-role="page" id="home">-->
<!--			<div data-role="header"><h1>Swipe Events</h1></div>-->
<!--			<div data-role="content">-->
<!--				<p id="swipe">Take a swipe this text or at the box below.</p>-->
<!--				<div id="swipe-box"></div>-->
<!--				<br />-->
<!--				<div id="caption" class="comment">Waiting for swipe...</div>-->
<!--			</div>-->

		<a href="../img/texas-sparkle-600.jpg" class="swipebox" title="Texas Sparkle">
			<img src="../img/texas-sparkle-300px.jpg" alt="image">
		</a>

			<a href="../img/fire-season600px.jpg" class="swipebox" title="Fire Season">
				<img src="../img/fire-season300px.jpg" alt="image">
			</a>

			<a href="../img/color-study-no102-600px.jpg" class="swipebox" title="Color Study No. 102">
				<img src="../img/color-study-no102-300px.jpg" alt="image">
			</a>
			<a href="../img/illusionar-progess-592px.jpg" class="swipebox" title="Illusionary Progress">
				<img src="../img/illusionar-progess-300px.jpg" alt="image">
			</a>

			<a href="../img/summer-humms-600px.jpg" class="swipebox" title="Summer Humms!">
				<img src="../img/summer-humms-300px.jpg" alt="image">
			</a>
			<a href="../img/synapsis-594.jpg" class="swipebox" title="Synapsis">
				<img src="../img/synapsis-250.jpg" alt="image">
			</a>
		<a href="../img/august19red-600px.jpg" class="swipebox" title="August 19 Red">
			<img src="../img/august19red-300px.jpg" alt="image">

		<a href="../img/santafe-walk-600.jpg" class="swipebox" title="Santa Fe Walk">
			<img src="../img/santafe-walk-300.jpg" alt="image">
		</a>
			<a href="../img/unexpected-path-600px.jpg" class="swipebox" title="Unexpected Path">
				<img src="../img/unexpected-path-300px.jpg" alt="image">
			</a>
			<a rel="gallery-1" href="../img/abiquiu-church-in-ruins-600px.jpg" class="swipebox" title="Abiquiu Church in Ruins">
				<img src="../img/abiquiu-church-in-ruins-300px.jpg" alt="Abiquiu Church in Ruins">
			</a>
			<a rel="gallery-1" href="../img/chama-in-bloom.jpg" class="swipebox" title="Chama in Bloom">
				<img src="../img/chama-in-bloom.jpg" alt="image">
			</a>
		</a>
		<a href="../img/the-way-home-600px.jpg" class="swipebox" title="The Way Home">
			<img src="../img/the-way-home-300px.jpg" alt="image">
		</a>
			<a rel="gallery-1" href="../img/exchange-park-wi.jpg" class="swipebox" title="Exchange Park">
				<img src="../img/exchange-park-wi.jpg" alt="image">
			</a>
			<a rel="gallery-1" href="../img/santafe-in-dreams.jpg" class="swipebox" title="Santa Fe in Dreams">
				<img src="../img/santafe-in-dreams.jpg" alt="image">
			</a>
			<a rel="gallery-1" href="../img/the-end-of-flowers-n-sour-grapes.jpg" class="swipebox" title="The End of Flowers & Sour Grapes">
				<img src="../img/the-end-of-flowers-n-sour-grapes.jpg" alt="image">
			</a>
	</main>
	<?php require_once("../php/footer.php"); ?>
</body>
</html>
