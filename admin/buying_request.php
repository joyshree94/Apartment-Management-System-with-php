<?php
include_once '../session.php';
include '../user.php';
Session::init();
//Session::checkSession();
?>
<?php
if (isset($_GET['delete'])) {
	$id = (int)($_GET['delete']);
	$user=new User();
	$delete = $user->Delete_buying_request($id);
	if($delete){
		Session::set("message","<div class='alert alert-danger'><strong>The request has been deleted successfully.</strong> </div>");
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
              <h2><i class="halflings-icon white user"></i><span class="break"></span>Buying Requests</h2>
              <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
              </div>
            </div>
            <div class="box-content">
							<?php echo Session::get('message'); Session::set("message","");?>
              <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Payment Type</th>
                    <th>Flat Name</th>
										<!--
										<th>Account Name</th>
										<th>Account Number</th>
										<th>Slip Number</th>
										<th>Amount</th>
										<th>Bank and Branch</th>
										---->
                    <th>Permission</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $user = new User();
                  $userdate=$user->getBuyingRequests();
                  if($userdate){
                    $i = 0;
                    foreach($userdate as $sdata){
                    $i++;
                  ?>

                <tr>
                   <td><?php echo $i; ?></td>
                  <td class="center"><?php echo $sdata['name']; ?></td>
                  <td class="center"><?php echo $sdata['phone']; ?></td>
                  <td class="center"><?php echo $sdata['payment_type']; ?></td>
                  <td class="center"><?php echo $sdata['flat_name']; ?></td>

                  <td class="center">
                    <span class="label label-success"><?php echo $sdata['permission']; ?></span>
                  </td>
                  <td class="center">
                    <a data-backdrop="false" class="btn btn-success" href="buying_permission.php?phone=<?php echo $sdata['phone']; ?>" >
                      <i class="halflings-icon white eye-open"></i>
                    </a>

                    <a class="btn btn-danger"  onclick="confirm('Do you want to delete ?')" href="buying_request.php?delete=<?php echo $sdata['id']; ?>">
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
