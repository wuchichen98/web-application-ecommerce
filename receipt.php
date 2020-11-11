<?php
  require_once("tools.php");
  session_start();

  $all_services = getAllServices('services.txt');
  $total = 0;

  $all_orders = getAllOrders('orders.txt');

  top_module("Receipt Page | ME");
?>
<div class="global-container" >
  <h2>Order Details</h2>

  <table class="company-table">
    <tr>
      <th>Company Name</th>
      <th>Madrid Electrical</th>
    </tr>
    <tr>
      <th>Email</th>
      <th>enquiries@madelectrical.com</th>
    </tr>
    <tr>
      <th>Mobile Number</th>
      <th>0498712345</th>
    </tr>
    <tr>
      <th>Address</th>
      <th>124 La Trobe St, Melbourne VIC 3000</th>
    </tr>
  </table>

  <table class="user-table">
    <tr>
      <th>Order Name</th>
      <th><?php echo $_SESSION['user']['Name'];?></th>
    </tr>
    <tr>
      <th>Email</th>
      <th><?php echo $_SESSION['user']['Email'];?></th>
    </tr>
    <tr>
      <th>Mobile Number</th>
      <th><?php echo $_SESSION['user']['Mobile'];?></th>
    </tr>
    <tr>
      <th>Address</th>
      <th><?php echo $_SESSION['user']['Address'];?></th>
    </tr>
  </table>
  

      
  <table class="order-table">
    <tr>
      <th>Date</th>
      <!-- <th>Order Name</th>
      <th>Email</th>
      <th>Mobile</th> -->
      <th>PID</th>
      <th>Service Name</th>
      <th>OID</th>
      <th>Quantity</th>
      <th>Unit Price</th>
      <th>Sub Total</th>
    </tr>
    <?php 
      foreach($all_orders as $indexCount => $itemDetails) {
        $date = $itemDetails['Date'];
        $name = $itemDetails['Name'];
        $email = $itemDetails['Email'];
        $mobile = $itemDetails['Mobile'];
        $pid = $itemDetails['PID'];
        $oid = $itemDetails['OID'];
        $quantity = $itemDetails['Quantity'];
        $unitprice = $itemDetails['Unit Price'];
        $subtotal = $itemDetails['Sub Total'];
        $option = $all_services[$pid][$oid]['Option'];
        
        echo "<tr>";          
          echo "<th>$date</th>";
          // echo "<th>$name</th>";
          // echo "<th>$email</th>";
          // echo "<th>$mobile</th>";
          echo "<th>$pid</th>";
          echo "<th>$option</th>";
          echo "<th>$oid</th>";
          echo "<th>$quantity</th>";
          echo "<th>\$$unitprice</th>";
          echo "<th>\$$subtotal.00</th>";
        echo "</tr>";

        $total += $subtotal;

        // echo "<tr>";          
        //   echo "<th>".$itemDetails['Date']."</th>";
        //   echo "<th>".$itemDetails['Name']."</th>";
        //   echo "<th>".$itemDetails['Email']."</th>";
        //   echo "<th>".$itemDetails['Mobile']."</th>";
        //   echo "<th>".$itemDetails['PID']."</th>";
        //   echo "<th>".$all_services[]."</th>";
        //   echo "<th>".$itemDetails['OID']."</th>";
        //   echo "<th>".$itemDetails['Quantity']."</th>";
        //   echo "<th>".$itemDetails['Unit Price']."</th>";
        //   echo "<th>".$itemDetails['Sub Total']."</th>";
        // echo "</tr>";
      }
    ?> 
  
  </table>


  <div>
    <h3 class="total-cost">Total: $<?php echo $total?>.00</h3>
  </div>
  
</div>

<?php end_module(); ?>

<?php
  // table('GET Data',$_GET);
  // table('POST Data',$_POST);
  error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
<?php printMyCode(); ?>
