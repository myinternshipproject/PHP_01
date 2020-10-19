<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <?php
$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

mysql_select_db("42295_test", $con);


 



$result=mysql_query("Select * from memberinfo");
$numrow=mysql_num_rows($result);

$numlink=($numrow/20)+1;

$npage=$_GET['npage'];

if($npage >=1)
{
$result=mysql_query("Select * from memberinfo order by member_sl_no asc limit ".(($npage-1)*20).",20"); 
}
else
{
$result=mysql_query("Select * from memberinfo order by member_sl_no asc limit 0 ,20");
}


echo "<table border=0 width=800 align=center><tr><th>Picture </th><th>ID NO </th> <th> Name </th> <th> Club </th> </tr>";

while($row=mysql_fetch_array($result))
{
  echo " <tr align=center><td> <img src=photo/".$row['photo']." width=35 height=35> </td><td> ".$row['member_sl_no']." </td><td> ".$row['member_name_first']." ".$row['member_name_middle']." ".$row['member_name_last']." </td><td> ".$row['club']." </td></tr>";
}


 echo "</table>";

}


echo "<br/><table align=center><tr>";

for($k=1; $k<=$numlink;$k++)
{
  echo "<td width=30><a href='showallmem.php?npage=".$k."'>".$k."</a></td>";
}

echo "</tr></table>";

?>


</body>
</html>
