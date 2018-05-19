<!DOCTYPE html>
<?php
  session_start();

  if(!isset($_SESSION['member_id']))
{
    
		header("Location:../login.php");


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
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<script type="text/javascript">
	
      function compare(){
      var balance = document.getElementById("balance").value;
      var withdraw = document.getElementById("withdraw").value;
      
	  if(withdraw > balance){
        //alert("Entered Amount is greater than wallet amount");
      }
      else{
       // alert("Hello");
      }

    }
  </script>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      
      <?php include("header.php"); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Withdraw Balance
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Withdraw Balance</li>
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
                <?php
               // include('dbconnection.php');
			   
                $con = OpenCon();
                $member_id = $_SESSION['member_id'];
                //echo $member_id;
                $quer = "select * from register where member_id='$member_id'";
               // echo "helloo";
                $resultr = mysqli_query($con, $quer);
                $rowr = mysqli_fetch_array($resultr);
                $mn = $rowr['member_name'];
                $mi = $rowr['member_id'];

                //echo $mi;
                $query = "SELECT SUM(credit) as value_sum FROM wallet where sponsor_id='$member_id'";
                //echo "hiii";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_array($result);
                $sum = $row['value_sum'];
			
        				$query_debit = "SELECT SUM(debit) as value_debit FROM wallet where sponsor_id='$member_id'";
        				$result_debit = mysqli_query($con, $query_debit);
                $row_debit = mysqli_fetch_array($result_debit);
        				
        				$remaining = $sum - $row_debit['value_debit'];
                  mysqli_close($con);
                //echo "Helloo";

                

              ?>

              <?php
                  if( !empty( $_REQUEST['Message'] ) )
                     {
                        $msg = $_REQUEST['Message'];
                       //echo sprintf( '<p>%s</p>', $_REQUEST['Message'] );
                        echo '<script> alert("Withdraw Balance Is Greater Than Wallet Balance"); </script>';
                    }
                ?>

                <form role="form" name="forms" method="post" enctype="multipart/form-data"  action="withdraw_balance_action.php">
                  <div class="box-body">
                     <div class="form-group">
                      <label>Balance</label>
                      <input type="text" name="balance" id="balance" value="<?php echo $remaining; ?>" class="form-control" placeholder="" readonly=""/>
                      <input name="member_id" type="hidden"  value="<?php  echo $_SESSION['member_id']; ?>" />
                    </div>
					<div class="form-group">
                      <label>Withdraw Amount</label>
                      <input type="text" id="withdraw" onchange="compare()" onclick="refresh()" class="form-control" name="withdraw_balance" placeholder=""/>
                    </div>
					
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" id="btn" class="btn btn-primary">Submit</button>
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