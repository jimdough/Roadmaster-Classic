<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="canonical" href="default.php" />
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script|Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="DESCRIPTION" CONTENT="Roadmaster is a hands on truck driving school & CDL training center that provides complete truck driver training & CDL Class A license preparation.">
<?php include("rm/head.inc"); ?>
		<?php
		// Include WordPress 
		define('WP_USE_THEMES', false);
		include('/blog/wp-load.php');
		query_posts('showposts=4');
		?>

 		<script type="text/javascript" src="/common/inc/rm/jswfobject.js"></script>
		<script type="text/javascript">
		swfobject.registerObject("myId", "9.0.0", "expressInstall.swf");
		</script>
 
<script type="text/javascript" src="/common/inc/rm/jquery-1.3.2.min.js"></script>
        
<link rel="stylesheet" type="text/css" href="/common/inc/rm/slidedeck.skin.css" media="screen,handheld" />
<!-- Styles for the skin that only load for Internet Explorer -->
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="slidedeck.skin.ie.css" media="screen,handheld" />
<![endif]-->

<!-- Include the SlideDeck jQuery script. -->
<script type="text/javascript" src="/common/inc/rm/slidedeck.jquery.js"></script>
<title>CDL Training and Truck Driving School - Roadmaster</title>
</head>

<body>
<div id="wrapper">

<!-- Top Menu -->
<div id="menu">
	<?php include("rm/menu.inc"); ?>
</div>
<!-- End Top Menu -->

<!-- Slider -->
<div id="hpHeaderNew">
<div id="slidedeck_frame" class="skin-slidedeck">
			<dl class="slidedeck">
			
			<!-- SLIDE 1 -->
						<dt>Top Rookie Winner</dt>
				<dd>
                 <a href="/blog" target="_blank"><img alt="Roadmaster Truck Driving School Graduate" border="0" src="images/gordonWinner.jpg"></a>
                 </dd>
			
				
			<!-- SLIDE 1 END -->
				
				<!-- SLIDE 2 --> 
				<dt>Roadmaster</dt>
				<dd>
					<div class="editable-text" style="position:relative; background-image:url(/common/inc/rm/images/slides/slide_general.jpg); background-repeat:none; color:#fff; height:248px; padding-left:355px; padding-right:30px; padding-top:50px; overflow:hidden;">We are your high quality, hands on <em>truck driving school</em> and CDL training center with campuses across the United States. Most trucking companies require a commercial driver's license or CDL, upon hire. As a truck driver training school, Roadmaster Drivers School provides you with the CDL training you need to get the professional trucking career you want.<br><br>Get started today, call 1-800-831-1300!</div>
				</dd>
				<!-- SLIDE 2 END --> 
				
				<!-- SLIDE 3 --> 
				<dt>Veterans Training</dt>
				<dd>
					<div class="editable-text" style="position:relative; background-image:url(/common/inc/rm/images/slides/slide_military.jpg); background-repeat:none; color:navy; height:278px; padding-left:430px; padding-right:5px; padding-top:20px; font-size:16px; overflow:hidden;">Veterans leaving the service are often confronted with an extremely tough job market and struggle to match their skills with a civilian career.<br><br>Roadmaster Drivers School is approved for Veterans Training and our students, if qualified, are eligible for Post 9/11 benefits.
						<div style="padding-top:78px; padding-left:15px;"><a href="/contact.php" style="color:navy; font-size:26px; text-decoration:none;">Get Started Today!</a></div>
					</div>
				</dd>
			<!-- SLIDE 3 END--> 
			<dt>20th Anniversary</dt>
				<dd>
					<div class="editable-text" style="position:relative; background-image:url(/common/inc/rm/images/slides/slide_20years.jpg); background-repeat:none; color:#fff; height:298px; padding-left:15px; padding-right:250px; padding-top:0px; overflow:hidden; font-size:24px; line-height:24px; text-shadow: 1px 1px #000000;"><p>Roadmaster Drivers School<br>is celebrating 20 years<br>of helping put people<br>to work!<br><br><b>Let us help you!</b></p>
					<div><a href="contact.php"><img alt="Get Started with your CDL Training Today" border="0" src="/common/inc/rm/images/slides/getStartedTodayRed.png"></a></div>
					</div>
				</dd>

			<!-- SLIDE 5 -->
			<dt>Video Overview</dt>
				<dd>
					<div style="float:left; z-index:1;"><iframe width="530" height="298" src="http://www.youtube.com/embed/cFDw9kqOmoE?rel=0&autohide=1&border=0&modestbranding=1&showinfo=0&wmode=transparent" frameborder="0" allowfullscreen></iframe></div><div style="float:left;"><img alt="Truck Driver Training Video" src="/common/inc/rm/images/slides/videoPanel.jpg"></div>
				</dd>
			<!-- SLIDE 5 END -->
	
						</dl>
		</div>
        <!-- END SLIDE CODE --> 
        
        
		<script type="text/javascript">
            /* Initiate the SlideDeck */
    		$('.skin-slidedeck dl.slidedeck').slidedeck({
                autoPlay: true,
                cycle: false, 
                autoPlayInterval: 4000 
            }).vertical();
		</script>
             
