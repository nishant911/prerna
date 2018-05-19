/*jshint jquery:true */

$(document).ready(function($) {
	"use strict";

	
	
	//footer template
	function footerTemplate(){
			var footerTemplate = '<div class="footer style-2">\
            	<div class="background"><div class="stitch"></div></div>\
                <div class="foot-nav-bg"></div>\
            	<div class="content">\
                    <div class="patch"></div>\
                    <div class="blur"></div>\
                    <div class="pattern">\
                        <div class="container">\
                        	<div class="stitch"></div>\
                            <div class="sixteen columns">\
                                <div class="first column alpha">\
                                    <div class="left">\
                                        <div class="logo-caption"></div>\
                                        <h5>Enzyme</h5>\
                                        <p>\
                                            Integer eu ante in arcu viverra vehicula donec tempus consequat faucibus. Donec ne thomp nibh egestas suscipit. Donec sed lacus at massa lorem\
                     pharetra id eleifend leo.\
                     					</p>\
                                        <p class="extra">\
                                            Pellentesque quis felis neque, id adipiscing nunc. Ipsum elit, vitae tempus tellus. Class aptent taciti sociosq desis torquent per\
											conubia nostra, per inceptos himenae dolar eget lacinia sem.\
                                        </p>\
                                    </div>\
                                </div>\
                                <div class="column ct">\
                                    <h5>Recent Tweets:</h5>\
                                    <ul class="twitter" id="twitter_update_list"><li>Twitter is loading</li></ul>\
                                </div>\
                                <div class="last column omega">\
                                    <h5>Join our Mailing List</h5>\
                                    <div class="input-wrapper">\
                                        <input type="text" placeholder="Email..." id="email" name="email" />\
                                    </div>\
                                    <div class="right">\
                                    	<a href="#" class="button color"><span>Join</span></a>\
                                    </div>\
                                    <div class="clear"></div>\
                                    <span class="hr"></span>\
                                    <h5>Stay in Touch</h5>\
                                    <ul class="sm foot">\
                                        <li class="facebook"><a href="#facebook">Facebook</a></li>\
                                        <li class="twitter"><a href="#twitter">LinkedIn</a></li>\
                                        <li class="linkedin"><a href="#linkedin">Pinterest</a></li>\
                                        <li class="pinterest"><a href="#pinterest">Pinterest</a></li>\
                                        <li class="dribbble"><a href="#dribbble">Pinterest</a></li>\
                                        <li class="flickr"><a href="#flickr">Pinterest</a></li>\
                                        <li class="flavors"><a href="#flavors">Pinterest</a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                            <div class="clear"></div>\
                        </div>\
                        <div class="sixteen columns alpha omega">\
                        	<div class="foot-nav-bg"></div>\
                            <div class="foot-nav">\
                                <div class="copy">\
                                    Coptyright © 2011-2012 Enzyme. By Empirical Themes - Remove upon purchase\
                                </div>\
                                <div class="nav">\
                                    <a href="#">Home</a>\
                                    <a href="#">Portfolio</a>\
                                    <a href="#">Contact Us</a>\
                                    <a href="#">Terms of Use</a>\
                                    <a href="#">Privacy</a>\
                               	</div>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
            </div>';
								$('#container').append(footerTemplate);
	}
	footerTemplate();
	//footer template
	// header
	function headerTemplate (){
		var headerTemp = '<div class="nav">\
				<div class="container">\
                 <!-- Standard Nav (x >= 768px) -->\
                    <div class="standard">\
                        <div class="five column alpha">\
                            <div class="logo">\
                                <a href="index.html"><img src="images/logo.png" /></a><!-- Large Logo -->\
                            </div>\
                        </div>\
                    <div class="eleven column omega tabwrapper">\
                            <div class="menu-wrapper">\
                                <ul class="tabs menu">\
                                    <li>\
                                       <a href="index.html" class="active"><span>Home</span></a>\
                                        <ul class="child">\
                                            <li><a href="index-nivo.html">Alternate</a></li>\
                                            <li><a href="index-async.html">Alternate 2</a></li>\
                                            <li><a href="index-flex.html">Alternate 3</a></li>\
                                            <li><a href="index-style-5.html">Alternate 4</a></li>\
                                            <li><a href="index-style-6.html">Alternate 5</a></li>\
                                        </ul>\
                                    </li>\
                                    <li><a href="#">Pages</a>\
                                        <ul class="child">\
                                            <li><a href="index.html">Homepages</a>\
                                                <ul>\
                                            <li><a href="index-nivo.html">Alternate</a></li>\
                                            <li><a href="index-async.html">Alternate 2</a></li>\
                                            <li><a href="index-flex.html">Alternate 3</a></li>\
                                            <li><a href="index-style-5.html">Alternate 4</a></li>\
                                            <li><a href="index-style-6.html">Alternate 5</a></li>\
                                                </ul>\
                                            </li>\
                                            <li><a href="portfolio-standard-3.html">Portfolios</a>\
                                                <ul>\
                                            <li><a href="portfolio-standard-1.html">Standard 1 Column</a></li>\
                                            <li><a href="portfolio-standard-2.html">Standard 2 Columns</a></li>\
                                            <li><a href="portfolio-standard-3.html">Standard 3 Columns</a></li>\
                                            <li><a href="portfolio-standard-3-alternate.html">Standard 3 Alternate</a></li><li><a href="portfolio-standard-4.html">Standard 4 Columns</a></li>\
                                            <li><a href="portfolio-standard-5.html">Standard 5 Columns</a></li>\
                                            <li><a href="portfolio-info.html">Info Style</a></li>\
                                            <li><a href="portfolio-basic-1.html">Basic Style</a></li>\
                                                </ul>\
                                            </li>\
                                            <li><a href="blog.html">Blog Pages</a>\
                                                <ul>\
                                                    <li><a href="blog.html">Standard Blog</a></li>\
                                                    <li><a href="blog-style-2.html">Blog Style 2</a></li>\
                                                    <li><a href="blog-style-3.html">Blog Style 3</a></li>\
                                                    <li><a href="blog-style-4.html">Blog Style 4</a></li>\
                                                    <li><a href="blog-post.html">Blog Post (Single)</a></li>\
                                                </ul>\
                                            </li>\
                                            <li><a href="contact.html">Contact Pages</a>\
                                                <ul>\
                                                    <li><a href="contact.html">Contact</a></li>\
                                                    <li><a href="contact-style-2.html">Contact 2</a></li>\
                                                </ul>\
                                            </li>\
                                            <li><a href="sidebar-right.html">Sidebar Right</a></li>\
                                            <li><a href="sidebar-left.html">Sidebar Left</a></li>\
                                        </ul>\
                                    </li>\
                                    <li>\
                                        <a href="blog.html">Blog</a>\
                                        <ul class="child">\
                                            <li><a href="blog.html">Standard Blog</a></li>\
                                            <li><a href="blog-style-2.html">Blog Style 2</a></li>\
                                            <li><a href="blog-style-3.html">Blog Style 3</a></li>\
                                            <li><a href="blog-style-4.html">Blog Style 4</a></li>\
                                            <li><a href="blog-post.html">Blog Post (Single)</a></li>\
                                        </ul>\
                                    </li>\
                                    <li>\
                                        <a href="portfolio-standard-3.html">\
                                            Portfolio\
                                        </a>\
                                        <ul class="child">\
                                            <li><a href="portfolio-standard-1.html">Standard 1 Column</a></li>\
                                            <li><a href="portfolio-standard-2.html">Standard 2 Columns</a></li>\
                                            <li><a href="portfolio-standard-3.html">Standard 3 Columns</a></li>\
                                            <li><a href="portfolio-standard-3-alternate.html">Standard 3 Alternate</a></li><li><a href="portfolio-standard-4.html">Standard 4 Columns</a></li>\
                                            <li><a href="portfolio-standard-5.html">Standard 5 Columns</a></li>\
                                            <li><a href="portfolio-info.html">Info Style</a></li>\
                                            <li><a href="portfolio-basic-1.html">Basic Style</a></li>\
                                        </ul>\
                                    </li>\
                                    <li>\
                                        <a href="contact.html">\
                                            Contact\
                                        </a>\
                                    </li>\
                                </ul>\
                            </div>\
                        </div>\
                    </div>\
                    <!-- Standard Nav Ends, Start of Mini -->\
                    <div class="mini">\
                        <div class="twelve column alpha omega mini">\
                            <div class="logo">\
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->\
                            </div>\
                        </div>\
                        <div class="twelve column alpha omega navagation-wrapper">\
                            <select class="navagation">\
                                <option value="" selected="selected">Site Navagation</option>\
                            </select>\
                        </div>\
                    </div>\
                    <!-- Start of Mini Ends -->\
                </div> \
            </div>';
		$('.header').prepend(headerTemp);
	}
	headerTemplate();
	// header
	
});

function Resize() {
	$(window).trigger('resize');
}