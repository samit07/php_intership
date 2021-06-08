<?php
$conn=mysqli_connect("localhost","root","","day6");
$id=$_GET['deletedid'];

$qry=mysqli_query($conn,"delete from tbl_student where st_id='{$id}'") or die(mysqli_error($conn));

if($qry){
    echo "<script>alert('record deleted');window.location='distable1.php';</script>";
}

?> 