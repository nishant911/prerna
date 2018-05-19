
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<style type="text/css">
.newuser
{
	color: white;
	font-family: sans-serif;
	text-decoration: none;

}	
.newuser:hover {

	color: blue;
}


</style>
<!-- //css files -->
</head>
<body>

	<?php
		if( !empty( $_REQUEST['Message'] ) )
		{
			$msg = $_REQUEST['Message'];
    //echo sprintf( '<p>%s</p>', $_REQUEST['Message'] );
    echo '<script> alert("Invalid UserName or Password"); </script>';
		}
	?>
	
	<h1>Login Here</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form name="forms" method="post" enctype="multipart/form-data"  action="login_action.php">	
			<div class="w3l-user">
				<label class="head">Username<span class="w3l-star"> * </span></label>
				<input type="text" name="username" placeholder="Username" required="">
			</div>
			<br>
			<div class="w3l-user">
				<label class="head">Password<span class="w3l-star"> * </span></label>
				<input type="password" name="password" placeholder="Password" required="">
			</div>
			
			<div class="clear"></div>
		<!--	<a href="register.php" class="newuser">New User</a> -->
			<div class="clear"></div>
			<div class="w3l-rem">
				<br><br>
				<div class="btn">
					<input type="submit" name="submit" value="Login"/>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
	<footer></a>
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>