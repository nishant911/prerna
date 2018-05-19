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
	 <style>


/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 20px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 20%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content { 
     
    padding: 5px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
.row2
{
   align-items: center;
   margin-left:18%;
}
.row1
{
   align-items: center;
   margin-left:33%;
}
.button1 {
    background-color: #146eb4; /* Green */
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    font-weight: bold;
    margin: 0px 2px 0px 0%;
    cursor: pointer;

}
.button4 
{
  border-radius: 20px;
  width: 80%;
    height: auto;
    margin-bottom: 20px;
}
.button2 {
    background-color: #85caff; /* Green */
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 0px;  
    cursor: pointer;

}
.button5 
{
  border-radius: 11px;
  width: 60%;
    height: auto;
    margin-bottom: 1px;
}

    .gallery-grid{

}
.grid {
    position: relative;
    clear: both;
    margin: 0 auto;
    max-width: 1000px;
    list-style: none;
    text-align: center;
    }
  .grid figure {
    position: relative;
    margin: 10px 0;
    height: auto;
    text-align: center;
    cursor: pointer;
  }
  figure.effect-apollo img {
    opacity: 0.95;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale3d(1.05,1.05,1);
    transform: scale3d(1.05,1.05,1);
}

.grid figure img {
    position: relative;
    display: block;
    width: 100%;
    opacity: 0.8;
}
.g_img {
    width: 250px !important;
    height: 143px !important;
}
</style>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>

        var modal = document.getElementById('popup');

        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "block";
        }
        }


    </script> -->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include("header.php"); ?>
      

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
				<?php
            
						$con = OpenCon();
						$query = "select * from register where sponsor_id ='$_SESSION[member_id]' ";
						$result = mysqli_query($con, $query);
						$num = mysqli_num_rows($result);
						mysqli_close($con);
				?>		
                  <h3><?php echo $num; ?></h3>
                  <p>My Direct</p>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <?php
					$con = OpenCon();
            $query = "SELECT r7.id, r7.sponsor_id, r7.sponsor_name, r7.member_id, r7.member_name, r7.doj 
FROM register r7
INNER JOIN
(
SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name, r6.doj 
FROM register r6
INNER JOIN
(
SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id
) rr6 ON r6.sponsor_id=rr6.member_id
) rr7 ON r7.sponsor_id=rr7.member_id

UNION

SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name, r6.doj 
FROM register r6
INNER JOIN
(
SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id
) rr6 ON r6.sponsor_id=rr6.member_id

UNION

SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id

UNION

SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id

UNION

SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id


UNION

(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
)

UNION

SELECT id,sponsor_id, sponsor_name, member_id, member_name, doj 
FROM register
where sponsor_id='$_SESSION[member_id]'";

            $result = mysqli_query($con, $query);
            $num = mysqli_num_rows($result);
			mysqli_close($con);
        ?>    
                  <h3><?php echo $num; ?></h3>
                  <p>My Downline</p>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <?php
					$con = OpenCon();
                    $query_wallet = "SELECT SUM(credit) as value_sum FROM wallet where sponsor_id='$_SESSION[member_id]'";
                    $result_wallet = mysqli_query($con, $query_wallet);
                    $row_wallet = mysqli_fetch_array($result_wallet);
					mysqli_close($con);
					
					$con = OpenCon();
                     $query_business = "select sum(epin_value) as business_value from epin_create where epin='$_SESSION[member_id]' ";
                    $result_business = mysqli_query($con, $query_business);
                    $row_business = mysqli_fetch_array($result_business);
                     $query_business_rep = "select sum(epin_value) as business_value_rep from epin_create where member_id='$_SESSION[member_id]' and epin_type='Repurchase'";
                     $result_business_rep = mysqli_query($con, $query_business_rep);
                    $row_business_rep = mysqli_fetch_array($result_business_rep);
					         mysqli_close($con);

                  ?>
                  
                  <h3><?php  echo $row_business['business_value'] + $row_business_rep['business_value_rep']; ?></h3>
                  <p>My Business</p>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php
				  $con = OpenCon();
					$query_downline_buisness = "select sum(bb.epin_value) as sum_buisness from 
