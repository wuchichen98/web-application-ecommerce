<?php
  require_once("tools.php");
  session_start();

  index_top_module("Welcome | ME")
?>
<!-- main starts here: no need to write it-->

<div class="global-container">
  <a href="./services.php" class="range-services"><h2>Range of Services We Provide:</h2></a>
  <hr />
  <div id="services-summary">
    <ul class="services-box">
      <li>
        <div class="box">
          <img src="media/electrical1.jpg" alt="An electrical panel" height="150"/>
          <!-- Image from: https://mistersparkyelectricsc.com/blog/electrical-issues-solutions-electrical-repair-charleston-sc/ -->
          <h3>Electrical</h3>
          <p>Installation of powerpoints or electrical panel/system upgrade.</p>
        </div>
      </li>
      <li>
        <div class="box">
          <img src="media/light3.png" alt="A feature light" height="150"/>
          <h3>Lighting</h3>
          <p>Downlights, feature lights, chandelier or any of your choice.</p>
        </div>
      </li>
      <li>
        <div class="box">
          <img src="media/camera2.jpg" alt="A security camera" height="150"/>
          <!-- Image from: http://virtuatechnologies.com.na/services/surveillance-access-control-systems/ -->
          <h3>Security</h3>
          <p>Installation of security cameras or security alarm.</p>
        </div>
      </li>
      <li>
        <div class="box">
          <img src="media/dataphone.jpg" alt="A data cable" height="150"/>
          <!-- Image from: https://cdn3.volusion.com/xn9m9.7kbh9/v/vspfiles/photos/950-990-4.jpg -->
          <h3>Data/Phone</h3>
          <p>RJ45 ethernet and RJ11 telephone line. Contact us for more details.</p>
        </div>
      </li>
    </ul>

  </div>
</div>

<section id="additional-section">
  <div class="global-container">
    <div id="company-vision">
      <p>Our Vision of being able to provide to the communities in need.</p>
      <p>With the growing strong relationships with the people in the community, we see ourselves expanding and creating branches to the distant communities we could not reach presently.</p>
    </div>

    <section class="quote">
      <form action="" method="post" id="quoteid">
        <div>
          <h2>Get a free quote</h2>
        </div>
        <div>
          <div>Name:</div>
          <div><input type="text" placeholder="First Name"></div>
        </div>
        <div>
          <div>Contact Number:</div>
          <div><input type="number" placeholder="0412345678"></div>
        </div>
        <div>
          <div>Email:</div>
          <div><input type="email" placeholder="Example@sample.com"></div>
        </div>
        <div>
          <div>Enquiry:</div>
          <div>
            <textarea form="quoteid" id="bigbox" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="button_1">Click to Submit</button>
      </form>
    </section>
  </div>
</section>

<!-- main ends here: no need to write it -->
<?php
  end_module();
?>
