<?php
session_start();
include '../config/db.php';
include 'check.php';
$id=$_SESSION['hos_id'];
$query="SELECT * FROM `hospital`  where `id`=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Rejected App</title>
      <link rel="icon" href="../images/covid.png">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/app.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <script src="https://kit.fontawesome.com/aec557161b.js" crossorigin="anonymous"></script>

   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- top -->
      <!-- header -->
         <header class="header-area">
            <div class="left">
               <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
               <a href="../u_page.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="../index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                        <ul>
                              <li><a class="active" href="index.php">Home</a></li>
                              <li><a href="about.php">Hospitals</a></li>
                              <li><a href="action.php">Appointments</a></li>
                              <!-- <li><a href="index.php" class="logo_midle">covido</a></li> -->
                              <li><a href="news.php">news</a></li>
                              <li><a href="about.php">About</a></li>
                              <li><a href="contact.php">Contact </a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- end header -->
      <!-- end banner -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row">


               <!-- SIDE PANEL START  -->


               <div class="col-lg-2 col-md-3 col-sm-3">
                <aside>
                  <br>
                  <br>
                  <a href="profile.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">My Profile</span></a>
                  <br>
                    <a href="p_details.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">Pending appoinments</span></a>
                    <br>
                    <a href="rejected.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Rejected Appoinments</span></a>
                    <br>
                    <a href="p_history.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Appoinment History</span></a>
                    <br>
                    <a href="result.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Results</span></a>
                    <br>
                   
                    <a href="../h_action/h_out.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Logout</span></a>

                </aside>
            </div>
             <!-- SIDE PANEL END  -->

            <div class="col-lg-10 col-md-10 col-sm-10">
            <h4><?php echo $row['name'];?></h4>
            <br>
            <br>
            
               <h2 class="text-uppercase">Rejected Appoinments</h2>
               <br>
               <table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th> Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Vaccine</th>
      <th>Date</th>
      <th>Time</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $id=$_SESSION['hos_id'];
   
   include '../config/db.php';
   $query="SELECT patients.id,vaccine.Id,bookings.* FROM `bookings` INNER JOIN patients ON bookings.p_id=patients.id INNER JOIN vaccine ON bookings.v_id=vaccine.Id WHERE hos_id=$id and bookings.status=2";

   $result=mysqli_query($conn,$query );
   while($row=mysqli_fetch_assoc($result)){
   ?>
   <tr>
   <td><?php echo $row['id'];?></td>
   <td><?php echo $row['P_name'];?></td>
   <td><?php echo $row['email'];?></td>
   <td><?php echo $row['number'];?></td>
   <td><?php echo $row['v_id'];?></td>
   <td><?php echo $row['selected_date'];?></td>
   <td><?php echo $row['selected_time'];?></td>
   
   <td>
    <?php
     if ($row['status'] == 0) {
        echo "<span class='badge badge-warning'>Pending</span>";

     } else if ($row['status'] == 1) {
        echo "<span class='badge badge-success'>Approved</span>";
     } else if ($row['status'] == 2) {
        echo "<span class='badge badge-danger'>Rejected</span>";
     }
    
    
    ?>
</td>


 

   </tr>
   <?php 
      }
   ?>
  </tbody>
</table>

            </div>
               </div>
            </div>
      </div>
      
      <!-- end coronata -->
      
      <footer>
         <div class="footer">
            <div class="container">
               <div style="text-align: center">
                       
                     
                        <p><center>&copy; 2020 All Rights Reserved.</center></p>
                        <br>  
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/custom.js"></script>
   </body>
</html>
<?php

   
   if(isset($_POST['approve'])){
   
       $query = "UPDATE `bookings` SET `status`=1 WHERE `id`=".$_POST['appointment_id'];
       $result=mysqli_query($conn,$query);
       if($result){
           echo "<script>
           alert('This Appintment Status Has been Changed!');
           window.location='../hospital/p_details.php';
           </script>   
           ";
       }
       else{
           echo "<script>
           alert('This Appintment Status Has not  been Changed!');
           window.location='../hospital/p_details.php';
           </script>";
       }
   }
   ?>