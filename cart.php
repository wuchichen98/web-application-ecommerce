<?php
  require_once("tools.php");
  session_start();

  $id = '';
  $qty = '';
  $oid = '';
  $errorCount = 0;
  $all_services = getAllServices('services.txt');

  // if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['oid'])) {
  if (isset($_POST['id'], $_POST['qty'], $_POST['oid'])) {

    $id = $_POST['id'];
    $qty = $_POST['qty'];
    $oid = $_POST['oid'];
    
    // if(!is_numeric()) {
    //   $errorCount++;
    // } elseif() 

    // server side code is required here to validate and check if
    //  - qty is a positive integer (ie 1 or more)
    //  - product/service and option ids are valid

    $_SESSION['cart'][$oid]['pid'] = $id;
    $_SESSION['cart'][$oid]['oid'] = $oid;
    $_SESSION['cart'][$oid]['qty'] = $qty;
  } else {
  }

  top_module("Order Cart | ME")
?>

<div class="global-container">
  <h2>Cart contents</h2>
<?php
  if(isset($_SESSION['cart'])){
    foreach ($_SESSION["cart"] as $oid => $orderDetails) {
      // $oid = $orderDetails['oid'];
      $pid = $orderDetails['pid'];
      $serviceTitle = $all_services[$pid][$oid]['Title'];
      $serviceOption = $all_services[$pid][$oid]['Option'];
      $serviceDescription = $all_services[$pid][$oid]['Description'];
      $imagePath = $all_services[$pid][$oid]['ImagePath'];
      $singlePrice = $all_services[$pid][$oid]['Price'];
      
      $serviceQuantity = $orderDetails['qty'];
      $subtotal = $serviceQuantity * $singlePrice;

      echo '<div class="one-order">'; //+ $productDetails['oid'] + "</h3>";
      echo '<div class="service-image-container">';
      echo '<img ';
      echo $imagePath;
      echo ' height="200" />';
      echo '</div>';
      echo '<h3>';
      echo $serviceTitle;
      echo '</h3>';
      echo '<p>';
      echo $serviceOption;
      echo '</p>';
      echo '<p>';
      echo $serviceDescription;
      echo '</p>';
      echo '</div>';
      echo '<div class="qty-subtotal">';
      echo '<span class="service-quantity">Quantity: ';
      echo $serviceQuantity;
      echo '</span>';
      echo '<span class="service-subtotal">Subtotal: ';
      echo $subtotal;
      echo '</span>';
      echo '</div>';
    }
  } else {
    echo "<h3>Empty</h3>";
  }
?>
<!-- div end of global-container -->
</div>

<div class="global-container">
  <form action="./services.php" method="post">
    <!-- <div class="cancel-button"> -->
      <input type="hidden" name="cancel" value="this is the input that cancels it">
      <button type="submit" id="cancel-button">Cancel Cart</button>
     <!-- </div> -->
  </form>
  <form action="./checkout.php" method="post">
    <!-- <div class="proceed-checkout-button"> -->
      <button type="submit" id="to-checkout-button">Proceed to Checkout</button>
     <!-- </div> -->
  </form>
</div>


<?php end_module(); ?>
<?php
  // table('GET Data',$_GET);
  // table('POST Data',$_POST);
  error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
<?php printMyCode(); ?>
