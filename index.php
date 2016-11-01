<?php $foo = ’bar’; ?>

<!DOCTYPE html>
<html>

		<head>
			<title>My Photo Album</title>
			<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700%7CLora:400,700italic" rel="stylesheet" type="text/css">
			<link href="css/main.css" rel="stylesheet" type="text/css">
		</head>

	<body>

		<header>
			<div class="container">
				<h1>My Photo Album</h1>
				<h2>Deloitte Digital</h2>
			</div>	
		</header>

		<div class="container">

			<main id="photos">
				<img src="img/Picture 1.jpg" alt="One hungry Pug" />
					<div id="more-photos">	
						<img src="img/Picture 2.jpg" alt="Yoda Pug" />
						<img src="img/Picture 3.jpg" alt="Thug Pug" />
					</div>
					<a href="#" id="show-more">Show more</a>
					<a href="#" id="show-less">Show less</a>
			</main>

			<aside>
				<h4>Photo Album Details</h4>
				<h6>Location</h6>
				<p class="location">Denver</p>

				<hr>

				<h6>Date added</h6>
				<p>Tuseday, October 4 2016</p>

				<hr>

				<h6>Description</h6>
				<p>These are some pictures from the streets!</p>

			</aside>

		</div>

		<footer>
			<h5>Deloitte Digital</h5>
			<p>&copy; 2016 <a href="http://deloitte.com">Deloitte Digital.</a> All Rights Reserved.</p>
		</footer>

		<!-- Javascript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/main.js"></script>

	</body>

</html>
