<?php
  require_once("tools.php");
  session_start();
  // if (isset($_GET['id']) && this_id_actually_exists($_GET['id'])) {
    // show a single product or service matching id with a purchasing form
  // } else {
    // show all products or services without purchasing form
  // }
  $filename = "services.txt";
  $all_services = getAllServices($filename);
  $services_module = ''; // Module for all the services
  $serviceDetails = '';
  $serviceTitle = '';
  $serviceDescription = '';
  $serviceOID = '';
  $servicePrice = '';
  $serviceImagePath = '';
  $getId='';
  
  // if ( !empty($_GET['id']) && isset($prices[$_GET['id']]) ){
  if ( (isset($_GET['id']) && (!empty($_GET['id'])))) {
    $getId = htmlentities($_GET['id']);

    if(($getId == "E1")||($getId == "L1")||($getId == "S1")){
      
      // Sets up all the required variables for each of the service
      // For each id
      foreach($all_services as $id => $details) {
        // For each oid
        foreach($details as $oid => $detail){
        }
        if($getId == $id) {
          $serviceTitle = $detail['Title'];
          $serviceDescription = $detail['Description'];
          $serviceOID = $detail['OID'];
          $serviceOption = $detail['Option'];
          $servicePrice = $detail['Price'];
          $serviceImagePath = $detail['ImagePath'];
          // $serviceDetails = displaySingleService($getId, $serviceTitle, $serviceDescription, $serviceOID, $servicePrice, $serviceImagePath);
        }
      }
    }
  } else {
    $services_module = services_module();
  }
  // Removal of current cart - unsets session
  if (isset($_POST['cancel'])) {
    unset($_SESSION['cart']);
    unset($_SESSION['user']);
  }
  top_module("Services | ME ");
?>

<?php echo $services_module; ?>

<div class="global-container">

  <?php
    if ( isset($getId) && !empty($getId) ) {
      $quantityPortion = <<<"OUTPUT"
  <div class="slider">
    <div class="image-container" >
      <img $serviceImagePath />
    </div>
  </div>
  <div class="text-content">
    <div class="inner-content-title">
      <h2>$serviceTitle</h2>
    </div>
    <div class="inner-content-text">
      <p>$serviceDescription</p>
    </div></div>
OUTPUT;
    echo $quantityPortion;
  }
?>

        <?php
          if ( isset($getId) && !empty($getId) ) {
            echo '<form action="./cart.php" method="post" onsubmit="return formCheck();">';
            echo '<div class="service-form">';
            echo "<input type=\"hidden\" name=\"id\" value=\"$getId\">";
            echo "<input type=\"hidden\" id=\"single-price\" value=\"$servicePrice\">";
            echo '<div class="option-model">Selected Service:<br>';
            // code to check that $pid exists in $products array
            echo '<select name="oid">';
            foreach ($all_services[$getId] as $oid => $details) {
              $option = $details['Option'];
              echo "<option value=\"$oid\">$option</option>";
            }
            echo "</select>";
          }
        ?>


        </div>



        <?php
      if ( isset($getId) && !empty($getId) ) {
      $quantityPortion = <<<"OUTPUT"
        <div class="quantity">
          Quantity:<br>
          <button type="button" name="minus" onclick="decrementQuantity()">-</button>
          <input type="number" name="qty" id="item-quantity" placeholder="1" min="0" value="1" onchange="updatePrice()" />
          <button type="button" name="plus" onclick="incrementQuantity()" >+</button>

          <p>Price: $ <span id="total_price">$servicePrice</span></p>
        </div>
        <div class="buy-button">
          <button type="submit">Add to Cart</button>
         </div>
      </div>
      </form>
OUTPUT;
        echo $quantityPortion;
      }
    ?>

</div>

<?php preShow($all_services); ?>

<?php end_module(); ?>
<?php
  error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>
<?php printMyCode(); ?>