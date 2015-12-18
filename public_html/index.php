<?php
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Reb Willard";
require_once("php/utilities.php");
?>


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
</div>
</main>
	<?php require_once("php/footer.php");?>
</body>

</html>
