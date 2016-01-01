<?php
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "About Reb / Connect";
require_once("php/utilities.php");
require_once("php/header.php");
?>

<main>
		<div class="container">
			<div class="row">
			<img class="pull-left medium" src="<?php echo $PREFIX?>img/cps-oma.jpg" alt="Reb by her Granddaughter">
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2> About Reb</h2>
			<p>Collective spectre virtual identity emotion sentient personal observation. Translates expressive impulsive interpersonal graffiti navigate experimental appropriate nature. Historical technology navigate subculture consumer politics male-dominated existential superstition. Postmodern introspection industrial contrast normative Shepard Fairey gaze.</p>
			<p>
			Explore substance simulation everyday psychic immaterial dream site. Postmodern .net art ready-made reposition model zines dominated. Nothingness horror subjective spiritual phallic illuminate interpretation interior eroticism. Whimsical materialism outsider body martyr intimate mystical cliché universal. Politics Fountain mind's eye erotica ready-made fetish collective.</p>

					<h3>Contact Reb</h3>
				</div>
					<form action="connect.php" method="post">
						<!--begin contact us fields-->
						<!--first name-->
						<div class="form-group-lg">
							<label class="control-label sr-only" for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							<!--email-->
							<label class="control-label sr-only" for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
									</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email"  />
								</div>
							<!--message-->
							<label class="control-label sr-only" for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="fa fa-form fa-pencil" aria-hidden="true"></span>
									</div>
										<textarea class="form-control" rows ="3" maxlength = "1024" id="message" name="message" placeholder="Message" ></textarea>
								</div>
							<!--start buttons-->
							<button type="submit" class="btn btn-lg">Submit</button>
							<button type="reset" class="btn btn-lg">Cancel</button>
						</div>
					</form>
				</div>





	</main>
<!--	--><?php //require_once("php/footer.php"); ?>

</body>
</html>

				<?php
				/**
				* sends contents of a simple html form via swiftmailer
				*
				* Tamra Fenstermaker <fenstermaker505@gmail.com>
				*/

				require_once(dirname(dirname(__DIR__)) . "/vendor/autoload.php");

				if(empty($_POST["email"]) === false && empty($_POST["message"]) === false) {
				try {

				//compose and send the email
				//create swift message
				$swiftMessage = Swift_Message::newInstance();
				$swiftMessage->setFrom([$_POST["email"] => "Inquiry"]);
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
				echo "<div class=\"alert alert-success\ col-md-6 col-md-offset-3\" role=\"alert\">Email successfully sent.</div>";
			} catch(Exception $exception) {
			echo "<div class=\"alert alert-danger\ col-md-6 col-md-offset-3\" role=\"alert\"><strong>Oops!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
	}
	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
	}
