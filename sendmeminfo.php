<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$mem_sl=$_POST['mem_sl'];
$mem_ln=$_POST['mem_ln'];
$mem_mn=$_POST['mem_mn'];
$mem_fn=$_POST['mem_fn'];
$mem_bn=$_POST['mem_bn'];
$pro=$_POST['pro'];
$org=$_POST['org'];
$des=$_POST['des'];
$bday=$_POST['bday'];
$bmon=$_POST['bmon'];
$bg=$_POST['bg'];
$club=$_POST['club'];
$madd=$_POST['madd'];
$country=$_POST['country'];
$pcode=$_POST['pcode'];
$teloff=$_POST['teloff'];
$telres=$_POST['telres'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$mtyle=$_POST['mtype'];
 


if($_POST['mem_sl']=="" || $_POST['mem_ln']=="" || $_POST['mem_mn']=="" || $_POST['mem_fn']=="" || $_POST['mem_bn']=="" || $_POST['pro']=="" )
{
 die("Please fill the previous field properly");
}



$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

mysql_select_db("42295_test", $con);


$result=mysql_query("Select * from profession where profession='".$pro."'");

if($row=mysql_fetch_array($result))
{
	$proid=$row['professionid'];
}


$result=mysql_query("insert into memberinfo values ('".$mem_sl."','".$mem_ln."','".$mem_mn."','".$mem_fn."','".$mem_bn."',".$proid.",'".$org."','".$des."','".$bday."','".$bmon."','".$bg."','".$club."','".$madd."','".$country."','".$pcode."','".$teloff."','".$telres."','".$mobile."','".$email."','".$mtype."','".$_FILES["pfile"]["name"]."')");


if($result==1)    
{
move_uploaded_file($_FILES["pfile"]["tmp_name"],"photo/" . $_FILES["pfile"]["name"]);

echo "<center><font size=5> Data Send Successfully </font></center>";

}
else
{
  echo "<center><font size=5> Error </font></center>";	
}

}
   
?>
</body>
</html>
