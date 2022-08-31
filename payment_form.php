<?php
include_once 'session.php';
include 'user.php';
//Session::checkSession();
$user = new User();
?>
<?php
$user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
  echo $user_login = $user->addPayment($_POST);
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
  <body id="profile_page">


	<div class="container">
		<div class="heading">
			<h3>Payment Form</h3>
		</div>
		<form action="payment_form.php" method="post">
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Account Name</label>
			<div class="col-sm-10">
			  <input type="text" name="account_name" class="form-control" id="inputName" placeholder="Type your name" required>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPhone" class="col-sm-2 col-form-label">Account No</label>
			<div class="col-sm-10">
			  <input type="number" name="account_number" class="form-control" id="inputPhone" placeholder="Number" required>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Receipt No</label>
			<div class="col-sm-10">
			  <input type="number" name="slip_number" class="form-control" id="inputName" placeholder="Number" required>
			</div>
		  </div>
      <div class="form-group row">
     <label for="inputName" class="col-sm-2 col-form-label">Amount</label>
     <div class="col-sm-10">
       <input type="number" name="amount" class="form-control" id="inputName" placeholder="Number" required>
     </div>
     </div>
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Date</label>
			<div class="col-sm-10">
			  <input type="date" name="date" class="form-control" id="inputName" placeholder="Number" required>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col-sm-10">
			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		  </div>
		</form>
	</div>
  </body>
</html>
