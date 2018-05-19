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
           Product Details
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Product Status</a></li>
            <li class="active">Product Details</li>
          </ol>
        </section>

     <!--   
        <section class="content">
          <div class="row">
            
            <div class="col-md-11">
             
              <div class="box box-primary">
                <div class="box-header">
                  
                </div>
                
                <form role="form" name="forms" method="post" enctype="multipart/form-data"  action="product_installation_action.php">
                  <div class="box-body">
                     <div class="form-group">
                      <label>Name Of Installer</label>
                      <input type="text" name="name_of_installer" class="form-control" placeholder="Enter Name Of Installer" required="required" />
                      <input type="hidden"  name="member_id" value="<?php echo $_SESSION['member_id']; ?>" />
                    </div>
                    <div class="form-group">
                      <label>Date and Time</label>
                      <input type="text" name="time" class="form-control" id="date" placeholder="Enter Date and Time" required="required" />
                    </div>
                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="text" name="mobile_no" pattern="^\d{10}$" class="form-control" placeholder="Enter Mobile Number" required="required" maxlenght="13" />
                    </div>
           <div class="form-group">
                      <label>Device ID</label>
                      <input type="text" name="device_id" class="form-control" placeholder="Enter Device ID" required="required" />
                    </div>
                    
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

            


            </div>

            
          </div> 
           

        </section>   -->
        <section class="content">
          <div class="row">
            <div class="col-xs-11">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Product Installation Details</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S No.</th>
                        <th>App Username</th>
                        <th>Name Of Installer</th>
                        <th>Time</th>
                        <th>Mobile Number</th>
                        <th>Device ID</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
						$con = OpenCon();
                        $member_id = $_POST['member_id'];
                        $query = "select * from product where member_id='$member_id'";
                        $result = mysqli_query($con, $query);
						mysqli_close($con);
                        while($row=mysqli_fetch_array($result)){

                     ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['app_username']; ?></td>
                        <td><?php echo $row['name_of_installer']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['mobile_no']; ?></td>
                        <td><?php echo $row['device_id']; ?></td>
                      </tr>

                      <?php } ?>
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>


      </div><!-- /.content-wrapper -->

    
    </div><!-- ./wrapper -->

    <script type="text/javascript">
  document.getElementById('date').value = Date();
</script>
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