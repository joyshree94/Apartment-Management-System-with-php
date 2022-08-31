<?php
include_once '../session.php';
include '../user.php';
//Session::checkSession();
?>
<?php
	if(isset($_GET['update'])){
		$phone = $_GET['update'];
		$user=new User();
		$update = $user->Update_buyingRequest($phone);
		if($update){
			Session::init();
			Session::set("message","<div class='alert alert-success'><strong>Permission has been successfull.</strong> </div>");
		 header("Location: buying_request.php");
			}
		}elseif (isset($_GET['nothanks'])) {
			header("Location: buying_request.php");
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
              <h2><i class="halflings-icon white user"></i><span class="break"></span>Buying Permission</h2>
              <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
              </div>
            </div>
            <div class="box-content">
              <table class="table table-striped table-bordered bootstrap-datatable datatable">

                <tbody>
                <?php
                  if(isset($_GET['phone'])){
                    $phone = $_GET['phone'];
                  }
                  $user = new User();
                  $userdate=$user->getBuyingRequestsByPhone($phone);

                    foreach($userdate as $sdata){

                  ?>

                <tr>
                  <th>Name</th>
                  <td class="center"><?php echo $sdata['name']; ?></td>
                </tr>
                <tr>
                  <th>Phone</th>
                  <td class="center"><?php echo $sdata['phone']; ?></td>
                </tr>
                <tr>
                  <th>Payment Type</th>
                  <td class="center"><?php echo $sdata['payment_type']; ?></td>
                </tr>
                <tr>
                  <th>Flat Name</th>
                  <td class="center"><?php echo $sdata['flat_name']; ?></td>
                </tr>
                <tr>
									<th>Account Name</th>
									<td class="center"><?php echo $sdata['account_name']; ?></td>
                </tr>
                <tr>
                  <th>Account Number</th>
									<td class="center"><?php echo $sdata['account_number']; ?></td>
                </tr>
                <tr>
                  	<th>Slip Number</th>
									<td class="center"><?php echo $sdata['slip_number']; ?></td>
                </tr>
                <tr>
                  <th>Amount</th>
									<td class="center"><?php echo $sdata['amount']; ?></td>
                </tr>
                <tr>
                  <th>Bank and Branch</th>
									<td class="center"><?php echo $sdata['bank']; ?></td>

                </tr>
                <tr>

                  <td class="center" cols="2">
                    <a data-backdrop="false" class="btn btn-success" href="buying_permission.php?update=<?php echo $sdata['phone']; ?>" >
                      <p>Accept</p>
                    </a>
                    <a class="btn btn-danger" href="buying_permission.php?nothanks=<?php echo $sdata['phone']; ?>">
                      <p>No, Thanks</p>
                    </a>

                  </td>

                </tr>
              <?php }  ?>
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
