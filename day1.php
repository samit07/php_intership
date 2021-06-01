<!DOCTYPE html>
<html>
<head>
	<title>Registration_Page</title>
<style type="text/css">
body
{
	background-color: #FFFF33;
}
form
{
	margin: 6px auto;
	width: :45%;
	background-color: #FF9999;
	height: 600px;
	border-radius: 10px;
	box-shadow: 2px 2px 7px 0px blue;
}
form label,input
{
	display: block;
	text-transform: capitalize;
}
form label,input
{
	padding: 10px;
	width: 250px;
	margin-bottom: 12px;
	position: relative;
	left: 500px;
}
form input
{
	border: none;
	border-radius: 12px;
	box-shadow: 0px 1px 1px 0px blue;
	padding: 15px;
}
form input:nth-of-type(5)
{
	background-color: #FFFF33;
	width: 285px;
	margin: 26px 0px 12px 0px;
	font-size: 20px;
	color: #000099;
	font-family: sans-serif;
}
form label
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
<form method="GET">
	<label for="username">Username<span>*</span></label>
	<input type="text" name="username" id="uname" placeholder="Type Your name...!">

	<label for="pwd">Password<span>*</span></label>
	<input type="Password" name="pwd" id="pwd" placeholder="Type Your Password...!">

	<label for="email">Email_Id<span>*</span></label>
	<input type="email" name="email" id="email" placeholder="Type Your Email_Id...!">

	<label for="phone_no">Phone_Number<span>*</span></label>
	<input type="text" name="phone_no" id="phone_no" placeholder="Type Your Phone_no...!">

	<input type="submit" value="Registration">
</form>
</body>
</html>
