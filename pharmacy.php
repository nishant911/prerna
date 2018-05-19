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
<script type="text/javascript">
    $(function() 
    {
    $(".search_button").click(function() 
    {
    var search_word = $("#search_box").val();
	var search_word1 = $("#search_box1").val();
    var dataString = "search_word="+ search_word + "&search_word1="+ search_word1;
	
	 
    
    
    if(search_word=='')
    {
    }
    else
    {
    $.ajax({
    type: "GET",
    url: "searching_pharmacy_company.php",
    data: dataString,
    cache: false,
    beforeSend: function(html) 
    {
    document.getElementById("insert_search").innerHTML = ''; 
    $("#flash").show();
    $("#searchword").show();
    $(".searchword").html(search_word);
	$(".searchword1").html(search_word1);
    $("#flash").html('<img src="ajax-loader_2.gif" /> Loading Results...');
    },
    
    success: function(html){
    $("#insert_search").show();
    $("#insert_search").append(html);
    $("#flash").hide();
    }
    
    });
    
    }
    return false;
    });
    });
    </script>
	<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".search_box").change(function()
	{
		var id = $(this).val();
		var dataString = 'id='+ id;
		$(".search_box1").find('option').remove();
		$.ajax
		({
			type: "POST",
			url: "pharmacy_get_city.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".search_box1").html(html);
			} 
		});
	});
	
});
</script>
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
                    <li> <a href="shopping.php">
                                          <button class="button4" >Online Donate</button>
                                        </a></li>
                    <li> <a href="shopping.php">
                                          <button class="button4" >Paytm Donate</i></button>
                                        </a></li>
                                         <li><i class="fa fa-location-arrow" style="font-size:30px; color: #00adef;"></i></li>
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
                    <h1>Find Pharmacy</h1>
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
                            <h4>Prerna Health Care Network</h4>
                            <p class="link-location">You are here: <a href="index.php">Home</a> /<a href="pharmacy.php">Pharmacy</a></p>
                        </div>
                        
                        
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                        <div class="sixteen columns">
                        
                            <div class="filter">
                            
                                <form method='post' action>
                               <h5>Search By:</h5>
                                <select name="state" id="search_box" class='search_box'>
													<option value="">Select State</option>
											<?php	include 'dbconnection.php';
													$con = OpenCon();
													$result = mysqli_query($con, "SELECT DISTINCT(state) FROM register where register_as='Pharmacy Company'");
													mysqli_close($con);
													while ($row = mysqli_fetch_array($result)) {	
													$state = $row['state'];
													
													echo '<option value="' . $state . '"> ' .  $state  . ' </option>';  
													} ?>
											</select>
                                            <select name="city" id="search_box1" class='search_box1'>
                                                   
                                            </select>
											 <input type="submit" value="Search" class="search_button" />
											</form>
                                <div class="clear"></div>
                                
                            </div>
                       
                            <!-- Isotope Begins -->
                            <div class="portfolio info">
                                <div id="isotope-container">
								 <div class="item" id="construction" style="padding:0 0 20px 60px; !important">
								 
								<div id="insert_search" class="update" style="color:#990000;">
            
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
            </div>
			<?php include('footer.php'); ?>
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
	</div>
</body>

</html>