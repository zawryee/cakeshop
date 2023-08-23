
<?php 
        if (isset($_SESSION['userid'])) {
          if ($_SESSION['position']=='Admin') {
           echo '<div id="wrapper">
         <ul class="sidebar navbar-nav trans">
        <li class="nav-item">
          <a class="nav-link text-dark" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a title="Customers" class="nav-link text-dark" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span></a>
        </li>
        <li class="nav-item">
          <a title="Products" class="nav-link text-dark" href="product.php">
            <i class="fas fa-fw fa-birthday-cake"></i>
            <span>Products</span></a>
        </li>
        <li class="nav-item">
          <a title="Transaction" class="nav-link text-dark" href="detail.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaction</span></a>
        </li>
                <li class="nav-item">
          <a title="Admins" class="nav-link text-dark" href="admin.php">
            <i class="fas fa-fw fa-user-secret"></i>
            <span>Admins</span></a>
        </li>
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">';
          }
          elseif ($_SESSION['position']=='Encoder') {
             echo '<div id="wrapper">
         <ul class="sidebar navbar-nav trans">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-dark" href="customer.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Customers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="product.php">
            <i class="fas fa-fw fa-birthday-cake"></i>
            <span>Products</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="supplier.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Supplier</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="tdetailtable.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaction</span></a>
        </li>
        
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">';
         
         }elseif ($_SESSION['position']=='Customer') {

            echo '<div id="wrapper">
         <ul class="sidebar navbar-nav trans">
        <li class="nav-item">
          <a class="nav-link text-dark" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a title="Order" class="nav-link text-dark" href="cart.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a>
        </li>
        <li class="nav-item">
          <a title="List of Orders" class="nav-link text-dark" href="order.php">
            <i class="fas fa-fw fa-th-list"></i>
            <span>List of Orders</span></a>
        </li>
         
        
      </ul>
         <div id="content-wrapper">

        <div class="container-fluid">';
          }
        }
          else{
          echo '<div id="wrapper">

           <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a>
        </li>
         </ul>
         <div id="content-wrapper">

        <div class="container-fluid">';
          }
         ?>
        
      <!-- Sidebar -->


  <style>
      ul.trans{
        background: rgba(255, 180, 182, 0.6);
      }

      ul.trans:hover{
        background: rgba(185, 130, 132, 0.9);
      }

      div.tr-form{
        opacity: 0.8;
      }

      div.tr-form:hover{
        opacity: 1.0;
        transform: translateY(-10px);
      }

      li:hover{
        opacity: 1.0;
        transform: scale(1.1,1.1);  
        
      }

      /* span{
        color: rgba(255, 255, 255, 0.8); 
        
      } */

      footer{
        z-index:10;
      }


  </style>

     

         