<?php
$host="localhost";
$username="root";
$password="";
$dbname="day6";
$conn = mysqli_connect($host,$username,$password,$dbname);
$qry="insert into tbl_user(user_name,user_gender,user_mobile) values('nimisha','female','7433936263')";
$q=mysqli_query($conn,$qry) or die("error ".mysqli_error($conn));
if($q){
    echo "<script>alert('record inserted');</script>";
}
?> 