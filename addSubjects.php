<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al,"SELECT * FROM faculty WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$s1=$_POST['s1'];
if($s1==NULL )
{
	// 
}
else
{	
	$sql=mysqli_query($al,"INSERT INTO subjects(s1) VALUES('$s1')");
	if($sql)
	{
		$msg="Successfully Saved";
	}
	else
	{
		$msg="Already Saved";
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
<span class="subhead">Update Test</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Test Type : </td><td> <input type="text" required="required" size="20" class="fields" placeholder="Enter Test Date" name="s1"/></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="fields" value="SAVE" /></td></tr>

</table>
</form>
<br />
<br />
<br />
<a href="home.php" class="cmd">HOME</a>
</div>
</body>
</html>