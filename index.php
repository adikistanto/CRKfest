<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="assets/css/menu.css" type="text/css" media="screen"/>
		<link href="assets/ccs/jquery.bxslider.css" rel="stylesheet" type="text/css" />
		<script src="assets/contdown/countdown.js" type="text/javascript"></script>
		<link rel="shortcut icon" href="../favicon.ico">
		
    </head>
    <body id="#top">
        <ul id="menu_top">
			<a id="menu_top_item" href="index.php"><li><img class="top_menu_img menutop1"src="assets/images/menu.png"/><span class="main_menu_label" >home</span></li></a><!--tambahan-->
			<a id="menu_top_item" href="strukturpanitia.php"><li><img class="top_menu_img menutop2" src="assets/images/menu.png"/><span class="main_menu_label" >carakafest</span></li></a>
			<a id="menu_top_item"  href="juri.php"><li><img class="top_menu_img menutop3" src="assets/images/menu.png"/><span class="main_menu_label" >competition</span></li></a>
			<a id="menu_top_item" href="seminar.php"><li><img class="top_menu_img menutop4" src="assets/images/menu.png"/><span class="main_menu_label" >program</span></li></a>
		</ul>		
		
		<ul id="menu_bottom">
			<a href="gallery.php"><li class="fixedBottom menubottom1" ><span class="main_menu_label">gallery</span><img src="assets/images/menu.png"/></li></a>
			<a href="support.php"><li class="fixedBottom menubottom2" style="left:520px"><span class="main_menu_label">Support</span><img src="assets/images/menu.png"/></li></a>
			<a href="schedule.php"><li class="fixedBottom menubottom3" style="left:700px"><span class="main_menu_label">Our Scedule</span><img src="assets/images/menu.png"/></li></a>
			<a href="contact.php"><li class="fixedBottom menubottom4"style="left:880px"><span class="main_menu_label">contact</span><img src="assets/images/menu.png"/></li></a>
		</ul>
		<ul id="left_nav"><!--berubah-->
			<li><a  href="#section1"><img class="but_nav" src="assets/images/left_nav4_icon.png"/></a></li>
			<li><a  href="#section2"><img class="but_nav" src="assets/images/left_nav1_icon.png"/></a></li>
			<li><a  href="#section3"><img class="but_nav" src="assets/images/left_nav2_icon.png"/></a></li>
            <li><a  href="#section4"><img class="but_nav" src="assets/images/left_nav3_icon.png"/></a></li>
		</ul>
		<div >
			<img id="header" src="assets/images/header_mini.png">
			<img id="mobile_logo" src="assets/images/up_logo.png">
			<ul id='reg_log_box'>
				<a href="login.php"><li>Sign in</li></a>
				<a href="register.php"><li>Register</li></a>
			</ul>
			<div class="jam_countdown">
				<h5 id="close_entry">Close Entry</h5>
				<script type="application/javascript">
				//new Date(year, month, day, hours, minutes, seconds, milliseconds)
				var hari = new Date(2014, 11-1, 17, 00, 00, 00, 00);
				var myCountdown1 = new Countdown({
													time: hari, // 86400 seconds = 1 day
													width:200, 
													height:50,  
													rangeHi:"day",
													style:"flip"	// <- no comma on last item!
													});

				</script>
			</div>
		</div>
		<div id="menu_top_mini">
				<ul><!--tambahan-->
					<li id="menu_top_mini_item"><a href="index.php">home</a>
					</li>
					<li id="menu_top_mini_item">carakafest
						<ul>
							<li><a href="strukturpanitia.php">Struktur Panitia</a></li>
							<li><a href="tentangcaraka.php">Tentang Caraka</a></li>
							<li><a href="sambutanketua.php">Sambutan Ketua</a></li>
							<li><a href="testimonial.php">Testimonial</a></li>
						</ul>
					</li>
					<li id="menu_top_mini_item">competition
						<ul>
							<li><a href="strukturpanitia.php">Judges</a></li>
							<li><a href="kategori.php">Category</a></li>
							<li><a href="winner.php">Winner</a></li>
						</ul>
					</li>
					<li id="menu_top_mini_item">programs
						<ul>
							<li><a href="seminar.php">Seminar</a></li>
							<li><a href="workshop.php">Workshop</a></li>
							<li><a href="fee.php">Fee</a></li>
							<li><a href="rule.php">Rules</a></li>
							<li><a href="panduan.php">Panduan</a></li>
						</ul>
					</li>
					<li id="menu_top_mini_item"><a href="gallery.php">gallery</a></li>
					<li id="menu_top_mini_item"><a href="support.php">support</a></li>
					<li id="menu_top_mini_item"><a href="schedule.php">schedule</a></li>
					<li id="menu_top_mini_item"><a href="contact.php">contact</a></li>
				</ul>
		</div>
		<!-- ========================== section1 ============================ -->
		<div class="section red" id="section1"><!--tambahan-->
			<div id="viewport" style="box-shadow:none">
				<select id="menu_top_micro"><!--tambahan-->
					<option>home</option>
					<option>carakafest</option>
					<option>competition</option>
					<option>program</option>
				</select>
				<div class="home_logo_box"><!--paling baru-->
					<img class="main_logo" src="assets/images/logo.png" alt="main logo"/>
					<a href="www.p3i-pusat.com"><img class="submain_logo" src="assets/images/p3iputih.png"/></a>
					<a href="www.suaramerdeka.com"><img class="submain_logo" style="margin-top:15px"src="assets/images/smputih.png"></a>
				</div>
				<!--quotes slider-->
				<div class="quote_box"><!--paling baru-->
					<h3 style="font-style:oblique"></h3>
					<img src="assets/images/copy.png"/>
					<div class="bxslider" style="margin:0px 0px 0px 0px;padding:10px"><!--paling baru-->
						<div>
							<p class="qoute_text">Victory loves preparation. Caraka jadi arena pertama yang ngebuka mata & mempersiapkan diri saya utk bisa berkompetisi di dunia iklan.</p>
							<p style="text-align:right;margin-right:30px;"><img src="assets/images/close-quote.png"/><br>- ASTRA - Copywriter Matari Adv. -</p>	
						</div>
						<div>
							<p class="qoute_text">Caraka memiliki ciri khas nya sendiri, kalau Citra Pariwara untuk nasional, Pinasthika untuk lokal dan Caraka ajangnya kreatif khusus mahasiswa.</p>
							<p style="text-align:right;margin-right:30px;"><img src="assets/images/close-quote.png"/><br>- HARIS THAEJEB - Ketum PPPI Pusat</p>
						</div>
						<div>
							<p class="qoute_text">Caraka adalah pengaruh untuk Jawa Tengah dalam sebuah festival kreatif. Caraka sendiri memiliki kategori-kategori yang berbeda dengan festival-festival yang lain.</p>
							<p style="text-align:right;margin-right:30px;"><img src="assets/images/close-quote.png"/><br>-DANIEL REMBETH - CEO Jakarta Post</p>
						</div>
					</div>
				</div><!-- end of Quote slider-->
			</div>
        </div>
		
		<!-- ========================== section2 ============================ -->
		<div class="section red" id="section2"><!--tambahan-->
			<div id="viewport" class="bg_2"><!--tambahan-->
				<div id="left_port" class="text" style=""> <!--tambahan-->
					<h1>NEWS</h1>
					<p>
						Caraka Festival Kreatif 2013 punya rangkaian acara yang menarik
						dan wajib buat diikuti oleh kalian insan kreatif Indonesia. 
						Setelah mengadakan kompetisi ini saatnya untuk mengikuti
						Seminar dan Workshop seru dari Caraka. 
						Seminar (11/12/13) akan menghadirkan 5 pembicara yang
						menarik dalam balutan tema “Darefferent” (Dare to be Different). 
						Dengan harga tiket Rp 50.000,- untuk mahasiswa dan Rp 100.000,-
						untuk umum sudah bisa mendapatkan ilmu 
						dan tentunya fasilitas menarik di Gumaya Tower Hotel, Semarang. 
					</p><br>
					<p style="float:right;background:#FFCE3A;padding:4px;border-radius:2px"><a href="news.php">baca selanjutnya ...</a></p><!-- paling baru -->
				</div>
				<div style="width:2px;height:95%; margin:10px 0px 0px 0px;float:left;border-left:solid 2px #FFF"></div><!-- paling baru -->
				<div id="right_port" class=""> <!--berubah-->
						<div >
					 <iframe id="video_port" src="http://www.youtube.com/embed/TuYGYmY0t9g"></iframe> 
						</div>
				</div> 
			</div>
        </div>
		
		<!-- ========================== section 3 ============================ -->
        <div class="section red" id="section3"><!--tambahan-->
			<div id="viewport" class="bg_3"><!--tambahan-->
				<div id="right_port" >
					<h1>Social Media</h1><br><br><!--paling baru-->
					<table style="margin:-60px 0px 0px 40px">
						<tr><td width="40px"><img style="height:45px; width:45px" src="assets/images/facebook-square.png"/></td><td width="250px"><h5><a href="http://www.facebook.com/pages/CARAKA-FESTIVAL-KREATIF/87853570864" >Caraka Festival Kratif</a></h5><td></tr>
						<tr><td width="40px"><img style="height:45px; width:45px" src="assets/images/twitter.png"/></td><td width="250px"><h5><a href="http://twitter.com/carakafest">@carakafest</a></h5><td></tr>
						<tr><td width="40px"><img style="height:45px; width:45px" src="assets/images/mail.png"/></td><td width="250px"><h5><a href="http://www.caraka.org">festival@carakafest.org</a></h5></td></tr>
					</table>
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup" style="margin:5px 0px 5px 30px;font-size:10pt">
							<form action="//mobinity.us8.list-manage.com/subscribe/post?u=e2c951bf9bfab4ed3d33971ae&amp;id=cb3eb24735" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div class="mc-field-group">
									<div id='crk_subscribeinfo'>&nbsp&nbsp&nbspsign-up for our newsletter:</div>
									<!-- <label for="mce-EMAIL">E-mail:</label> -->
									<input id="input_form" style="height:25px;width:250px"type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder='Alamat e-mail'/>
								</div>
								<div id="mce-responses" style="clear:both;font-size:10pt;float:left" class="clear">
									<div class="response" id="mce-error-response" style="display:none;clear:both;"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_e2c951bf9bfab4ed3d33971ae_cb3eb24735" tabindex="-1" value="">
								</div>
								<div class="clear">
									<div style='text-align: center; margin: -5px 0px 0px 10px;clear:both;float:left'>
										<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
									</div>
								</div>
							</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
						<!--End mc_embed_signup-->
				</div>
				
				<div style="width:2px;height:90%; margin:20px 0px 0px 0px;float:left;border-left:solid 2px #FFF"></div>
				<div id="right_port" style="">
					<!--<ul>
						<li class="sosial_icon"><img src="assets/images/facebook_icon.png"></li>
						<li class="sosial_icon"><img src="assets/images/twitter_icon.png"></li>
						<li class="sosial_icon"><img src="assets/images/blogger_icon.png"></li>
						<li class="sosial_icon"><img src="assets/images/youtube_icon.png"></li>
					</ul>-->
					<div class="twitter_box">
						    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/carakafest" data-widget-id="514995045741514754">Tweet oleh @Metro_TV</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
			</div>
        </div>
        
		<!-- ========================== section 4 ============================ -->
		<div class="section red" id="section4"><!--tambahan-->
			<div id="viewport" class="bg_4" ><!--tambahan-->
				<!--<div id="center_port">-->
					<div id="sponsor_box">
						<section>
							<h5 style="color:black">Sponsor</h5><!--paling baru-->
							<hr size='2' width="100%" color="#AC9D9F">
							<div>
								<div class="partner_icon"><img  src="assets/images/partner/xmgv.jpg" alt="thumbnile"/></div>
							</div>
						</section>
						<section style="clear:both"><!--paling baru-->
							<h5 style="color:black">Media Partner</h5>
							<hr size='2' width="100%" color="#AC9D9F">
							<div>
								<div class="partner_icon"><img style="margin:20px 0px 0px 20px"src="assets/images/partner/ik.png" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:20px 0px 0px 20px"src="assets/images/partner/sk.png" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:20px 0px 30px 20px" src="assets/images/partner/trax.jpg" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:20px 0px 30px 20px" src="assets/images/partner/ku.png" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:20px 0px 0px 20px" src="assets/images/partner/idws.png" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:10px 0px 0px 20px" src="assets/images/partner/infomantap.png" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:20px 0px 0px 20px" src="assets/images/partner/ss.jpg" alt="thumbnile"/></div>
								<div class="partner_icon"><img style="margin:2px 0px 0px 20px" src="assets/images/partner/photo.jpg" alt="thumbnile"/></div>								
							</div>
						</section>
					</div>
				<!--</div>-->
			</div>
        </div>
		<!-- footer -->
		<div id="footer">
			<center><br>&copy; Carakafest2014</center>
			<a href="#top"><p id="backtop">Back to top</p></a>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>		
        <script src="assets/js/jquery-1.9.0.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
		<script src="assets/js/jquery.bxslider.min.js" type="text/javascript"></script>
        <script type="text/javascript">	
			<!-- sliding quote-->
			$(document).ready(function () {  <!--paling baru-->         
				 $('.bxslider').bxSlider({
					mode: 'vertical',
					 slideMargin: 3,
					 auto:true
				 });             
			 });

			<!-- sliding page-->
			$(function() {
                $('ul#left_nav a').bind('click',function(event){
                    var $anchor = $(this);
                    /*
                    if you want to use one of the easing effects:
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });
			
			<!-- animating menu  -->
			$(function() {
			  $('#menu_top li').hover(function() {
				  $(this).stop().animate({ paddingTop: '40px' },1500,'easeOutExpo');
			  }, function() {
				  $(this).stop().animate({ paddingTop: '0px' },1500,'easeOutBounce');
			  });
			});
			
			$(function() { <!-- berubah-->
			  $('.menubottom1').hover(function() {
				  $(this).stop().animate({height: '160px' },1500,'easeOutExpo');
			  }, function() {
				  $(this).stop().animate({ height: '110px' },1500,'easeOutBounce');
			  });
			});
			
			$(function() {
			  $('.menubottom2').hover(function() {
				  $(this).stop().animate({height: '160px' },1500,'easeOutExpo');
			  }, function() {
				  $(this).stop().animate({ height: '90px' },1500,'easeOutBounce');
			  });
			});
			
			$(function() {
			  $('.menubottom3').hover(function() {
				  $(this).stop().animate({height: '160px' },1500,'easeOutExpo');
			  }, function() {
				  $(this).stop().animate({ height: '130px' },1500,'easeOutBounce');
			  });
			});
			
			$(function() {
			  $('.menubottom4').hover(function() {
				  $(this).stop().animate({height: '160px' },1500,'easeOutExpo');
			  }, function() {
				  $(this).stop().animate({ height: '100px' },1500,'easeOutBounce');
			  });
			});
			
        </script>
    </body>
</html>