</div>
<!-- Slider End -->



<!-- Bottom Bar Begin (Short Form, Middle Text, Location Map) -->
<div id="bottomBar">
	<div id="shortForm">
   	  <?php include("rm/quickForm.inc"); ?>
    </div>
    
	<div class="cms-editable" id="bottomContent">
	    <h3>Roadmaster Truck Driving School</h3>
	    <ul>
		    <li>3-4 Week <a href="cdl_training.php">CDL training classes</a> forming weekly.</li>
		    <li>Hands-on <a href="trucking_benefits.php">truck driver training classes</a>!</li>
		    <li><a href="get_hired.php"> Job placement assistance</a> after graduation.</li>
		    <li>For Those Who are Qualified, You Could Be Pre-Hired Before You Finish Training!</li>
	    </ul>
	    <hr />
	    <h3>New Roadmaster Site in North FL</h3>
	    <ul>
		    <li>Start your <a href="truck_school_JACKSONVILLE.php">classroom training in Madison, FL</a>!</li>
	</div>

	<div id="bottomMap">
		<h3>Locations across the USA</h3>
		   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="282" height="170" id="myFlashContent">
		   			<param name="movie" value="us.swf?data_file=rm.xml" />
		   			<param name="wmode" value="transparent" />
		   			<!--[if !IE]>-->
		   			<object type="application/x-shockwave-flash" data="us.swf?data_file=rm.xml" width="282" height="170">
		   				<param name="wmode" value="transparent" />
		   			<!--<![endif]-->
		   				<a href="truck_school_locations.php">
		   					<img alt="Truck Driver Training School Locations" src="images/mapSmall.png" border="0">
		   				</a>
		   			<!--[if !IE]>-->
		   			</object>
		   			<!--<![endif]-->
		   		</object>
			
		   		<span style="text-align:center; font-size:11px;">Click a state to zoom in, then choose a school</span>
	</div>

</div> 
<!-- End Bottom Bar -->

<div id="hpContentWrapper2">
<img alt="Drivers Digest Blog Header" id="Image-Maps_6201201161544457" src="/common/inc/rm/images/hpBarSplit.jpg" width="917" height="45" border="0" alt="Roadmaster Drivers School CDL Training" usemap="#Image-Maps_6201201161544457" title="Roadmaster Drivers School" />
<map id="_Image-Maps_6201201161544457" name="Image-Maps_6201201161544457">
<area shape="rect" coords="0,0,447,50" href="http://driversdigest.roadmaster.com" alt="" title=""    />
</map>


<div id="hpContentLeft2">
	<div class="wpEmbed">
		<?php while (have_posts()): the_post(); ?>
		<h3 class="wpDate" style="color:#fff;"><?php the_date(); ?> - <?php the_category(); ?></h3>
		<h2 class="wpTitle"><a class="wpTitleLink" style="color:white;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?><a class="wpLink" href="<?php the_permalink(); ?>">Read more...</a>
		<div class="wpBreak"><a href="blog"><img alt="View our truck driving blog" border="0" src="/common/inc/rm/images/viewBlog.png"></a></div>
		<?php endwhile; ?>
	</div>
