<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tinycards</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flip.js"></script>
	<script type="text/javascript" src="js/flip.js"></script>
	<style>
		@font-face {
			font-family: TinycardsFont;
			src: url("fonts/DINNextRoundedLTPro-Bold.woff2");
		}
		.card-gird h1 {
			background: #26D797;
		}
	</style>
</head>
<body style="font-family: TinycardsFont; background-color: #F7F7F7">
	<!-- header -->
	<header>
		<div class="container-fluid" style="background-color: #32CDFF">
			<nav class="navbar navbar-expand-sm fixed-top" style="background-color: #32CDFF">
				<div class="container">
					<a class="navbar-brand" href="index.php">
				    	<img src="images/icon.png" alt="logo" style="width:40px;">
				    	<b style="font-size: 30px; color: white">tinycards</b>
				  	</a>  	
				</div>
			</nav>
		</div>
	</header>
	<!-- end header -->

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-3">
				<div class="card imgborder" style="width:250px">
				    <img class="card-img-top imgborder" src="images/6.png" width="200px" alt="Card image">
				    <div class="card-body">
				      	<h4 class="card-title">Countries names and flags</h4>
				      	<p class="card-text">Learn about each country flag.</p>
				    </div>
				</div>
			</div>
			<div class="col-9 imgborder" style="background-color: #FFFFFF">
				<div>
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" href="#">Card (20)</a>
						</li>
					</ul>
				</div>
				<div>
					<div id="gird-container" class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/argentina.png">
								</div>
								<div class="back">
									<h1>Argentina</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/belgium.png">
								</div>
								<div class="back">
									<h1>Belgium</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/colombia.png">
								</div>
								<div class="back">
									<h1>Colombia</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/costa rica.png">
								</div>
								<div class="back">
									<h1>Costa Rica</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/chile.png">
								</div>
								<div class="back">
									<h1>Chile</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/china.png">
								</div>
								<div class="back">
									<h1>China</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/denmark.png">
								</div>
								<div class="back">
									<h1>Denmark</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/india.png">
								</div>
								<div class="back">
									<h1>India</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/iran.png">
								</div>
								<div class="back">
									<h1>Iran</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/isreal.png">
								</div>
								<div class="back">
									<h1>Isreal</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/japan.png">
								</div>
								<div class="back">
									<h1>Japan</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/vietnam.png">
								</div>
								<div class="back">
									<h1>Viet Nam</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/niger.png">
								</div>
								<div class="back">
									<h1>Niger</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/paraguay.png">
								</div>
								<div class="back">
									<h1>Paraguay</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/peru.png">
								</div>
								<div class="back">
									<h1>Peru</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/poland.png">
								</div>
								<div class="back">
									<h1>Poland</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/south koria.png">
								</div>
								<div class="back">
									<h1>Korea</h1>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/france.png">
								</div>
								<div class="back">
									<h1>France</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px">
						<div class="col-4">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/ireland.png">
								</div>
								<div class="back">
									<h1>Ireland</h1>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card-gird">
								<div class="front">
									<img src="images/CountryFlag/cannada.png">
								</div>
								<div class="back">
									<h1>Canada</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>