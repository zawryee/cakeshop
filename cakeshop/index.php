<?php include('includes/connection.php');?>  
<!--header area-->
<?php include 'includes/header.php'; ?>
<!--sidebar area-->
<?php ?>


          <!-- Breadcrumbs-->
<!--breadcrumbs area-->
<?php if (isset($_SESSION['userid'])) { 
	 if ($_SESSION['position']=='Admin') {
        include 'includes/sidebar.php';
		include 'includes/breadcrumbs.php';
	}elseif ($_SESSION['position']=='Customer') {
        include 'includes/sidebar.php';
		include 'includes/cakes.php';
	}

}else{
	include 'includes/breadcrumbs.php';
} 
?>

          <!-- Icon Cards-->       
          
         <!--Icon Card area-->
<?php /*include 'includes/iconcards.php'*/; ?>
          <!-- Area Chart Example-->

          <!-- DataTables Example -->

      <!--footer area-->
<?php include 'includes/footer.php'; ?>


