<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex Rotaractors' Forum</title>
<meta name="keywords" content="smoky, web, theme, design, free templates, website templates, CSS, HTML" />
<meta name="description" content="Smoky Theme is a free website template provided by templatemo.com for all webmasters and designers." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
	  
    </div>
    
    <div id="templatemo_menu">
        <ul>
             <li><a href="index.php" class="current">Home</a></li>
            <li><a href="showallmember.php">Members</a></li>
            <li><a href="news.html">Gallery</a></li>
            <li><a href="blog.html">News</a></li>
            <li><a href="constitution_erf.php">Constitution</a></li>
            <li><a href="contact.html">About ERF</a></li>
            <li><a href="contact.html">Contact</a></li>
        
        </ul>    	
        <div class="cleaner"></div>
    </div> 

<style>
.val1
{
vertical-align:top;
}
</style>

<body>

<table><tr><td class="val1">
<div id="templatemo_middle_subpage_1">
        <h2>ERF Event Calendar</h2></div>

<div class="cleaner"></div>
    </div>
<div id="templatemo_main">
    
  <div CLASS="col_w900 col_w900_last">
    <div CLASS="col_w650 float_l">
              <div CLASS="cleaner">
                <div align="left">
                  <?php

if($_POST['mon']=="")
{
	$date = time();
	$month=date('m',$date);
}
else
{
	$month=$_POST['mon'];
}
if($_POST['year']=="")
{
	$date = time();
	$year=date('Y',$date);
}
else
{
	$year=$_POST['year'];
	$date=mktime(0,0,0,$month,1,$year);
}


$day = date('d',$date);

$first_day=mktime(0,0,0,$month,1,$year);

$title=date('F',$first_day);

$day_of_week=date('D',$first_day);

$day_in_month=cal_days_in_month(0,$month,$year);



if($day_of_week=="Sun")
{
	$blankday=1;
}
else if($day_of_week=="Mon")
{
	$blankday=2;
}
else if($day_of_week=="Tue")
{
	$blankday=3;
}
else if($day_of_week=="Wed")
{
	$blankday=4;
}
else if($day_of_week=="Thu")
{
	$blankday=5;
}
else if($day_of_week=="Fri")
{
	$blankday=6;
}
else if($day_of_week=="Sat")
{
	$blankday=7;
}
else
{
	$blankday=0;
}

?>
                  
                </div>
      </div>
           	  <div CLASS="post_box">
           	    <table width="525" border="0" align="center">
           	      <tr align="center" bgcolor="#33FF33">
           	        <td colspan="7"><font size="4"> <?php echo date("F",$date)." ".date("Y",$date) ?></font></td>
       	          </tr>
           	      <tr bgcolor="#CC9966">
           	        <td width="75" align="center"> Sun</td>
           	        <td width="75" align="center"> Mon </td>
           	        <td width="75" align="center"> Tue</td>
           	        <td width="75" align="center"> Wed</td>
           	        <td width="75" align="center"> Thu</td>
           	        <td width="75" align="center"> Fri</td>
           	        <td width="75" align="center"> Sat</td>
       	          </tr>
           	      <?php

$p=0;
$q=0;
$r=0;
$pqr=0;
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{
mysql_select_db("42295_test", $con);

$result=mysql_query("Select * from myevent where emonth=".$month." and eyear=".$year." order by eday");
while($row=mysql_fetch_array($result))
{
	$myid[$p]=$row['eid'];
	$mytitle[$r]=$row['etitle'];
	$myday[$q]=$row['eday'];
	$p++;
	$q++;
	$r++;
}
 
}

$cdata="<tr height='70' bgcolor='#99CCFF'>";
for($i=1;$i<$blankday;$i++)
{
  $cdata=$cdata . "<td width='100' align='center'></td>";
  $daycount++;
}

for($j=1;$j<=$day_in_month;$j++)
{
 if($myday[$pqr]==$j)
 {
	$cdata=$cdata . "<td width='100' align='center'>" . $j . " &nbsp;&nbsp; <a href='showevent.php?eid=".$myid[$pqr]."'>".$mytitle[$pqr]."</a></td>"; 
	$pqr++;
 }
 else
 {
$cdata=$cdata . "<td width='100' align='center'>" . $j . "</td>";
 }

$daycount++;
if($daycount%7==0)
{
	$cdata=$cdata . "</tr><tr height='70' bgcolor='#99CCFF'>";
}
}

echo $cdata . "</table>";

 
?>
           	      <tr>
           	        <td></td></td>
       	          </tr>
           	      
       	        </table>
</div>
    </div>
  </div>
</div>
        
        <div CLASS="cleaner"></div>
</div>

<form action="mycalendar.php" method="post">

<table width="250" height="100" border="1">
<tr><td colspan="2" align="center" bgcolor=#E1F3D5> Event Calendar </td></tr>
<tr> <td bgcolor=#F1F9EE>Select Month </td>  <td> <select name="mon"><option value=""> </option><option value="1">Jan</option> <option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option> <option value="12">Dec</option></select> <select name="year"><option value=""> </option> <option value="2011">2011 </option><option value="2012">2012 </option><option value="2013">2013 </option><option value="2014">2014 </option><option value="2015">2015 </option> </select> </td> </tr>
<tr><td colspan="2" align="center" bgcolor=#E1F3D5> <input type="submit" value="Show"  /></td></tr>
</table>
</form>


</td><td width="50"> </td> <td>
<!--
<table align="center" width="700" border="0">
  <tr align="center" bgcolor="#33FF33"> <td colspan="7"> <font size=4> <?php echo date("F",$date)." ".date("Y",$date) ?> </font></td></tr>
 
<tr bgcolor="#CC9966">
<td width="100" align="center"> Sun</td> <td width="100" align="center">Mon </td> <td width="100" align="center"> Tue</td>  <td width="100" align="center"> Wed</td> <td width="100" align="center"> Thu</td> <td width="100" align="center">Fri </td> <td width="100" align="center">Sat </td>
</tr>

<?php

$p=0;
$q=0;
$r=0;
$pqr=0;
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{
mysql_select_db("42295_test", $con);

$result=mysql_query("Select * from myevent where emonth=".$month." and eyear=".$year." order by eday");
while($row=mysql_fetch_array($result))
{
	$myid[$p]=$row['eid'];
	$mytitle[$r]=$row['etitle'];
	$myday[$q]=$row['eday'];
	$p++;
	$q++;
	$r++;
}
 
}

$cdata="<tr height='70' bgcolor='#99CCFF'>";
for($i=1;$i<$blankday;$i++)
{
  $cdata=$cdata . "<td width='100' align='center'></td>";
  $daycount++;
}

for($j=1;$j<=$day_in_month;$j++)
{
 if($myday[$pqr]==$j)
 {
	$cdata=$cdata . "<td width='100' align='center'>" . $j . " &nbsp;&nbsp; <a href='showevent.php?eid=".$myid[$pqr]."'>".$mytitle[$pqr]."</a></td>"; 
	$pqr++;
 }
 else
 {
$cdata=$cdata . "<td width='100' align='center'>" . $j . "</td>";
 }

$daycount++;
if($daycount%7==0)
{
	$cdata=$cdata . "</tr><tr height='70' bgcolor='#99CCFF'>";
}
}

echo $cdata . "</table>";

 
?>

</td></tr></table>
-->
    <div id="templatemo_footer">
    	
        Copyright © 2011 Ex Rotaractor Forum | Powered by Ecotech IT Ltd.</div>
        
    </div> <!-- end of footer -->
</body>
</html>
