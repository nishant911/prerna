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

	<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />     
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />     
<script src="https://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></script>     
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>     
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js" type="text/javascript"></script>     
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" type="text/javascript"></script>     
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>
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
                            columns: [0, 1, 2, 3, 4, 5, 6],
                            format: {
                                header: function (data, columnIdx) {
                                    return data;
                                },
                                body: function (data, column, row) {
                                    // Strip $ from salary column to make it numeric
                                    debugger;
                                    return column === 7 ? "" : data;  
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
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      
      <?php include("header.php"); ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Level Income Reciever
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Level Income Reciever</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Level Income Reciever Details</h3>
                </div><!-- /.box-header -->
				
                <div class="box-body">
                <table class="display dataTable no-footer" border="1"
                            style="width: 100%;" id="tbl_data" role="grid"
                            aria-describedby="tbl_data_info">
                    <thead>
                                <tr
                                    style="background-color: #0f2a76; text-align: center; color: white"
                                    role="row">
                                    <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Serial No.</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">From ID</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                       aria-label="Position: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Name</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Name: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Credit</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Epin Type</th>
                                      <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Date</th>
                                     <th class="sorting_desc" tabindex="0" aria-controls="tbl_data"
                                        rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 32px;" aria-sort="descending">Status</th>
                                </tr>
                            </thead>
                    <tbody>
                    <?php
						$con = OpenCon();
                        $query = "select * from wallet where sponsor_id='$_SESSION[member_id]' and credit != '0' ";
                        $result = mysqli_query($con, $query);
						mysqli_close($con);
                        $i=0;
                        while($row=mysqli_fetch_array($result)){
                       $i++;

                     ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['member_id']; ?></td>
                        <td><?php echo $row['member_name']; ?></td>
                        <td><?php echo $row['credit']; ?></td>
                        <td><?php echo $row['epin_type']; ?></td>
                        <td><?php echo $row['created']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                      </tr>

                      <?php } ?>
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
    </div><!-- ./wrapper -->

   <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
   
	 <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
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

  

   

  </body>
</html>