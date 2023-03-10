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
      <title>Login as a hospital</title>
      <link rel="icon" href="../images/covid.png">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/u.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif"/>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
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
            <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 mb-5">
            <div class="form">
               <h4 class="mt-5 mb-5 text-center">Login to view your data</h4>
            <form method="post">
               <label for="email">Email</label>
               <br>
               <input type="email" name="h_email" id="email" required>
               <br>
               <label for="password">Password</label>
               <br>
               <input type="password" name="h_pass" id="pass" required>
               <br>
               <div class="text-center">
               <button type="submit" class="btn btn-danger" name='login'>Continue</button>
               </div>
              </form>
            </div>
           </div>
  </div>
      </div>
      </div>
      
      <!-- end coronata -->
<?php

if(isset($_POST['login'])){
    $email=$_POST['h_email'];
    $pass=$_POST['h_pass'];

    include '../config/db.php';

    $query="SELECT * FROM `hospital` WHERE `email`='$email' and `password`='$pass' AND  `status` =1";
    $result=mysqli_query($conn,$query);
         $count=mysqli_num_rows($result);

         $row=mysqli_fetch_assoc($result);
         $_SESSION['hos_id']=$row['id'];
       $_SESSION['h_email'] = $row['email'];
    
    if($row['status']==0){
      echo "<script>
      alert(' you are not logged in!');
      window.location='waiting.php';
      </script>";
        
    }
    else if($row['status']==1){
        

        echo "<script>
        alert('Congratulation you have successfully login!');
        window.location='profile.php';
        </script>";

    }}

 ?>







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