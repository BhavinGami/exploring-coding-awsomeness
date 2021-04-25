<?php
require_once('dbconnection.php');
if(isset($_POST['signup']))
{
	$uname=$_POST['username'];
	$pno=$_POST['pno'];
	$password=$_POST['passwd'];
    $address=$_POST['address'];
	$enc_password=$password;
  $rsql="SELECT `id` from `customer` where `uname`='$uname'";
  $sql=mysqli_query($con,$rsql);
$row=mysqli_num_rows($sql);
if($row==0)
{
    $msg=mysqli_query($con,"INSERT into customer(`uname`,`pno`,`pwd`,`address`) values('".$uname."','".$pno."','".$enc_password."','".$address."')");

    if($msg)
    {
        echo "<script>alert('Sign Up successfully');</script>";
    }
	
} else{
    echo "<script>alert('User Name already exist with another account. Please try with other User Name');</script>";
}
}


header("Location: homepage.php");
?>