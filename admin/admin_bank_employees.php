<?php
	session_start();

	if(!isset($_SESSION['username']))
{
		
header("Location:admin_login.php");


	}

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prerna Health Care Service</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
     <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style>
		
	#input2 {
			
			background-position: 10px 12px; /* Position the search icon */
			background-repeat: no-repeat; /* Do not repeat the icon image */
			width: 100%; /* Full-width */
			font-size: 16px; /* Increase font-size */
			padding: 12px 20px 12px 10px; /* Add some padding */
			border: 1px solid #ddd; /* Add a grey border */
			margin-bottom: 12px; /* Add some space below the input */
	}
	</style>
</head>
<body>
        <!-- Left Panel -->

   <?php include("admin_header.php"); ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="admin_logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                   

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Center Details</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
			
				  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Center</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_bank_employees_action.php" id="myForm">
					    <div class="card-body card-block">
                        <div class="form-group"><label for="company" class=" form-control-label">Center Name</label>
						 <select name="center_name" id="select" class="form-control" required>
                                <option value="">Center Name</option>
                                <?php	include 'dbconnection.php';
										$con = OpenCon();		
										$result = mysqli_query($con, "SELECT id,center_name FROM admin_center");
										mysqli_close($con);
										while ($row = mysqli_fetch_array($result)) {	
										$center_name = $row['center_name'];			
					
										echo '<option value="' . $center_name . '"> ' .  $center_name  . ' </option>';  
										} ?>
								
                              </select></div>
                        <div class="form-group"><label for="company" class=" form-control-label">Center Code</label>
						 <select name="center_code" id="select" class="form-control" required>
                                <option value="">Center Code</option>
                               <?php
									$con = OpenCon();
									$res = mysqli_query($con, "SELECT id, center_code FROM admin_center" );
									mysqli_close($con);
									while ($ro = mysqli_fetch_array($res)){
										$center_code = $ro['center_code'];
										echo '<option value=" ' . $center_code . ' "> ' .  $center_code  . ' </option>';
										
									}
								?>
                              </select>
					    <br> </div></div>
						<div class="card-header"><strong>Sales Employee Bank Details</strong></div>
						<div class="card-body card-block">						
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Name</label>
							<input type="text" id="city" name="name" placeholder="Name" class="form-control" required></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Employee Id</label>
							<input type="text" id="city" name="employee_id" placeholder="Employee Id" class="form-control" required ></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Bank Name</label>
							<input type="text" id="city" name="bank_name" placeholder="Enter Bank Name" class="form-control" required></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Account Number</label>
							<input type="text" id="postal-code" name="account_number" placeholder="Enter Account Number" class="form-control" required></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">IFSC</label>
							<input type="text" id="city" name="ifsc_code" placeholder="Enter IFSC Code" class="form-control" required ></div>
                          </div>
						  <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Branch</label>
							<input type="text" id="city" name="branch" placeholder="Enter Branch" class="form-control" required></div>
                          </div>
                          
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Cancelled Cheque</label>
							<input type="file" id="city" name="cancel_check"  class="form-control" required></div>
                          </div>
						   
                       
						
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">PAN Card</label>
							<input type="file" id="city" name="pan_card"  class="form-control" required></div>
                          </div>
						   
                        </div>
						
						  <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</div>
						</form>
                    </div>
                  </div>
					  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
				<input type="text" id="input2" onkeyup="view2()" placeholder="Search By Center Code..">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Center Employee Details</strong>
                        </div>
                        <div class="card-body">
				  <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_bank_employees_delete.php" id="myForm">
                  <table id="table2" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>Name</th>
                        <th>Center Name</th>
                        <th>Center Code</th>
						<th>Employee Id</th>
						<th>Bank Name</th>
						<th>Account Number</th>
						<th>IFSC</th>
						<th>Branch</th>
						<th>Cancelled Cheque</th>
						<th>PAN Card</th>
						<th>Edit</th>
						<th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
								$con = OpenCon();
								$query = "select * from admin_bank_employees";
								$resultdata = mysqli_query($con,$query);
								mysqli_close($con);
								while($rowdata=mysqli_fetch_array($resultdata)){
							?>
                              <tr>
								<td><?php echo $rowdata['name']; ?></td>
								<td><?php echo $rowdata['center_name']; ?></td>
								<td><?php echo $rowdata['center_code']; ?></td>
								<td><?php echo $rowdata['employee_id']; ?></td>
								<td><?php echo $rowdata['bank_name']; ?></td>
								<td><?php echo $rowdata['account_number']; ?></td>
								<td><?php echo $rowdata['ifsc_code']; ?></td>
								<td><?php echo $rowdata['branch']; ?></td>
								<td> <a href="upload/<?php echo $rowdata['cancel_check']; ?>" /> <?php echo $rowdata['cancel_check']; ?></td>
								<td> <a href="upload/<?php echo $rowdata['pan_card']; ?>" /> <?php echo $rowdata['pan_card']; ?></td>
								<td><a href="admin_bank_employees_edit.php?id=<?php echo $rowdata['id']; ?>"> Edit </a> </td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $rowdata['id']; ?>"></td>
								</tr>
							<?php } ?>
                     
                    </tbody>
                  </table>
                   </div>
					<br>
				  <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form> </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

	<script>
					function view2() {
					  // Declare variables 
					  var input, filter, table, tr, td, i;
					  input = document.getElementById("input2");
					  filter = input.value.toUpperCase();
					  table = document.getElementById("table2");
					  tr = table.getElementsByTagName("tr");

					  // Loop through all table rows, and hide those who don't match the search query
					  for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[2];
						if (td) {
						  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						  } else {
							tr[i].style.display = "none";
						  }
						} 
					  }
					}
</script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	
	<script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.php5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
	
	<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
 <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
	 
</body>
</html>
