<!doctype html>

<?php
	session_start();

	if(!isset($_SESSION['center_code']))
{
		
header("Location:center_login.php");

	}

?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prerna Health Care Services</title>
    
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
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
    font-size: 17px;
}

.container {
    position: relative;
    max-width: 800px;
    margin: 10% 35% auto;
}

.container img {vertical-align: middle; position: relative;}

.container .content {
    position: absolute;
    bottom: 0;
    background:rgba(0, 0, 0, 0);
    color:rgba(0, 0, 0, 0);
    width: 100%;
    padding:10px 10px 70px 30px;
}
.container .content1 {
    position: absolute;
    bottom: 0;
    background:rgba(0, 0, 0, 0);
    color:rgba(0, 0, 0, 0);
    width: 100%;
    padding:0px 10px 50px 5px;
}
.container .content2 .userpic {
    position: absolute;
    top: 16%;
    left: 3%;
    width:65px;
    height:65px;	
}
.card_no
{
	color:black;
	
    margin-left: -25px;
    background: rgba(0, 0, 0, 0);
    letter-spacing: 0.01em;
}
.card_name
{
	color:black;
	font-size:15px;
    margin-left:-10px
    background:rgba(0, 0, 0, 0);
	text-transform: uppercase;
}
@media print
{
.noprint {display:none;}
}

@media screen
{
...
}
</style>
</head>
<body>

  
        
		  <div class="content mt-3 ">
            <div class="animated fadeIn">
                <div class="row">
<?php
								include 'dbconnection.php';
								$con = OpenCon();
								$name = $_POST['name'];
								$card_number = $_POST['card_number'];								 
								$query = "select * from shoppingcart where name='$name' and card_number='$card_number'";
								$result = mysqli_query($con,$query);
								mysqli_close($con);
								$row=mysqli_fetch_array($result);	
								$card_number = $row['card_number'];

						?>
                <div class="col-md-12">
                    <div class="container">
					  <img src="images/cards.jpg" alt="Notebook">
					    
						<div class="content2">
						 <img class="userpic" src="upload/<?php echo $row['upload_pic']; ?>" alt="No Image">
						</div>		
						<div class="content">
						<span class="card_no" ><?php echo $card_number; ?></span>
						
						</div>
						<div class="content1">
						<span class="card_name" ><?php echo $row['name']; ?></span>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-sm noprint " onclick="Print()" style="margin: 10% 46% auto;" >
                          <i class="fa fa-dot-circle-o"></i> Print
                        </button>
                </div>
				
				
            </div><!-- .animated -->
        </div>
		</div>

 
   


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
<script>
function Print() {
    window.print();
}
</script>


</body>
</html>