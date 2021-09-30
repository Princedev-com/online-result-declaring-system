<?php
include("config.php");
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
<span class="head">Vijba Education Physics Classes</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">View Enrolled Students</span>
<br />
<br />
<table cellpadding="3" cellspacing="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#C60;"><th>Sr.No.</th><th>Reg. No.</th>
<th>Name</th><th>Father Name</th><th>
</th><th>aadhar no.</th><th>DOB
</th><th>Delete</th></tr>
<?php 
$i=1;
$x=mysqli_query($al,"SELECT * FROM enrollstud");
while($y=mysqli_fetch_array($x))
{
	?>
<tr class="labels" style="font-size:14px;color:#3FF;">
<td><?php echo $i;$i++;?></td>
<td><?php echo $y['reg'];?></td>
<td><?php echo $y['name'];?></td>
<td><?php echo $y['fname'];?></td>
<td><?php echo $y['ad']; ?></td>
<td><?php echo $y['adn'] ?></td>
<td><?php echo $y['dob']; ?></td>
<td><a href="delete1.php?del=<?php echo $y['id'];?>" onclick="return confirm('Are You Sure..?');" class="link" style="font-size:14px;">Delete</a></td>
</tr>
<?php } ?>
</table>
<br />
<br />
<br />
<a href="home.php" class="cmd">HOME</a>
</div>
</body>
</html>