<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex Rotaractors' Forum</title>
<meta name="keywords" content="smoky, web, theme, design, free templates, website templates, CSS, HTML" />
<meta name="description" content="Smoky Theme is a free website template provided by templatemo.com for all webmasters and designers." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:11,
		animSpeed:600,
		pauseTime:2000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="templatemo_wrapper">

		<div id="templatemo_header">
    	
        <!--<div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>-->
        
        <div class="cleaner"></div>
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="showallmember.php">Members</a></li>
            <li><a href="news.html">Gallery</a></li>
            <li><a href="blog.html">News</a></li>
            <li><a href="mycalendar.php">Events</a></li>
            <li><a href="constitution_erf.php">Constitution</a></li>
            <li><a href="contact.html">About ERF</a></li>
            <li><a href="contact.html">Contact</a></li>
        
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
  
    <div id="templatemo_middle">
    
    	<div id="intro">
        	<h2>Ex Rotaractors' Forum</h2>
            <p>Welcome To ERF...Rotaract is a Rotary-sponsored service club for young men and women ages 18 to 30. Rotaract clubs are either community or university based, and they’re sponsored	by a local Rotary club.  </p>
            <a class="learn_more" href="welcome_to_erf.php">More...</a>
        </div>
     
    
       <div id="intro2">
        	            
              <h2>ERF News & Events</h2>
              <a href="pdf/EX.pdf">Next AGM Notice of ERF</a>
    	                <p>We are  pleased to inform you that the <b>AGM</b> of Ex Rotaractors’  Forum will be held very soon.<a class="more" href="pdf/EX.pdf">More</a><br />
                     
					    </div>
                        </div>
	

	<div id="tm_top"></div>
    <div id="templatemo_main">

    	<div class="col_w900">
            <div class="col_allw280 frontpage_box">
	            <img src="images/icon1.jpg" alt="Image" />
              <h2>President Message</h2>
                <p>&nbsp;</p>
                <p>Dear ERF members,
                  I am pleased to inform you that after a long time the ERF website is becoming live again.  Let us make the best  <a class="more" href="president_message.php">More</a></p>
            </div>
            
            <div class="col_allw280 frontpage_box">
                <img src="images/icon1.jpg" alt="Image" />
              <h2>ERF  Members</h2>
              <p>&nbsp;	</p>
                <p><a href="showallec.php?npage=1"> EC Members&nbsp;</a></p>
                <p><a href="showalllife.php?npage=1"> Life Members&nbsp;</a></p>
                <p><a href="showallmember.php?npage=1"> Members&nbsp;</a></p>
                <p><a href="searchdata.php"> Members search&nbsp;</a></p>
              
            </div>
    
          <div class="col_allw280 frontpage_box col_last">
				          
          <div class="lbe_box">
          
          
                    
                      
  <?php
                        
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

$month=Date("M");
mysql_select_db("42295_test", $con);

$result=mysql_query("Select * from memberinfo where BD_mon like '".$month."%' order by BD_day");
 
$nrow=mysql_num_rows($result);
if($nrow >=1)
{
echo "<img src='images/icon1.jpg' alt='Image' /><div class='lbe_content'><h2>Birth Day</h2>"; 
 
while($row=mysql_fetch_array($result))
{
echo "<p>".$row['BD_day']." ".$row['BD_mon']." -- ".$row['member_name_first']." ".$row['member_name_middle']." ".$row['member_name_last']."</p>";	 
}

echo  "</div><div class='cleaner'></div></div>";

}

}

?>

			</div>		
          
        	<div class="cleaner"></div>
        </div>
  
        <div class="col_w900 col_w900_last">
        <!--
          <div class="col_w420 lp_box float_r">
            <img src="images/icon1.jpg" alt="Image" /> 
  	    <h2>Event Calender</h2>
              	<ul class="lp_frontpage">
                	<li><a href="#"><img width="150" height="75" src="images/templatemo_image_01.jpg" alt="image" /></a></li>
                    <li><a href="#"><img width="150" height="75" src="images/templatemo_image_02.jpg" alt="image" /></a></li>
                    <li><a href="#"><img width="150" height="75" src="images/templatemo_image_03.jpg" alt="image" /></a></li>
                    <li><a href="#"><img width="150" height="75" src="images/templatemo_image_04.jpg" alt="image" /></a></li>
                </ul>    
            </div>
            -->
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="tm_bottom"></div>
    
    <div id="templatemo_footer">
    	
    Copyright © 2011 Ex Rotaractor Forum | Powered by Ecotech IT Ltd.</div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->

</body>
</html>