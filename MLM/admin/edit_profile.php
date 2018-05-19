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
            Edit profile
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Edit profile</li>
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
                <form role="form" name="forms" method="post" enctype="multipart/form-data"  action="edit_profile_action.php">
				
				<?php
						$con = OpenCon();
						$member_id = $_POST['member_id'];
						$query = "select * from register where member_id='$member_id'";
						$result = mysqli_query($con, $query);
						$num = mysqli_num_rows($result);
						mysqli_close($con);
						$row = mysqli_fetch_array($result);

					?>
									
                  <div class="box-body">
                     <div class="form-group">
                      <label>Member UID</label>
                      <input type="text" class="form-control" value="<?php echo $row['member_id']; ?>" name="member_id" placeholder="Enter Member ID"  />
					  <input type="hidden" name="member_id" value="<?php echo $row['member_id']; ?>" />
                    </div>
					<div class="form-group">
                      <label>Member Name</label>
                      <input type="text" class="form-control" value="<?php echo $row['member_name']; ?>" name="member_name"  placeholder="Enter ..."  />
                    </div>
					<div class="form-group">
                      <label>Sponsor ID</label>
                      <input type="text" class="form-control" name="sponsor_id" value="<?php echo $row['sponsor_id']; ?>"   placeholder="Enter Introduer ID " />
                    </div>
					<div class="form-group">
                      <label>Sponsor Name</label>
                      <input type="text" class="form-control" name="sponsor_name" value="<?php echo $row['sponsor_name']; ?>" placeholder="Enter Introduer Name" />
                    </div>
				<!--	<div class="form-group">
                      <label>Upliner ID</label>
                      <input type="text" class="form-control" value=""  placeholder="Enter ..." readonly />
                    </div>
					<div class="form-group">
                      <label>Upliner Name</label>
                      <input type="text" class="form-control" value=""  placeholder="Enter ..." readonly />
                    </div>  -->
					<div class="form-group">
                      <label>D.O.J</label>
                      <input type="date" class="form-control" name="doj" value="<?php echo $row['doj']; ?>"  placeholder="Enter ..."  />
                    </div>
					
					
					<div class="form-group">
					 <label>Gender</label>
                      <div class="radio">
					 <label>
                          <input type="radio" name="gender" value="Male" <?php echo ($row['gender']=='Male')?'checked':'' ?>  id="optionsRadios1" value="option1" checked>
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="gender" value="Female" <?php echo ($row['gender']=='Female')?'checked':'' ?> id="optionsRadios2" 
						 >
                          Female
                        </label>
                      </div>
                    </div>
					<div class="form-group">
                      <label>Father Name</label>
                      <input type="text" class="form-control" name="fathers_name" value="<?php echo $row['fathers_name']; ?>" placeholder="Enter Fathers Name..."/>
                    </div>
					<div class="form-group">
                      <label>D.O.B</label>
                      <input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control" />
                    </div>
					<div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control"  name="address" value="<?php echo $row['address']; ?>" placeholder="Enter Address..."/>
                    </div>
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" value="<?php echo $row['city']; ?>" name="city" placeholder="Enter City..."/>
                    </div>
					<div class="form-group">
                      <label>District</label>
                      <input type="text" class="form-control" value="<?php echo $row['district']; ?>" name="district" placeholder="Enter District..."/>
                    </div>
					
					<div class="form-group">
					<label>State</label>
                      <select class="form-control" name="state">
                        <option value="ANDAMAN & NICOBAR ISLANDS" <?php if($row['state']=='ANDAMAN & NICOBAR ISLANDS'){ echo "selected='selected'"; } ?> >ANDAMAN & NICOBAR ISLANDS</option>
						<option value="ANDHRA PRADESH" <?php if($row['state']=='ANDHRA PRADESH'){ echo "selected='selected'"; } ?> >ANDHRA PRADESH</option>
						<option value="ARUNACHAL PRADESH" <?php if($row['state']=='ARUNACHAL PRADESH'){ echo "selected='selected'"; } ?> >ARUNACHAL PRADESH</option>
						<option value="ASSAM" <?php if($row['state']=='ASSAM'){ echo "selected='selected'"; } ?> >ASSAM</option>
						 <option value="BIHAR" <?php if($row['state']=='BIHAR'){ echo "selected='selected'"; } ?> >BIHAR</option>
						<option value="CHANDIGARH" <?php if($row['state']=='CHANDIGARH'){ echo "selected='selected'"; } ?> >CHANDIGARH</option>
						<option value="CHHATTISGARH" <?php if($row['state']=='CHHATTISGARH'){ echo "selected='selected'"; } ?> >CHHATTISGARH</option>
						<option value="DADRA & NAGAR HAVELI" <?php if($row['state']=='DADRA & NAGAR HAVELI'){ echo "selected='selected'"; } ?> >DADRA & NAGAR HAVELI</option>
						<option value="DAMAN & DIU" <?php if($row['state']=='DAMAN & DIU'){ echo "selected='selected'"; } ?> >DAMAN & DIU</option>
						<option value="DELHI" <?php if($row['state']=='DELHI'){ echo "selected='selected'"; } ?> >DELHI</option>
						<option value="GOA" <?php if($row['state']=='GOA'){ echo "selected='selected'"; } ?> >GOA</option>
						<option value="GUJARAT" <?php if($row['state']=='GUJARAT'){ echo "selected='selected'"; } ?> >GUJARAT</option>
						<option value="HARYANA" <?php if($row['state']=='HARYANA'){ echo "selected='selected'"; } ?> >HARYANA</option>
						<option value="HIMACHAL PRADESH" <?php if($row['state']=='HIMACHAL PRADESH'){ echo "selected='selected'"; } ?> >HIMACHAL PRADESH</option>
						<option value="JAMMU & KASHMIR" <?php if($row['state']=='JAMMU & KASHMIR'){ echo "selected='selected'"; } ?> >JAMMU & KASHMIR</option>
						<option value="JHARKHAND" <?php if($row['state']=='JHARKHAND'){ echo "selected='selected'"; } ?> >JHARKHAND</option>
						<option value="KARNATAKA" <?php if($row['state']=='KARNATAKA'){ echo "selected='selected'"; } ?> >KARNATAKA</option>
						<option value="KERALA" <?php if($row['state']=='KERALA'){ echo "selected='selected'"; } ?> >KERALA</option>
						 <option value="LAKSHADWEEP" <?php if($row['state']=='LAKSHADWEEP'){ echo "selected='selected'"; } ?> >LAKSHADWEEP</option>
						 <option value="MADHYA PRADESH" <?php if($row['state']=='MADHYA PRADESH'){ echo "selected='selected'"; } ?> >MADHYA PRADESH</option>
						<option value="MAHARASHTRA" <?php if($row['state']=='MAHARASHTRA'){ echo "selected='selected'"; } ?> >MAHARASHTRA</option>
						<option value="MANIPUR" <?php if($row['state']=='MANIPUR'){ echo "selected='selected'"; } ?> >MANIPUR</option>
						<option value="MEGHALAYA" <?php if($row['state']=='MEGHALAYA'){ echo "selected='selected'"; } ?> >MEGHALAYA</option>
						<option value="MIZORAM" <?php if($row['state']=='MIZORAM'){ echo "selected='selected'"; } ?> >MIZORAM</option>
						<option value="NAGALAND" <?php if($row['state']=='NAGALAND'){ echo "selected='selected'"; } ?> >NAGALAND</option>
						<option value="ORISSA" <?php if($row['state']=='ORISSA'){ echo "selected='selected'"; } ?> >ORISSA</option>
						<option value="PONDICHERRY" <?php if($row['state']=='PONDICHERRY'){ echo "selected='selected'"; } ?> >PONDICHERRY</option>
						<option value="PUNJAB" <?php if($row['state']=='PUNJAB'){ echo "selected='selected'"; } ?> >PUNJAB</option>
						<option value="RAJASTHAN" <?php if($row['state']=='RAJASTHAN'){ echo "selected='selected'"; } ?> >RAJASTHAN</option>
						<option value="SIKKIM" <?php if($row['state']=='SIKKIM'){ echo "selected='selected'"; } ?> >SIKKIM</option>
						 <option value="TAMIL NADU" <?php if($row['state']=='TAMIL NADU'){ echo "selected='selected'"; } ?> >TAMIL NADU</option>
						<option value="TELANGANA" <?php if($row['state']=='TELANGANA'){ echo "selected='selected'"; } ?> >TELANGANA</option>
					<option value="TRIPURA" <?php if($row['state']=='TRIPURA'){ echo "selected='selected'"; } ?> >TRIPURA</option>
					<option value="UTTAR PRADESH" <?php if($row['state']=='UTTAR PRADESH'){ echo "selected='selected'"; } ?> >UTTAR PRADESH</option>
					<option value="UTTARAKHAND" <?php if($row['state']=='UTTARAKHAND'){ echo "selected='selected'"; } ?> >UTTARAKHAND</option>
					<option value="WEST BENGAL" <?php if($row['state']=='WEST BENGAL'){ echo "selected='selected'"; } ?> >WEST BENGAL</option>  							 
                      </select>
					 </div>
           <div class="form-group">
                      <label>Zip Code</label>
                      <input type="text" class="form-control" value="<?php echo $row['pincode']; ?>" name="pincode" placeholder="Enter Code..."/>
                    </div>
					<div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" name="country" placeholder="" value="<?php echo $row['country']; ?>">
                    </div>
					<div class="form-group">
                      <label>Mobile No</label>
                      <input type="text" class="form-control" pattern="^\d{10}$" value="<?php echo $row['mobile_number']; ?>" name="mobile_number" placeholder="Enter Mobile Number..." maxlength="13" />
                    </div>
					<div class="form-group">
                      <label>Alternative Mobile No</label>
                      <input type="text" class="form-control" name="alternate_mobile_number" value="<?php echo $row['alternate_mobile_number']; ?> "   placeholder="Enter Alternative Mobile Number..."/>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" id="exampleInputEmail1" placeholder="Enter Email...">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Alternative Email</label>
                      <input type="email" class="form-control" name="alternate_email" value="<?php echo $row['alternate_email']; ?>" id="exampleInputEmail1" placeholder="Enter Alternative Email...">
                    </div>
            <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password" value="<?php echo $row['pin']; ?>" id="exampleInputEmail1" placeholder="Enter Password">
                    </div>        
               <div class="form-group">
                      <label for="exampleInputFile">Upload Profile Picture</label>
                      <input type="file" name="profile_pic"  id="exampleInputFile">
					  <?php if(isset($row['profile_pic']) && $row['profile_pic']!=""){ ?>
												<input type="hidden" name="old_image" value="<?php echo $row['profile_pic']; ?>" />
												<img height="50px" width="50px" src="../pic/<?php echo $row['profile_pic']; ?>" />
									<?php }  ?>
                    </div>
                    
                  </div>

                  <div class="box-footer">
                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
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