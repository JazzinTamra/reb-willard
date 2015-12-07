<?php

/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "MY PAGE TITLE";
require_once("php/utilities.php");
?>

<body class="jumbotron">
	<?php require_once("php/header.php");?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p>Here is a left column on this web page.</p>
			</div>
			<img src="img/social-006_facebook.png" alt="facebook">
			<a href="http://facebook.com/becky.willard2" target="_blank"></a>
			<div class="col-md-9">
				<p>Here is the main content area of this web page.</p>
			</div>
		</div>
</div>
</main>
	<?php require_once("php/footer.php");?>
<!--	<div id="footer">-->
<!--		<div class="container">-->
<!--			<p class="footer-text">Rebecca Willard - Copyright c 2015</p>-->
<!--		</div>-->

</body>

</html>