
<?php 
require_once('dbconnection.php');
session_start();
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
?>


<!DOCTYPE html>

<html>
<head>
    <title>Home Page</title>
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
    <header1>
        <div id="header">
            
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container">
                            <a href="#" class="navbar-brand mr-auto">HELPING HANDS AT HOME</a>

                            <button class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#mynavbar">
                                <span class="navbar-toggler-icon ham-icon" ></span>
                            </button>

                            <div class="collapse navbar-collapse text-center" id="mynavbar">

                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"> <a class="nav-link" href="homepage.php">HOME</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="aboutus.php">ABOUT</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                                    <li class="nav-item mx-2"><a href="logout.php"><button class="btn btn-secondary">Logout</button></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 mb-5 banner-message">
                                <div class="row">
                                    <div class="col-12 my-2">
                                        
                                    </div>
                                    <div class="col-12 my-3 mt-5">
                                        <h1>SERVICE AT YOUR DOORSTEP</h1>
                                    </div>
                                    <div class="col-12 my-2">
                                        <p>Book the home services and get it done by expert technicians, at your own time convinience and reasonable rate. </p>
                                    </div>
                                    <div class="col-12 my-2">
                                      <a href="#bookingform"><button type="button" class="banner-button">BOOK SERVICE NOW</button></a>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>              
        </div>
    </header>

    <div id="service">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 my-5 text-center">
                    <h2>What services we offer to our clients</h2>
                    <p class="text-muted">Who are in extrimly love with ecofriendly system.</p>
                </div>
                <div class="col-12">
                <h3 class="text-center my-4">AC Services</h3>

                </div>
                <div class="col-lg-4 col-md-6">
                    
                    <div class="service-box">  
                            <h5>
                                <span class="lnr lnr-user"> </span>
                                General Service
                            </h5>
                        <p class="text-muted">Proper Servicing of your Air Conditioner by Cleaning the dust from Indoor Unit and Outdoor unit.
                           <br> <br> Cost : 300/- Only <br> Estimated Time : 1 Hour
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span> AC Installation</h5>
                        <p class="text-muted">Installation of your Old or New Air Conditioner at your new location.
                            <br><br> Cost: 1500/- Only <br> Estimated Time : 1 Hour
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span>AC Repairing</h5>
                        <p class="text-muted">Get Your Air Conditioner Diagnosised and Repaired by the Expert and Skilled Technicians 
                            <br> <br> Cost: As Per Damage <br> Estimated Time : As Per Damage </p>
                    </div>  
                </div>
               
                <div class="col-12">
                <h3 class="text-center my-4">Men's Hair Care</h3>

                </div>
                <div class="col-lg-4 col-md-6">
                    
                    <div class="service-box">  
                            <h5>
                                <span class="lnr lnr-user"> </span>
                                Hair Cut
                            </h5>
                        <p class="text-muted"> Get Your Hair Cut by the skilled Hair Artists.
                           <br> <br> Cost : 100/- Only <br> Estimated Time : 1 Hour
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span> Shaving </h5>
                        <p class="text-muted">Get your Beared shaved or Trimmed as per Your Convinience.
                            <br><br> Cost: 70/- Only <br> Estimated Time : 15 Minutes
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span>Hair Cut and Shaving </h5>
                        <p class="text-muted">Get Both of our Services, Hair Cut and Beared Shaving or Trimming at one sitting at discounted Rates.   
                            <br> <br> Cost: 150/- Only <br> Estimated Time : 1.5 Hour </p>
                    </div>  
                </div>

                <div class="col-12">
                <h3 class="text-center my-4">Water Purifier Service</h3>

                </div>
                <div class="col-lg-4 col-md-6">
                    
                    <div class="service-box">  
                            <h5>
                                <span class="lnr lnr-user"> </span>
                                General Service
                            </h5>
                        <p class="text-muted">Proper Servicing of your Water Purifier by Cleaning the dust and Filter Candels.
                           <br> <br> Cost : 200/- Only <br> Estimated Time : 30 Minutes
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span> Water Purifier Installation</h5>
                        <p class="text-muted">Installation of your Old or New Water Purifier at your new location.
                            <br><br> Cost: 500/- Only <br> Estimated Time : 30 Minuits
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                        <h5> <span class="lnr lnr-user"> </span>Water Purifier Repairing</h5>
                        <p class="text-muted">Get Your Water Purifier Diagnosised and Repaired by the Expert and Skilled Technicians. 
                            <br> <br> Cost: As Per Damage <br> Estimated Time : As Per Damage </p>
                    </div>  
                </div>

                <div class="col-12">
                <h3 class="text-center my-4">Vehicle Cleaning</h3>

                </div>

                <div class="col-lg-4 offset-md-2 col-md-6">
                    
                    <div class="service-box">  
                            <h5>
                                <span class="lnr lnr-user"> </span>
                                Car Wash
                            </h5>
                        <p class="text-muted">Get Your car Properly washed at your home at your time.
                           <br> <br> Cost : 200/- Only <br> Estimated Time : 30 Minutes
                        </p>
                    </div>  
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box">  
                            <h5>
                                <span class="lnr lnr-user"> </span>
                                Bike Wash
                            </h5>
                        <p class="text-muted">Get Your Bike Properly washed at your home at your time.
                           <br> <br> Cost : 100/- Only <br> Estimated Time : 30 Minutes
                        </p>
                    </div>  
                </div>
               
               
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-6 pictureleft">
                
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 py-2">
                        <h1>Quick Service <br> By Large Network</h1>
                    </div>
                    <div class="col-md-12 py-2">
                        <h6>We are here to serve you exellence.</h6>
                    </div>
                    <div class="col-md-12 py-2 text-muted">
                        <p  class="padd">Helping Hands At Home is a website where we helps you in basic home services like Appliances repair and regular services at your door step. 
