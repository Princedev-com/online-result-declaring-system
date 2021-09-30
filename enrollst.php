<?php
include("config.php");
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$adn=$_POST['adn'];
$name=$_POST['name'];
$reg=$_POST['reg'];
$dob=$_POST['dob'];

if($fname==NULL || $phone==NULL || $adn==NULL || $name==NULL || $reg==NULL || $dob==NULL)
{
	//
}
else
{
	$sql=mysqli_query($al,"INSERT INTO enrollstud(name,fname,adn,reg,phone,dob) VALUES('$name','$fname','$adn','$reg','$phone','$dob')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="Email Already Exists";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Result</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body><br />

<div align="center">
<span class="head">Vijba Education Physics Classes Result</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">Student enrollment</span>
<br />
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">

<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>

<tr><td class="labels">Name :</td><td><input type="text" name="name" class="fields" required="required" size="15" placeholder="Enter Student Name" /></td></tr>

<tr><td class="labels">Father Name :</td><td><input type="text" name="fname" class="fields" required="required" size="15" placeholder="Enter Father Name" /></td></tr>

<tr><td class="labels">aadhar No.:</td><td><input type="text" name="adn" class="fields" required="required" size="15" placeholder="Enter aadhar No." /></td></tr>

<tr><td class="labels">phone :</td>
<td><input type="phone" name="phone" class="fields" size="15" placeholder="Enter Phone" required="required" /></td></tr>

<tr><td class="labels">Reg. No. : </td><td><input type="text" name="reg" class="fields" size="15" placeholder="Enter Student Reg. No." required="required" /></td></tr>

<tr><td class="labels">Date Of Birth : </td><td><input type="date" name="dob" class="fields" size="15" value="2021-01-01"></td></tr>


<tr><td colspan="2" align="center"><input type="submit" value="Enroll" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="adminlogin.php" class="link">Main Page</a>
</div>
</body>
</html>