<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>The Tampon Coalition | Donate</title>
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
			<span style="padding-left: 15px;"><strong>Thank you!</strong> From the bottom of our hearts, thank you.</span>
		</div>
		<div class="col-md-3 col-md-offset-1">
			<h2>Support the Tampon Coalition</h2>
			<p>Everyday there are women who face limited access or no access to feminine hygiene products. For some of these women, participation in school, work and social activities can be inhibited by menstruation. Your gift will go toward helping these women access the menstrual products they desperately need.</p>
			
			<div class="sidebar-nav">
				
			</div>
			
			<?php include '../../template/contact-info.php';?>
		</div>
		<div class="col-md-7">
			
			<ol class="breadcrumb">
				<li><a href="../../">Home</a></li>
				<li class="active">Donate</li>
			</ol>
			
			<div class="contact-form">
				<form>
					
					<div class="form-group">
						<h4>Gift Amount</h4>
						<label class="radio-inline">
						  	<input type="radio" name="paymentAmount" id="inlineRadio1" value="10"> $10
						</label>
						
						<label class="radio-inline">
						  	<input type="radio" name="paymentAmount" id="inlineRadio2" value="25"> $25 
						</label>
						
						<label class="radio-inline">
						  <input type="radio" name="paymentAmount" id="inlineRadio3" value="50"> $50
						</label>
						
						<label class="radio-inline">
						  <input type="radio" name="paymentAmount" id="inlineRadio4" value="75"> $75
						</label>
						
						<label class="radio-inline">
						  <input type="radio" name="paymentAmount" id="inlineRadio5" value="100"> $100
						</label>
						
						<label class="radio-inline">
						  <input type="radio" name="paymentAmount" id="inlineRadio6" value="other"> Other
						</label>
						
						<input type="text" name="paymentAmount" class="form-control" id="otherAmount" placeholder="Enter Amount" style="margin-top: 5px;" disabled>
					</div>
					
					<div class="form-group">
						<label class="radio-inline">
						  	<input type="radio" name="paymentFrequency" id="oneTimePayment" value="one-time"> One-Time
						</label>
						
						<label class="radio-inline">
						  	<input type="radio" name="PaymentFrequency" id="monthlyPayment" value="monthly"> Monthly 
						</label>
					</div>
					
					<h4>Billing Information</h4>
					
					<div class="form-group">
				    	<label for="nameInput" class="sr-only">Name</label>
						<input type="text" class="form-control" id="nameInput" placeholder="Enter your name">
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="emailInput" class="sr-only">Email address</label>
						<input type="email" class="form-control" id="emailInput" placeholder="Enter your email address">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="billingAddressInput" class="sr-only">Billing Address</label>
						<input type="text" class="form-control" id="billingAddressInput" placeholder="Billing Address">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="cityInput" class="sr-only">City</label>
						<input type="text" class="form-control" id="cityInput" placeholder="City">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="stateInput" class="sr-only">State</label>
						<input type="text" class="form-control" id="stateInput" placeholder="State">
				  	</div>
				  	
				  	<div class="form-group">
				    	<label for="zipInput" class="sr-only">Zip</label>
						<input type="text" class="form-control" id="zipInput" placeholder="Zip Code">
				  	</div>
				  	
				  	<h4>Credit Card Information</h4>
				  	
				  	<div class="form-group">
				    	<label for="cardNoInput">Credit Card Number</label>
						<input type="text" class="form-control" id="cardNoInput">
				  	</div>
				  	
				  	<div class="row">
				  		<div class="col-md-4">
				  			<label for="expMonth">Expiration Date</label>
				  		</div>
				  		
				  		<div class="col-md-8">
				  			<label for="ccvCode">Verification Code</label>
				  		</div>
				  	</div>
				  	
				  	
				  	<div class="row">
					  	<div class="col-md-2">
						  	<select class="form-control" id="expMonth">
							  	<option>MM</option>
							  	<option>01</option>
							  	<option>02</option>
							  	<option>03</option>
							  	<option>04</option>
							  	<option>05</option>
							  	<option>06</option>
							  	<option>07</option>
							  	<option>08</option>
							  	<option>09</option>
							  	<option>10</option>
							  	<option>11</option>
							  	<option>12</option>
						  	</select>
					  	</div>
					  	
					  	<div class="col-md-2">
						  	<select class="form-control" id="expYear">
							  	<option>YYYY</option>
							  	<option>2017</option>
							  	<option>2018</option>
							  	<option>2019</option>
							  	<option>2020</option>
							  	<option>2021</option>
							  	<option>2022</option>
							  	<option>2023</option>
							  	<option>2024</option>
							  	<option>2025</option>
							  	<option>2026</option>
							  	<option>2027</option>
							  	<option>2028</option>
							  	<option>2029</option>
							  	<option>2030</option>
							  	<option>2031</option>
							  	<option>2032</option>
							  	<option>2033</option>
							  	<option>2034</option>
							  	<option>2035</option>
							  	<option>2036</option>
							  	<option>2037</option>
						  	</select>
					  	</div>
					  	
					  	<div class="col-md-8">
						  	<div class="form-group">
						  		<input type="text" class="form-control" id="ccvCode">
				  			</div>
					  	</div>

				  	</div>
				</form>
				
				<button class="button" id="sendMail" style="width:100%;margin-bottom:5px;">Donate</button>
			
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
 
$(function() {
    window.invalidate_input = function() {
        if ($('input[name=paymentAmount]:checked').val() == "other")
            $('#otherAmount').removeAttr('disabled');
        else
            $('#otherAmount').attr('disabled', 'disabled');
    };
    
    $("input[name=paymentAmount]").change(invalidate_input);
    
    invalidate_input();
});
 
</script>
	
</body>
</html>