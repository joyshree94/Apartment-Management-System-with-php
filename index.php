<?php
  include("session.php");
   include 'user.php';
   //Session::checkLogin();

?>
<?php
$user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
	echo $user_login = $user->userlogin($_POST);

}elseif($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['adminlogin'])){
	echo $user_login = $user->Admin_login($_POST);

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/fontawesome.min.css" rel="stylesheet">
      <link href="css/mystyle.css" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>

	<section id="nav-part">
	   <div class="container">
		  <nav class="navbar navbar-expand-lg navbar-black bg-black">
		   <a class="navbar-brand" href="#">
			   <div class="logo">
				  <img src="images/logo.png"/>
			   </div>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

			  <li class="nav-item">
				<a class="nav-link" href="index.php">home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">about us</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">photo gallery</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">contact us</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal2">Admin</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="registration.php">sign up</a>
			  </li>
			</ul>
		  </div>
		</nav>
	   </div>
	   <!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Login here</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form action="index.php" method="POST">
				  <div class="form-group row">
					<label for="username" class="col-sm-2 col-form-label">User ID</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="username" placeholder="Type your email" required>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
					  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
					</div>
				  </div>

			  </div>
			  <div class="modal-footer">
				<button type="submit" name="login" class="btn btn-success">LOGIN</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
			  </div>
        	</form>
			</div>
		  </div>
		</div>

    <!-- Modal -->
   <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
       </div>
       <div class="modal-body">
       <form action="index.php" method="POST">
         <div class="form-group row">
         <label for="username" class="col-sm-2 col-form-label">User ID</label>
         <div class="col-sm-10">
           <input type="text" name="phone" class="form-control" id="username" placeholder="Type your mobile number" required>
         </div>
         </div>
         <div class="form-group row">
         <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
         <div class="col-sm-10">
           <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
         </div>
         </div>

       </div>
       <div class="modal-footer">
       <button type="submit" name="adminlogin" class="btn btn-success">ADMIN LOGIN</button>
       <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
       </div>
         </form>
     </div>
     </div>
   </div>
	</section>
	<section id="slide">
	  <div class="">
	     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
			  <div class="carousel-caption d-none d-md-block">
				<div class="slide-form">
				  <form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
			  <div class="carousel-caption d-none d-md-block">
					<div class="slide-form">
				  <form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
			  <div class="carousel-caption d-none d-md-block">
					 <div class="slide-form">
				       <form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				       </form>
				     </div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="images/slide4.jpg" alt="Third slide">
			  <div class="carousel-caption d-none d-md-block">
					 <div class="slide-form">
				           <form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form>
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="images/slide5.jpg" alt="Third slide">
			  <div class="carousel-caption d-none d-md-block">
					<div class="slide-form">
				  <form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form>
				</div>
			  </div>
			</div>
		  </div>

		</div>
	  </div>
	</section>
	<section id="about-us-content">
	  <div class="container">
	    <div class="contact-para text-center">
		   <h2>ABOUT US</h2>
        </div>
		 <div class="row">
			<div class="col-md-4">
				<h3>Mission & Vision</h3>
				<h4>Mission</h4>
				<p>The company aims to have development projects that would be treated as true icons, reference points for creativity and ingenuity and takes its corporate responsibility to a new level in the real estate development sector of the country.</p>

				<h4>Vision</h4>
				<p>The company envisages to be one of the most valuable lifestyle developers in the country and places its corporate identity somewhere beyond mere real estate development. It aims to have development schemes in the most desirable and exclusive locations and to build such schemes to a high quality specification that would become synonymous with the group.</p>
			</div>
			<div class="col-md-8">
				<h3>Company Profile</h3>
				<p>Once widely prominent as magnificent port city, Chittagong has always been a multicultural & glamorous city renowned for its urbane manners, beautiful gardens, salacious & esoteric poetry & music, delectable cuisines, and gracious lifestyles. Today, Chittagong is a well-equipped, well-developed, and well-connected major market of Bangladesh with numerous shopping malls, multiplexes, excellent infrastructural facilities, headquarters of many big business & service corporations. Real Estate sector plays a pivotal part in the expansion, growth, and opulence of any city, with Chittagong being no exception. The real estate sector of Chittagong is one of the fastest flourishing industries of Bangladesh as well as the south Asia. With the striking presence of many eminent real estate developers of Chittagong, Epic Properties Ltd. has its national stature and renown. We are planning, designing, and decorating our city in the pattern of various cosmopolitan cities of south Asia.</p>
				<p>Once widely prominent as magnificent port city, Chittagong has always been a multicultural & glamorous city renowned for its urbane manners, beautiful gardens, salacious & esoteric poetry & music, delectable cuisines, and gracious lifestyles. Today, Chittagong is a well-equipped, well-developed, and well-connected major market of Bangladesh with numerous shopping malls, multiplexes, excellent infrastructural facilities, headquarters of many big business & service corporations. Real Estate sector plays a pivotal part in the expansion, growth, and opulence of any city, with Chittagong being no exception. The real estate sector of Chittagong is one of the fastest flourishing industries of Bangladesh as well as the south Asia. With the striking presence of many eminent real estate developers of Chittagong, Epic Properties Ltd. has its national stature and renown. We are planning, designing, and decorating our city in the pattern of various cosmopolitan cities of south Asia.</p>
			</div>
		 </div>
	  </div>
	</section>
	<section id="team">
		<div class="container">
			<div class="contact-para text-center">
			   <h2>TEAM MEMBER</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team_img">
						<img src="images/mun.jpg" class="rounded-circle">
					</div>
					<div class="team_name text-center">
						<h5>Nazmun Mun</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team_img">
						<img src="images/sree.jpg" class="rounded-circle">
					</div>
					<div class="team_name text-center">
						<h5>Joyshree Mazumder</h5>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team_img">
						<img src="images/tinny.jpg" class="rounded-circle">
					</div>
					<div class="team_name text-center">
						<h5>Tinny Barua</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact-us">
	  <div class="container">
	    <div class="contact-para text-center">
		   <h2>CONTACT US</h2>
        </div>
		 <div class="font-pic text-center">
		  <div class="row">
		    <div class="col-md-4">
			  <div class="para-icon1">
			    <div class="phone">
				  <i class="fas fa-phone-square"></i>
				</div>
				<h3>CALL US </h3>
			    <p>+8801923970212,01776-502993</p>
			  </div>
			</div>
			 <div class="col-md-4">
			   <div class="para-icon2">
			    <div class="location">
				  <i class="fas fa-map-marker"></i>
				</div>
				<h3>OFFICE LOCATION</h3>
			    <p>Suite 02, Level 12, Sahera Tropical Center </p>
			  </div>
			</div>
			 <div class="col-md-4">
			   <div class="para-icon3">
			    <div class="email">
				  <i class="fas fa-envelope-square"></i>
				</div>
				<h3>EMAIL</h3>
			    <p>support@webcodeinstitute.com</p>
			  </div>
			</div>
		   </div>
		   </div>
	  </div>
	</section>
	<section id="contact-form">
	  <div class="container">
	    <div class="final-form">
		<div class="row">
		 <div class="col-md-6">
		  <form>
		   <div class="form-group">
			<label for="text">Full Name</label>
			<input type="text" class="form-control" id="text" aria-describedby="text" placeholder="Full Name">
		  </div>
		  <div class="form-group">
			<label for="exampleInputEmail1">Number</label>
			<input type="text" class="form-control" id="text"  aria-describedby="number" placeholder="number">
		  </div>
        </form>
		 </div>
		 <div class="col-md-6">
		    <div class="form-group">
			<label for="exampleFormControlTextarea1">Message</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="message"></textarea>
		  </div>
		  <div class="sub-button">
		   <button type="submit" class="btn btn-success">Submit</button>
		  </div>
		 </div>
		</div>
		</div>
	  </div>
	</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script defer src="fontawesome/fontawesome-all.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
