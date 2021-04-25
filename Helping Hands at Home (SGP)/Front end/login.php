<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
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
    $query="INSERT into customer(`uname`,`pno`,`pwd`,`address`) values('".$uname."','".$pno."','".$enc_password."','".$address."')";
    $msg=mysqli_query($con,$query);
   // echo $query;
    if($msg)
    {
        echo "<script>alert('Sign Up successfully');</script>";
    }
	
} else{
    echo "<script>alert('User Name already exist with another account. Please try with other User Name');</script>";
}
}


// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['pwd'];
$dec_password=$password;
$username=$_POST['uname'];
$ret= mysqli_query($con,"SELECT * FROM customer WHERE uname='$username' and pwd='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
//$extra="welcome.php";
$_SESSION['uname']=$_POST['uname'];
//$_SESSION['id']=$num['id'];
$_SESSION['pno']=$_POST['pno'];
//$host=$_SERVER['HTTP_HOST'];
//$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:homepage.php");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="login.php";
//$host  = $_SERVER['HTTP_HOST'];
//$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:login.php");
exit();
}
}
?>


<!DOCTYPE html>
<html>
    <head>

        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximumscale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

    </head>

    <body>
        
        <div class="container">
            <div class="row">

            
                
                    <div class="col-lg-12 banner-form my-5 form-box">

                            <h3 style="color: #fff;" class="text-center py-3">Helping Hands To Home</h3>

                                 

                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-8">
                                                        
                                                            <div class="container my-5">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5 style="color: #fff;">New User ? <br>
                                                                            Sign Up Here</h5>
                                                                    </div> 
                                                                </div>
                                                                <form action="" method="post">   
                                                                <div action="" class=" row">


                                                                    <div class="col-12 py-2">
                                                                        <input type="text" name="username" class="form-control" placeholder="User Name" required>
                                                                    </div>

                                                                    <div class="col-12 py-2">
                                                                        <input type="number" name="pno" class="form-control" placeholder="Phone Number" required>
                                                                    </div>

                                                                    <div class="col-12 py-2">
                                                                        <input type="password" name="passwd" class="form-control" placeholder="Create Password" required>
                                                                    </div>
                                                                    
                                                                    <div class="col-12 py-2">
                                                                        <textarea id="" cols="30" rows="5" name="address" class="form-control" placeholder="Address" required></textarea>
                                                                    </div>

                                                                    <div class="col-12 py-2 d-block">
                                                                    <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                                                                    </div>

                                                                </div>
                                                            
                                                                </form>
                                                            
                                                        
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-5">

                                                <div class="row">
                                                    <div class="col-10">
                                                        
                                                            <form action="" method="post">
                                                            
                                                            <div class="container my-5">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5 style="color: #fff;">Sign In</h5>
                                                                    </div> 
                                                                </div>

                                                                <div action="" class=" row">


                                                                    <div class="col-12 py-2">
                                                                        <input type="text" name="uname" class="form-control" placeholder="User Name" required>
                                                                    </div>

                                                                    <div class="col-12 py-2">
                                                                        <input type="password" name="pwd" class="form-control" placeholder="Password" required>
                                                                    </div>

                                                                    <div class="col-12 py-2 d-block">
                                                                    <button type="submit" name="login" class="btn btn-primary">Sign In</button>
                                                                    </div>

                                                                </div>
                                                            
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>





                    </div>
            
                

           </div>              
       </div>

    </body>
</html>