
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
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}
</style>

</head>

<body>
    
<script>
	    function abc(){
        var name = $("#id_name").val();
        var email = $('#id_email').val();
        var subject = $('#id_subject').val();
        var comments = $('#id_comment').val();
        
         if (name == "") {
        alert("Please Enter Valid Name");
        return false;
    }
         if (email == "") {
        alert("Please Enter Valid Email ID");
        return false;
    }
         if (subject == "") {
        alert("Please Enter Valid Subject");
        return false;
    }
         if (comments == "") {
        alert("Please Enter Valid Comments");
        return false;
    }
        
        var dataString = "&name=" + name + "&email="+ email + '&subject=' + subject + '&comments=' + comments;
    
    
        $.ajax({
            type: "GET",
            url: "contact_action.php",
            contentType : "application/json",
            dataType : "json",
            data: dataString,
            success: function(data) {
                $('#dialog-message').dialog('open');
                
            }
        });
        alert("Thank you For Contacting We will Reach You Soon...! ");
         window.location.reload(true);
}
	</script>
    
    
    
    
    
    <div class="page-wrapper">
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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container">
                        <div class="sixteen map columns"> 
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.989306342503!2d77.3107455257981!3d28.584933850851346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce458ccb0afa5%3A0x6f6a3dc21c831e29!2sSector+2%2C+Noida%2C+Uttar+Pradesh+201301!5e0!3m2!1sen!2sin!4v1518773508253" width="100%" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
							   </div>
                        <div class="sixteen columns"><span class="hr mapdv"></span></div>
                        <div class="five columns">
          
                            <h5 class="semi">Contact Info</h5>
							
							<?php
									include 'dbconnection.php';
									$con = OpenCon();
									$query = "select * from contact";
									$result = mysqli_query($con,$query);
									//$count = mysqli_num_rows($result);
									mysqli_close($con);
									$row = mysqli_fetch_array($result);
									
								?>
				 
                            <p>
                               <b style="font-weight:bold;">Registered Address:</b> <?php echo $row['registered_address']; ?><br />
                               <b style="font-weight:bold;">Corporate Office:</b> <?php echo $row['corporate_address']; ?>
                                <span class="hr"></span>
                                <b style="font-weight:bold;">Mobile:</b> <?php echo $row['mobile']; ?><br />  
								<b style="font-weight:bold;">Phone No.:</b><?php echo $row['phone_no']; ?><br />  
								<b style="font-weight:bold;">Email:</b><?php echo $row['email']; ?><br /> 
								<b style="font-weight:bold;">Website:</b><?php echo $row['website']; ?><br /> 					
                              
                            
                            <h5 class="semi">Testimonials</h5>
                            <ul class="slide testimonials clr overlap">
                                <li>
                                    <p>"Winner don't do different things, They do things differently."
                                                                  	</p>
                                </li>
                          <li>
                                    <p>“Quitter Never Wins”, “Winners Never Quits” </p>
                                </li>
                       <li>
                                   <p>“ If we did the things we are capable of doing, we would literally astound ourselves.”</p>
                            </li>
                          </ul>
                            
                        </div>
                        <div class="contact eight columns">
                            <div class="standard-form compressed">
                                <h4 class="semi">Contact Form</h4>
                                <div class="form-result"></div>
								
                                <form action="contact_action.php" method="post">
                                    <input type="text" class="input" id="id_name" name="name" placeholder="Name *" />
                                    <input type="text" class="input" id="id_email" name="email" placeholder="Email *" />
                                    <input type="text" class="input extend" id="id_subject" name="subject" placeholder="Subject" />
                                    <textarea name="comment" id="id_comment" rows="10" cols="65" placeholder="Message *" ></textarea>
                                   
                                    <input type="button" id="submit" value="Submit" onclick="abc()" > 
                                    <div class="clear"></div>
                                </form>
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
            $('.slide.testimonials').contentSlide({'nav': false});
        });
    </script>
    <script type="text/javascript" src="js/jquery.color.animation.js"></script>
    <script src="ajax/ajax_default.js" type="text/javascript"></script>
    <script src="ajax/email_conf.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

    </div>
</body>

</html>