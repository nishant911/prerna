<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prerna Health Care Service</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form name="forms" method="post" enctype="multipart/form-data" action="center_register_action.php" ><br><br>
						 <div class="form-group">
                              <select name="center_code" id="select" class="form-control">
							  <option value="0">Center Code</option>
                                <?php	include 'dbconnection.php';
										$con = OpenCon();
										$res = mysqli_query($con, "SELECT center_name,center_code FROM admin_center");
										mysqli_close($con);
										while($ro = mysqli_fetch_array($res))	{
										$center_code = $ro['center_code'];
										echo '<option value="' . $center_code . '"> ' .  $center_code.'</option>';
										}
													
										?>
                              </select>
                            </div>
                         <div class="form-group">
                            <div class="input-group">
                              <input type="text" id="username2" name="username" placeholder="Username" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <input type="email" id="email2" name="email" placeholder="Email" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <input type="password" id="password2" name="password" placeholder="Password" class="form-control">
                              <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            </div>
                          </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="myCheck" name="test" required> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
						<br><br>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="center_login.php"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("myCheck").required;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>
