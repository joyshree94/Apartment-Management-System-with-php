<?php
   include 'user.php';
?>
<?php
$user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){
	echo $user_regis=$user->userRegistration($_POST);

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/fontawesome.min.css" rel="stylesheet">
      <link href="css/mystyle.css" rel="stylesheet">
    <title>registration</title>
  </head>
  <body>
	<div class="container">
	<form action="registration.php" method="POST" onsubmit="return validation()">
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">User Name</label>
    <div class="col-sm-10">
		<input type="text" id="user" name="name" class="form-control"  autocomplete="off">
		<span id="username"> </span>
	</div>
  </div>
  <div class="form-group row">
    <label for="pass" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
		<input type="password" id="pass" name="password" class="form-control" autocomplete="off">
		<span id="passwords"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Age_person" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
		<input type="Age" id="Age_person" name="Age" class="form-control" autocomplete="off">
		<span id="Ages"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
		<input type="number" id="number" name="phone" class="form-control">
		<span id="numbers"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
		<input type="radio" name="Gender" id="Gender1" value="male"> Male<br>
         <input type="radio" name="Gender" id="Gender2" value="female"> Female<br>
		 <span id="Genders"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
		<input type="text" id="email" name="email" class="form-control">
		<span id="emails"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Date" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-10">
		<input type="Date" id="Date" name="Date" class="form-control">
		<span id="Dates"> </span>
    </div>
  </div>
  <button type="submit" name="register" class="btn btn-success">submit</button>
</form>
	</div>
	 <script text="text/javascript">
	 function validation(){

		 var user = document.getElementById('user').value;
		 var pass = document.getElementById('pass').value;
		 var Age = document.getElementById('Age_person').value;
		 var phone = document.getElementById('number').value;
		 var Gender1 = document.getElementById('Gender1').checked;
		 var Gender2 = document.getElementById('Gender2').checked;
		 var Email = document.getElementById('email').value;
		 var Date = document.getElementById('Date').value;

		 if(user == ""){
			 document.getElementById('username').innerHTML="please enter username";
			 return false;
		 }
		 if(!isNaN(user)){
			  document.getElementById('username').innerHTML="enter only character";
			 return false;

		 }
		 else{
			 document.getElementById('username').innerHTML="thnk u";


		 }
		  if(pass == ""){
			 document.getElementById('passwords').innerHTML="please enter password";
			 return false;
		 }
		  if((pass.length<7) || (pass.length>30)){
			 document.getElementById('passwords').innerHTML="At  least 7 digit";
			 return false;
		 }


		  else{
			  document.getElementById('username').innerHTML="";
			 document.getElementById('passwords').innerHTML="thnk u";

		 }
		  if(Age == ""){
			 document.getElementById('Ages').innerHTML="please enter Age";
			 return false;
		 }
		  if(isNaN(Age)){
			  document.getElementById('Ages').innerHTML="should not be used character";
			 return false;

		 }
		  else{
			  document.getElementById('passwords').innerHTML="";
			 document.getElementById('Ages').innerHTML="thnk u";

		 }
		 if(phone == ""){
			 document.getElementById('numbers').innerHTML="please enter password";
			 return false;
		 }
		 if((phone.charAt(0)!=1)){
			 document.getElementById('numbers').innerHTML="1st digit must be 1";
			 return false;
		 }
		  if((phone.charAt(1)!=7) && (phone.charAt(1)!=8) && (phone.charAt(1)!=9) && (phone.charAt(1)!=6) && (phone.charAt(1)!=5)){
			 document.getElementById('numbers').innerHTML="2nd digit  must be start 5 or 7 or 9 or 8 or 5";
			 return false;
		 }
		  if((phone.length<10) || (phone.length>10)){
			 document.getElementById('numbers').innerHTML="should be used 10 digit";
			 return false;
		 }
		  if(isNaN(phone)){
			  document.getElementById('numbers').innerHTML="should not be used character & it shoult be length 10";
			 return false;

		 }
		  if(isNaN(phone)){
			  document.getElementById('numbers').innerHTML="should not be used character";
			 return false;

		 }
		 else{
			  document.getElementById('Ages').innerHTML="";
			 document.getElementById('numbers').innerHTML="thnk u";

		 }
		 if((Gender1 == "") && (Gender2 == "")){
			 document.getElementById('Genders').innerHTML="please enter your Gender";
			 return false;
		 }
		 else{
			  document.getElementById('numbers').innerHTML="";
			 document.getElementById('Genders').innerHTML="thnk u";

		 }
		  if(Email == ""){
			 document.getElementById('emails').innerHTML="please enter email";
			 return false;
		 }
		 if(Email.indexOf('@')<=0){
			 document.getElementById('emails').innerHTML="invalid email";
			 return false;
		 }
		 else{
			  document.getElementById('Genders').innerHTML="";
			  document.getElementById('emails').innerHTML="tnku";
		 }

		  if(Date == ""){
			 document.getElementById('Dates').innerHTML="please enter Date";
			 return false;
		 }
		 else{
			 document.getElementById('emails').innerHTML="";
		 }

	 }
	 </script>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	   <script defer src="fontawesome/fontawesome-all.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
