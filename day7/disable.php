<?php
//display table
$conn=mysqli_connect("localhost","root","","day6");
$qry=mysqli_query($conn,"select * from tbl_student") or die(mysqli_error($conn));
echo "<table border='1'>";
echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Birthdate</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>Password</th>";
echo "<th>Pincode</th>";
echo "<th>Blood Group</th>";
echo "<th>SSC Marks</th>";
echo "<th>HSC Marks</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row=mysqli_fetch_array($qry)){
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    echo "<td>{$row['st_ssc']}</td>";
    echo "<td>{$row['st_hsc']}</td>";
    echo "<td><a href='deletestudentform.php?deletedid={$row['st_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='basicform.php'>Add Record</a>";

?> 