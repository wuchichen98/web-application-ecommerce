<?php
  require_once("tools.php");
  session_start();
  $all_services = getAllServices('services.txt');

  $errorCount = 0;
  $name = '';
  $email = '';
  $address = '';
  $mobile = '';
  $creditCard = '';
  $creditCardExpiry = '';

  $patternName = "#^[a-zA-Z ,.'-]+#";
  $patternAddress = "#^[A-Za-z0-9 \-\\/,.']+$#";
  $patternMobile = "#^(\+614|04|\(04\)) ?(\d ?){8}#";
  $patternCreditCard = "#^(\d ?){12,19}$#";

  $nameError = '';
  $emailError = '';
  $addressError = '';
  $mobileError = '';
  $creditCardError = '';
  $cardExpiryError = '';

  if (!empty($_POST)) {
    // if isset
    $name = trim($_POST['Name']);
    $email = trim($_POST['Email']);
    $address = trim($_POST['Address']);
    $mobile = trim($_POST['Mobile']);
    $creditCard = trim($_POST['CreditCard']);
    $creditCardExpiry = trim($_POST['CreditCardExpiry']);
    // $creditCardExpiry = strtotime($_POST['CreditCardExpiry']);

    if(!preg_match($patternName, $name)){
      $errorCount++;
      $nameError = "Please provide your real name.";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errorCount++;
      $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
      $emailError = "Did you want to type $cleanEmail?";
    }
    
    if(!preg_match($patternAddress, $address)){
      $errorCount++;
      $addressError = "Please provide a valid address.";
    }

    if(!preg_match($patternMobile, $mobile)){
      $errorCount++;
      $mobileError = "Please provide a valid Australian Mobile Number.";
    }

    if(!preg_match($patternCreditCard, $creditCard)){
      $errorCount++;
      $creditCardError = "Please provide a valid Credit Card Number";
    }

    $currentDate = strtotime(date("Y-m-d"));
    $creditCardExpiry = strtotime($creditCardExpiry);
    $differenceDays = ($creditCardExpiry - $currentDate)/86400;

    if ($differenceDays < 28){
      $errorCount++;
      $cardExpiryError = "Error: Your card expires in less than 18";
    }
    
    if($errorCount == 0) {
      $_SESSION['user']['Name'] = $name;
      $_SESSION['user']['Email'] = $email;
      $_SESSION['user']['Mobile'] = $mobile;
      $_SESSION['user']['Address'] = $address;

      $records = [];
      if((isset($_SESSION['cart'], $_SESSION['user'])) && (!empty($_SESSION['cart'])) && (!empty($_SESSION['user']))) {
        foreach($_SESSION['cart'] as $oidIterator => $itemDetails) {
          $pid = $itemDetails['pid'];
          $oid = $itemDetails['oid'];
          $date = ['Date' => date('d/m/Y h:ia')];
          $unitpriceArray = ['Unit Price' => $all_services[$pid][$oid]['Price']];

          $quantity = $itemDetails['qty'];
          $unitprice = $all_services[$pid][$oid]['Price'];
          $subtotal = $quantity * $unitprice;
          $subtotalArray = ['Sub Total' => $subtotal];

          $oneOrder = array_merge($date, $_SESSION['user'], $itemDetails, $unitpriceArray, $subtotalArray);

          $records[] = $oneOrder;
        }

        $fp = fopen('orders.txt',"a");
        flock($fp, LOCK_EX);
        // fputcsv($fp, $headings, "\t");
        foreach ($records as $record) {
          fputcsv($fp, $record, "\t");
        }
        flock($fp, LOCK_UN);
        fclose($fp);
        
      // unset($_SESSION);
      }
      header("Location: receipt.php");
    }

  }

  

  top_module("Checkout | ME")
?>

<div class="global-container">
  <div class="checkout-form-container">
    <h3>Contact Details:</h3>
    <form action="checkout.php"  method="post" id="checkoutForm">
      <div class="field-wrap">
        <div>Name:</div>
        <input type="text" name="Name" value="<?php echo $name; ?>" > <?php echo $nameError;?>
      </div>
      <div class="field-wrap">
        <div>Email:</div>
        <input type="email" name="Email" value="<?php echo $email; ?>" > <?php echo $emailError;?>
      </div>
      <div class="field-wrap">
        <div>Address:</div>
        <textarea name="Address" form="checkoutForm" rows="3" ><?php echo $address; ?></textarea> <?php echo $addressError;?>
      </div>
      <div class="field-wrap">
        <div>Mobile Number:</div>
        <input type="text" name="Mobile" value="<?php echo $mobile; ?>" > <?php echo $mobileError;?>
      </div>
      <div class="field-wrap">
        <div>Credit Card Number:</div>
        <input type="text" id="card-number" name="CreditCard" value="<?php echo $creditCard; ?>" onInput="checkCardType()"  /> <span id="card-type"></span><?php echo $creditCardError;?>
      </div>
      <div class="field-wrap">
        <div>Expiry Date:</div>
        <input type="date" name="CreditCardExpiry" value="<?php echo $creditCardExpiry; ?>" > <?php echo $cardExpiryError;?>
      </div>

      <button type="submit" id="process-payment">Process the payment</button>
    </form>
  </div>
</div>



<?php end_module(); ?>
<?php
  // table('GET Data',$_GET);
  // table('POST Data',$_POST);
  error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
<?php printMyCode(); ?>
