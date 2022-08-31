<?php
include_once '../session.php';
include '../user.php';
//Session::checkSession();
?>
<?php
  if(isset($_GET['no'])){
	   $userPhone = (int)($_GET['no']);
     $user=new User();
     $update = $user->Update_permission1($userPhone);
   }elseif (isset($_GET['yes'])) {
     $userPhone = (int)($_GET['yes']);
     $user=new User();
     $update = $user->regitration_unpermit($userPhone);
   }elseif (isset($_GET['delete'])) {
     $userPhone = (int)($_GET['delete']);
     $user=new User();
     $delete = $user->delete_regitration($userPhone);
     if($delete){
   		$message = "The Customer has been deleted successfully";
   	}
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("header.php");?>
</head>

<body>
		<!-- start: Header -->
	<?php include("navbar.php");?>
	<!-- start: Header -->

		<div class="container-fluid-full">
		<div class="row-fluid">

			<!-- start:sidebar Main Menu -->
		<?php include("sidebar.php");?>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">

        <div class="row-fluid sortable">
          <div class="box span12">
            <div class="box-header" data-original-title>
              <h2><i class="halflings-icon white user"></i><span class="break"></span>Registration Requests</h2>
              <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
              </div>
            </div>
            <div class="box-content">
              <div style="color:green;padding:5px;font-weight:bold;">
								<?php if(isset($message)){echo $message; }
									if(!empty($message)) $message = "";

							?></div>
              <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Month</th>
                    <th>Permission</th>
                    <th>Flat Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $user = new User();
                  $userdate=$user->getFlatCustomers();
                  if($userdate){
                    $i = 0;
                    foreach($userdate as $sdata){
                    $i++;
                  ?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td class="center"><?php echo $sdata['username']; ?></td>
                  <td class="center"><?php echo $sdata['Age']; ?></td>
                  <td class="center"><?php echo $sdata['phone']; ?></td>
                  <td class="center"><?php echo $sdata['Gender']; ?></td>
                  <td class="center"><?php echo $sdata['email']; ?></td>
                  <td class="center"><?php echo $sdata['Date']; ?></td>
                  <td class="center"><?php echo $sdata['Month']; ?></td>
                  <td class="center">

                    <?php if($sdata['Permission'] =="No"){ ?>
                      <a href="registration_request.php?no=<?php echo $sdata['phone']; ?>" style="color:red">Unaccepted</a>
                      <?php
                    }elseif($sdata['Permission'] =="YES") { ?>
                      <a href="registration_request.php?yes=<?php echo $sdata['phone']; ?>" style="color:green">Accepted</a>
                      <?php
                    }

                    ?>

                  </td>
                  <td class="center"><?php echo $sdata['flat_name']; ?></td>
                  <td class="center">
                    <a class="btn btn-danger" href="registration_request.php?delete=<?php echo $sdata['phone']; ?>" onclick="confirm('Do you want to delete ?')">
                      <i class="halflings-icon white trash"></i>
                    </a>
                  </td>
                </tr>
              <?php } } ?>
                </tbody>


              </table>
            </div>
          </div><!--/span-->

        </div><!--/row-->



	</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->


<!---footer--->
	<?php include("footer.php");?>

</body>
</html>
