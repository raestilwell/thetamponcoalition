<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>The Tampon Coalition | Contact Us</title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	
<link rel="shortcut icon" href="http://thetamponcoalition.com/assets/img/logo2.png" type="image/x-icon" />		

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Main CSS -->
<link rel="stylesheet" href="../../assets/css/styles.css" type="text/css" media="screen">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- FontAwesome CDN -->
<script src="https://use.fontawesome.com/6bda1e9d2d.js"></script>

</head>
<body>
	
<?php include '../../template/nav-primary.php';?>
	
<div class="fluid-container">
	<div class="row">
		<div class="col-md-12 banner">
		</div>
	</div>
	
	<div class="row">
		<div class="alert alert-success" id="success-alert">
			<span style="padding-left: 15px;"><strong>Success!</strong> Your message has been sent!</span>
		</div>
		
		<div class="col-md-3 col-md-offset-1">
			<h2>Get in Touch</h2>
			<p>Want to learn more about our organization? Interested in volunteering or making contributions to the Tampon Coalition? Drop us a line with the form to the right, or reach out to us via one of the links below. We'd love to hear from you!</p>
			<?php include '../../template/contact-info.php';?>
		</div>
		<div class="col-md-7">
			<ol class="breadcrumb">
			<li><a href="../../">Home</a></li>
			<li class="active">Contact</li>
		</ol>
			<div class="contact-form">
				<form>
					<div class="form-group">
				    	<label for="nameInput">Your name</label>
						<input type="text" class="form-control" id="nameInput" placeholder="Enter your name">
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="emailInput2">Email address</label>
						<input type="email" class="form-control" id="emailInput2" placeholder="Enter your email address">
				  	</div>
				  
				  	<div class="form-group">
					  	<label for="volunteerOptions">I am writing to:</label>
				  		<select class="form-control" id="volunteerOptions">
						  	<option>Inquire</option>
						  	<option>Volunteer</option>
						  	<option>Request a BlotBox</option>
						  	<option>Say Hello</option>
						</select>
				  	</div>
				  	
				  	<div class="form-group">
						<label for="messageArea">Your Message</label>
						<textarea class="form-control" id="messageArea" rows="3"></textarea>
				  	</div>
				  
				  	<div class="checkbox">
						<label>
					  		<input type="checkbox"> Check here to be subscribed to our monthly newsletter!
					  	</label>
				  	</div>
				</form>
				
				<button class="button" id="sendMail">Submit</button>
			
			</div>
		</div>
	</div>
	
	<div class="row">
    	<div class="col-md-12">
	    	<div class="spacer"></div>
    	</div>
    </div>
    	
</div>

<?php include '../../template/footer.php';?>

<script>
$(document).ready (function(){
    $("#success-alert").hide();
    $("#sendMail").click(function showAlert() {
        $('input[type="text"]').val('');
        $('input[type="email"]').val('');
        $('input:checkbox').attr('checked',false);
        document.getElementById("messageArea").value = "";
        $("#success-alert").alert();
        $("#success-alert").fadeTo(3000, 500).slideUp(500, function(){
		$("#success-alert").slideUp(500);
        });   
    });
 });
</script>
	
</body>
</html>