<?php
include_once 'session.php';
include 'user.php';
//Session::checkSession();
$user = new User();
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
	<h2 class="text-center">Client Profile</h2>
  <div><h2><a href="logout.php">Logout</a></h2></div>
	<div class="container">
		<div class="heading">
			<h3>Client Information :</h3>
		</div>
		<table class="table table-dark">
			  <tbody>
          <?php
          if(isset($_GET['phone'])){
           $phone = $_GET['phone'];
           Session::init();
           $phone = Session::set("phone",$phone);
           $phone = Session::get("phone");
            $userdate=$user->getFlatCustomerByPhone($phone);

            //print_r($userdate);
            if($userdate){
              $i = 0;
              foreach($userdate as $sdata){
              $i++;
            ?>
            <tr>
              <th>Serial</th>
              <td><?php echo $i;?></td>
            </tr>
				<tr>
				  <th>Name</th>
				  <td><?php echo $sdata['username']; ?></td>
				</tr>
				<tr>
				  <th>Phone</th>
				  <td><?php echo $sdata['phone']; ?></td>
				</tr>
				<tr>
				  <th>Flat Name</th>
				  <td><?php echo $sdata['flat_name']; ?></td>
				</tr>
				<tr>
				  <th>Month</th>
				  <td><?php echo $sdata['Month']; ?></td>
				</tr>
      <?php } }   } ?>
			  </tbody>
		</table>
	</div>
	<div class="container">
		<div class="heading">
			<h3>Payment History :</h3>
		</div>
		<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">Date</th>
				  <th scope="col">Amount</th>
				  <th scope="col">Receipt No</th>
				  <th scope="col">Bank</th>
				  <th scope="col">Branch</th>
				</tr>
			  </thead>
			  <tbody>
          <?php
            
          if(isset($_GET['phone'])){
           $phone = $_GET['phone'];
           Session::init();
           $phone = Session::set("phone",$phone);
           $phone = Session::get("phone");

            //print_r($userdate);
          //  $userdate=$user->getPaymentInfo();
              $userdate=$user->getPaymentInfo($phone);
            //print_r($userdate);
            if($userdate){
              //$i = 0;
              foreach($userdate as $sdata){
              //$i++;
            ?>
				<tr>
				  
				  <td><?php echo $sdata['date']; ?></td>
				  <td><?php echo $sdata['amount']; ?></td>
				  <td><?php echo $sdata['slip_number']; ?></td>
          <td><?php echo $sdata['bank']; ?></td>
		  <td><?php echo $sdata['Branch']; ?></td>
		     
				</tr>
		  <?php } } } ?>
			  </tbody>
		</table>
    <a href="payment_form.php" target="_blank" class="btn btn-primary">Click for Payment</a>
	</div>

  </body>
</html>