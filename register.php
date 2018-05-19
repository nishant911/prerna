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

</style>
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
                    <a href="MLM/login.php">
                         <button class="button5">Login PHCS</i></button>
                    </a>
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
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
                    <h1>REGISTRATION</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
				
                    <div class="container">
                       <div class="container callout standard">
                        
                        <div class="twelve columns">
                            <h4>REGISTRATION</h4>
                            <p class="link-location">You are here: <a href="index.html">Home</a> /<a href="register_doctors.html">Resgistration</a></p>
                        </div>
                       
                    </div>
                        <div class="sixteen columns"><span class="hr mapdv"></span></div>
                       
                        <div class="contact eleven columns">
                            <div class="">
                              
                               <form name="forms" method="post" enctype="multipart/form-data" action="register_action.php" id="myForm">
								
								<div class="form_register3">
								 <h4 class="semi">DETAILS</h4>
										<label>REGISTER AS</label>
										<select class="center_r" name="register_as" required="">
													<option value="">SELECT</option>
													  <option value="Hospital/Clinic">Hospital/Clinic</option>
													  <option value="Doctor">Doctor</option>
													  <option value="Diagnostic/Pathlab">Diagnostic/Pathlab</option>
                                                        <option value="Blood Bank">Blood Bank</option>
													  <option value="Medical Equipment Provider Company">Medical Equipment Company</option>
													  <option value="Pharmacy Company">Pharmacy Company</option>
													  
											</select>
										<br>
										<label>ORGANIZATION NAME*</label>
										<input type="text" class="center_r" name="organization_name" placeholder="ENTER ORGANIZATION NAME" required="">
										<br>
										<label>CONTACT PERSON NAME*</label>
										<input type="text" class="center_r" name="person_name" placeholder="ENTER CONTACT PERSON NAME" required="">
										<br>
										<label>SPECIALIZATION*</label>
										<input type="text" class="center_r" name="specialization" placeholder="ENTER SPECIALIZATION" required="">
										<br>
										<label>WORKING HOURS*</label><br>
										<input type="text" id="code" name="from" placeholder="e.g-9 A.M" required="">
										<input type="text" id="code" name="to" placeholder="e.g-10 P.M" required="">
										<br>
								</div>
								
								
								
								
								<div class="form_register1">
								<h4 class="semi">ADDRESS INFORMATION</h4>
								<label>Address*</label>
										<textarea class="textarea" rows="3" name="address" required=""></textarea>
										<br>
                                <div class="columnform">
                                 
                                        <label>CITY*</label>
                                        <input  name="city" type="text"  placeholder="ENTER CITY" required=""> 
                                        <br>
                                         <label>PINCODE*</label>
                                        <input  name="pincode" type="text" placeholder="ENTER PINCODE" required="">
                                        <br>
                                </div>
                                 <div class="columnform">
                                           <label>State/Union Territory*</label>
                                        <select class="form-control selectpicker" name="state" required="">
                                                    <option value="">Select</option>
                                                      <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN & NICOBAR ISLANDS</option>
                                                      <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                                      <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                                      <option value="ASSAM">ASSAM</option>
                                                      <option value="BIHAR">BIHAR</option>
                                                      <option value="CHANDIGARH">CHANDIGARH</option>
                                                      <option value="CHHATTISGARH">CHHATTISGARH</option>
                                                      <option value="DADRA & NAGAR HAVELI">DADRA & NAGAR HAVELI</option>
                                                      <option value="DAMAN & DIU">DAMAN & DIU</option>
                                                      <option value="DELHI">DELHI</option>
                                                      <option value="GOA">GOA</option>
                                                      <option value="GUJARAT">GUJARAT</option>
                                                      <option value="HARYANA">HARYANA</option>
                                                      <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                                      <option value="JAMMU & KASHMIR">JAMMU & KASHMIR</option>
                                                      <option value="JHARKHAND">JHARKHAND</option>
                                                      <option value="KARNATAKA">KARNATAKA</option>
                                                      <option value="KERALA">KERALA</option>
                                                      <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                                                      <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                                      <option value="MAHARASHTRA">MAHARASHTRA</option>
                                                      <option value="MANIPUR">MANIPUR</option>
                                                      <option value="MEGHALAYA">MEGHALAYA</option>
                                                      <option value="MIZORAM">MIZORAM</option>
                                                      <option value="NAGALAND">NAGALAND</option>
                                                      <option value="ORISSA">ORISSA</option>
                                                      <option value="PONDICHERRY">PONDICHERRY</option>
                                                      <option value="PUNJAB">PUNJAB</option>
                                                      <option value="RAJASTHAN">RAJASTHAN</option>
                                                      <option value="SIKKIM">SIKKIM</option>
                                                      <option value="TAMIL NADU">TAMIL NADU</option>
                                                      <option value="TELANGANA">TELANGANA</option>
                                                      <option value="TRIPURA">TRIPURA</option>
                                                      <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                                      <option value="UTTARAKHAND">UTTARAKHAND</option>
                                                      <option value="WEST BENGAL">WEST BENGAL</option>  
                                            </select>
                                        <br>
                                       
                                        
                                </div>
                                </div>
								<div class="form_register2">
								<h4 class="semi">OTHER DETAILS</h4>
								<div class="columnform">
								 
										<label>MOBILE*</label>
										<input  name="mobile_no" type="tel" size="13" minlength="10" maxlength="13" placeholder="ENTER MOBILE NUMBER">
										<br>
										<label>EMAIL ID*</label>
										<input type="text"  name="email_id" placeholder="ENTER EMAIL ID" required="">
										<br>
								</div>
								<div class="columnform">
								
										<label>LANDLINE NUMBER</label>
										<input id="telNo" name="landline_number" type="tel" size="13" minlength="10" maxlength="13" placeholder="ENTER LANDLINE NUMBER">
										<br>
										
								</div>
								<input class="button2 btnsubmit" type="submit" value="SUBMIT">
										<input class="button2 btnreset" type="button" onclick="myFunction()" value="RESET">
								</div>
									
							   </form>
                            </div>
                        </div>
						 <div class="clear"></div>
                        <div class="sixteen columns">
                       		<span class="hr remove-bottom"></span>
                            <blockquote class="standard bottom">
                                "A Unit of PRERNA SOCIETY of Technical Education and Research"
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
<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>
    </div>
</body>

</html>