<?php
   include 'header.php';
   include 'user.php';
   Session::checkSession();
?>
<?php 
  if(isset($_GET['phone'])){
	   $userPhone = (int)($_GET['phone']);
	  
  }
  $user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update'])){
	$user_update = $user->userUpdate($userPhone,$_POST);
	
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
			 <h2>user profile<span class="pull-right"><a class="btn btn-primary" href="index.php">back</a></span></h2>
		   </div>
		   <div CLASS="panel-body">
		   <?php
		         if(isset($user_update)==true){
					 echo $user_update; 
				 }
		   
		   ?>
		   <?php 
		     $userdata= $user->getUserBypass($userPhone);
			 if($userdata){
				
		   ?>
		   <form action="" method="POST">
		    <div class="form-group">
			    <label for="name">userName</label>
				<input type="text" id="name" name="name" class="form-control" value="<?php echo $userdata->username; ?>" />
			 </div>
		     <div class="form-group">
			    <label for="email">email address</label>
				<input type="text" id="email" name="email" class="form-control"  value="<?php echo $userdata->email; ?>"/>
			 </div>
			  <div class="form-group">
			    <label for="Age">Age</label>
				<input type="Age" id="Age" name="Age" class="form-control" value="<?php echo $userdata->Age; ?>"/>
			 </div>
			  <div class="form-group">
			    <label for="Gender">Gender</label>
				<input type="Gender" id="Gender" name="Gender" class="form-control" value="<?php echo $userdata->Gender; ?>"/>
			 </div>
			 <div class="form-group">
			    <label for="name">Month</label>
				<input type="text" id="Month" name="Month" class="form-control" value="<?php echo $userdata->Month; ?>"/>
			 </div>
			 <div class="form-group">
			    <label for="name">permission</label>
				<input type="text" id="permission" name="permission" class="form-control" value="<?php echo $userdata->Permission; ?>"/>
			 </div>
			 <div class="form-group">
			    <label for="name">flat_name</label>
				<input type="text" id="permission" name="flat_name" class="form-control" value="<?php echo $userdata->flat_name; ?>"/>
			 </div>
			
			 <button type="submit" name="update" class="btn btn-success">update</button>
		   </form>
		   <?php } ?>
		   </div>
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