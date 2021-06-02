<?php

$conn=mysqli_connect("localhost","root","","day6");
if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];

    $qry="insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')";
    $q=mysqli_query($conn,$qry) or die("error ".mysqli_error($conn));
    if($q){
        echo "<script>alert('record inserted successfully');</script>";
    }

}

?>

<html>
    <head>
        <title>
            Basic form
        </title>
    </head>
    <body>
        <form method="POST">
            name:<input type="text" name="txt1"/><br/><br/>
            gender:
            <select name="txt2">
                <option>Female</option>
                <option>male</option>
            </select><br/><br/>
            mobile:
            <input type="number" name="txt3"/><br/><br/>
            <input type="submit"/>
        </form>
    </body>
</html> 