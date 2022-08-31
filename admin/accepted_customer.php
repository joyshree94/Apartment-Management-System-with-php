<?php
include_once '../session.php';
include '../user.php';
//Session::checkSession();
?>
<?php
$message = "";
if (isset($_GET['delete'])) {
	$userPhone = (int)($_GET['delete']);
	$user=new User();
	$delete = $user->Delete_accepted_customer($userPhone);
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
              <h2><i class="halflings-icon white user"></i><span class="break"></span>Accepted Customers</h2>
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
                    <th>Phone</th>
                    <th>Month</th>
                    <th>Flat Name</th>
                    <th>Permission</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $user = new User();
                  $userdate=$user->getAcceptedCustomers();
                  if($userdate){
                    $i = 0;
                    foreach($userdate as $sdata){
                    $i++;
                  ?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td class="center"><?php echo $sdata['username']; ?></td>
                  <td class="center"><?php echo $sdata['phone']; ?></td>
                  <td class="center"><?php echo $sdata['Month']; ?></td>
                  <td class="center"><?php echo $sdata['flat_name']; ?></td>
                  <td class="center">
                    <span class="label label-success"><?php echo $sdata['Permission']; ?></span>
                  </td>
                  <td class="center">
                    <a class="btn btn-danger" onclick="confirm('Do you want to delete ?')" href="accepted_customer.php?delete=<?php echo $sdata['phone']; ?>">
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
