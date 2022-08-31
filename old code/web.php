<?php
   include_once 'session.php';
   include 'header.php';
   include 'user.php';
   $user = new User();
   
?>
<?php
  $loginmsg = Session::get("loginmsg");
  if(isset($loginmsg)){
	  echo $loginmsg;
	  
  }
  Session::set("loginmsg",NULL);
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">--->
		<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" />
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Login registration system</title>
  </head>
  <body>

	 
	   <div class="panel panel-default">
		   <div class="panel-heading">
			 <h2>user<span class="pull-right"><strong>welcome!</strong>	
             <?php
			    $name = Session::get("username");
				if(isset($name))
				{
					echo $name;
				}
			 ?>			 
			 </span></h2>
		   </div>
		   
	   </div>
	   </div> 
	  <div class="container"> 
        <form action="" method="POST"> 
		   <img src="images/1.jpg" alt="Smiley face" height=200px width=200px >
		   <a class="btn btn-primary" href="sel_form.php" role="button">Bye Now</a>
		   <!--<button type="submit" name="flt1" class="btn btn-success">Bye Now</button>--->
		   <img src="images/2.jpg" alt="Smiley face" height="200" width="200" >
		   <a class="btn btn-primary" href="sel_form.php" role="button">Bye Now</a>
		   <!---<button type="submit" name="flt2" class="btn btn-success">Bye Now</button>--->
		   <img src="images/2.jpg" alt="Smiley face" height="200" width="200" >
		   <a class="btn btn-primary" href="sel_form.php" role="button">Bye Now</a>
		   <!---<button type="submit" name="flt3" class="btn btn-success">Bye Now</button>-->
		   </form>
		</div>
	  </div>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	   <script defer src="fontawesome/fontawesome-all.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>