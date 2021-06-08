<?php


$conn=mysqli_connect("localhost","root","","day6");
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:distable1.php");

}

$editid=$_GET['id'];

$editq=mysqli_query($conn,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($conn));
$editdata=mysqli_fetch_array($editq);
//print_r($editdata);

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

    $updateq=mysqli_query($conn,"update tbl_student set st_name='{$name}',st_gender='{$gender}',
    st_dob='{$dob}',st_email='{$email}',st_mobile='{$mobile}',st_address='{$address}',
    st_password='{$password}',st_pincode='{$pincode}',st_bloodgroup='{$blood}',st_ssc='{$ssc}',
    st_hsc='{$hsc}' where st_id='{$editid}'") or die(mysqli_error($conn));

    if($updateq){
        echo "<script>alert('record updated');window.location='distable1.php';</script>";
    }
}

?>

<html>
    <head>
        <title>
            Update Student Form
        </title>
    </head>
    <body>
        <h2>Update Student Form</h2>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $editdata['st_name']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <select name="gender"  >
                            <option >Female</option>
                            <option >Male</option>
                            <option >others</option>
                        <select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Birthdate
                    </td>
                    <td>
                        <input type="date" name="dob" value="<?php echo $editdata['st_dob']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $editdata['st_email']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile No
                    </td>
                    <td>
                        <input type="number" name="mobile" value="<?php echo $editdata['st_mobile']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address
                    </td>
                    <td>
                        <textarea name="address" cols="20" rows="3" value="<?php echo $editdata['st_address']; ?>" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="password" value="<?php echo $editdata['st_password']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                       Pincode
                    </td>
                    <td>
                        <input type="number" name="pincode" value="<?php echo $editdata['st_pincode']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Blood Group
                    </td>
                    <td>
                        <input type="text" name="blood" value="<?php echo $editdata['st_bloodgroup']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        SSC percentage
                    </td>
                    <td>
                        <input type="number" name="ssc" value="<?php echo $editdata['st_ssc']; ?>" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        HSC percentage
                    </td>
                    <td>
                        <input type="number" name="hsc" value="<?php echo $editdata['st_hsc']; ?>" required/>
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