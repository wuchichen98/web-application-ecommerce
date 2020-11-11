<?php
  require_once("tools.php");
  session_start();

  top_module("Log In | ME")
?>


      <div class="global-container">
        <div class="login-form">
          <h1>Log In</h1>
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">

            <div class="field-wrap">
              <div>
                <div>Email:<span class="req">*</span></div>
                <div><input type="email" name="email" placeholder="Sample@example.com"></div>
              </div>
            </div>

            <div class="field-wrap">
              <div>Password:<span class="req">*</span></div>
              <div><input type="password" name="password" placeholder="Password"></div>
            </div>

            <p class="forgot"><a href="">Forgot Password?</a></p>

            <button class="login-button">LogIn</button>

          </form>
        </div>
      </div>


<?php end_module(); ?>
