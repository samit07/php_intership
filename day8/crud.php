<?php

$conn=mysqli_connect("localhost","root","","day6");
if($_POST){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $pincode=$_POST['pincode'];
    $blood=$_POST['blood'];
    $ssc=$_POST['ssc'];
    $hsc=$_POST['hsc'];

    $qry="insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,
    st_pincode,st_bloodgroup,st_ssc,st_hsc) values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}',
    '{$address}','{$password}','{$pincode}','{$blood}','{$ssc}','{$hsc}')";

    $result=mysqli_query($conn,$qry) or die("Error: ".mysqli_error($conn));

    if($result){
        echo "<script>alert('Record submitted successfully');</script>";
    }

    header("location:distable1.php");

}

?>
<html>
    <head>
        <title>
            Student Form
        </title>
    </head>
    <body>
        <h2>Student Form</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <input type="text" name="name" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <select name="gender">
                            <option>Female</option>
                            <option>Male</option>
                            <option>others</option>
                        <select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Birthdate
                    </td>
                    <td>
                        <input type="date" name="dob" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email" name="email" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile No
                    </td>
                    <td>
                        <input type="number" name="mobile" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address
                    </td>
                    <td>
                        <textarea name="address" cols="20" rows="3" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Pincode
                    </td>
                    <td>
                        <input type="number" name="pincode" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Blood Group
                    </td>
                    <td>
                        <input type="text" name="blood" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        SSC percentage
                    </td>
                    <td>
                        <input type="number" name="ssc" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        HSC percentage
                    </td>
                    <td>
                        <input type="number" name="hsc" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"/>
                        <input type="reset"/>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html> 
