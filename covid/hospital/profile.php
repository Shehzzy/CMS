<?php
session_start();
include 'check.php';
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
      <title>Hospital Profile</title>
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
               <a href="u_page.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-5 logo_sm">
                     <div class="logo">
                        <a href="index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                           <li><a href="index.php">Home</a></li>
                              <li><a href="hospitals.php">Hospitals</a></li>
                              <li><a href="about.php">About Us</a></li>
                              <li><a href="contact.php">Contact Us </a></li>
                        
                        </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
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

               <!-- ASIDE PANEL START -->

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
                    <a href="report.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br>
                    <a href="../h_action/h_out.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Logout</span></a>

                </aside>
            </div>

            <!-- ASIDE PANEL END -->
            <!-- PROFILE WITH PHP START -->


            <div class="col-lg-4 col-md-4 col-sm-4 ml-5">
               <h2 class="text-uppercase">Hospital  profile   </h2>
               <br>
               <img src="../images/profile.jpeg" alt="profile image" height="100px" width="60%">
               <br>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 ml-5">
               <h4>Information</h4>
               <br>
               <h6 class="font-weight-bold">HOSPITAL ID</h6>
               <p><?php echo $_SESSION  ['hos_id']; ?></p>
               <br>
              <?php
              $id = $_SESSION['hos_id'];
              include '../config/db.php';
              $query = "SELECT * FROM `hospital` WHERE id =$id";
              $result=mysqli_query($conn,$query);
              while ($row = mysqli_fetch_assoc($result)){
              ?>
              <h6 class="font-weight-bold">HOSPITAL NAME</h6>
               <p><?php echo $row['name'];?></p>
               <br>
               <h6 class="font-weight-bold">HOSPITAL EMAIL</h6>
               <p><?php echo $row['email']; ?></p>
               <br>
               <h6 class="font-weight-bold">HOSPITAL ADDRESS</h6>
               <p><?php echo $row['address']; ?></p>
               <br>
               <h6 class="font-weight-bold">HOSPITAL CONTACT</h6>
               <p><?php echo $row['cont_number']; ?></p>
               <br>
               <h6 class="font-weight-bold">CITY</h6>
               <p><?php echo $row['city']; ?></p>
               <br>
               <a href="update_form.php?up_id=<?php echo $_SESSION['hos_id'];?>"><button class="btn btn-success">Update</button></a>
               <a href="../h_action/d_user.php?user_id=<?php echo $_SESSION['hos_id'];?>"><button class="btn btn-danger">Delete</button></a>

               <?php
              }
               ?>
               </div>
            </div>
           
            
                        <!--PROFILE WITH PHP END  -->
               </div>
            </div>
      <!-- end coronata -->







      <footer>
         <div class="footer">
            <div class="container">
               <div style="text-align: center:">
                       
                     
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