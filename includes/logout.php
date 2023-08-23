 <?php 
 
session_start();
foreach ($_SESSION as $key => $value){
    unset($_SESSION[$key]);
}
// session_unset($_SESSION['userid']);
// session_unset($_SESSION['fname']);
// session_unset($_SESSION['lname']);
// session_unset($_SESSION['position']);
// session_unset($_SESSION['cart']);
header("location:../index.php");
session_destroy();
?>