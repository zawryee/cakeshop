<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bee Cake Shop</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

     <link href="css/cart_style.css" rel="stylesheet">

  </head>

  <style>
    nav{
      background-color: rgba(20,20,20,0.85);
    }
  </style>

  <body id="page-top">

    <nav class="navbar navbar-expand  static-top">
      <i class="fa fa-birthday-cake mr-2 text-white" aria-hidden="true"></i>
      <a class="navbar-brand text-white" href="index.php">Bee Cake Shop</a>

      <!-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button> -->

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
         
          
              <?php 
     if (isset($_SESSION['userid'])) {
       if ($_SESSION['position']=='Admin'){
      echo '<a class="nav-link text-white">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</a>';
      }elseif ($_SESSION['position']=='Customer') {
      echo '<a class="nav-link text-white" href="#">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</a>';
      }
     }else{
      echo '<a class="nav-link text-white" href="register.php">Sign Up</a>';
     }
      ?>

          
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
       
        
            <?php 
     if (isset($_SESSION['userid'])) {
      echo '<a class="nav-link text-white" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>';
     }else{
      echo '
          <a class="nav-link text-white" href="login.php" id="userDropdown">Login</a>
          
       ' ;
      

     }
      ?>
            
         
      </ul>

    </nav>