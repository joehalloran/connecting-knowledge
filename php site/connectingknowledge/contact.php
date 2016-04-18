<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Contact | Connecting Knowledge",$buffer);
echo $buffer;
?>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Contact Us</h1>
	      </div> <!-- /.col -->
	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
    </header>
    <main id="main" class="container">
      <div class="row">
        <section class="col-md-8 col-md-offset-2 highlight">
          <h2>Get Involved</h2>
          <p class="first-par lead">If you would like your school to take part, or would like to find out more, please contact Marc Rowland at Rosendale Primary School via <a href="mailto:marcrowland@rosendale.cc">marcrowland@rosendale.cc</a></p>
        </section> <!-- /.col -->
        <section class="col-md-8 col-md-offset-2">
          <h2>School Details</h2>
          <h3 class="first-par">Email Address</h3>
          <address class="email"><a href="mailto:info@rosendale.cc">info@rosendale.cc</a></address>
          <h3>Postal Address</h3>
          <address class="postal">Rosendale Primary School and Children’s Centre<br>
          Rosendale Road<br>
          West Dulwich<br>
          London<br>
          SE 21 8LR</address>
          <h3>Telephone</h3>
          <address class="telephone">020 8670 4962</address>
        </section>
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>