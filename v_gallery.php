
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
<link href="css1/asyncslider_body.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js1/jquery-1-8-2.js"></script>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>


<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css1/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    
    <style type="text/css">
    .gallery-grid{
    margin: 0% 1% 1% 0% ;
}
    </style>
</head>

<body><div class="page-wrapper">
        <div class="slug-pattern"><div class="overlay"><div class="slug-cut"></div></div></div>
        <div class="header">
           <div class="nav5">
                <ul >
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
                    <a href="MLM/login.php">
                         <button class="button5">Login PHCS</i></button>
                    </a>
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
                  
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>Video Gallery</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content" >
                    <div class="container callout standard">
                        
                    </div>
                    <div class="callout-hr"></div>                        
                   
               <div class="container" style="margin:3% 0% 0% 6% !important ; height: auto;">
			   
                   <div class="gallery-grids">
							<?php
									include 'dbconnection.php';
									$con = OpenCon();
									$query = "select * from video_gallary";
									$result = mysqli_query($con,$query);
									$count = mysqli_num_rows($result);
									 mysqli_close($con);
									for($i=0; $i<$count; $i++){
								
										$row = mysqli_fetch_array($result);
										
								?>
								
					<div class="col-md-5 col-sm-5 gallery-grid">
                        <div class="grid">
						<h5><?php echo $row['caption']; ?></h5>
                        <iframe width="400" height="270" src=" <?php echo $row['video_gallary']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
						

                        </div>
                    </div>
									<?php  }  ?>
					
                    <div class="clearfix"> </div>
                    <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>
        </div>
                                </div>                            
                            </div>
        
                            <!-- Isotope Ends -->  	
                        </div>
                        <div class="clear"></div><div class="sixteen columns">
                       		<span class="hr lip-quote"></span>
                            <blockquote class="standard bottom">
                               "A Unit of Prerna Society of Technical Education and Research"
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>  <?php include('footer.php'); ?>
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
        });
        $(window).load(function(){
             $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
             // cache container
            var $container = $('#isotope-container');
            // initialize isotope
            $container.isotope({
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
                layoutMode : 'fitRows'
            });
            // filter items when filter link is clicked
            $('#filters a').click(function(){
                $("#filters a.active").removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });
        });
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>
    <script type="text/javascript" src="js1/jquery-2.1.4.min.js"></script>
  
    <script type="text/javascript" src="js1/bootstrap.js"></script>
	</div>
</body>

</html>