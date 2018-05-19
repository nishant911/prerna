<!DOCTYPE html>

<?php
	session_start();

	if(!isset($_SESSION['member_id']))
{
		
header("Location:login.php");


	}

?>



<html>
 <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      
      <?php include("header.php"); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Bank Details
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active"> Bank Details</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-11">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <!-- form start -->
                <form id="form" role="form" name="forms" method="post" enctype="multipart/form-data"  action="bank_details_action.php" >
				<?php
						$con = OpenCon();
						$member_id = $_POST['member_id'];
            //echo $member_id;
						$query = "select * from bank_details where member_id='$member_id'";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_array($result);
						mysqli_close($con);
						
			
				?>
				
                  <div class="box-body">
                    <div class="form-group">
                      <label>Account Holder Name</label>
                      <input type="text" class="form-control" name="account_holder_name" value="<?php echo $row['account_holder_name']; ?>" placeholder="Enter Account Holder Name..."/>
                      <input type="hidden"  name="member_id" value="<?php echo $member_id; ?>" />
                    </div>
                     
					
					<div class="form-group">
                      <label>Bank Name</label>
                      <input type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name']; ?>" placeholder="Enter Bank Name..."/>
                    </div>
					<div class="form-group">
                      <label>Account No</label>
                      <input type="text" class="form-control" name="account_number" value="<?php echo $row['account_number']; ?>" placeholder="Enter Account Number..."/>
                    </div>
					<div class="form-group">
                      <label>IFSC</label>
                      <input type="text" class="form-control" name="ifsc_code" value="<?php echo $row['ifsc_code']; ?>" placeholder="Enter IFSC Code..."/>
                    </div>
					<div class="form-group">
                      <label>Branch</label>
                      <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" placeholder="Enter Branch Name..."/>
                    </div>
					
					<div class="form-group">
                      <label>Pan No</label>
                      <input type="text" class="form-control" name="pan_number" value="<?php echo $row['pan_number']; ?>" placeholder="Enter PAN Number..."/>
                    </div>
					<div class="form-group">
                      <label>Aadhar No</label>
                      <input type="text" class="form-control" name="addhar_number" value="<?php echo $row['addhar_number']; ?>" placeholder="Enter Aadhar Number..."/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Cancelled Cheque</label>
                      <input type="file" name="cancel_check"  id="exampleInputFile">
            <?php if(isset($row['cancel_check']) && $row['cancel_check']!=""){ ?>
                        <input type="hidden" name="old_image" value="<?php echo $row['cancel_check']; ?>" />
                        <img height="100px" width="100px" src="../pic/<?php echo $row['cancel_check']; ?>" />
                  <?php } ?>
                      
                    </div>
                    <div class="form-group">
                      <label>Nominee Name</label>
                      <input id="nominee_name" type="text" class="form-control" name="nominee_name" value="<?php echo $row['nominee_name']; ?>"  placeholder="Enter Nominee Name..."/>
                    </div>
          <div class="form-group">
                      <label>Relation With Nominee</label>
                      <input id="relation_with_nominee" type="text" class="form-control" name="relation_with_nominee" value="<?php echo $row['relation_with_nominee']; ?>" placeholder="Relation With Nominee ..."/>
                    </div>
          <div class="form-group">
                      <label>Nominee Mobile No</label>
                      <input type="text" class="form-control" name="nominee_mobile_number" value="<?php echo $row['nominee_mobile_number']; ?>" placeholder="Enter Nominee Mobile Number..."/>
                    </div>
					 
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit"   class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
<br>
<br>
<br>
            


            </div><!--/.col (left) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
    </div><!-- ./wrapper -->

   <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>