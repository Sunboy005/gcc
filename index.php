<?php
	include("includes/connections/dbconnect.php");
	?>	
	
<!DOCTYPE html>
<!--
Template Name: Interlingua
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>Home :: God's Chamber Church</title>
<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<meta name="keywords" content="God's Chamber Church of Ogba, Nigeria" />
<meta name="description" content="God's Chamber Church of Ogba, Nigeria" /><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 900px;
  max-height;300px;
  position: relative;
  padding:10px 10px 10px 10px;
  margin: auto;
}

/* Caption text */
.text {
  text-decoration:outline;
  color: #771E44;
  font-size: 15px;
  padding: 8px 12px;
  position: center;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
	</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear "> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +234 810 443 5364</li>
        <li><i class="fa fa-envelope-o"></i> info@godschamber.org.ng</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><img src="images/btn/time.png"><span class="service-time"><strong> 09:15am </strong></span><span class="seprator">|</span> 
		<span class="location-info"><span class="tab-seprator"><img src="images/btn/location.png"> </span><strong><span class="value">3 Ajayi Road, Oke Ira, Ogba. Lagos.</span></strong>
		<a href="direction.jpg" class="direction-btn"><img src="images/btn/direction.png"></a></span></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html"><img src="images/logo.png"/></a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><a href="events.php"><img src="images/btn/events.png"> <br/>
			<strong>Events</strong></a></li>
		<li><a href="donate.php"><img src="images/btn/donate.png"> <br/>
			<strong>Give</strong></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
<!-- ################################################################################################ -->
<!-- #######################Navigation module Start########################################## -->

  <?php include ("includes/pager/nav.php");?>
  
 
<!-- ########################Navigation module ends##################################### -->

<!-- #########################Announcements module start#################### -->

  <?php include ("includes/pager/announcements.php");?>
  
 <!-- #########################Announcements module ends########################################### -->
 </div>
 <!-- ##########################Slideshow module Start##################### -->
	<?php include ("includes/pager/slideshow.php");?>
 
<!-- ############################Slideshow module  ends######################################### -->


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 

	  <!-- #############################Latest News Modules Ends############# -->
		<?php include ("includes/pager/newslatest.php");?>
 	  <!-- #############################Latest News Modules Ends############# -->

	  	  <!-- #############################Latest Blog MODULES  Start############# -->
		<?php include ("includes/pager/bloglatest.php");?>	  
	  
	  <!-- #############################Latest Blog MODULES ENDs############# -->
	  <!-- ############################# Social Connects starts############# -->
	  <!-- #############################Banner for Radio and Vids Start############# -->
	  <?php include ("includes/pager/listenlive.php");?>	  
	  <!-- ############################Banner for Radio and Vids Ends############# -->
	  <?php include ("includes/pager/connects.php");?>	  
	  <!-- #############################social Connects ENDs############# -->
	  
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
     <center><div class="mediaplay"><h1>Welcome to God's Chamber Church</h1></div></center>
      <img class="imgr borderedbox inspace-5" src="images/banner/pastor.jpg" alt="">
      <div class="join-content">
	<p>The church is not a building. It’s a people called out and called together by God – from every walk of life – to know Him and to accomplish his great mission for His glory!</p>
	<br /><br /><center><i><b><div class="mediaplayline"><a href="media/welcome.mp4" class="video-link-btn">Watch Our Welcome Video <img src="images/pages/media.gif" height="20px" width="20px"></a></b></i></center>
	</div></div>
	<!-- ################################################################################################ -->
    
	 <div class="wrapper three_quarter row6">
  <section> 
    <!-- ################################################################################################ -->

    <ul class="nospace group services">
      <li class="one_third first">
        <article><a href="pages/adultedu.php"><img src="images/banner/adult.png" ></a><br/><br/>
          <h6 class="heading font-x1"><a href="adultedu.php">Adult Education</a></h6><br/>
          <p>Get involved in one of our adult education class where you can study the Bible with others from God's chamber Church.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="pages/classes.php"><img src="images/banner/classes.jpg" ></i></a><br/><br/>
          <h6 class="heading font-x1"><a href="pages/classes.php">Classes and Workshops</a></h6><br/>
          <p>We have various Training and workshop that helps in making you live a fulfilled life<br/></p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="pages/children.php"><img src="images/banner/children.jpg"></i></a><br/><br/>
          <h6 class="heading font-x1"><a href="pages/children.php">Children Ministry</a></h6><br/>
          <p>"Suffereth not them as a children because of them is the Kingdom of God<br/><br/><br/></p>
        </article>
      </li>

    <li class="full">
        <article><a href="pages/sundayschool.php"><img src="images/banner/sunday.jpg" width="150px"></a><br/><br/>
          <h2 class="heading font-x1"><a href="pages/sundayschool.php">Sunday School</a></h2>
          <p>The bible says in Deuteronomy 11:19 " Teach them to your children,
			talking about them when you sit at home and when you walk along
			the road, when you lie down and when you get up.</p>
        </article>
      </li>
</ul>
    <!-- ################################################################################################ -->
  </section>

</div>
	
	
	
	</div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include ("includes/pager/footer.php");?>	  
	  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>