<html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta charset="utf-8" />
<title>Prerna Health Care Services</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<link href="css/asyncslider_body.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script><script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>


<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

</head>

<body><div class="page-wrapper">
        <div class="slug-pattern"><div class="overlay"><div class="slug-cut"></div></div></div>
        <div class="header">
                <div class="nav4">
                 <div class="container">
                <ul class="phone">
                   <li><i class="fa fa-phone" aria-hidden="true"></i>0120-6994100</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info.prernahealthcare@gmail.com</a></li>
                </ul>
                <ul class="links">
                   
                    <li><a href="gallery.php">Photo Gallery</a></li>
                    <li><a href="v_gallery.php">Video Gallery</a></li>

                    <li> <a href="paytm.php">
                                          <button class="button4" >Online Donate</button>
                                        </a></li>
                    <li> <a href="paytm.php" target = "blank">
                                          <button class="button4" >Paytm Donate</i></button>
                                        </a></li>
                    <li><a href="https://www.google.co.in/maps" target = "blank"> <i class="fa fa-location-arrow" style="font-size:30px; color: #00adef;"></i></a></li>
                    
                </ul>
            </div>
             </div>
            <div class="nav">
            
                
               <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo.png" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                        <?php include('header.php'); ?>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.php"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
                            </div>
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <a href="MLM/login.php">
                         <button class="button5">Login PHCS</i></button>
                    </a>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container callout standard">
                        
                        <div class="twelve columns">
                            <h4>About Us</h4>
                            <p class="link-location">You are here: <a href="index.php">Home</a> / <a href="aboutus.php">About Us</a></p>
                        </div>
                        
                       
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                    
                        <div class="fifteen columns">
                            <div class="sidebar-right"> <!-- important if sidebar is on the right -->
                                <div class="border">
                                	<img Style="" class="scale-with-grid" src="images/blog-train.jpg" />
                                    
                                </div>
                                <br /><br />
								
								<?php
									include 'dbconnection.php';
									$con = OpenCon();
									$query = "select * from aboutus";
									$result = mysqli_query($con,$query);
									  mysqli_close($con);
									$row = mysqli_fetch_array($result);
									
								?>
								
                                <h5 class="title" Style="margin:20px 0 16px 29px;"> <?php echo $row['heading']; ?> </h5>
                                <p Style="margin:20px 0 16px 35px;">
										<?php echo $row['content']; ?>
								</p>
                          <?php
									$con = OpenCon();
									$query_our_mission = "select * from our_mission";
									$result_our_mission = mysqli_query($con,$query_our_mission);
									mysqli_close($con);
									$row_our_mission = mysqli_fetch_array($result_our_mission);
									
								?>
                                <br><h5 class="title" Style="margin:20px 0 16px 29px;"> <?php echo $row_our_mission['heading']; ?> </h5>
                                <p Style="margin:20px 0 16px 35px;"> 
									<?php echo $row_our_mission['content']; ?>
								</p>
								
								 <?php
									$con = OpenCon();
									$query_our_vission = "select * from our_vission";
									$query_our_vission = mysqli_query($con,$query_our_vission);
									mysqli_close($con);
									$row_our_mission = mysqli_fetch_array($query_our_vission);
									
								?>
								
								<br><h5 class="title" Style="margin:20px 0 16px 29px;"> <?php echo $row_our_mission['heading']; ?> </h5>
                                <p Style="margin:20px 0 16px 35px;">
									<?php echo $row_our_mission['content']; ?>
								</p>
                            </div>
                        </div>
                           
                                
                        <div class="clear"></div>
                                            
                        <div class="sixteen columns">
                       		<span class="hr lip-quote"></span>
                            <blockquote class="standard bottom">
                               "A Unit of Prerna Society of Technical Education and Research"
                            </blockquote>
                        </div>
        
                    </div>
                </div>
            </div><?php include('footer.php'); ?>
    </div>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
            $('.acc-active').click();
        });
        $(window).load(function(){
             $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
        });
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>
	</div>
</body>

</html>