<!DOCTYPE html>
<html>
<head>
		<title>Contact Us</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css"/>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		$("form").submit(function(){
			alert("Your Message has been sent");
		});
		});
		</script>
</head>
<body>

<div class="panel-body">
					<form class="form-horizontal" method="post" action="mail.php" role="form">
						<div class="form-group">
							<label for="contactname" class="col-sm-2 control-label"> Name :</label>
							<div class="col-sm-10">
								<input name="name" type="text" class="form-control" id="contactname" placeholder="Enter Name">
							</div>
						</div>
						<div class="form-group">
							<label for="contactemail" class="col-sm-2 control-label">Email :</label>
							<div class="col-sm-10">
								<input name="email" type="text" class="form-control" id="contactemail" placeholder="Enter Email Id">
							</div>
						 </div>
						<div class="form-group">
							<label for="contactsubject" class="col-sm-2 control-label">Subject :</label>
							<div class="col-sm-10">
								<input name="subject" type="text" class="form-control" id="contactsubject" placeholder="Enter Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="contactmessage" class="col-sm-2 control-label">Message:</label>
							<div class="col-sm-10">
								<textarea input name="message" type="text" class="form-control" id="contactmessage" rows="6"></textarea>
							</div>
					    </div>
						<div class="col-sm-10 col-md-offset-6">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</form>
				</div>
</body>
</html>
