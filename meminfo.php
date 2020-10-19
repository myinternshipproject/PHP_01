<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

function onpic()
{
	 
mempic.src=pfile.value;	
}
</script>
</head>
<body>
<form action="sendmeminfo.php" method="post" enctype="multipart/form-data">
<div align="center"> <font size=5> Member Information </font></div>
<table border=1 align="center">
<tr><td>Member SL NO </td><td><input type="text" name="mem_sl" /> </td></tr>
<tr><td>Member Last Name </td><td><input type="text" name="mem_ln" /> </td></tr>
<tr><td>Member Middle Name </td><td><input type="text" name="mem_mn" /> </td></tr>
<tr><td>Member First Name </td><td><input type="text" name="mem_fn" /> </td></tr>
<tr><td>Member Batch Name </td><td><input type="text" name="mem_bn" /> </td></tr>
<tr><td>Profession </td><td>
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
echo "<select name=pro>";
while($row=mysql_fetch_array($result))
{
  echo "<option>".$row['profession']."</option>";
}
echo "</select>";

}    
?>
</td></tr>
<tr><td>Organization </td><td><input type="text" name="org" /> </td></tr>
<tr><td>Designation </td><td><input type="text" name="des" /> </td></tr>
<tr><td>Birth Day </td><td><select name="bday"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option>
<option>29</option><option>30</option><option>31</option></select> 

<select name="bmon"><option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option><option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option></select>
 </td></tr>
<tr><td>Blood Group </td><td> <select name="bg"><option>A+</option><option>A-</option><option>B+</option><option>B-</option><option>AB+</option><option>AB-</option></select></td></tr>
<tr><td>Club </td><td><input type="text" name="club" /> </td></tr>
<tr><td>Mailing Address </td><td><input type="text" name="madd" /> </td></tr>
<tr><td>Country </td><td><input type="text" name="country" /> </td></tr>
<tr><td>Post Code </td><td><input type="text" name="pcode" /> </td></tr>
<tr><td>Telephone Office </td><td><input type="text" name="teloff" /> </td></tr>
<tr><td>Telephone Res </td><td><input type="text" name="telres" /> </td></tr>
<tr><td>Mobile </td><td><input type="text" name="mobile" /> </td></tr>
<tr><td>E-mail </td><td><input type="text" name="email" /> </td></tr>
<tr><td>Member Type </td><td> <select name=mtype><option>Board of Directors</option><option>EC Members</option><option>Life Members</option><option>Members</option></select> </td></tr>

<tr><td>Photo </td><td><input type="file" name="pfile"/>   </td></tr>
<tr><td> </td><td><input type="submit" value="Save" /> </td></tr>
</table>
</form>
</body>
</html>
