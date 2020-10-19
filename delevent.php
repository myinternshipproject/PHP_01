<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smoky Theme - Blog Page</title>
<meta name="keywords" content="smoky, blog, post, theme, design, free templates, website templates, CSS, HTML" />
<meta name="description" content="Smoky Theme Blog Page - free website template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
	  
    </div>
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="member.html">Members</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="pdf/CONSTITUTION OF EX ROTARACTORS FORUM.pdf">Constitution</a></li>
            <li><a href="about.html">About ERF</a></li>
            <li><a href="contact.html">Contact</a></li>
        
        </ul>    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_menu -->
    
  <div id="templatemo_middle_subpage_1">
        <h2>Ex Rotaractors' Event List </h2>
  </div>

  <div id="tm_top"></div>
    <div id="templatemo_main">
    
    	<div class="col_w900 col_w900_last">
            <div class="col_w650 float_l">
              <div class="cleaner">
                <center>
                
                </center>
 <?php
 
  $eid=$_GET['eid'];
 
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

mysql_select_db("42295_test", $con);


$result=mysql_query("delete from myevent where eid='".$eid."'");

if($result==1)
{
	echo "<center><font size=4>Your data is deleted</font></center>";
}
else
{
	echo "<center><font size=4>Some Error</font></center>";
}
 
 
}

?>


              </div>
           	  <div class="post_box">
           	    <h2>&nbsp;</h2>
                <p>&nbsp;</p>
                    <p>&nbsp;</p>
<p align="justify">&nbsp;</p>
                    <div class="cleaner"></div>
              </div>
            </div>
            
            <div class="col_w180 float_r">
            	
                <img src="images/icon1.jpg" alt="Image" />
                <!--<h3>ERF  Members</h3>-->
                <div class="lbe_box">
                <p><a href="showallbod.php?npage=1"> Board of Directors&nbsp;</a></p>
                <p><a href="showallec.php?npage=1"> EC Members&nbsp;</a></p>
                <p><a href="showalllife.php?npage=1"> Life Members&nbsp;</a></p>
                <p><a href="showallmember.php?npage=1"> Members&nbsp;</a></p>
                <p><a href="showallmemberA.php?npage=1"> Members search&nbsp;</a></p>
            </div>
        </div>
            </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="tm_bottom"></div>
    
    <div id="templatemo_footer">
    	
        Copyright © 2011 Ex Rotaractor Forum | Powered by Ecotech IT Ltd.</div>
        
    </div> <!-- end of footer -->
        
</div> <!-- end of wrapper -->

</body>
</html>