(SELECT r7.id, r7.sponsor_id, r7.sponsor_name, r7.member_id, r7.member_name, r7.doj 
FROM register r7
INNER JOIN
(
SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name, r6.doj 
FROM register r6
INNER JOIN
(
SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id
) rr6 ON r6.sponsor_id=rr6.member_id
) rr7 ON r7.sponsor_id=rr7.member_id

UNION

SELECT r6.id, r6.sponsor_id, r6.sponsor_name, r6.member_id, r6.member_name, r6.doj 
FROM register r6
INNER JOIN
(
SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id
) rr6 ON r6.sponsor_id=rr6.member_id

UNION

SELECT r5.id, r5.sponsor_id, r5.sponsor_name, r5.member_id, r5.member_name, r5.doj 
FROM register r5
INNER JOIN
(
SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id
) rr5 ON r5.sponsor_id=rr5.member_id

UNION

SELECT r4.id, r4.sponsor_id, r4.sponsor_name, r4.member_id, r4.member_name, r4.doj 
FROM register r4
INNER JOIN
(
SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id
) rr4 ON r4.sponsor_id=rr4.member_id

UNION

SELECT r3.id, r3.sponsor_id, r3.sponsor_name, r3.member_id, r3.member_name, r3.doj 
FROM register r3
INNER JOIN
(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
) rr3 ON r3.sponsor_id=rr3.member_id


UNION

(SELECT r1.id, r1.sponsor_id, r1.sponsor_name, r1.member_id, r1.member_name, r1.doj 
FROM register r1
INNER JOIN
register r2
ON r1.sponsor_id=r2.member_id
where r2.sponsor_id='$_SESSION[member_id]'
)

UNION

SELECT id,sponsor_id, sponsor_name, member_id, member_name, doj 
FROM register
where sponsor_id='$_SESSION[member_id]') aa
join epin_create bb 
on aa.member_id = bb.epin";

$result_downline_buisness = mysqli_query($con, $query_downline_buisness);

