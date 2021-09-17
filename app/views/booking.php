
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?=ASSETS?>css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?=ASSETS?>css/forms1.css" />

</head>

<body>
    <?php include 'menu.php' ?>

 
    <form method="post" class="container">
	<div id="booking" class="section">
		<div class="section-center">
			
				<div class="row">
					<div class="booking-form">
						
							<h1>Make your reservation</h1>
						
						
								<span class="form-label">Full Name</span><br>
								<input class="form-control" type="text" placeholder="Full Name" name="name">

							<div class="row">
								
									<div class="form-group">
										<span class="form-label">Date</span><br>
										<input class="form-control" type="date" required name="date">
										
									</div>
								
								
									<div class="form-group">
										<span class="form-label">Arrival</span><br>
										<input class="form-control" type="time" required name="arrival">
										
									
								</div>
							</div>
							<div class="row">
								
									<div class="form-group">
										<span class="form-label">Hours</span>
										<span class="select-arrow"></span><br>

										<select class="form-control" required name="hours">
											
											<option value="" selected hidden>Hours</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
										</select>
										
										
									
								</div>
								
									<div class="form-group">
										<span class="form-label">No. of People</span><br>
										<select class="form-control" name="NOP" required >
											<option value="" selected hidden>No. of People</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
										</select>
										<span class="select-arrow"></span>
										
									
								</div>
							</div>
							<div class="row">
							
									<div class="form-group">
										<span class="form-label">Email</span><br>
										<input class="form-control" type="email" placeholder="Email" name="email">
								
								</div>
								
									<div class="form-group">
										<span class="form-label">Phone</span><br>
										<input class="form-control" type="tel" placeholder="Phone" name="phone">
										
								
								</div>
							</div>
							<div class="form-btn">
								<button class="SubmitButton" name="Book">Book Now</button>
							</div>
						
					</div>
				</div>
			</div>
		</div>
		</form>


	<script src="<?=ASSETS?>js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>


</html>