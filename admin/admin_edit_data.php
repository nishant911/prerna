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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" 

href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />     
<link rel="stylesheet" 

href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />     
<Script src="https://code.jquery.com/jquery-1.12.3.js" 

type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js" 
type="text/javascript"></Script>
	
	
</head>
<body>
        <!-- Left Panel -->
   <script type="text/javascript">
       $(document).ready(function () {
            $(document).ready(function () {
                $('table').DataTable({                    
                    dom: 'Blfrtip',
                    buttons: [{
                        text: 'Export To Excel',                       
                        extend: 'excelHtml5',
                        exportOptions: {
                            modifier: {
                                selected: true
                            },
                            columns: [0, 1, 2, 3, 4 ],
                            format: {
                                header: function (data, columnIdx) {
                                    return data;
                                },
                                body: function (data, column, row) {
                                    // Strip $ from salary column to make it numeric
                                    debugger;
                                    return column === 5 ? "" : data;
                                }
                            }
                        },
                        footer: false,
                        customize: function (xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //$('c[r=A1] t', sheet).text( 'Custom text' );
                            //$('row c[r^="C"]', sheet).attr('s', '2');
                        }
                    }]
                });
            });
        });
   
   </script>
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
                        <h1>Edit Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Edit Data</a></li>
                            
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
                      <div class="card-header"><strong>Edit Data</strong></div>
                      <div class="card-body card-block">
						<table id="example" class="display" 

cellspacing="0" width="100%">
    <thead>
        <tr>
			<th>ID</th>
            <th>Register As</th>
            <th>Organization Name</th>
            <th>Person Name</th>
            <th>Specialization</th>
            <th>Working Hours</th>
            <th>Address</th>
			<th>City</th>
			<th>Pincode</th>
			<th>State</th>
			<th>Mobile Number</th>
			<th>Email ID</th>
			<th>Landline Number</th>
			<th>Edit</th>
			<th>Select</th>
        </tr>
    </thead>
    <tbody>
							<?php 
									include 'dbconnection.php';
									$con = OpenCon();
									$query = "select * from register";
									$resu = mysqli_query($con,$query);
									mysqli_close($con);
									while($r=mysqli_fetch_array($resu)){
							?>
                              <tr>
								<td><?php echo $r['id']; ?></td>
								<td><?php echo $r['register_as']; ?></td>
								<td><?php echo $r['organization_name']; ?></td>
								<td><?php echo $r['person_name']; ?></td>
								<td><?php echo $r['specialization']; ?></td>
								<td><?php echo $r['working_hours']; ?></td>
								<td><?php echo $r['address']; ?></td>
								<td><?php echo $r['city']; ?></td>
								<td><?php echo $r['pincode']; ?></td>
								<td><?php echo $r['state']; ?></td>
								<td><?php echo $r['mobile_no']; ?></td>
								<td><?php echo $r['email_id']; ?></td>
								<td><?php echo $r['landline_number']; ?></td>
								<td><a href="admin_edit_data_form.php?id=<?php echo $r['id']; ?>"> Edit </a> </td>
								<td><a href="admin_data_delete.php?id=<?php echo $r['id']; ?>"> Delete </a> </td>
								</tr>
							<?php } ?>
    </tbody>
</table>
						</div>
                    </div>
                  </div>
				
    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>

</body>
</html>
