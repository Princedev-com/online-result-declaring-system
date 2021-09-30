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
$phone=$b['phone'];
if(!empty($_POST))
{
	$s1=$_POST['s1'];
	$roll=$_POST['roll'];
	if($s1==NULL || $roll==NULL)
	{
		//
	}
	else
	{
		$total=$s1;
		$per=($total/70)*100;
		if($per<=33)
		{
			$result="Better Luck next time";
		}elseif($per>=34 && $per<=70)
			{
				$result="Good";
			}
			elseif($per>=70 && $per<=90)
				{
					$result="Better";
				}
				else
				{
					$result="Best";
				}
				$sql=mysqli_query($al,"INSERT INTO marks(roll,phone,s1,total,percent,result) VALUES('$roll','$phone','$s1','$total','$per','$result')");
				if($sql)
				{
					$msg="Successfully Saved Marks";
				}
				else
				{
					$msg="Marks Already Submitted to this Roll No.";
				}
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
<span class="subhead">Submit Marks</span>
<br />
<br />
<?php 
$x=mysqli_query($al,"SELECT * FROM subjects");
$y=mysqli_fetch_array($x);
$m=mysqli_query($al,"SELECT * FROM students");
?>
<form method="post" action="">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Roll No. : </td><td>
<select name="roll" class="fields" style="background-color:#093d3d;" required>
<option value="" selected="selected" disabled="disabled">- - Select Roll - -</option>
<?php
while($n=mysqli_fetch_array($m))
{
	?>
<option value="<?php echo $n['roll'];?>"><?php echo $n['roll'];?></option>
<?php } ?>
</select></td></tr>
<tr><td class="labels"><?php echo $y['s1'];?></td><td><input type="text" name="s1" class="fields" size="5" placeholder="20" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" class="fields" value="Submit" /></td></tr>
</table>
</form>
<br />
<br />
<br />
<a href="home.php" class="cmd">HOME</a>
</div>
</body>
</html>