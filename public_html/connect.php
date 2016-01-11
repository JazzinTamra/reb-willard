<?php
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "About Reb / Connect";
require_once("php/utilities.php");
require_once("php/header.php");
?>

<main>
	<div class="container-fluid" id="content">
		<div class="row">
			<article>
				<div class="container-fluid ">
					<img class="img-responsive pull-left container-fluid col-lg-9 col-md-8 col-sm-9 col-xs-12" src="<?php echo $PREFIX?>img/cowspecs.jpg" alt="Cowspecs" name="Cowspecs">
						<div class="about-reb-align" >
							<p>For <b>Reb Willard</b>, making art is a language filled with possibilities. Every painting, sketch, or photo is a visual story of the world she inhabits. She takes shape, line, color, and texture and wraps it around an idea to create work that is expressive of her inner self and her life experiences. Each painting is a story, an actual piece of her life. It’s very personal.
							<p>Reb is influenced by the natural world; she re-imagines the landscape that surrounds her and pours intense color and unusual textures onto canvas to create the color-saturated world she envisions.
							<blockquote>“It’s a gift to be able to let one’s imagination roam the corners of the mind and dig out the stories buried there.” </blockquote></p>
							<p>Currently Reb is a full-time artist working in her hometown, Provo, Utah. Her work is shown in local and regional shows throughout the Western United States.</p>
							</p>
						</div>
				</div>
			</article>
				<div class="about-reb-align col-lg-9 col-md-12 col-sm-9 col-xs-12">
					<h3 >Contact Reb</h3>
					<form action="connect.php" method="post" id="contact-form">
					<!--begin contact us fields-->
					<!--first name-->
					<div class="control-group">
						<label class=" control-label sr-only" for="name">Name</label>
							<div class="input-group">
								<div class="input-group-addon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
					</div><!--control group-->
					<!--email-->
					<div class="control-group">
						<label class="control-label sr-only" for="email">Email*</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
							</div>
					</div><!--control group-->
						<!--message-->
						<label class="control-label sr-only" for="message">Message*</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="fa fa-form fa-pencil" aria-hidden="true"></span>
								</div>
									<textarea class="form-control" rows ="3" maxlength = "1024" id="message" name="message" placeholder="Message" required></textarea>
							</div>
						<!--start buttons-->
						<button type="submit" class="btn btn-lg">Submit</button>
						<button type="reset" class="btn btn-lg">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</main>

	<?php
	require_once("php/footer.php");
	?>

</body>
</html>

				<?php
				/**
				* sends contents of a simple html form via swiftmailer
				*
				* Tamra Fenstermaker <fenstermaker505@gmail.com>
				*/

				require_once(dirname(__DIR__) . "/vendor/autoload.php");

				if(empty($_POST["email"]) === false && empty($_POST["message"]) === false) {
				try {

				//sanitize name and email
				$name = trim($_POST["name"]);
				$name = filter_var($name, FILTER_SANITIZE_STRING);

				//compose and send the email
				//create swift message
				$swiftMessage = Swift_Message::newInstance();
				$swiftMessage->setFrom([$_POST["email"] => $name]);
				$recipients = ["fenstermaker505@gmail.com"];
				$swiftMessage->setTo($recipients);

				//attach subject line
				$swiftMessage->setSubject("Note from personal website");

				//attach the actual message
				$message = trim($_POST["message"]);
				$message = filter_var($message, FILTER_SANITIZE_STRING);
				$swiftMessage->setBody($message, "text/plain");

				//send email via smtp
				$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
				$mailer = Swift_Mailer::newInstance($smtp);
				$numSent = $mailer->send($swiftMessage, $failedRecipients);

				//throw an exception if the number of people who
				if($numSent !== count($recipients)) {
				// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed
				throw(new RuntimeException("unable to send email"));
				}
				// report a successful send
				echo "<script type='text/javascript'>alert('Email successfully sent.')</script>";
			} catch(Exception $exception) {
			echo "<script type='text/javascript'>alert('Oops/! Unable to send email:' . $exception->getMessage() . )</script>";
	}
	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
	}
