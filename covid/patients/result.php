<?php
session_start();
include "../config/db.php";
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
      <title>My Appointments</title>
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
            <div class="col-lg-2 col-md-3 col-sm-3">
                <aside>
                  <br>
                  <br>
                  <a href="profile.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">My Profile</span></a>
                  <br>
                    <a href="app.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3 mt-5">My appoinments</span></a>
                    <br>
                    <a href="b_app.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Book an appoinment</span></a>
                    <br>
                    <a href="test_request.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Book For Covid test</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Results</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br>
                </aside>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="text-center">
               <h2 class="text-uppercase">RESULT</h2>
               </div>
               <br>
               <h5><?php echo"PATIENT ID ".$_SESSION['id'];?></h5>
               <br>
               <br>
               <?php
include "../config/db.php";
$id=$_SESSION['id'];
$query="SELECT patients.id,hospital.id,vaccine.Id,bookings.* FROM `bookings` 
INNER JOIN patients ON bookings.p_id=patients.id
INNER JOIN vaccine ON bookings.v_id=vaccine.Id
INNER JOIN hospital ON bookings.hos_id=hospital.id WHERE patients.id=$id";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {


?>

               <div class="card mb-5">
  <!-- <img class="card-img-top" src="../images/profile.jpeg" alt="Profile Picture" height="10px"> -->
  <div class="card-body">
    <h4 class="card-title mt-4">Covid Test And Vaccination Management System</h4>
    <hr>
    <h3 class="mt-4">Certificate For Covid-19</h3>
    <p class="card-text mt-4">
     <?php echo " Name " . " " .$row['P_name']; ?>
    </p>
    <p class="card-text mt-4">
     <?php echo "Mobile Number" . " " .$row['number']; ?>
    </p>
    <h6 class="mt-4">has been administered following <b>Covid 19 </b>Vaccine</h6>
    <br>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th>Vaccine Name</th>
      <th>Dosages</th>
      <th>Hospital</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php


    ?>
   <tr>
   <td><?php
                  if($row['v_id']==1){
                     echo "Pfizer–BioNTech";
                  }
                  else if($row['v_id']==2){
                     echo "Moderna";
                  }
                  else if($row['v_id']==3){
                    echo "CanSino";
                 }
                 else if($row['v_id']==4){
                    echo "SinoVac";
                 }
                 else if($row['v_id']==5){
                    echo "SinoPharm";
                 }
                 
                  
                  ?></td>
                  <td><?php echo "2"; ?></td>
                  <td><?php
                  if($row['hos_id']==1){
                     echo "Alkhidmat Hospital";
                  }
                  else if($row['hos_id']==2){
                     echo "Shifa Hospital";
                  }
                  else if($row['hos_id']==3){
                     echo "Liaquat National Hospital";
                  }
                  else if($row['hos_id']==4){
                     echo "Abbasi Shaheed hospital";
                  }
                  else if($row['hos_id']==5){
                     echo "South city hospital";
                  }
                  else if($row['hos_id']==6){
                     echo "Hashmanis hospital";
                  }
                  else if($row['hos_id']==7){
                     echo "Pak International hospital";
                  }
                  else if($row['hos_id']==8){
                     echo "Anum hospital";
                  }
                  else if($row['hos_id']==9){
                     echo "Taj Medical Complex Hospital";
                  }
                  else if($row['hos_id']==10){
                     echo "Karachi Medical Complex Consultants Clinic";
                  }
                  else if($row['hos_id']==11){
                     echo "Altamash General Hospital";
                  }
                  
                  ?></td>
                  <td><?php echo $row['selected_date'];?></td>
                  
               </tr>
                 </tbody>
              </table>
              <?php
               } 
              ?>


            </div>
               </div>
            </div>
      </div>
      
      <!-- end coronata -->








      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="../index.php">Home</a><li>
                                 <li><a href="">What we do</a><li>
                                 <li> <a href="">Media</a><li>
                                 <li> <a href="">Travel Advice</a><li>
                                 <li><a href="">Protection</a><li>
                                 <li><a href="">Care</a><li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                              <ul class="top_infomation">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Making this the first true</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                Call : +01 1234567890 </li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="">Email : demo@gmail.com</a></li>
                              </ul>  
                           </div>
                        </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                           <div class="map">
                              <img src="../images/map.png" alt="#"/>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
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