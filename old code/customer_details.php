<?php
   include_once 'session.php';
   include 'header.php';
   include 'user.php';
   //$user = new User();
   
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
		     <table>
			    <th width="10%">Serial</th>
			    <th width="10%">Name</th>
			    <th width="10%">phone</th>
			    <th width="10%">Month</th>
			    <th width="10%">Permission</th>
			    <th width="10%">Flat Name</th>
			    <th width="10%"></th>
				<?php
				$user = new User();
				$userdate=$user->getuserdata();
				if($userdate){
					$i = 0;
					foreach($userdate as $sdata){
					$i++;	
					
				?>
				<tr>
				   <td><?php echo $i; ?></td>
				   <td><?php echo $sdata['username']; ?></td>
				   <td><?php echo $sdata['phone']; ?></td>
				   <td><?php echo $sdata['Month']; ?></td>
				   <td><?php echo $sdata['Permission']; ?></td>
				   <td><?php echo $sdata['flat_name']; ?></td>
				   <td>
				    <a href="Admin_show_profile.php?phone=<?php echo $sdata['phone']; ?>" class="btn btn-primary" type="view">View</a>
				  
						
					
				   </td>
				</tr>
				<?php } }else{ ?>
				<tr><td colspan="5"><h2>No data</h2></td></tr>
				<?php } ?>
			 </table>
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