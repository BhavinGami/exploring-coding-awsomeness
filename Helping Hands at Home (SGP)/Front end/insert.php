<?php
require_once('dbconnection.php');
if(isset($_POST['confirm']))
{
	$uname=$_POST['username'];
	$ucon=$_POST['contact'];
	$service=$_POST['service'];
    $address=$_POST['address'];
	$date=$_POST['date'];
    $time=$_POST['time'];
    $sql="INSERT into user_service(`ucon`,`uname`,`sname`,`address`,`date`,`time`) values('".$ucon."','".$uname."','".$service."','".$address."','".$date."','".$time."')";
    $msg=mysqli_query($con,$sql);
    if($msg)
{   
    echo "<script>alert('Service Booked Up successfully');</script>";
}

}

header("Location: homepage.php");
?>