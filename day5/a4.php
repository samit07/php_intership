<?php
//3 inbuilt Function toDebug an Array
$a = array(10,27,16,"php","js",10.5);

for($i=0;$i<count($a);$i++)
{
	echo "<br/>".$a[$i];
}

echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>"; 