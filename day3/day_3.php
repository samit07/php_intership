

<!DOCTYPE html>
<html>
<head>
	<title>Registration_Page</title>
<style type="text/css">
body
{
	background-color: #FFFF33;
}
table
{
	display: table;
	margin: 6px auto;
	width: :30%;
	background-color: #FF9999;
	height: 300px;
	border-radius: 10px;
	box-shadow: 2px 2px 7px 0px blue;
}
table label,input
{
	display: table-caption;
	text-transform: capitalize;
}
table label,input
{
	padding: 10px;
	width: 250px;
	margin-bottom: 12px;
	position: relative;
	left: 200px;
}
table input
{
	border: none;
	border-radius: 12px;
	box-shadow: 0px 1px 1px 0px blue;
	padding: 30px;
}
table input:nth-of-type(5)
{
	background-color: #FFFF33;
	width: 285px;
	margin: 26px 0px 12px 0px;
	font-size: 20px;
	color: #000099;
	font-family: sans-serif;
}
table label
{
	margin-bottom: -3px;
	margin-left: -6px;
	font-size: 20px;
	font-family: sans-serif;
	color: blue;
}
form label span 
{
	color: red;
}
</style>
</head>


<body>
<table align="left" border="2" height="20" width="70">
<tr>
<td><font size="5">Name:</font></td>
<td><font size="5">Tikiwala krishna</font></td>
</tr>
<tr>
<td><font size="5">En.roll:</font></td>
<td><font size="5">190063107009</font></td>
</tr>
<tr>
<td><font size="5">Field:</font></td>
<td><font size="5">computer</font></td>
</tr>
</table>
<br><br><br><br>

<br><br><br><br>

<br><br><br><br>
<br><br><br><br>

<br><br><br><br>

<b><h2>
<?php 
$total=700;
echo "Total marks:".$total."<br>";
$get=650;
echo "Get marks:".$get."<br>";
$per=($get/7);
echo "Persentage:".$per."<br>";
if($per>80)
{
	echo "A gread...";
}
else if($per>60)
{
	echo "B gread...";
}
else if($per>50)
{
	echo "C gread...";
}
else if($per>35)
{
	echo "D gread...";
}
else
{
	echo "Fail...";
}
?>
</h2></b>
</body>
</html>