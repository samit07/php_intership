<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body bgcolor="yellow">

<?php

function Factorial($number){
    if($number <= 1){  
        return 1;  
    }  
    else{  
        return $number * Factorial($number - 1);  
    }  
}
  
// Driver Code
$number = 10;
$fact = Factorial($number);
echo "Factorial = $fact";
?>

</body>
</html>