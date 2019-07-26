<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1 style="color: white;">Book Bike</h1>
						</div>
						<form action="/insert" method="post">
							{{ csrf_field()}}

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" name="name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Phone Number</span>
										<input class="form-control" type="tel" placeholder="Enter your phone number" name="phonenumber">
									</div>
								</div>
							</div>


							<div class="form-group">
								<span class="form-label">Identity Number</span>
								<input class="form-control" type="text" placeholder="Enter your identity number" name="idNumber">
							</div>


							<div class="form-group">
								<span class="form-label">Destination </span>
								<input class="form-control" type="text" placeholder="Enter Location" name="destination">
							</div>


							<div class="form-group">
								<!-- <input class="form-control" type="text" placeholder="Enter ZIP/Location"> -->
								<span class="form-label">Bike Type</span>
								<select class="form-control" name="bikeType">
									<option>Normal Bike = 4$</option>
									<option>Mordern Bike = 8$</option>
									<option>Normal Motorbike = 12$</option>
									<option>Off-Road Motorbike = 16$</option>
								</select>
								<span class="select-arrow"></span>
							</div>


							<div class="row">
								<div class="col-sm-6" style="margin-bottom: 15px;">
									<div class="form-group">
										<span class="form-label">Start Date</span>
										<input class="form-control" type="date" required name="startDate">
									</div>
								</div>

								<div class="col-sm-6" style="margin-bottom: 15px;">
									<div class="form-group">
										<span class="form-label">End Date</span>
										<input class="form-control" type="date" required name="endDate">
									</div>
								</div>
								<!-- <div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control">
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
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div> -->
							</div>


							<div class="form-btn">
								<button class="submit-btn" type="submit" name="submit">Book Now</button>
							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>