$row_downline_buisness = mysqli_fetch_array($result_downline_buisness);
 $query_business_d = "select sum(epin_value) as business_value_d from epin_create where member_id='$_SESSION[member_id]' and epin_type='Repurchase'";
                    $result_business_d = mysqli_query($con, $query_business_d);
                    $row_business_d = mysqli_fetch_array($result_business_d);
                    mysqli_close($con);

				  ?>
                  <h3><?php  echo $row_downline_buisness['sum_buisness'] + $row_business_d['business_value_d']; ?></h3>
                  <p>Downline Business</p>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <?php 
					$con = OpenCon();
                      $query_rank = "select * from level_name where member_id='$_SESSION[member_id]'";
                      $result_rank = mysqli_query($con, $query_rank);
                      $row_rank = mysqli_fetch_array($result_rank);
					  mysqli_close($con);

                  ?>
                  <h3><?php echo $row_rank['level_name']; ?></h3>
                  <p>My Rank</p>
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>0</h3>
                  <p>Rewards Achievment</p>
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
             
                  <h3><?php  echo $row_wallet['value_sum']; ?></h3>
                  <p>Total Earning</p>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
               <?php   
					$con = OpenCon();
                  $query_debit = "SELECT SUM(debit) as value_debit FROM wallet where sponsor_id='$_SESSION[member_id]'";
				          $result_debit = mysqli_query($con, $query_debit);
                  $row_debit = mysqli_fetch_array($result_debit);
				  mysqli_close($con);
				
				          $remaining = $row_wallet['value_sum'] - $row_debit['value_debit'];

                ?>
                  <h3><?php echo $remaining; ?></h3>
                  <p>My Wallet</p>
                </div>
              
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
		 
		  
          <!-- Main row -->
          
           <div class="row">
            <div class="row2">
      <button class="button1 button4">Prelaunching Offer HOT DEAL</button>
      <div class="row">
            
         
                      <div class="column">
                        <div class="content1">
                          <img src="../images/ring.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3></h3>
                          <p><h2>Three Level Members Achieve Gold Ring</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/frieze.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3></h3>
                          <p><h2>Forth Level Members Achieve Double Door Frieze</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/tour.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3></h3>
                          <p><h2>Fifth Level Members Achieve Foriegn Tour</h2></p>
                        </div>
                      </div>
                     
                    <!-- END GRID -->
                    </div>
      </div>
            <div class="row1">
             <button class="button2 button5">AWARDS & ACHIEVEMENTS</button>
           </div>
            <h3 style="text-align: center;font-weight: bold;"></h3>
         
                      <div class="column">
                        <div class="content1">
                          <img src="../images/notepad.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3>2nd Level(1 Week)</h3>
                          <p><h2>Notepad</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/laptop.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3>3rd Level(30 Days)</h3>
                          <p><h2>Laptop</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/bike.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3>4th Level(60 Days)</h3>
                          <p><h2>Bike</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/car.jpg" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3>5th Level(6th Month)</h3>
                          <p><h2>Car Fund</h2></p>
                        </div>
                      </div>
                       <div class="column">
                        <div class="content1">
                          <img src="../images/house.png" alt="Mountains" style="width:200px !important;height:200px !important;">
                          <h3>6th Level(1 Year)</h3>
                          <p><h2>House Fund</h2></p>
                        </div>
                      </div>
                    <!-- END GRID -->
                    </div>
        </section><!-- /.content -->
         
       <div class="row">
            <!-- Left col -->
            <section class="col-lg-4 connectedSortable">
             <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Frenchies List</h3>
                  <div class="box-tools pull-right">
                    
                  </div>
                </div><!-- /.box-header -->
              <div class="box-body">
                  <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height:300px">
                    <?php 
						$con = OpenCon();
                        $query_epin = "select distinct(member_id) from epin_create";
                        $result_epin = mysqli_query($con, $query_epin);
                        $num_epin = mysqli_num_rows($result_epin);
						mysqli_close($con);


                     ?>
                  <ul class="todo-list">
                    <?php   for($i=0; $i<=$num_epin; $i++) { 
                       $row_epin = mysqli_fetch_array($result_epin);
							$con = OpenCon();
                            $query_register = "select * from register where member_id='$row_epin[member_id]'";
                            $result_register = mysqli_query($con, $query_register);
                            mysqli_close($con);
                            while($row_register = mysqli_fetch_array($result_register)) {
                     ?>
                   <li>
                      
                      <span class="text"> &#x2022; &nbsp; <?php echo $row_register['member_name']; ?> &nbsp; &nbsp; <?php echo $row_register['city']; ?> &nbsp; &nbsp; <?php echo $row_register['state']; ?> </span>
                    </li>
                   
                       <?php } } ?>
                  </ul>

                
              </marquee>
              </div><!-- /.box -->

              
            </section><!-- /.Left col -->
             <!-- Left col -->

      <!-- Left col -->
            <section class="col-lg-4 connectedSortable">
             <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Total Withdraw</h3>
                  <div class="box-tools pull-right">
                    
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height:300px">
                  <ul class="todo-list">
                      <?php 
						$con = OpenCon();
                        $query_withdraw = "select * from withdraw_report";
                        $result_withdraw = mysqli_query($con, $query_withdraw);
						 mysqli_close($con);
                       while($row_withdraw = mysqli_fetch_array($result_withdraw)) {  
                     ?>
                   <li>
                      
                      <span class="text">&#x2022; &nbsp; <?php echo $row_withdraw['member_id']; ?> &nbsp; &nbsp; <?php echo $row_withdraw['member_name']; ?>  &nbsp; &nbsp; <?php echo $row_withdraw['net_amount']; ?></span>
                    </li>
                   
                   <?php } ?>
                  </ul>
              </marquee>
              </div><!-- /.box -->

             
            </section><!-- /.Left col -->
            <section class="col-lg-4 connectedSortable">
                <div class="box box-primary">
               <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Plan</h3>
                  <div class="box-tools pull-right">
                    
                  </div>
                </div><!-- /.box-header -->
                                        
                   
               <div class="container" style="margin:3% 0% 0% 6% !important ; height: auto;">
         
                   <div class="gallery-grids">  
          
                        <div class="col-md-2 col-sm-2 gallery-grid">
                        <div class="grid">
                            <figure class="effect-apollo">
              
                                <a class="example-image-link" href="../images/p1.jpg" target="_blank" data-lightbox="example-set" >
                                    <img  class="g_img" src="../images/p1.jpg" alt="" />
                                </a>
                
                  
                            </figure>
                             <figure class="effect-apollo">
              
                                <a class="example-image-link" href="../images/p2.jpg" target="_blank"  data-lightbox="example-set" >
                                    <img  class="g_img" src="../images/p2.jpg" alt="" />
                                </a>
                
                  
                            </figure>
                        </div>
                    </div>
                        
                    <div class="clearfix"> </div>
                    <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>
        </div>
                                 </div>
            </section>
          </div><!-- /.row (main row) -->
      <!-- /.content-wrapper -->
    <!--   <div class="container" id="popup" >
                    
                        <div class="fifteen columns">
                            <div class="sidebar-right"> 
                             
                <br><h5 class="title" Style="margin:20px 0 16px 29px;"> aaaaaaaaaaaaaaaaaaaa </h5>
                                <p Style="margin:20px 0 16px 35px;">
                  aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                </p>
                            </div>
                           <button type="button" class="" style="margin-left:20px;" onclick="document.getElementById('popup').style.display='none'" > Cancel </button>
                        </div>
                           
                                
                        <div class="clear"></div>
                   
         </div> -->
     
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


