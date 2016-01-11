<?php
//grab current directory
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "About Reb / Connect";
require_once("php/utilities.php");
require_once("php/header.php");
?>

<main>
	<div class="container-fluid">
		<div class="row">
			<article>
				<div class="container-fluid ">
					<img class="img-responsive pull-left container-fluid col-lg-9 col-md-8 col-sm-9 col-xs-12" src="<?php echo $PREFIX?>img/cowspecs.jpg" alt="Cowspecs" name="Cowspecs">
						<div class="about-reb-align" >
							<p><b>Reb Willard</b> is influenced by the natural world. She re-imagines the landscape that surrounds her and pours intense color and unusual textures onto canvas to create the color-saturated world she envisions. Her artistic toolbox includes all manner of media: acrylics, pastels, oils, pencil, charcoal, water color, and photography.  <blockquote>“It’s a gift to be able to let one’s imagination roam the corners of the mind and dig out the stories buried there.” </blockquote></p>
							<p>Currently Reb is a full-time artist working in her hometown, Provo, Utah. Her work is shown in local and regional shows throughout the Western United States. Reb is the mother of two beautiful daughters and the grandmother of a spirited and talented granddaughter.</p>
						</div>
				</div>
		</div><!--row-->

<!--			working to add a contact modal-->
			 <!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default btn-lg">Contact Reb</a>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"><!--styles the modal-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">Contact Reb</h3>
        </div><!--.modal-header-->
        <div class="modal-body">
				<form action="connect.php" method="post">
					<!--begin contact us fields-->
					<!--name-->
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
												</div>
						<!--start buttons-->
						<button type="submit" class="btn btn-lg">Submit</button>
						<button type="reset" class="btn btn-lg" data-dismiss="modal">Cancel</button>



			</div> <!--.modal-body-->
        <div class="modal-footer">
        </div> <!--modal footer-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->


        </form>


  </div><!-- /.modal -->
			</article>



			</div><!--row-->
		</div><!--container-fluid-->

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

				require_once(dirname(__DIR__) . "/vendor/autoload.php");

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
				echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";
			} catch(Exception $exception) {
			echo "<div class=\"alert alert-danger\ col-md-6 col-md-offset-3\" role=\"alert\"><strong>Oops!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
	}
	$basePath = $_SERVER["SCRIPT_NAME"];
	$lastSlash = strrpos($basePath, "/");
	$basePath = substr($basePath, 0, $lastSlash);
	}
