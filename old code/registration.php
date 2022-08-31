<?php
   include 'header.php';
   include 'user.php';
?>
<?php
$user=new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){
	$user_regis=$user->userRegistration($_POST);
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
			 <h2>user registration<span class="pull-right"><strong>welcome!</strong>delowar</span></h2>
		   </div>
		   <div CLASS="panel-body">
		   <form action="" method="POST" onsubmit="return validation()">
		    <?php
		   if(isset($user_regis)){
			   echo $user_regis;
		   }
		 ?>
		    <div class="form-group">
			    <label for="name">UserName</label>
				<input type="text" id="user" name="name" class="form-control"  autocomplete="off">
				<span id="username"> </span>
				<?php
				  /* if(isset($nameasdf['name'])){
					   echo $nameasdf['name'];
					   
				   }*/
				?>
			 </div>
			 <div class="form-group">
			    <label for="password">password</label>
				<input type="password" id="pass" name="password" class="form-control" autocomplete="off">
				<span id="passwords"> </span>
				<?php
				 /*  if(isset($nameasdf['password'])){
					   echo $nameasdf['password'];
					   
				   }*/
				?>
			 </div>
			 <div class="form-group">
			    <label for="Age">Age</label>
				<input type="Age" id="Age_person" name="Age" class="form-control" autocomplete="off">
				<span id="Ages"> </span>
			 </div>
			 <div class="form-group">
			    <label for="number">Phone</label>
				<input type="number" id="number" name="phone" class="form-control">
				<span id="numbers"> </span>
			 </div>
			 <div class="form-group">
			    <label for="Gender">Gender</label><br>
				  <input type="radio" name="Gender" id="Gender1" value="male"> Male<br>
                  <input type="radio" name="Gender" id="Gender2" value="female"> Female<br>
				<span id="Genders"> </span>
			 </div>
		     <div class="form-group">
			    <label for="email">Email Address</label>
				<input type="text" id="email" name="email" class="form-control">
				<span id="emails"> </span>
			 </div>
			 <div class="form-group">
			    <label for="Date"> Birth Date</label>
				<input type="Date" id="Date" name="Date" class="form-control">
				<span id="Dates"> </span>
			 </div>
			   
			 <button type="submit" name="register" class="btn btn-success">submit</button>
		   </form>
		   </div>
	   </div>
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
		  if((phone.charAt(0)!=7) && (phone.charAt(0)!=8) && (phone.charAt(0)!=9) && (phone.charAt(0)!=6) (phone.charAt(0)!=5)){
			 document.getElementById('numbers').innerHTML="number must be start 5 or 7 or 9 or 8";
			 return false;
		 }
		  if((phone.length<9) || (phone.length>9)){
			 document.getElementById('numbers').innerHTML="should be used 11 digit";
			 return false;
		 }
		  if(isNaN(phone)){
			  document.getElementById('numbers').innerHTML="should not be used character & it shoult be length 9";
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