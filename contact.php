<?php
if(isset($_POST['submit'])){
    $to = "jgilligan.sav@gmail.com"; // this is your Email address
    $from = $_POST['emailAddress']; // this is the sender's Email address
    $fullName = $_POST['fullName'];
    $subject = "Form submission";
    $message = $fullName . " wrote the following:" . "\n\n" . $_POST['comment'];
    $message2 = "Here is a copy of your message " . $fullName . "\n\n" . $_POST['comment'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fullName . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Bio</title>
  	<link href="https://fonts.googleapis.com/css?family=Lobster|Raleway:400,500,700" rel="stylesheet">
	<!--jQueryAddition-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!--JLG Customizations-->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Source+Sans+Pro:300" rel="stylesheet">
	<link href="css/style-plus-bs.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    	<a class="navbar-brand" href="index.html">Jessie Gilligan
    	</a>
    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navCollapse" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      	</button>
    </div>
    <div class="collapse navbar-collapse" id="navCollapse">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.html">About</a></li>
	        <li><a href="contact.html">Contact</a></li>
	        <li><a href="portfolio.html">Portfolio</a></li>
	       </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


<?=$thankYou ?>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 main">
				<h1 class="page-header">
					<strong>Contact Me</strong>
				</h1>
				<form>
  					<div class="form-group" method="post" action="contact.php">

    					<label for="fullName">Name</label>
    					<input type="text" class="form-control" id="fullName" name="fullName" placeholder="Jane Doe">

    					<label for="emailAddress">Email</label>
   						<input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="jane.doe@example.com">

   						<label for="comment">Comment</label>
   						<textarea class="form-control" rows="3" name ="comment" placeholder="Comment"></textarea>

   						<button name="submit" type="submit" class="btn">Submit</button>

  					</div>
				</form>
			</div>

			<div class="col-md-3 col-sm-12 col-xs-12 connect">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-header">
							<strong>Connect with Me</strong>
						</h2>
					</div>
				</div>
			<!--CONNECT WITH ME-->
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="https://github.com/jgilligan113"  target="-blank"><img class="icons" src="assets/connect/github.png" alt="Jessie's Github" id="git"></a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="https://stackoverflow.com/users/7432072/jessie-gilligan"  target="-blank"><img class="icons" src="assets/connect/stack.png" alt="Jessie's Stack" id="slack"></a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="https://www.linkedin.com/in/jessicagilligan"  target="-blank"><img  class="icons" src="assets/connect/linkedin.png" alt="Jessie's Linkedin" id="link"></a>
					</div>
				</div>

			</div>

	</div>


	<div class="row">
		<div class="col-md-12 footer">
				<p style="opacity: 0.5;">
					&#169; Copyright 2017 Jessica Gilligan
				</p>
		</div>
	</div>

</body>
</html>
