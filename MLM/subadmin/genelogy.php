
<?php
  session_start();

  if(!isset($_SESSION['member_id']))
{
    
		header("Location:login.php");


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
   
	<style>
		.google-visualization-orgchart-node
		{
			    width: 150px;
                height: 200px;
		}
		.google-visualization-orgchart-connrow-medium
		{
			    height: 30px !important;
                font-size: 4px;
		}
	</style>
  </head>

  <body class="skin-blue">
     <?php include("header.php"); ?>
    <div class="wrapper">
      
      
         

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
      
    
            <div id='chart_div'></div>

     
      </div><!-- /.content-wrapper -->
    
    </div><!-- ./wrapper -->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);
		
		function drawChart() {
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'member_id');
			data.addColumn('string', 'sponsor_id');
			

			data.addRows([
				<?php
				//include 'dbconnection.php';
				$con = OpenCon();
				$session_sponsor_id = $_GET['sess_sponsor_id'];
					//$session_sponsor_id = '91506';
				//declare the SQL statement that will query the database
				$query = "select * from register where sponsor_id='$session_sponsor_id'";
				
				
				$result = mysqli_query($con, $query);
				mysqli_close($con);
				//execute the SQL query and return records
				$output = array();
				$quote='"';					
				$style1='margin-top:50px;margin-left:0px;margin-bottom:15px;width:70px;height:70px';

				while($row = mysqli_fetch_array($result)) {
					// create a temp array to hold the data
					$temp = array();
						 
					// add the data					
					
					$member_id = $row['member_id'];	
					$member_name = $row['member_name'];
					$profile_pic = $row['profile_pic'];
					
					$default = "logoMINI.png";
                    if (empty($profile_pic)) 
					{ 
                     
						$image = "{v:'$member_id', f:'</br>$member_id</br></br>$member_name<div><img style=$quote$style1$quote src=$quote$default$quote /></div>'}";  
					}
                    else
					{  
						$image = "{v:'$member_id', f:'</br>$member_id</br></br>$member_name<div><img style=$quote$style1$quote src=$quote../pic/$profile_pic$quote /></div>'}";
					}
					
		
					$temp[] = $image;
					$temp[] = "'$row[sponsor_id]'";

					// implode the temp array into a comma-separated list and add to the output array
					$output[] = '[' . implode(', ', $temp) . ']';
				}

				// implode the output into a comma-newline separated list and echo
				echo implode(",\n", $output);

				//mysql_close($con);
				?>
			]);

			var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));			
			//chart.draw(data, {allowHtml:true, nodeClass:'maman'});
			chart.draw(data, {allowHtml:true});
			
			
			google.visualization.events.addListener(chart, 'select', selectHandler);
			
			function selectHandler() {
				var selection = chart.getSelection();
				var message = '';
				for (var i = 0; i < selection.length; i++) {
				var item = selection[i];
				if (item.row != null && item.column != null) {
					var str = data.getFormattedValue(item.row, item.column);
					message += str ;
				} else if (item.row != null) {
						var str = data.getFormattedValue(item.row, 0);
						message += str ;
				} else if (item.column != null) {
						var str = data.getFormattedValue(0, item.column);
						message += str ;
				}
			}
			if (message == '') {
					message = 'nothing';
			}
			//alert('You selected ' + message);
			//call page with variable message
			//var res = message.substr(5, 5);
			var result=message.match(/<\/br>(.*)<\/br><\/br>/);
			window.location.href = "genelogy.php?sess_sponsor_id=" + result[1]; 
		}
	}
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