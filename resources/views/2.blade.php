<!DOCTYPE html>
<html>
<head>
	<title>Details - Step 2</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

  	<!-- <link href="css?family=Roboto" rel="stylesheet"> -->

	<style>
		.top-row{padding-top: 3rem;}

		.card .card-title{padding: 20px}

		.material-icons {vertical-align: middle; line-height: inherit}

		.caret {display:none;}

		.select-dropdown {background: white; border-radius: 5px; color: black; text-align: center;}

		.select-wrapper input.select-dropdown {background: white; border-radius: 5px; color: black; text-align: center;}

		.dropdown-content .select-dropdown{border-radius: 5px;}

		.dropdown-content li{border-radius: 5px; text-align: center}

		.dropdown-content li>span{font-size:14px; color: black}

		.dotProgress {width: 20px; height: 20px; border-radius: 10px; display: inline-flex; margin: 0px 5px; background: #5e35b1;}

		.dotProgress-activated{width: 22px; height: 22px; border-radius: 11px; display: inline-flex; margin: 0px 5px; background: #ffffff;}

		/*Sticky footer*/
		html, body {height: 100%;}

		#wrap {min-height: 100%;}

		#main {overflow:auto;
			padding-bottom: 50px;}  /* must be same height as the footer */

			#footer {position: relative;
				margin-top: -50px; /* negative value of footer height */
				height: 50px;
				clear:both;} 

				/*Opera Fix*/
				body:before {
					content:"";
					height:100%;
					float:left;
					width:0;
					margin-top:-32767px;/
				}
			</style>
		</head>
		<body class="deep-purple darken-4">

			<div id="wrap">
				<main>
					<div class="container" style="position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
						<div class="row">
							<div class="col s12">
								<div class="deep-purple darken-4 white-text center-align z-index-0" style="height: 100%">
									<h4>Nearly there.</h4>
									<div class="card-content">
										<!-- <div class="row">This helps us to be more accurate.</div> -->
										<form>
											<div class="row">
												<div class="col s12 m4 offset-m4 offset-l4">
													<div class="input-field">
														<i class="material-icons prefix">account_circle</i>
														<input type="number" class="validate" id="age" name="age" min="18" max="100" style="text-align: center">
														<label for="age" class="grey-text text-lighten-2" style="text-align: center">Age</label>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col s12 m4 offset-m4 offset-l4">
													<div class="input-field">
														<i class="material-icons prefix">phone</i>
														<input type="number" class="validate" id="telephone" name="telephone" style="text-align: center">
														<label for="telephone" class="grey-text text-lighten-2" style="text-align: center;">Mobile Number</label>
													</div>
												</div>
											</div>	

											<div class="row">
												<a href="" id="next2" class="waves-effect waves-light btn white-text disabled" style="background: #2d1a68; text-align:center;">Next</a>	
											</div>
										</form>
										
										<script type="text/javascript">
											function enableNext(age, telephone){
												console.log("triggered!");
												if (parseInt(age.val())>17 &&
													telephone.val() !== '' &&
													telephone.val().length ===10
													){
													$('#next2').removeClass('disabled');
											}else{
												if (!$('#next2').hasClass('disabled')){
													$('#next2').addClass('disabled');
												}
											}
										}
										$(document).ready(function(){
											var age = $('#age'), telephone = $('#telephone');

											age.change(function(){
												enableNext(age, telephone);
											});

											telephone.change(function(){
												enableNext(age, telephone);
											})
										});


									</script>


								</div>
							</div>
						</div>
					</div>


				</div>
			</main>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
			});
		</script>

		<div id="footer">
			<div align="center">
				<div class="dotProgress"></div>
				<div class="dotProgress-activated"></div>
			</div>
		</div>


	</body>
	</html>