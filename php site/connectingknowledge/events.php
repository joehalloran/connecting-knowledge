<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Events | Connecting Knowledge",$buffer);
echo $buffer;
?>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Events</h1>
	      </div> <!-- /.col -->
	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
    </header>
    <main id="main" class="container">
      <div class="row">
        <section class="col-md-8 col-md-offset-2 highlight">
          <h2>Lesson Study CPD session</h2>
          <p class="first-par lead">12th October 2016<br />
          9am to 4pm</p>
          <p>For all participating teachers.</p>
          <p><a href="docs/7_Impactframework.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Impact Framework Template</a></p>  
        </section> <!-- /.col -->
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>