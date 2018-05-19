

<?php
  session_start();

  if(!isset($_SESSION['member_id']))
{
    
		header("Location:../login.php");

}

?>
<!DOCTYPE html>
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

    <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.3.min.js">  </script>
    
    <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.3.min.js">  </script>
    <script>

        $(document).ready(function(){
          var $pintype = $('select[name=epin_type]'),
            $productname = $('select[name=product_name]');

          $pintype.change(function(){
            var $this = $(this).find(':selected'),
              rel = $this.attr('rel'),
              $set = $productname.find('option.' + rel);

            if ($set.size() < 0) {
              $productname.hide();
              return;
            }

            $productname.show().find('option').hide();

            $set.show().first().prop('selected', true);
          });
        });
    </script>
<script type="text/javascript">
$(document).ready(function()
{
  $("#member").change(function()
  {
    var id = $(this).val();
    var dataString = 'id='+ id;
    $.ajax
    ({
      type: "POST",
      url: "member_name_ajax.php",
      data: dataString,
      cache: false,
      success: function(html)
      {
        $("#mem_name").html(html);
      } 
    });
  });
  
});
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
            Epin Transfer
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Epin Transfer</li>
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
                   <?php 
						$con = OpenCon();
                        $query_epin = "select * from epin_create where member_id='$_SESSION[member_id]' and epin_status='Unused' and epin_type='Registration'";
                        $result_epin = mysqli_query($con, $query_epin);
                        $num_epin = mysqli_num_rows($result_epin);
                        $row_epin = mysqli_fetch_array($result_epin);
						mysqli_close($con);
                      ?>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="forms" method="post" enctype="multipart/form-data"  action="epin_transfer_action.php">
                  <div class="box-body">
                     <div class="form-group">
                      <label>Select Pin Type:</label>
                     <input type="text"  name="epin_type" value="<?php echo $row_epin['epin_type']; ?>" class="form-control" placeholder="" readonly="readonly" />
                    </div>
                    <div class="form-group">
                      <label>Select Product Name:</label>
                       <input type="text"  name="product_name" value="<?php echo $row_epin['product_name']; ?>" class="form-control" placeholder="" readonly="readonly" />
                      
                       <input type="hidden" name="member_id" value="<?php echo $_SESSION['member_id']; ?>" />

                    </div>
                    

                    <div class="form-group">
                      <label>No of Epin Available : :</label>
                      <input type="text" id="quantity" name="epin_available" value="<?php echo $num_epin; ?>" class="form-control" placeholder="" readonly="readonly" />
                    </div>

                    <div class="form-group">
                      <label> Epin value :</label>
                      <input type="text" id="value" name="epin_value" value="1000" class="form-control" placeholder="" readonly="readonly" />
                    </div>

                    <div class="form-group">
                      <label> No of Pin To Transfer :</label>
                      <input type="text" id="transfer" name="epin_transfer" class="form-control" placeholder=""  />
                    </div>

                     <div class="form-group">
                      <label> Transfer to Memeber ID :</label>
                      <input type="text" id="member"  name="transfer_to_member_id" class="form-control" placeholder=""  />
                       
                    </div>

                     <div class="form-group" id="mem_name">
                     

                    </div>

                 

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Transfer</button>
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