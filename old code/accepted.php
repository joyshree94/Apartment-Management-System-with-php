<?php
  // include_once 'session.php';
   include 'header.php';
   //include 'user.php';
   
?>
	<?php
	//$user = new User();
	if(isset($_POST['search'])){
       $valuetosearch= $_POST['ValueToSearch'];
	  //$query="select * from accepted_customer where concat(username,phone,Month,Permission,flat_name) like '%".$valuetosearch."%'";
	 //$query="select * from accepted_customer where phone like '---%'";
	 $str= preg_replace("#[^0-9a-z]#i","",$valuetosearch);
	 $query="select * from accepted_customer where phone like '%$str%'";
	   $search_result = filtertable($query);
	    } 
	else{
	     $query="select * from accepted_customer ORDER BY username DESC";
		 $search_result = filtertable($query);
	   }
	function filtertable($query){
		
		$connect=mysqli_connect("localhost","root","","sree_final_project");
		$filter_result= mysqli_query($connect,$query);
		return $filter_result;
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
			    $name = Session::get("name");
				if(isset($name))
				{
					echo $name;
				}
			 ?>			 
			 </span></h2>
		   </div>
		   <div class="panel-body">
		    <form action="" method="POST">
		     <table>
			    
			    <input type="text" name="ValueToSearch" placeholder="enter phone number">
				<input type="submit" name="search" value="search">
			    <th width="10%">Name</th>
			    <th width="10%">phone</th>
			    <th width="10%">Month</th>
			    <th width="10%">Permission</th>
			    <th width="10%">Flat Name</th>
			    <th width="10%"></th>
				<?php while($row = mysqli_fetch_array($search_result)):?>
				
				<tr>
				   <td><?php echo $row['username']; ?></td>
				   <td><?php echo $row['phone']; ?></td>
				   <td><?php echo $row['Month']; ?></td>
				   <td><?php echo $row['Permission']; ?></td>
				   <td><?php echo $row['flat_name']; ?></td>
				</tr>
				
				<?php endwhile;?>
			 </table>
			 </form>
		   </div>
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