One can book skilled technicians for their regular maintenance of products like AC, Water Purifier, etc. At their own convenience and time.
</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid yellob my-5">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-4 text-center py-3">
                    <h1>50+</h1>
                    <p>Professionals</p>
                </div>
                <div class="col-lg-4 text-center py-3">
                    <h1>5</h1>
                    <p>Working Cities</p>
                </div>
                <div class="col-lg-4 text-center py-3">
                    <h1>11</h1>
                    <p>Services</p>
                </div>
                
            </div>
        </div>
    </div>



  

  <div class="container" id="bookingform">
       <div class="row">
           <div class="col-lg-8 offset-2 banner-form my-5 form-box">
           <form action="" method="post">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <h5 style="color: #fff;">Book Your Service Now!</h5>
                        </div> 
                    </div>

                    <div action="" class=" row">

                        <div class="col-8 py-3">
                                <label for="">Select Service</label>
                                <select type="text" name="service" class="form-control" placeholder="Select Your Service" required>
                                    
                                    <option value="4">AC General Service   300/-</option>
                                    <option value="9">AC Insallation      1500/-</option>
                                    <option value="5">AC Repair                 </option>
                                    <option value="8">Water Purifier Service 200/-</option>
                                    <option value="10">Water Purifier Installation 500/-</option>
                                    <option value="11">Water Purifier Repair </option>
                                    <option value="1">Hair Cut 100/-</option>
                                    <option value="2">Beared Shave 70/-</option>
                                    <option value="3">Hair Cut + Shaving 150/-</option>
                                    <option value="6">Car Wash 200/-</option>
                                    <option value="7">Bike Wash 100/-</option>
                                </select>
                        </div>


                        

                        <div class="col-6 py-3">
                            <label for="">Choose Date</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                            
                        <div class="col-6 py-3">
                            <label for="">Choose Time</label>
                            <input type="time" name="time" class="form-control" required>
                        </div>

                        <?php $sess=$_SESSION['uname'];
                         $fsql="SELECT * FROM `customer` WHERE `uname`='$sess'";
                        // echo $fsql;
                         $fresult=mysqli_query($con, $fsql);
                         $disp=mysqli_fetch_array($fresult);
                        ?>
                        <div class="col-12 py-3">
                            <label for="<?php echo $disp['uname']?>">User Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $disp['uname']?>" placeholder="Your Name">
                        </div>

                        <div class="col-12 py-3">
                            <label for="<?php echo $disp['address']?>">Address</label>
                            <input type="text" name="address" class="form-control"  value="<?php echo $disp['address']?>" placeholder="Address">
                        </div>

                        <div class="col-12 py-3">
                            <label for="<?php echo $disp['pno']?>">Contact</label>
                            <input type="number" name="contact" class="form-control" value="<?php echo $disp['pno']?>" placeholder="Phone Number">
                        </div>

                        <div class="col-12 py-3 d-block">
                            <button type="submit" name="confirm" class="banner-button btn btn-warning">Confirm Your Booking</button>
                        </div>

                    </div>

                </div>

                </form> 
            </div> 
       </div>
   </div>


  

  
    

    
    
    <div id="footer">
        <footer class="container-fluid">
            <div class="container">
                <div class="row">
            

                    <div class="col-12 text-center pt-5 copyright">
                        <p class="text-muted"> Copyright All rights Reserved | This website is designed by <span>PJK</span> </p>
                    </div>
                </div>
            </div>

        </footer>
    </div>










</body>

</html>