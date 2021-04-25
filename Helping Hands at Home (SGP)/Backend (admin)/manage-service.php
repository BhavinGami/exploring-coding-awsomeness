<?php
session_start();
include'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from manage-service where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Service</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
           
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar">
              <ul class="sidebar-menu" >
              
              	  
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
              	  	
                  <li class="mt">
                      <a href="change-password.php">
                          
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          
                          <span>Manage Users</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="manage-service.php" >
                          
                          <span>Manage Service</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="customer-support.php" >
                          
                          <span>Customer Support</span>
                      </a>
                   
                  </li>
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Service</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Services </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sr. No.</th>
                                  <th>Customer Name</th>
                                  <th>Customer Contact</th>
                                  <th>Address</th>
                                  <th>Date</th>
                                  <th>Time</th>
                                  <th>Service Name</th>
                                  <th>Cost</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from user_service");
                              
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                                <tr>
                                  <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['uname'];?></td>
                                  <td><?php echo $row['ucon'];?></td>
                                  <td><?php echo $row['address'];?></td>
                                  <td><?php echo $row['date'];?></td>
                                  <td><?php echo $row['time'];?></td>
                                  <?php
                                  $var=$row['sname'];
                                  $getsql= "SELECT * FROM `manage_service` WHERE `sid`='$var'" ;
                                  $query=mysqli_query($con,$getsql);
                                  while($data=mysqli_fetch_array($query)){
                                      ?>
                                   <td><?php echo $data['service'];?></td>
                                   <td><?php echo $data['cost'];?></td>   
                                  <?php }?>
                                </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
  

  </body>
</html>
<?php } ?>