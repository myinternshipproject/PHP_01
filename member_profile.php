<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<title>..:::  ERF Members' Directory  :::..</title>

<link rel="stylesheet" type="text/css" href="member_profile_files/stylesheet.css">
</head>
<body leftmargin="0" topmargin="0">

<?php

$memid=$_GET['memid'];

$con = mysql_connect("127.0.0.1","42295_mainul","1234");
if (!$con)
{
  die("Could not connect: " . mysql_error());
}
else
{

mysql_select_db("42295_test", $con);

$result=mysql_query("select * from memberinfo where member_sl_no='".$memid."'");
 
$row=mysql_fetch_array($result);

$result2=mysql_query("select * from profession where professionid='".$row['professionid']."'");
$row2=mysql_fetch_array($result2);

$mphoto=$row['photo'];

if($mphoto=="")
{
	$mphoto="nophoto.jpg";
}


}    



?>


<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td>

<table align="center" border="0" cellpadding="5" cellspacing="0" width="650">
 <tbody><tr>
	<td class="Blue08pt" align="right">
<a href="javascript:%20window.close();">Close <img src="member_profile_files/close.png" border="0"></a>
	</td>
</tr>
    <tr>
		<td height="5"></td>
	</tr> 
</tbody></table>


<table align="center" bgcolor="#D51111" border="0" cellpadding="0" cellspacing="0" width="650">
    <tbody><tr class="Border_Red">
	<td height="2"></td>
	</tr>
</tbody></table>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
        <tbody><tr style="background: url(&quot;../../../images/common/bk.gif&quot;) repeat scroll 0% 0% transparent;">
            <td align="center" height="30"><font size=5>ERF Member Profile</font></td>
        </tr>
</tbody></table>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
    <tbody><tr>
	<td height="4"></td>
	</tr>
</tbody></table>
	
    <table align="CENTER" bgcolor="#39962B" border="0" cellpadding="5" cellspacing="1" width="650">
        <tbody><tr class="Background_Dark">
            <td class="Blue08pt" align="center" height="120" valign="middle" width="30%">
            <img src="cp/photo/<?php echo $mphoto ?> "  border="0" height="100" width="80">
            </td>
            <td class="Black09ptBold" width="70%">&nbsp;            
            <?php echo $row['member_name_first'] ?> &nbsp; <?php echo $row['member_name_middle'] ?> &nbsp; <?php echo $row['member_name_last'] ?>        
            
           	<br>&nbsp;&nbsp;<span class="Black08pt"><?php echo $row['member_sl_no'] ?></span>
            <br>&nbsp;&nbsp;<span class="Black08pt"><?php echo $row['member_type'] ?> </span></td>
        </tr>  
        
         <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Profession : </td>
            <td class="Black08pt"> <?php echo $row2['profession'] ?> </td>
        </tr>
        
        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Organization : </td>
            <td class="Black08pt"> <?php echo $row['organization'] ?> </td>
        </tr>
        
        <tr class="Background_Dark">
            <td class="Black08pt" align="right" height="25"> Designation : </td>
            <td class="Black08pt"> <?php echo $row['designation'] ?> </td>
        </tr>
        
        <tr class="Background_Dark">
            <td class="Black08pt" align="right" height="25"> Birth Day : </td>
            <td class="Black08pt"> <?php echo $row['BD_day'] ." ". $row['BD_mon']  ?> </td>
        </tr>
        
        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Blood Group : </td>
            <td class="Black08pt">  <?php echo $row['BG'] ?> </td>
        </tr>
        
        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Country : </td>
            <td class="Black08pt">  <?php echo $row['country'] ?> </td>
        </tr>
        
        <tr class="Background_Dark">
            <td class="Black08pt" align="right" height="25"> Address : </td>
            <td class="Black08pt"> <?php echo $row['mailingaddress'] ?></td>
        </tr>         
        
        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Tel (Res) :</td>
            <td class="Black08pt"> <?php echo $row['telephone_res'] ?> </td>
        </tr> 
        
        <tr class="Background_Dark">
            <td class="Black08pt" align="right" height="25"> Tel (Off) : </td>
            <td class="Black08pt"> <?php echo $row['telephone_office'] ?> </td>
        </tr>  

        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Mob :</td>
            <td class="Black08pt"><?php echo $row['telephone_mobile'] ?> </td>
        </tr>

        <tr class="Background_Dark">
            <td class="Black08pt" align="right" height="25"> Club : </td>
            <td class="Black08pt"> <?php echo $row['club'] ?> </td>
        </tr> 
        
        <tr class="Background_Light">
            <td class="Black08pt" align="right" height="25"> Email : </td>
            <td class="Blue08pt">  <a href="mailto:rafiq@tkgroupbd.com,%20ahmadrafiq14@yahoo.com"></a><?php echo $row['email'] ?>  </td>
        </tr>
        
       
    </tbody></table>
    

<table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
    <tbody><tr>
	<td height="4"></td>
	</tr>
</tbody></table>   

</td></tr></tbody></table>  

    

<table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
    <tbody><tr>
	<td height="4"></td>
	</tr>
</tbody></table>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="650">
        <tbody><tr style="background: url(&quot;../../../images/common/bk.gif&quot;) repeat scroll 0% 0% transparent;">
            <td class="OffWhite08pt" align="center" height="30">&nbsp;</td>
        </tr>
</tbody></table>    

<table align="center" bgcolor="#D51111" border="0" cellpadding="0" cellspacing="0" width="650">
    <tbody><tr class="Border_Red">
	<td height="2"></td>
	</tr>
</tbody></table>
    



<table align="center" border="0" cellpadding="5" cellspacing="0" width="650">
 <tbody><tr>
	<td class="Blue08pt" align="right">
<a href="javascript:%20window.close();">Close <img src="member_profile_files/close.png" border="0"></a>
	</td>
</tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr>
    <td></td>
  </tr>
</tbody></table>




</body></html>