<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Leading Lesson Study | Connecting Knowledge",$buffer);
echo $buffer;
?>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Leading Lesson Study</h1>
	      </div> <!-- /.col -->
	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
    </header>
    <main id="main" class="container">
      <div class="row">
      	<section class="col-md-8 col-md-offset-2 highlight">
          <h2>Become a Lead Teacher</h2>
          <p class="first-par lead">For teachers with experience of lesson study, there are developmental opportunities within and beyond your school.</p>
          <p class="lead">For more information about leading lesson study please download the information sheet:<br />
          <a target="_blank" href="docs/info-sheet-for-lead-teachers.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Information for Lead Teachers</a></p>
          <p class="lead">If you would like to be a Lesson Study lead teacher please contact Marc Rowland via <a href="mailto:marcrowland@rosendale.cc">marcrowland@rosendale.cc</a></p>
        </section>
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>