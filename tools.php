<?php

function index_top_module($pageTitle) {
$html = <<<"OUTPUT"
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$pageTitle</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>
  <body>
    <div class="frontpage">
      <header>
        <div class="global-container">
          <div class="brand">
            <h1><a href="./index.php">Madrid Electrics</a></h1>
          </div>
          <nav>
            <ul>
              <li><a href="./index.php"><span class="current">Home</span></a></li>
              <li>
                <div class="dropdown">
                  <a href="./services.php">Services</a>
                  <ul class="dropdown-content">
                    <li><a href="">Electrical</a></li>
                    <li><a href="">Lighting</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Data/Phone Line</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="">Gallery</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="./login.php">Log In</a></li>
              <li><a href="./cart.php" class="darken" >Cart</a></li>
              <li><a href="./checkout.php" class="darken" >Checkout</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <section id="about-section">
        <div class="global-container">
          <div id="company-introduction">
            <p>Madrid Electrical has been around for more than 5 years, providing wide range of services to both household and commercial areas in the Melbourne region.</p>
            <p>Our Mission is to provide the highest quality electrical services at the fairest price to the community of Melbourne. With the wide range of services we provide from lighting upgrades, security alarms and to anything electrical, we hope to better the lives of our clients and future clients.</p>
          </div>
        </div>
      </section>
    </div>
    <main>
OUTPUT;
  echo $html;
}

function top_module($pageTitle) {
$html = <<<"OUTPUT"
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width'>
    <title>$pageTitle</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <script src='./service-support.js'></script>
  </head>
  <body>
    <header>
      <div class="global-container">
        <div class="brand">
          <h1><a href="./index.php" class="brandname">Madrid Electrics</a></h1>
        </div>
        <nav>
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li>
              <div class="dropdown">
                <a href="./services.php">Services</a>
                <ul class="dropdown-content">
                  <li><a href="">Electrical</a></li>
                  <li><a href="">Lighting</a></li>
                  <li><a href="">Security</a></li>
                  <li><a href="">Data/Phone Line</a></li>
                </ul>
              </div>
            </li>
            <li><a href="">Gallery</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="./login.php" class="darken" >Log In</a></li>
            <li><a href="./cart.php" class="darken" >Cart</a></li>
            <li><a href="./checkout.php" class="darken" >Checkout</a></li>
          </ul>
        </nav>
      </div>
    </header>
  <main>
OUTPUT;
  echo $html;
}

function end_module() {
$html = <<<"OUTPUT"
    </main>
      <footer>
        <div>&copy;<script>document.write(new Date().getFullYear());</script> Jefferson Madrid: s3707189, Wuchi Chen: s3716792.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    
        <div><a href="services.txt">Spreadsheet of services</a> <a href="orders.txt">Spreadsheet of recent orders</a></div>
      </footer>
  </body>
</html>
OUTPUT;
  echo $html;
}

function services_module() {
$html = <<<"OUTPUT"
<section id="all-services">
  <div class="global-container">
  <a href="?id=E1" class="blackhyperlink"><h2>Electrical</h2>
    <div class="two-row">
      <div class="image-text-container">
        <img src="../../media/powerpoint.jpeg" alt="Powerpoint Installation" />
        <!-- Image from: http://www.smartliving.com.au/media/catalog/product/cache/1/image/bc0328b31da627a51feee80ba06f2230/s/o/sockitz_silver_1.gif -->
          <div class="overlay">
            <div class="description">
              <p>Choice of powerpoints from standard, colored, single/multiple, indoor/outdoor and with fast charging USB port. </p>
            </div>
            <div class="overlay-heading">
              <h3>Powerpoint Installation</h3>
            </div>
          </div>
      </div>
      <div class="image-text-container">
        <img src="../../media/electrical2.jpg" alt="Electrical Panel" />
        <!-- Image from: https://mistersparkyelectricsc.com/blog/electrical-issues-solutions-electrical-repair-charleston-sc/ -->
          <div class="overlay">
            <div class="description">
              <p>Upgrade or maintenance of electrical panels for both household and industrial area.</p>
            </div>
            <div class="overlay-heading">
              <h3>Electrical Panel</h3>
            </div>
          </div>
      </div>
    </div>
    </a>
    <a href="?id=L1" class="blackhyperlink"><h2>Lighting</h2>
    <div class="three-row">
      <div class="image-text-container">
        <img src="../../media/downlight.jpg" alt="Downlights" />
        <!-- Image frmo: https://www.wink.com/products/commercial-electric-smart-led-downlight/ -->
          <div class="overlay">
            <div class="description">
              <p>Different shapes, sizes and colors of downlights to choose from to be installed.</p>
            </div>
            <div class="overlay-heading">
              <h3>Downlights</h3>
            </div>
          </div>
      </div>
      <div class="image-text-container">
        <img src="../../media/light3.png" alt="Feature Lights" />
        <!-- Image from: http://pretamarcher.co/modern-hallway-lighting/modern-hallway-lighting-modern-hallway-lighting-modern-hallway-lighting-image-of-excellent-hallway-ceiling-lighting-ideas-using-unique-pendant/ -->
          <div class="overlay">
            <div class="description">
              <p>Various types of feature/pendant lights for aesthetics and the mood of your home or office.</p>
            </div>
            <div class="overlay-heading">
              <h3>Pendant Light</h3>
            </div>
          </div>
      </div>
      <div class="image-text-container">
        <img src="../../media/chandelier.jpeg" alt="Chandelier" />
        <!-- Image from: https://www.brizzo.ca/chateaux-modern-foyer-crystal-chandelier-mirror-stainless-steel-base-12-lights -->
          <div class="overlay">
            <div class="description">
              <p>Grande looking glassy ornaments accompanied by lights for 2-storey houses or mansions.</p>
            </div>
            <div class="overlay-heading">
              <h3>Chandelier</h3>
            </div>
          </div>
      </div>
    </div>
    </a>
    <a href="?id=S1" class="blackhyperlink"><h2>Security</h2>
    <div class="two-row">
      <div class="image-text-container">
        <img src="../../media/camera.jpg" alt="Security Camera" height="200" />
        <!-- Image from: https://bestbrothersgroup.b-cdn.net/wp-content/uploads/2018/03/surveillance-camera-mounted-on-concrete-wall.jpg -->
          <div class="overlay">
            <div class="description">
              <p>Up to 9 cameras per system to be installed in your home or office. Viewable online.</p>
            </div>
            <div class="overlay-heading">
              <h3>Security Camera</h3>
            </div>
          </div>
      </div>
      <div class="image-text-container">
        <img src="../../media/securityalarm.jpg" alt="Security Alarm" height="200" />
        <!-- Image from: http://lintsecurity.com/blog/alarmed-security-systems -->
          <div class="overlay">
            <div class="description">
              <p>Security Alarm to alert you when somebody breaks in your secured home or office.</p>
            </div>
            <div class="overlay-heading">
              <h3>Security Alarm</h3>
            </div>
          </div>
      </div>
    </div>
    </a>
  </div>
</section>
OUTPUT;
  return $html;
}

