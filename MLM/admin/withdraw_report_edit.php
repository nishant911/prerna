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
          Withdraw Report Edit
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Query</a></li>
            <li class="active">Withdraw Report Edit</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <?php
				$con = OpenCon();
                  $i = $_GET['id'];
                  $query = "select * from withdraw_report where id='$i'";
                  $result = mysqli_query($con, $query);
				  mysqli_close($con);
                  $row = mysqli_fetch_array($result); 


                ?>
                <!-- form start -->
                <form role="form" name="forms" method="post" enctype="multipart/form-data"  action="withdraw_report_edit_action.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Member ID</label>
                      <input type="text" name="member_id" class="form-control" value="<?php echo $row['member_id']; ?>" placeholder="" readonly="readonly"/>
                      <input type="hidden" name="id" value="<?php echo $i; ?>" />
                    </div>
                     <div class="form-group">
                      <label>Member Name</label>
                      <input type="text" name="member_name" class="form-control" value="<?php echo $row['member_name']; ?>" placeholder="Enter User ID" readonly="readonly"/>
                    </div>
                    <div class="form-group">
                      <label>Total Amount</label>
                      <input type="text" name="total_amount" class="form-control" value="<?php echo $row['total_amount']; ?>" placeholder="" readonly="readonly"/>
                    </div>
                     <div class="form-group">
                      <label>Withdraw Amount</label>
                      <input type="text" name="withdraw_amount" class="form-control" value="<?php echo $row['withdraw_amount']; ?>" placeholder="Enter User ID" readonly="readonly"/>
                    </div>
                    <div class="form-group">
                      <label>Admin Charge</label>
                      <input type="text" name="admin_charge" class="form-control" value="<?php echo $row['admin_charge']; ?>" placeholder="" readonly="readonly"/>
                    </div>
                     <div class="form-group">
                      <label>Net Amount</label>
                      <input type="text" name="net_amount" class="form-control" value="<?php echo $row['net_amount']; ?>" placeholder="Enter User ID" readonly="readonly"/>
                    </div>
                    <div class="form-group">
                      <label>Withdarw Date</label>
                      <input type="text" name="withdraw_date" class="form-control" value="<?php echo $row['withdraw_date']; ?>" placeholder="" readonly="readonly"/>
                    </div>
                     <div class="form-group">
                      <label>Status</label>
      <select id="myDropDown" name="status" class="form-control" required="required">
          <option value="Pending" <?php if($row['status']=='Pending'){ echo "selected='selected'"; } ?> >Pending </option>
          <option value="Paid" <?php if($row['status']=='Paid'){ echo "selected='selected'"; } ?> > Paid </option>
      </select>
                    </div>
                     <div class="form-group">
                      <label>Admin Processed Date</label>
                      <input type="date" name="admin_process_date" class="form-control" value="<?php echo $row['admin_process_date']; ?>" placeholder="" />
                    </div>
                     <div class="form-group">
                      <label>Admin Remark</label>
                      <input type="text" name="admin_remark" class="form-control" value="<?php echo $row['admin_remark']; ?>" placeholder="Enter Remark" />
                    </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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