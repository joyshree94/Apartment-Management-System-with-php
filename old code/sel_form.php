<?php
   include_once 'session.php';
   include 'user.php';
   Session::init();
   $user = new User();
   
?>
<?php
  $loginmsg = Session::get("loginmsg");
  if(isset($loginmsg)){
	  echo $loginmsg;
	  
  }
  Session::set("loginmsg",NULL);
   
   $username=Session::get("username");
   $Age=Session::get("Age");
    $phone=Session::get("phone");
   $Gender=Session::get("Gender");
    $email=Session::get("email");
	  $Date=Session::get("Date");
   $Month=Session::get("Month");
   $Permission=Session::get("Permission");
   $flat_name=Session::get("flat_name");
	$userlogin=Session::get("login");
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
	$userProfileupdate = $user->UserProfileUpdate($username,$phone,$_POST);
	}
	
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
	   <form action="" method="POST">
			 <div class="form-group">
			    <label for="name">Month</label>
				<input type="text" id="Month" name="Month" class="form-control"/>
			 </div>
			 <div class="form-group">
			    <label for="name">flat_name</label>
				<input type="text" id="permission" name="flat_name" class="form-control" />
			 </div>
			
			 <button type="submit" name="submit" class="btn btn-success">submit</button>
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