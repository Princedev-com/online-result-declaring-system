<?php
include("config.php");
$d=$_GET['del'];
$sql=mysqli_query($al,"DELETE FROM enrollstud WHERE id='$d'");
if($sql)
{
	?>
	<script type="text/javascript" language="javascript">
	alert('Successfully Deleted');
	window.location="student.php";
	</script>
<?php

}
?>