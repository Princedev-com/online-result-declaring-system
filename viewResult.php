<?php
include("config.php");
$roll=$_POST['roll'];
$x=mysqli_query($al,"SELECT * FROM students WHERE roll='$roll'");
$y=mysqli_fetch_array($x);
$phone=$y['phone'];
$name=$y['name'];
$a=mysqli_query($al,"SELECT * FROM marks WHERE roll='$roll'");
$b=mysqli_fetch_array($a);
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
<span class="subhead">View Result</span>
<br /><br />

<span class="labels" style="color:#C9F;">Name : <?php echo $name;?><br>Roll No.: <?php echo $roll;?><br>Phone : <?php echo $phone;?></span>

<br />
<br />
<?php $m=mysqli_query($al,"SELECT * FROM subjects");
$n=mysqli_fetch_array($m);
?>

<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td class="labels" style="text-decoration:underline;color:#0F0;">Subject</td><td class="labels" style="text-decoration:underline;color:#0F0;">Marks</td></tr>
<tr><td class="labels"><?php echo $n['s1'];?></td><td class="labels"><?php echo $b['s1'];?></td></tr>

<tr style="text-decoration:underline;color:#0F0;"><td class="labels">Total : </td><td class="labels"><?php echo $b['total'];?></td></tr>

<tr><td class="labels">Percent : </td><td style="color:#0F0;"><?php echo $b['percent'];?>%</td></tr>

<tr><td class="labels">Result : </td><td style="color:#0F0;"><?php echo $b['result'];?></td></tr>
</table>

<br />
<br />
<a href="index.php" class="link">EXIT</a>
</div>
</body>
</html>