<?php
session_start();

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
      <title>Registration form for hospitaals</title>
      <link rel="icon" href="../images/covid.png">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/reg.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="ttps://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
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
                              <li><a href="../index.php">Home</a></li>
                              <li><a href="../about.php">About</a></li>
                              <li><a href="../action.php">take action</a></li>
                              <!-- <li><a href="index.html" class="logo_midle">covido</a></li> -->
                              <li><a class="active" href="../news.php">news</a></li>
                              <li><a href="../doctores.php">doctores</a></li>
                              <li><a href="../contact.php">Contact </a></li>
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
      <h1 class="mt-5 ml-3">Register as a hospital</h1>
  <form action="../h_action/h_insert.php" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="email">Hospital Name</label>
      <input type="text" class="form-control" id="email" name="user_name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="user_email">
    </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="user_pswd">
    </div>
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="address"  name="address">
    </div>
  
    <div class="form-group">
      <label for="email">Contact Number:</label>
      <input type="number" class="form-control" id="number" name="cont_number">
    </div>
  
    <div class="form-group">
      <label for="email">City</label>
      <br>
    <select name="city">
      <option value="0">Select City</option>
      <option value="karachi">karachi</option>
      <option value="lahore"  >lahore</option>
      <option value="faislabad">Faislabad</option>
      <option>
</select>
    </div>
<div>

<div class="form-group">
      <label for="email">Region</label>
      <br>
    <select name="city">
      <option value="0">Select Region</option>
      <option value="Malir">Malir</option>
      <option value="PECHS">PECHS</option>
      <option>
</select>
</div>
</div>
<div class="text-center text-white">
  <button type="submit" class="btn btn-danger mt-5 mb-5" name="register">Register now </button>
  <br>
  <a href="h_login.php" class="btn">Already have an account? Login now</a>
  </form>
</div>
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