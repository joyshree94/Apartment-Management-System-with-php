<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/./session.php';
//echo $filepath;
    Session::init();
   
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

  </head>
  <?php
      if(isset($_GET['action']) && $_GET['action']=="logout"){
		  Session::destroy();
	  }
  ?>
  <body>
<div class="container">
	   <nav class="navbar navbar-default">
        <div class="container-fluid">
		<div class="navbar-header">
		 <a class="navbar-brand" href="index.php">login system</a>
		</div>
		<ul class="nav navbar-nav pull-right">
		<?php
		    $phone=Session::get("phone");
			$userlogin=Session::get("login");
			$userlogin1=Session::get("login1");
			if($userlogin == true){
		?>
		<li><a href="web.php">web</a></li>
		<li><a href="profile.php?phone=<?php echo $phone;?>">profile</a></li>
		<li><a href="accepted.php?phone=<?php echo $phone;?>">accepted reqst</a></li>
		<li><a href="?action=logout">logout</a></li>
		<?php }
			else if($userlogin1 == true){
		?>
		 <li><a href="customer_details.php">customer_request</a></li>
		  <li><a href="?action=logout">logout</a></li>
		<?php }else{ ?>
		<li><a href="login.php">login</a></li>
		<li><a href="registration.php">register</a></li>
		<li><a href="admin_login.php">Admin</a></li>
		<?php } ?>
		</ul>
		</div>
	   </nav>
	   
   