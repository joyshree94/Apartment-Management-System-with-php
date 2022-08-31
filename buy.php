<?php
include 'session.php';
   include 'user.php';
   //Session::checkSession();
?>
<?php
$user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
	echo $buying=$user->addBuyingRequest($_POST);

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
	<div class="container">
	<form action="buy.php" method="post">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name = "name" class="form-control" id="inputName" placeholder="Type your name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" name="phone" class="form-control" id="inputPhone" placeholder="Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Flat Name</label>
    <div class="col-sm-10">
      <input type="text" name ="flat_name" class="form-control" id="inputName" placeholder="Type your Flat name">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Payment</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="payment_type" id="gridRadios1" value="option1" >
          <label class="form-check-label" for="gridRadios1">
            Full
          </label>
        </div>
        <div class="form-check">
		<h2>for 3 month</h2>
          <input class="form-check-input" type="radio" name="payment_type" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Installment
          </label>
        </div>
      </div>
    </div>
  </fieldset>


	</div>
	<div class="container">
		<div class="company_account text-center">
			<h3>Company's Account Number For Payment</h3>
			<h5>Account Name : Bootstarp Real estate Company</h5>
			<h5>Account N0 - 36762689</h5>
			<h5>Chawkbazar Branch,Chittagong</h5>
			<h5>City Bank .</h5>
		</div>
	</div>
	<div class="container">
		<div class="heading">
			<h3>Coustomer's Payment Details</h3>
		</div>

		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Account Name</label>
			<div class="col-sm-10">
			  <input type="text" name ="account_name" class="form-control" id="inputName" placeholder="Type your name">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPhone" class="col-sm-2 col-form-label">Account No</label>
			<div class="col-sm-10">
			  <input type="number" name ="account_number" class="form-control" id="inputPhone" placeholder="Number">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Receipt No</label>
			<div class="col-sm-10">
			  <input type="number" name="slip_number" class="form-control" id="inputName" placeholder="Number">
			</div>
		  </div>
          <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Amount</label>
			<div class="col-sm-10">
			  <input type="number" name="amount" class="form-control" id="inputName" placeholder="Amount">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Bank</label>
			<div class="col-sm-10">
			  <input type="text" name="bank_name" class="form-control" id="inputName" placeholder="bankname">
			</div>
		  </div>
		   <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Branch</label>
			<div class="col-sm-10">
			  <input type="text" name="branch_name" class="form-control" id="inputName" placeholder="Branch_name">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Date</label>
			<div class="col-sm-10">
			  <input type="date" name ="date" class="form-control" id="inputName" placeholder="Number">
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