</div> <!-- End HP Left -->

<div class="editable" id="hpContentRight2">

<h1><b>CDL Training</b> and <b>Truck Driving School</b>, <b>Roadmaster Drivers School</b> has locations across the United States. Most trucking companies require the successful completion of the CDL test and a Class A CDL commercial driver's license before driving a truck for them. As a truck driving school, Roadmaster provides you with the CDL training lessons you need to get either a Class A CDL or Class B CDL license to help you start your professional truck driving career.</h1>

<p>Roadmaster is dedicated to preparing individuals for a career <em>driving a truck</em> to meet the fast growing need for qualified professional truck drivers. By preparing students for a successful career through providing the best possible state of the art training at our <em>CDL school</em>, Roadmaster will work for the success of every student while building a reputation that will ensure valuable future opportunities for graduates of Roadmaster. Our mission will be enhanced and realized through strong community commitment and upholding the value of every individual student who enrolls into a Roadmaster truck driving school.</p>

<p><a href="http://www.truckline.com" target="_blank"><img width="112" height="135" alt="American Trucking Association" src="images/ata.jpg" border="0" style="float:left; padding-right:20px;" /></a><a href="http://www.careerpathtraining.com" target="_blank">Career Path Training Corporation</a> opened the first Roadmaster Drivers School <em>truck driving school</em> and <em>cdl training</em> center in Tampa, Florida in 1992. Roadmaster quickly gained a national reputation in the trucking industry for quality training of entry-level commercial truck drivers. Because truck drivers with a Class A CDL license have the potential for employment in so many different areas, a varied approach to safety conscious truck driver training is needed. Roadmaster takes a hands-on approach to training drivers to get their Class A CDL license.</p>

<p><a href="http://www.truckload.org" target="_blank"><img width="100" height="100" alt="Truckload Carriers Association" src="images/tca.jpg" border="0" style="float:right; padding-left:20px; padding-bottom:10px;" /></a>Online CDL training schools do not provide you with the hands on truck driver training that employers are looking for and that you need to start driving a truck professionally. Roadmaster will teach you advanced truck driving techniques such as skid avoidance and recovery as well as other emergency actions. CDL training from Roadmaster makes you far more valuable in the job market. When applying for truck driving jobs, hiring companies will know that you have received the proper truck driving school training and are ready to start your career as a professional over the road truck driver.</p>

<p>Roadmaster Drivers School provides you with Class A CDL & Class B CDL license training and truck driver training in as few as 3-4 weeks. With classes forming weekly at our <a href="truck_school_locations.php">12 truck driving schools from Florida to California</a>, there has never been a better time to start your truck driving career. Roadmaster truck driving school offers FREE job placement assistance after graduation. Tuition assistance is also available for those who qualify. Today, most trucking companies may offer reimbursement for truck driver training programs. Roadmaster is also Approved for Veterans Training.</p>

<p><a href="http://www.cvta.org" target="_blank"><img alt="Commercial Vehicle Training Association" width="125" height="53" src="images/cvta.jpg" border="0" style="float:left; padding-right:20px; padding-bottom:20px;" /></a>All truck driving school locations have administrative offices, spacious classrooms, and computer labs. The schools maintain specially designed field-driving courses where students practice backing, coupling, uncoupling, docking and driving a truck. Roadmaster truck driving school provides equipment for Commercial Driver Licensing (CDL) testing at all locations. Roadmaster owns a fleet of late model tractor-trailers used exclusively for student training. Get your truck driving career started today with a well equipped, hands-on cdl training school with the reputation to back it up!</p>
<p><span class="disclaimer">* Course Length may vary by location.</span></p>

</div> <!-- End HP Right -->

<!-- Event Manager Listing -->
<div id="listingsHP">
	  <?php include("mm/mm-framed-hp.php"); ?>
</div>
<!-- Event Manager Listings End -->

</div> <!-- End Wrapper -->


<?php include("rm/footer.inc"); ?>
<?php include("analytics.inc"); ?>
<br/><br/>
</body>
</html>                                                                                                                                    