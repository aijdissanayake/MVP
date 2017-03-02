<!DOCTYPE html>
<html>
<head>
	<title>Details - Step 1</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="/jsmaterialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  	<!--JQuery-->
  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  
	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

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

		.dotProgress {width: 20px; height: 20px; border-radius: 10px; display: inline-flex; margin: 0px 5px; background: #ef9a9a;}

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

			<script type="text/javascript">
				$(document).ready(function() {
					$('select').material_select();
				});
			</script>

		</head>
		<body class="red">

			<div id="wrap">
				<main>
					<div class="container" style="position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
						<div class="row">
							<div class="col s12">
								<div class="red white-text center-align z-index-0" style="height: 100%">
									<h4>Let's Start.</h4>
									<div class="card-content">
										<div class="row">What's your card type?</div>
										<div class="input-field row">
											<select class="col s12 m4 l2 white-text offset-l5 offset-m4" style="">
												<option value="1">Nexus</option>
												<option value="2">Cargills</option>
											</select>
										</div>
										<a  href="{{route('details_2')}}" class="waves-effect waves-light btn red darken-3 white-text">Next</a>
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
					<div class="dotProgress-activated"></div>
					<div class="dotProgress"></div>
				</div>
			</div>


		</body>
		</html>