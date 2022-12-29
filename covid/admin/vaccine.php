<?php
session_start();
include '../config/db.php';
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
      <title>All vaccines</title>
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
                              <li><a  href="../index.php">Home</a></li>
                              <li><a href="../about.php">Hospitals</a></li>
                             
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
                    <a href="alldetails.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">All Patient Details</span></a>
                    <br>
                    <a href="hospital.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Registered Hospitals</span></a>
                    <br>
                    <a href="p_hosp.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Pending Hospitals Requests </span></a>
                    <br>
                    <a href="reports.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br>
                    <a href="vaccine.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Vaccine List</span></a>
                    <br>
                    <a href="b_details.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Booking Details</span></a>
                    <br>
                    <!-- <a href="reports.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br> -->
                    <a href="out.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Logout</span></a>

                </aside>
            </div>
             <!-- SIDE PANEL END  -->

            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="text-center">
               <h2 class="text-uppercase">Vaccines</h2>
               </div>
               <br>
               <br>
               <table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Vaccine name</th>
      <th>Availability</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $id=$_SESSION['id'];
   
   include '../config/db.php';
   $query="SELECT * from `vaccine`";

   $result=mysqli_query($conn,$query );
   while($row=mysqli_fetch_assoc($result)){
   ?>
   <tr>
   <td><?php echo $row['Id'];?></td>
   <td><?php echo $row['V_name'];?></td>
   <td><?php if($row['Availability']==1){
           echo "Available";
   }
   else{
           echo "Unavailable";
   }
   ?></td>
   <td>
 <a class="btn btn-primary" href="u_vaccine.php?v_id=<?php echo $row['Id'];?>"><button  name="v_update"></button>Update</a>
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
      
      <!--  footer -->
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