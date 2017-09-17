<?php
	include("../includes/connections/dbconnect.php");
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
<title>Location :: God's Chamber Church</title>
<link href="../images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<meta name="keywords" content="God's Chamber Church of Ogba, Nigeria" />
<meta name="description" content="God's Chamber Church of Ogba, Nigeria" /><meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><img src="../images/btn/time.png"><span class="service-time"><strong> 09:15am </strong></span><span class="seprator">|</span> 
		<span class="location-info"><span class="tab-seprator"><img src="../images/btn/location.png"> </span><strong><span class="value">3 Ajayi Road, Oke Ira, Ogba. Lagos.</span></strong>
		<a href="location.php" ><img src="../images/btn/direction.png"></a></span></li>
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
      <h1><a href="../index.php"><img src="../images/logo.png"/></a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><a href="events.php"><img src="../images/btn/events.png"> <br/>
			<strong>Events</strong></a></li>
		<li><a href="donate.php"><img src="../images/btn/donate.png"> <br/>
			<strong>Give</strong></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
<!-- ################################################################################################ -->
<!-- #######################Navigation module Start########################################## -->

  <?php include ("../includes/pager/navpages.php");?>
  
 
<!-- ########################Navigation module ends##################################### -->

<!-- #########################Announcements module start#################### -->

  <?php include ("../includes/pager/announcements.php");?>
  
 <!-- #########################Announcements module ends########################################### -->
 </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->















<div class="wrapper bgded overlay hoc" style="background-image:url('../images/demo/backgrounds/01.png');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <center><h6 class="heading">Get Direction</h6></center>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 

	  <!-- #############################Latest News Modules Ends############# -->
		<?php include ("../includes/pager/newslatest.php");?>
 	  <!-- #############################Latest News Modules Ends############# -->

	  	  <!-- #############################Latest Blog MODULES  Start############# -->
		<?php include ("../includes/pager/bloglatest.php");?>	  
	  
	  <!-- #############################Latest Blog MODULES ENDs############# -->
	  <!-- #############################Latest events MODULES  Start############# -->
	  <?php include ("../includes/pager/eventslatest.php");?>	  
	  <!-- #############################Latest events MODULES ENDs############# -->
	  <!-- ############################# Social Connects starts############# -->
	  <!-- #############################Banner for Radio and Vids Start############# -->
	  <?php include ("../includes/pager/listenlive.php");?>	  
	  <!-- ############################Banner for Radio and Vids Ends############# -->
	  <?php include ("../includes/pager/connects.php");?>	  
	  <!-- #############################social Connects ENDs############# -->
	  
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.7690826906213!2d3.3424909879904527!3d6.637442931814885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x924b9f8ebad3947e!2sGod&#39;s+Chamber+Church!5e0!3m2!1sen!2sng!4v1505265447909" width="725px" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>





   </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include ("../includes/pager/footer.php");?>	  
	  
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>