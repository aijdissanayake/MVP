<!DOCTYPE html>
<html>
<head>
	<title>Health Vault</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<style type="text/css">
		.top-row{padding-top: 20px;}

		.card .card-title{padding: 20px}

		.material-icons {vertical-align: middle; line-height: inherit}

		.container-mid {width: 90%; position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);}
	</style>
</head>
<body class="blue-grey darken-2 ">
	<div class="container blue" style="width: 100%; padding: 20px 0px; margin: 0px; max-width: 100%">
		<h2 class="white-text" style="text-align: center; margin-top: 0px; padding: 0px 20px">You Are What You Eat.</h2>
		<h5 class="white-text" style="text-align: center; padding: 0px 20px">Health metrics from your shopping habits.</h5>
	</div>
	<div class="container">
		<div class="row top-row">

			<div class="col s12 m6">
				<div class="card blue-grey darken-2 white-text" style="box-shadow: none;">
					<div class="card-title"><h4 style="margin: 0px">Your food says it all</h4></div>
					<div class="card-content">
					
						<p>What you've been buying over your last few trips to the supermarket say a lot about you.</p>
						<br>
						<p>Maybe you're getting a bit too much of sugar, and not getting enough Vitamin B. Or you might be buying milk powder with high Calcium while you already get enough from other food.</p><br>
						<p>We will analyze your transactions and give a picture on what you might want to buy on your next visit.</p>
					</div>
				</div>
				
			</div>

			<div class="col s12 m6">
				<div class="card pink white-text">
					<div class="card-content">
						<h4 style="margin-top: 0px">It's simple.</h4>

						<p>Everything has a little of something and a lot of another.</p>
						<br>
						<p>Let's find out what you've been eating.</p><br>
						<a href="{{route('details_1')}}" class="waves-effect waves-light btn pink darken-2 white-text" style=";">Start</a>
					</div>
				</div>

			</div>

		</div>

	</div>

</body>
</html>