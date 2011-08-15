<?php
$site_title = "Open Source Comes to Campus";
$BASE="http://campus.openhatch.org/";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $page_title?> -- Open Source Comes to Campus</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $BASE ?>/style.css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<base href="<?php echo $BASE ?>" />
</head>
<body>
<img src="/images/beta_banner.png" id="beta_banner">
<div id="header">
<a href="http://www.openhatch.org"><img src="images/openhatch-logo.png" class="alignleft" /></a>
<h1><a href=""><?php echo $site_title?></a></h1>
<h2>by OpenHatch</h2>
 <div id="menu">
  <ul id="nav">
   <li><a href="">Home</a></li>
   <li><a href="curriculum/">What we teach</a></li>
   <li><a href="past-events/">Past events</a></li>
   <li><a href="upcoming-events/">Upcoming events</a></li>
   <li><a href="about/">About us</a></li>
<?php //    <li><a href="sponsors/">Sponsors</a></li> ?>
  </ul>
 </div>
</div>
<div id="content">
<div id="right">
<img src="images/happystudents.jpg" />
<img src="images/twostudentsconcentrating.jpg"/>
<img src="images/intenseteaching.jpg" />
<img src="images/welcomehackers.jpg" />
<img src="images/yuvithinks.jpg" />
<img src="images/studentandlaptop.jpg" />
</div>
<div id="left">
<?php echo $content ?>
</div>
	
</div>
</body>
</html>
