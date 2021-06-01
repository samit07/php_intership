<!DOCTYPE html>
<html>
<head>
	<title>method</title>
</head>
<body bgcolor="pink">

<?php
table($n=$_POST['num']);
function table($n)
{
for($i=1;$i<=10;$i++)
{
	$sum=$i*$n;
	echo ($n."*".$i."=".$sum)."</br>";
}
}
?>
</body>
</html>

