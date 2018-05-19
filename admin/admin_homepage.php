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
                            <li><a href="#">Home Page Content</a></li>
                            
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
                      <div class="card-header"><strong>Slider Content</strong></div>
					  <form name="forms" method="post" enctype="multipart/form-data" action="admin_homepage_action.php" id="myForm">
                      <div class="card-body card-block">
                      
                     <!--   <div class="form-group "><label for="company" class=" form-control-label">Slider</label>
				                     <select name="slide_no" id="select" class="form-control col-6" required>
                                <option value="">Select Slide Number</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                              </select>
					              </div> -->
                          <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading 1</label>
                                <input type="text" id="city" name="heading1" placeholder="Heading 1" class="form-control" required=""></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Heading 2</label>
                                <input type="text" id="postal-code" name="heading2" placeholder="Heading 2" class="form-control" required=""></div>
                          </div>

                        </div>
                         <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading 3</label>
                                <input type="text" id="city" name="heading3" placeholder="Heading 3" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Slider Image</label>
                                <input type="file" id="postal-code" name="slider_image" placeholder="Sector/Ward" class="form-control"></div>
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


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Slider Content</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_homepage_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
						<th>Heading 3</th>
						<th>Image</th>
						<th>Select</th>
						
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								include 'dbconnection.php';
								$con = OpenCon();
								$query = "select * from homepage";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								while($row=mysqli_fetch_array($result)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['heading1']; ?></td>
								<td><?php echo $row['heading2']; ?></td>
								<td><?php echo $row['heading3']; ?></td>
								<td><a href="websiteupload/<?php echo $row['slider_image']; ?>" target="_blank" /> <?php echo $row['slider_image']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
						
                     
                    </tbody>
                  </table>
				    </div>
					<br>
				  <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
					</div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
		<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                    
                       <div class="card-header"><strong>Welcome Content</strong></div> 
						<div class="card-body card-block">
                        <form name="forms" method="post" enctype="multipart/form-data" action="admin_welcome_action.php" id="myForm">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Heading</label>
							<input type="text" id="city" name="heading" placeholder="Heading" class="form-control" required></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Content</label>
							<input type="text" id="postal-code" name="content" placeholder="Content" class="form-control"required></div>
                          </div>
                        </div>
					          <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                      <br>
                    </div>
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Welcome Content</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_welcome_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Heading</th>
                        <th>Content</th>
						<th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								$con = OpenCon();
								$query_welcome = "select * from welcome";
								$result_welcome = mysqli_query($con,$query_welcome);
								mysqli_close($con);
								while($row_welcome=mysqli_fetch_array($result_welcome)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row_welcome['id']; ?></td>
								<td><?php echo $row_welcome['heading']; ?></td>
								<td><?php echo $row_welcome['content']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row_welcome['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
						
                     
                    </tbody>
                  </table>
				    </div>
					<br>
				  <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
					</div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
		<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                    
                       <div class="card-header"><strong>Testimonial</strong></div> 
						<div class="card-body card-block">
                        <form name="forms" method="post" enctype="multipart/form-data" action="admin_testimonial_action.php" id="myForm">
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Content</label>
							<input type="text" id="city" name="content" placeholder="Content" class="form-control"></div>
                          </div>
                          <div class="col-6">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Name</label>
							<input type="text" id="postal-code" name="name" placeholder="Name" class="form-control"></div>
                          </div>
                        </div>
						<div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">Designation</label>
							<input type="text" id="city" name="designation" placeholder="Designation" class="form-control"></div>
                          </div>
                          
                        </div>
					          <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
						</form>
                      <br>
                    </div>
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
			  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Testimonials</strong>
                        </div>
                        <div class="card-body">
				   <div class="scroltable_h">
				   <form name="forms" method="post" enctype="multipart/form-data" action="admin_testimonial_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Content</th>
						<th>Name</th>
                        <th>Designation</th>
						<th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								$con = OpenCon();
								$query_testimonial = "select * from testimonial";
								$result_testimonial = mysqli_query($con,$query_testimonial);
								mysqli_close($con);
								while($row_testimonial=mysqli_fetch_array($result_testimonial)){
								
							?>
                              <tr>
								<td><?php echo $row_testimonial['id']; ?></td>
								<td><?php echo $row_testimonial['content']; ?></td>
								<td><?php echo $row_testimonial['name']; ?></td>
								<td><?php echo $row_testimonial['designation']; ?></td>
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row_testimonial['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
						
                     
                    </tbody>
                  </table>
				    </div>
					<br>
				  <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
				  </form>
					</div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
        
			 
          <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                  <div class="col-lg-12">
                    <div class="card">
                    
                       <div class="card-header"><strong>Latest News</strong></div> 
            <div class="card-body card-block">
                        <form name="forms" method="post" enctype="multipart/form-data" action="admin_news_action.php" id="myForm">
            <div class="row form-group">
                          <div class="col-6">
                            <div class="form-group"><label for="city" class=" form-control-label">News</label>
              <input type="text" id="city" name="news" placeholder="News" class="form-control"></div>
                          </div>
                        
                        </div>
           
                    <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
            </form>
                      <br>
                    </div>
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Latest News</strong>
                        </div>
                        <div class="card-body">
           <div class="scroltable_h">
           <form name="forms" method="post" enctype="multipart/form-data" action="admin_news_delete.php" id="myForm">
                  <table  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>News</th>
                       <th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                              <?php 
								$con = OpenCon();
								$query_news = "select * from news";
								$result_news = mysqli_query($con,$query_news);
								mysqli_close($con);
								while($row_news=mysqli_fetch_array($result_news)){
								
								
								
									
							?>
                              <tr>
								<td><?php echo $row_news['id']; ?></td>
								<td><?php echo $row_news['news']; ?></td>
								
								<td><input type="checkbox" name="checkbox[]" value="<?php echo $row_news['id']; ?>"></td>
								</tr> 
								<?php  }   ?>
            
                     
                    </tbody>
                  </table>
            </div>
          <br>
          <button type="submit" name="delete" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Delete
                        </button>
          </form>
          </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
    <!-- Right Panel -->


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


</body>
</html>
