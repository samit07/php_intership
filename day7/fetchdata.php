<?php
//db connection
$conn=mysqli_connect("localhost","root","","day6");
//select query
$qry=mysqli_query($conn,"select * from tbl_user") or die(mysqli_error($conn));
//fetch data as numerical array
echo "<font color=blue><h2>fetch data using mysqli_fetch_row function</h2></font>";
$row=mysqli_fetch_row($qry);
print_r($row);
echo "<br/>";
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
//fetch data as numerical array and associative array
echo "<font color=blue><h2>fetch data using mysqli_fetch_array function</h2></font>";
$row=mysqli_fetch_array($qry);
echo "<pre>";
print_r($row);
echo "<br/>";
echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
echo "<br/>";
echo $row['user_id']." ".$row['user_name']." ".$row['user_gender']." ".$row['user_mobile'];
//fetch all data
echo "<font color=blue><h2>fetch whole data using mysqli_fetch_array function</h2></font>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "</tr>";

while($row=mysqli_fetch_array($qry)){
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "</tr>";
}
echo "</table>";

?>