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

$result=mysql_query("Select * from profession");

echo "<table border=1><tr><th>ID NO </th> <th> Profession </th> </tr>";

while($row=mysql_fetch_array($result))
{
  echo " <tr><td>".$row['professionid']."</td><td> ".$row['profession']." </td></tr>";
}


 echo "</table>";

}
?>

</body>
</html>
