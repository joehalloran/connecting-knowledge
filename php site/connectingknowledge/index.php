<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Connecting Knowledge",$buffer);
echo $buffer;
?>
    <header id="front-page-header" class="container-fluid">      
    	<div class="container">
      	<div class="row">
          <div class="col-md-10">
            <h1><span id="site-title">Connecting Knowledge</span></h1>
  	      </div> <!-- /.col -->
  	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
	  	<div class="container">
        <div class="row">
        	<div class="col-lg-5 col-md-12 sub-header">
	            <h3>Lesson Study</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-9 sub-header">
        		<h3>A project to support improved attainment in writing in Primary education</h3>    	
          </div>	
        </div> <!-- /.row -->
      </div> <!-- /.container -->
      <a class="btn" href="#the-project" role="button"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
    </header>
    <main id="main" class="container">
      <div class="row">
        <section class="col-md-8 col-md-offset-2">
	      <h2 id="the-project">The Project</h2>
          <p class="first-par">Connecting Knowledge is a programme that supports improved attainment in writing through:</p>
          <ul>
            <li>Lesson study: an approach to professional learning used in some of the most successful international education systems</li>
            <li>High quality CPD to develop teacher subject knowledge</li>
            <li>Tools which enable teachers to plan for impact on pupil learning</li>
          </ul>
          <p>The project aims to develop teachers’ thinking about how children learn to write creatively and to improve the teaching and learning of spelling, punctuation and grammar, the expectation for which have increased with the introduction of the new National Curriculum.</p>
        </section>
        <section class="col-md-8 col-md-offset-2 highlight">
          <h2>Get Involved</h2>
          <p class="first-par lead">If you would like your school to take part, or would like to find out more, please contact Marc Rowland at Rosendale Primary School via <a href="mailto:marcrowland@rosendale.cc">marcrowland@rosendale.cc</a></p>
        </section> <!-- /.col -->
        <section class="col-md-8 col-md-offset-2">
          <h2>Impact</h2>
          <p class="first-par">Between May 2016 and June 2017 the project will bring together 24 teachers who will work with established lesson study Lead Practitioners (based in Lambeth Schools) and specialists from UCL Institute of Education. The lesson study process involves repeated cycles of collaborative planning and opportunities to observe research lessons. The project will culminate in a conference and good practice publication in summer 2017.</p>
          <p>Schools will receive some modest financial support to contribute to teacher release to participate in the project. Only 12 schools can be funded so please express your interest as soon as possible to ensure your place on the project.</p>
          <p>The expectation is that this sustainable programme will have a clearly defined, positive and sustained impact on teacher quality and a quantitative and qualitative impact on disadvantaged pupil outcomes.</p>
          <p>There is a wide base of evidence for lesson study as an effective approach to improving teacher quality. More information here: <a href="https://educationendowmentfoundation.org.uk/evaluation/projects/lesson-study/" target="_blank">Education Endowment Foundation</a>
        </section>
        
        <section class="col-md-8 col-md-offset-2">
          <h2>Partners</h2>
          <p class="first-par">This is a high quality, robust partnership programme between:</p>
          <ul>
            <li>London schools</li>
            <li>The UCL Institute of Education, world leading centre for education</li>
            <li>The National Education Trust, bringing a proven track record of raising attainment for disadvantaged pupils</li>
          </ul>
        </section>
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>
