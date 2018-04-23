<?php
  // kết nối database
  $connect = mysqli_connect('localhost', 'root', '', 'tinycards') or die("kết nối không thành công");
  mysqli_set_charset($connect,"utf8");
  session_start();

  if(isset($_POST['dangnhap'])) {
    header("Location: login.php");
  }
  if(isset($_POST['dangky'])) {
    header("Location: signup.php");
  }
  if(isset($_POST['dangxuat'])) {
    header("Location: logout.php");
  }

  if (isset($_GET['page1'])) {
  	if (isset($_SESSION['loged']) || isset($_COOKIE['loged'])) {
  		header("Location: 1-1.php");
  	}
  	else {
  		header("Location: login.php");
  	}
  }
  if (isset($_GET['page2'])) {
  	if (isset($_SESSION['loged']) || isset($_COOKIE['loged'])) {
  		header("Location: 1-2.php");
  	}
  	else {
  		header("Location: login.php");
  	}
  }
?>

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
	<style>
		@font-face {
			font-family: TinycardsFont;
			src: url("fonts/DINNextRoundedLTPro-Bold.woff2");
		}
		.imgborder {
			border-radius: 20px;
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
				  	<div class="justify-content-center">
				  		<form class="form-inline" method="POST">
				  			<?php if(!isset($_SESSION["loged"]) && !isset($_COOKIE["loged"])) {
						        echo '
					          	<button id="dangnhap" class="btn btn-light btn-lg imgborder" type="submit" name="dangnhap" style="width: 150px; color: #32CDFF; margin-right: 30px">Log In</button>
      							<button id="dangky" class="btn btn-light btn-lg imgborder" type="submit" name="dangky" style="width: 150px; color: #32CDFF">Sign Up</button>
					          ';
					    	}
						    ?>
						    <?php if(isset($_SESSION["loged"]) || isset($_COOKIE["loged"])) {
						    	if(isset($_SESSION['full_name'])) {
						    		echo $_SESSION['full_name'];
						    	}
						    	else echo $_COOKIE['full_name'];
						        echo '<button id="dangxuat" class="btn btn-light btn-lg imgborder" type="submit" name="dangxuat" style="width: 150px; color: #32CDFF; margin-left: 30px">Log Out</button>'; 
						    }
						    ?>
				  		</form>
				  	</div>	
				</div>
			</nav>
		</div>
	</header>
	<!-- end header -->

	<!-- carousel -->
	<div class="container" style="margin-top: 100px; background-color: #FFFFFF; height: 800px">
		<div class="text-center">
			<p style="font-size: 50px; line-height: 100px; color: #32CDFF">list of courses</p>
		</div>
		<div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <!-- <li data-target="#demo" data-slide-to="2"></li> -->
		  </ul>
		  <div class="carousel-inner">
		    <div class="carousel-item active jumbotron" style="background-color: #3E548C">
		    	<a class="link" href="index.php?page1=page">
		    		<div class="row">
			    		<div class="col" style="color: white">
			    			<h1>FIRST 20 ELEMENTS</h1>
			      			<p>by Lauren</p>
			    		</div>
			    		<div class="col">
			    			<img src="images/5.png" class="img-thumbnail imgborder" align="right" style="margin-top: -30px" width="150px">
			    		</div>
			    	</div>
		    	</a>
		    </div>
		    <div class="carousel-item jumbotron" style="background-color: #3AB186">
		    	<a class="link"  href="index.php?page2=page">
		    		<div class="row">
			    		<div class="col" style="color: white">
			    			<h1>Countries names and flags</h1>
			     			<p> by Ayser</p>
			    		</div>
			    		<div class="col">
			    			<img src="images/6.png" class="img-thumbnail imgborder" align="right" style="margin-top: -30px" width="150px">
			    		</div>
			    	</div>
		    	</a>
		    </div>
		    <!-- <div class="carousel-item jumbotron"> 
		    	<div class="row">
		    		<div class="col">
		    			<h1>FAMOUS CONQUERORS</h1>
		      			<p>by TinyHistory</p>
		    		</div>
		    		<div class="col">
		    			<img src="images/2.png" class="img-thumbnail" align="right" style="margin-top: -30px">
		    		</div>
		    	</div>
		    </div> -->
		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</div>
	<!-- end carousel -->
</body>
</html>