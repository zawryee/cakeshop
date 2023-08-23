 
<?php include('includes/connection.php');?>  

<!--header area-->
<?php include 'includes/header.php'; ?>

<!--sidebar area-->
<?php include 'includes/sidebar.php'; ?>
<?php 
$query = 'SELECT a.transac_code,concat(b.fname," ",b.lname)as name,a.delivery_date,b.contact,b.address,a.status FROM tbltransacdetail a,tblusers b
              WHERE a.customer_id=b.user_id and
              transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stats = $row['status'];
               $name = $row['name'];
               $del = $row['delivery_date'];
               $contact = $row['contact'];
               $address = $row['address'];
               $cd = $row['transac_code'];
              }
         
?>

<body class="bg-img" style="background-image: url('img/bg.png'); height: 100vh; object-fit: contain;"></body>

 <span id="divToPrint">
 <div class="card">
   
            <div class="card-header">
              <div style="margin-bottom: 30px">
             <center><h2>Bee Cake Shop</h2><p style="font-size: 20px">P&E Veng, Serchhip<br>Contact: 7005012200</p></center>
         </div>
              <?php if ($stats=='Confirmed') {
                ?>
               
         <ul>
             <div  style="margin-bottom: 30px">
            <h5>Order No.# : 0<?php echo $cd; ?></h5>
            <h5>Name : <?php echo $name; ?></h5>
            <h5>Contact : 0<?php echo $contact; ?></h5>
            <h5>Address : <?php echo $address; ?></h5>
            <h5>Date to Deliver : <?php echo $del; ?></h5>
        
        </div>
            <?php  }else{
              ?>
              <h5>Your order is being processed. Please check your list of order(s) for notification of confirmation.</h5>
           <?php } ?>
                

            <div class="card-body">
              <div class="table-responsive">
                            <table cellpadding="4" width="100%" cellspacing="0">
                                <thead align="left">
                                    <tr>
                                        <th>Product</th>
                                        <th>OrderDate</th>
                                        <th>Quantity</th>
                                        <th>Price</th> 
                                        <th>Total</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = "SELECT b.product_name,a.date,a.qty,a.price,a.total FROM tbltransac a,tblproducts b WHERE a.product_code=b.product_code AND a.transac_code='".$_GET['id']."' GROUP BY a.product_code";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['product_name'].'</td>';                     
                            echo '<td>'. $row['date'].'</td>';
                            echo '<td>'. $row['qty'].'</td>';
                            echo '<td>&#8377 '. $row['price'].'</td>';
                            echo '<td>&#8377 '. $row['total'].'</td>';
                           /* echo '<td>  ';
                            echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                                           <?php 
$query = 'SELECT * FROM tbltransacdetail
              WHERE
              transac_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['totalprice'];
              }
         
?>

                                <tr>
                                  <td colspan="4" align="right"><br><h5> Subtotal :</h5></td>
                                  <td ><br><h5> &#8377 <?php echo $zz-150; ?></h5></td>
                                </tr>
                                <tr>
                                  <td colspan="4" align="right"><h5> Delivery Fee :</h5></td>
                                  <td ><h5> &#8377 150</h5></td>
                                </tr>
                                  <tr>
                                  <td colspan="4" align="right"><h5> Total :</h5></td>
                                  <td ><h5> &#8377 <?php echo $zz; ?></h5></td>
                                </tr>

                            </table>
                            <?php
            $result = mysqli_query($db, "SELECT * FROM tbltransacdetail 
              WHERE transac_code =".$_GET['id']) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stats = $row['status'];
              }
         
                             if ($stats=='Confirmed') {
                             ?>
                             <h5>We thank you for buying our cakes.</h5>
                            <p>Hope you enjoy. Have a nice day!</p>

                            <p> Sincerely.</p>

                           <h4>Bee Cake Shop</h4>
                           <?php }else{

                           } ?>
                        </div>
            </div>
        
        <!--   <h5 align="right" style="margin-right: : 150px">Total Price : &#8377 <?php echo $zz; ?></h5> -->
          </div>



          
        </div><br>
</ul>
</span>
             <a href="order.php" class="btn btn-xs btn-info fas fa-arrow-left" ">Back</a>
             <?php 
             if ($stats=='Confirmed') {
               ?>
               <a href="#" class="btn btn-xs btn-info fas fa-print" value="print" onclick="PrintDiv();">Print</a>
            <?php }
              ?>
             
        <?php include 'includes/footer.php'; ?>


        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>