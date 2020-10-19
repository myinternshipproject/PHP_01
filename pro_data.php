<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<center><font size="5">

<?php
$idnum;

if($_POST["text1"]=="")
{
 die("Please fill the previous field properly");
}

$profession = $_POST["text1"];

 
 
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

mysql_select_db("42295_test", $con);

$result=mysql_query("Select profession from profession where profession='".$profession."'");

$numrow=mysql_num_rows($result);

if($numrow > 0)
{
 echo " This profession already exists ";
}
else
{
$result = mysql_query("Select max(professionid) from profession");

   if($row=mysql_fetch_row($result))
   {
      if($row[0] >=1)
      {
        $idnum=$row[0]+1;
      }
      else
      {
        $idnum=1;
      }
   }
 
  $result=mysql_query("insert into profession values (". $idnum . ",'". $profession . "')");

  if($result==1)
  {
    echo "Data send successfully";
  }
  else
  {
   echo "error occured";
  }

}

}


?>

</font></center>

</body>
</html>