// function displaySingleService($getId, $serviceTitle, $serviceDescription, $serviceOID, $servicePrice, $serviceImagePath) {
// $html = <<<"OUTPUT"
// <div class="global-container">
//   <div class="slider">
//     <div class="image-container" >
//       <img $serviceImagePath />
//     </div>
//   </div>
//   <div class="text-content">
//     <div class="inner-content-title">
//       <h2>$serviceTitle</h2>
//     </div>
//     <div class="inner-content-text">
//       <p>$serviceDescription</p>
//     </div>
//
//     <form action="./cart.php" method="post" onsubmit="return formCheck();">
//       <div class="service-form">
//         <input type="hidden" name="id" value="$getId">
//         <input type="hidden" id="single-price" value="$servicePrice">
//         <div class="option-model">
//           Selected Service:<br>
//           <select class="" name="oid" id="option" onchange="updatePrice()" >
//             <option value="$serviceOID">Please Select</option>
//             <option value="$serviceOID" id>1 Walnut Pendant Light</option>
//             <option value="$serviceOID">1 Timber Cylindrical Pendant Light</option>
//           </select>
//         </div>
//
//         <div class="quantity">
//           Quantity:<br>
//           <!-- can I just use this. or event. here document.getElementById("myNumber").stepUp(5); -->
//           <button type="button" name="minus" onclick="decrementQuantity()">-</button>
//           <input type="number" name="qty" id="item-quantity" placeholder="1" min="0" value="1" onchange="updatePrice()" />
//           <button type="button" name="plus" onclick="incrementQuantity()" >+</button>
//
//           <!-- <p>Price: $ <span id="total_price">0.00</span></p> -->
//           <p>Price: $ <span id="total_price">$servicePrice</span></p>
//         </div>
//         <div class="buy-button">
//           <button type="submit">Add to Cart</button>
//          </div>
//       </div>
//     </form>
//   </div>
// </div>
// OUTPUT;
//   return $html;
// }


function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function getAllServices($filename){
  $fp = fopen($filename, 'r');
  flock($fp, LOCK_SH);
  $services = [];
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
    while ($cells = fgetcsv($fp, 0, "\t")) {
      for ($x=1; $x<count($cells); $x++)
        $services[$cells[0]][$cells[1]][$headings[$x]] = $cells[$x];
    }
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  // preShow($services); // whats the point of this?
  return $services;
}

function getAllOrders($filename){
  $fp = fopen($filename, 'r');
  flock($fp, LOCK_SH);
  $orders = [];
  $order = [];
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
    while ($cells = fgetcsv($fp, 0, "\t")) {
    for ($x=0; $x < count($cells); $x++)
      $order[$headings[$x]] = $cells[$x];
    $orders[] = $order; 
    }
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  return $orders;
}

function getSingleServiceArray($filename, $oid){
  $fp = fopen($filename, 'r');
  flock($fp, LOCK_SH);
  $services = [];
  if (($headings = fgetcsv($fp, 0, "\t")) !== false) {
    while ($cells = fgetcsv($fp, 0, "\t")) {
      if($oid == $cells[1]) {
        for ($x=1; $x<count($cells); $x++)
          $services[$cells[1]][$headings[$x]] = $cells[$x];
      }
    }
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  // preShow($services); // whats the point of this?
  return $services;
}

?>
