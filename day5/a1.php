
<?php
//Numerical Array
//method 1

$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "c";
$a[4] = "4";

for($i=0;$i<count($a);$i++)
{
	echo "<br/>".$a[$i];
}
?>