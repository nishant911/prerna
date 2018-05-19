<!DOCTYPE html PUBLIC ">
<html >
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--[if (IE 6)|(IE 7)]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.asyncslider.min.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="js/default.js"></script>
<style type="text/css">
    .btnplan {
       background-color: #227ea5;
    color: #fffdfd;
    border: 2px solid #008CBA;
    float: right;
    height: 15%;
    width: 100%;
    font-size: 20px;
    border-radius: 10px;
}

.btnplan:hover {
    background-color: #49a4ca;
    color: white;
}


</style>

<!-- color pickers -->

<!-- end of color pickers -->

</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
      $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
      });
    </script>
    <div class="page-wrapper">
        <div class="slug-pattern slider-expand"><div class="overlay"><div class="slug-cut"></div>
            <div class="background-image"></div>
        </div></div>
        <div class="header slider-expand">
			 <div class="nav2">
			    <ul class="phone1">
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
            
            <div class="slug">
                <div class="container">
                    <div class="slider-wrapper">
                        <div class="preload">
                            <center><img src="images/design/preloader.gif" /></center>
                        </div>
                            <?php
                                    include 'dbconnection.php';
                                    $con = OpenCon();
                                    $query = "select * from homepage";
                                    $result = mysqli_query($con,$query);
								
                                    //$count = mysqli_num_rows($result);
                                    $rowa = mysqli_fetch_array($result)
                                    
                                    
                                ?>
                        <div class="fallback">
                            <img class="mini_img" src="admin/websiteupload/<?php echo $rowa['slider_image']; ?>" />
                        </div>
                        <div class="asyncslider-wrapper">
                            <div class="asyncslider hide" id="asyncslider">
							
						
                                <div id="slide-01" class="slide">
                                     <div class="container">
                                        <div class="seven columns alpha push">
                                           
                                           <?php  while($row = mysqli_fetch_array($result)){  ?>
                                            <h1><strong><?php echo $row['heading1']; ?></strong></h1>
                                            <h1> <?php echo $row['heading2']; ?></h1>
											<h1><?php echo $row['heading3']; ?></h1>
											
                                            
                                        </div>
                                        <div class="nine columns omega right relative">
                                            <img src="admin/websiteupload/<?php echo $row['slider_image']; ?>" class="right monitor absolute scale-with-grid" />
                                           
                                        </div>
                                    </div>
                                </div>
									<?php  } ?>
								
                            
                               
                                <!--<div id="slide-03" class="slide">
                                
                                     <div class="container">
                                        <div class="seven columns alpha push">
                                            <h2>10-80% OFF WITH</h2>
                                            <h1><strong>PRERNA HEALTH CARD</strong></h1>
                                             <h1><strong>AFFORDABLE COST WITH VERY SIMPLE PROCESS </strong></h1>
                                            
                                        </div>
                                        <div class="nine columns omega right relative">
                                            <img src="images/card.jpeg" class="right monitor absolute scale-with-grid" />
                                            
                                        </div>
                                    </div>-->
                                </div>   
                            </div>  
                        </div>       
                    </div>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container callout">
                        <?php
									
									$query_welcome = "select * from welcome";
									$result_welcome = mysqli_query($con,$query_welcome);
									
									$row_welcome = mysqli_fetch_array($result_welcome);
									
								?>
                        <div class="twelve columns">
                            <h4><?php echo $row_welcome['heading']; ?> </h4>
                            <p class="subtitle"> 
									<?php echo $row_welcome['content']; ?>
							</p>
                        </div>
                         
                        <div class="four columns button-wrap">
                            <a href="status.php"><input type="submit" name="" class="btnp btnplan" value="Check Card Status"></a> 
                        </div>
                    </div>
                        <!--<div class="four columns button-wrap">
                            <div class="wrapper"><a href="#" class="medium-button"><span>CHECK CARD STATUS</span></a></div>
                        </div>-->
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                    
                        <div class="sixteen circles columns">
                            <ul>                                
                                <li class="columns">
                                    <a href="shopping.php">
                                        <div class="icon iphone">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h4><span>APPLY FOR CARD</span></h4>
                                                <span class="hr"></span>
                                                <p>Fill out Form online, Complete the form continue for your prerna health card.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="columns">
                                    <a href="#">
                                        <div class="icon buoy">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h4><span>GET YOUR CARD</span></h4>
                                                <span class="hr"></span>
                                                <p>You will get your card within 10-15 Working days or Get your Card at Your Nearest center</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="columns">
                                    <a href="#">
                                        <div class="icon client">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h4><span>BRING TO HEALTH CARE CENTER</span></h4>
                                                <span class="hr"></span>
                                                <p>Visit a participating health care center and present your card at center. </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="columns last-child">
                                    <a href="#">
                                        <div class="icon trophy">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                 <h4><span>Get DISCOUNT</span></h4>
                                                <span class="hr"></span>
                                                <p>Get 10 % or more discounts on health care services.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div>    
                        <div class="sixteen columns">         
                            <!-- carousel starts -->
                            <div class="slidewrap">
                            	<div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Recent <strong>Events</strong></h4>
                                    </div>
                                    <ul class="slidecontrols">
                                        <li><a href="#sliderName" class="next">Next</a></li>
                                        <li><a href="#sliderName" class="prev">Prev</a></li>
                                    </ul>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
                                <ul class="slider carousel" id="sliderName">
								
								<?php
									
									$query_event = "select * from event where slider='Slider 1'";
									$result_event = mysqli_query($con,$query_event);
									$count_event = mysqli_num_rows($result_event);
									
									
								?>
								
                                    <li class="slide"><!-- slide starts -->
									<?php while($row_event = mysqli_fetch_array($result_event)){ ?>
                                        <div class="one-third column alpha portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                    <img class="scale-with-grid" src="admin/websiteupload/<?php echo $row_event['upload_event']; ?>" /> 
													
                                                </div>
                                                <h5><a href="#"><?php echo $row_event['event_caption']; ?></a></h5>
                                                </div>
                                            <div class="shadow"></div>
                                        </div>
                                        
                                         
                                        <?php } ?>
                                    </li><!-- slide ends -->
									
									
									<?php
								
									$query_event_s = "select * from event where slider='Slider 2'";
									$result_event_s = mysqli_query($con,$query_event_s);
									$count_event_s = mysqli_num_rows($result_event_s);
									
									
									
								?>
                                    <li class="slide"><!-- slide starts -->
									<?php  while($row_event_s = mysqli_fetch_array($result_event_s)){  ?>
                                        <div class="one-third column alpha portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                    <img class="scale-with-grid" src="admin/websiteupload/<?php echo $row_event_s['upload_event']; ?>" /> 
                                                </div>
                                                <h5><a href="#"><?php echo $row_event_s['event_caption']; ?></a></h5>
                                                </div>
                                            <div class="shadow"></div>
                                        </div>
                                       <?php } ?>
                                    </li><!-- slide ends -->
									
                                </ul>
                            </div><!-- end of carousel -->
                            <span class="empty-hr"></span>
                            
							<div class="two-thirds column alpha">
                            	<div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Latest News</h4>
                                    </div>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
								<marquee behavior="scroll" direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" style="width: 700px; margin-right:20px; color: white; margin-top: -10px; height: 250px;">
                                <ul class="accordion" id="1">
								<?php
									
									$query_news = "select * from news";
									$result_news = mysqli_query($con,$query_news);
									$count_news = mysqli_num_rows($result_news);
								
									while($row_news = mysqli_fetch_array($result_news)){
									
								?>
                                    <li>
                                      
                                       <h5 class="title"><?php echo $row_news['news']; ?></h5>
                                    </li>
									
									<?php } ?>
									
                                </ul>
								</marquee>
							</div>
                            <div class="one-third column omega">
                            	<div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Testimonials</h4>
                                    </div>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
								<ul class="style-2 slide testimonials clr overlap">
								<?php
									
									$query_testimonial = "select * from testimonial";
									$result_testimonial = mysqli_query($con,$query_testimonial);
									
									while($row_testimonial = mysqli_fetch_array($result_testimonial)){
									
								?>
								
                                
                                    <li>
                                        <div class="quote">
                                        	<p>
                                        		<?php echo $row_testimonial['content']; ?>
                                            </p>
                                        </div>
                                        <div class="source">
                                        	<img src="images/if you want.jpg" />
                                        	<strong>
                                            	<a href="#">Contact Me</a>
                                            </strong>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                          <div class="sixteen circles columns" style="">
                            <ul>                                
                                <li class="columns" style="margin: 0 40px 31px 3px !important; background: #dbf8ff !important;">
                                    <a >
                                      <div id="shiva"><span class="count">
									  <?php  
									 
									$query = "select * FROM admin_center ";
									$result = mysqli_query($con, $query);
								
									$row = mysqli_num_rows($result);
									echo  $row;
								?>
									  </span>
                                       <h6>Center Register</h6>
                                      </div>
                                     
                                    </a>

                                </li>
                                <li class="columns" style="margin: 0 40px 31px 3px !important; background: #dbf8ff !important;">
                                    <a >
                                      <div id="shiva"><span class="count">
									  
									  <?php  
									 
									$query_hospital = "select * FROM register where register_as='Hospital/Clinic'";
									$result_hospital = mysqli_query($con, $query_hospital);
									$row_hospital = mysqli_num_rows($result_hospital);
								
									echo  $row_hospital;
								?>
								
									  </span>
                                       <h6>Hospital</h6>
                                      </div>
                                     
                                    </a>

                                </li>
                               <li class="columns" style="margin: 0 40px 31px 3px !important; background: #dbf8ff !important;">
                                    <a>
                                      <div id="shiva"><span class="count">
									  <?php 
									
									$query_blood = "select * FROM register where register_as='Blood Bank'";
									$result_blood = mysqli_query($con, $query_blood);
									$row_blood = mysqli_num_rows($result_blood);
									
									echo  $row_blood;
								?>
									  
									  </span>
                                       <h6>Blood Bank</h6>
                                      </div>
                                     
                                    </a>

                                </li>
                               <li class="columns" style="margin: 0 40px 31px 3px !important; background: #dbf8ff !important;">
                                    <a>
                                      <div id="shiva"><span class="count">
									  <?php 
									
									$query_lab = "select * FROM register where register_as='Diagnostic/Pathlab'";
									$result_lab = mysqli_query($con, $query_lab);
									$row_lab = mysqli_num_rows($result_lab);
									
									echo  $row_lab;
								?>
									  </span>
                                       <h6>Test Lab</h6>
                                      </div>
                                     
                                    </a>

                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div> 
                          
                             <div class="clear"></div>
                            <div class="title-wrapper">
                                <div class="section-title">
                                    <h4 class="title">Our <strong>Associated Organization</strong></h4>
                                </div>
                                <ul class="slidecontrols">
                                    <li><a href="#clientSlider" class="next">Next</a></li>
                                    <li><a href="#clientSlider" class="prev">Prev</a></li>
                                </ul>
                                    <span class="divider"></span>
                            	<div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="clients columns sixteen slidewrap2">
                           <ul class="slider carousel" id="clientSlider">
                                <li class="slide">
								<?php
									
									$query_event = "select * from upload_logo where slider='Slider 1'";
									$result_event = mysqli_query($con,$query_event);
									$count_event = mysqli_num_rows($result_event);
								
										
									 while($row_event = mysqli_fetch_array($result_event)){  
								?>
								
                                    <div class="client alpha">
                                        <a href="#"><img id="transparent" src="admin/websiteupload/<?php echo $row_event['upload_logo']; ?>" /></a>
										
                                    </div>
									 <?php } ?>
                                   
                                </li>
                                
                                <li class="slide">
								<?php
								
									$query_event = "select * from upload_logo where slider='Slider 2'";
									$result_event = mysqli_query($con,$query_event);
									$count_event = mysqli_num_rows($result_event);
									mysqli_close($con);
									 while($row_event = mysqli_fetch_array($result_event)){  
								?>
                                    <div class="client alpha">
                                        <a href="#"><img id="transparent" src="admin/websiteupload/<?php echo $row_event['upload_logo']; ?>" /></a>
                                    </div>
									
									 <?php } ?>
                                    
                                </li>
                            </ul>
                            
                            
                        </div>  
                        <div class="clear"></div>
                        <div class="sixteen columns">
                       		<span class="hr remove-bottom"></span>
                            <blockquote class="standard bottom">
                                "A Unit of Prerna Society of Technical Education and Research"
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
			<?php include('footer.php'); ?>
    </div>
        
    <script type="text/javascript">
    <!--
        $(window).load(function(){
            // Setup Slider
            $(".asyncslider.hide").fadeIn(6000000);
            $(".asyncslider").asyncSlider({
                keyboardNavigate: true,
                autoswitch: 100000000000,
                slidesNav: true,
                easing: 'easeInOutExpo',
                minTime: 700,
                maxTime: 1600, 
            });
            
            $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
        });
        $(document).ready(function() {
            $('.slidewrap, .slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
			$('.slide.testimonials').contentSlide();
        });

    // -->
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>
	</div>
</body>

</html>