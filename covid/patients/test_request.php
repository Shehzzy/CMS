
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
      <title>Users</title>
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


               <!-- SIDE PANEL START  -->


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
                    <a href="test_request.php" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Book for Covid test</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Results</span></a>
                    <br>
                    <a href="#" class="link ml-5 mt-5"><i class="fa-sharp fa-solid fa-plus mt-5"></i><span class="ml-3  mt-5">Reports</span></a>
                    <br>
                </aside>
            </div>
             <!-- SIDE PANEL END  -->

            <div class="col-lg-8 col-md-8 col-sm-10 ml-5">
               <h2 class="text-uppercase">Book For Covid Test</h2>
               <br>
               <br>
               <form action="../p_action/p_book.php" method="post">
              
               <div class="mb-3 mt-3">
               <label for="id">PATIENT ID</label>
            
               <input type="number" name="user_id"  class="form-control" value="<?php echo $_SESSION['id'];?>">
            </div>

               <div class="mb-3 mt-3">
               <label for="email">Name:</label>
            
               <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
                        
                        <div class="mb-3 mt-3">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
               <label for="pwd">Phone Number:</label>
               <input type="number" class="form-control" id="pwd" placeholder="Enter phone number" name="p_num">
            </div>

            <!-- HOSPITAL DROPDOWN COMING FROM DATABASE PHP -->

            <?php
            include '../config/db.php';
            $query = "SELECT `id`,`name` FROM `hospital`";
            $result = mysqli_query($conn, $query);
            if($result->num_rows>0){
               $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
            }
               ?>
                  <div class="mb-3">
                  <label for="pwd">Hospital Names</label>
                  <br>
                  <select class="form-select" aria-label="Default select example" name="hospital">
                  <option value="selected">Select Hospital</option>
                  <?php 
                  foreach ($row as $rows) {
                  ?>
                     <option><?php echo$rows['id']."- ".$rows['name']; ?> </option>
                     <?php 
                     }
                     ?>
                  </select>
                  </div>

                  
          <div class="form-check,mb-3">

          <label for="pwd">Is The Patient Undergoing Dialysis?</label>
          </div>
          <div class="ml-4">
          <input type="radio" class="form-check-input" id="yes" name="yes" value="yes">YES
          </div>
          <div class="ml-4">
          <input type="radio" class="form-check-input" id="no" name="no" value="no">NO
          </div>
          <br>
          <div class="mb-3">
          <label for="date">Date When Symtoms First Appeared?</label>
               <input type="date" class="form-control" name="date">
            </div>

            <div class="form-check,ml-4">
            <label for="symtoms">What Are The Symptoms You're Currently Facing?</label>
            </div>
            <div class="ml-5">
         <input class="form-check-input" type="checkbox" id="fever" name="fever" value="fever">
         <label class="form-check-label">Fever</label>
        </div>
        <div class="ml-5">
         <input class="form-check-input" type="checkbox" id="bodyache" name="bodyache" value="bodyache">
         <label class="form-check-label">Bodyache</label>
        </div>
        <div class="ml-5">
         <input class="form-check-input" type="checkbox" id="smell" name="smell" value="smell">
         <label class="form-check-label">Loss Of Smell</label>
        </div>
        <div class="ml-5">
         <input class="form-check-input" type="checkbox" id="cough" name="cough" value="cough">
         <label class="form-check-label">Dry Cough</label>
        </div>
        <div class="ml-5">
         <input class="form-check-input" type="checkbox" id="diarrhea" name="diarrhea" value="diarrhea">
         <label class="form-check-label">Diarrhea</label>
        </div>
                 
                   <div class="mb-3 mt-3">
               <label for="date">Select date</label>
               <input type="date" class="form-control" name="date">
            </div>

            <div class="mb-3 mt-3">
               <label for="Select Time">Select Time</label>
               <input type="time" class="form-control" id="email"  name="time">
            </div>
                  </div>
               </div>

         <div class="mb-3 mt-5 text-center">
            <button type="submit" class="btn btn-danger" name="book">Book Now</button>
            </div>





   

               </form>

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
</htm