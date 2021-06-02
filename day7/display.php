<?php

$conn=mysqli_connect("localhost","root","","day6");
$qry=mysqli_query($conn,"select * from tbl_user") or die(mysqli_error($conn));
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row=mysqli_fetch_array($qry)){
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='delete.php?deletedid={$row['user_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='basicform.php'>Add Record</a>";
?> 