<?php
/**
 * Created by PhpStorm.
 * User: Tamra
 * Date: 12/5/2015
 * Time: 8:24 AM
 */
require_once("../../reb-willard/public_html/php/header.php");
//require_once("php/footer.php");
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Reb Willard";


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
		<script src="../public_html/js/jquery.swipebox.min.js"></script>
		<link rel="stylesheet" href="../public_html/css/swipebox.min.css">

		<title><?php echo $PAGE_TITLE; ?></title>
	</head>

<body>
	<?php require_once("php/header.php");?>
<main>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="../public_html/img/extra-large/santafe-walk-1600.jpg" alt="Santa Fe Walk">
				<div class="Santa Fe Walk">
					...
				</div>
			</div>
			<div class="item">
				<img src="../public_html/img/extra-large/abiquiu-church-in-ruins-1600px.jpg" alt="Abiquiu Church in Ruin">
				<div class="Color Study No 102">
					...
				</div>
			</div>
			<div class="item">
				<img src="../public_html/img/extra-large/chama-in-bloom-1600px.jpg" alt="Chama in Bloom">
				<div class="Chama in Bloom">
					...
				</div>
			</div>

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-md-3">-->
<!--				<p>Here is a left column on this web page.</p>-->
<!--			</div>-->
<!--			<img src="img/social-006_facebook.png" alt="facebook">-->
<!--			<a href="http://facebook.com/becky.willard2" target="_blank"></a>-->
<!--			<div class="col-md-9">-->
<!--				<p>Here is the main content area of this web page.</p>-->
<!--			</div>-->
<!--		</div>-->
</div>
</main>
	<?php require_once("php/footer.php");?>
</body>

</html>
