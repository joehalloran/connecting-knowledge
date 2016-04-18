<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","About | Connecting Knowledge",$buffer);
echo $buffer;
?>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>About</h1>
	      </div> <!-- /.col -->
	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
    </header>
    <main id="main" class="container">
      <div class="row">
      	<section class="col-md-8 col-md-offset-2">
          <h2>Lesson Study</h2>
            <p class="first-par">Lesson Study is an approach to professional learning used in some of the most successful education systems globally.</p>
 			<p>Lesson study is about working with experts for sustained, collaborative professional learning through:</p>
 			<ul>
 				<li>The creation (by teachers) of robust evaluation frameworks focusing on specific pupils and &#47; or areas for development.</li>
				<li>Collaborative lesson planning.</li>
				<li>Lesson observations focused on pupil learning, usually focused on specific groups of pupils.</li>
				<li>Collaborative reflections on pupil learning.</li>
				<li>Applying the learning from the lesson study cycle to improve outcomes for pupils.</li>
			</ul>
			<p>Lesson study is not for performance management or judgements about lesson quality.</p>    
        </section>
        <section class="col-md-8 col-md-offset-2">
          <h2>LSEF</h2>
          <p class="first-par">Connecting Knowlegde is London Schools Excellence Fund (LSEF) Subject Knowledge Hub.</p>
          <p>The LSEF was "established to improve the quality of teaching in the capital. The fund is in response to research showing a higher standard of teaching can improve children's performance in schools."</p>
          <p>Following on from the successful delivery of the Mayor’s London Schools Excellence Fund, the Greater London Authority is funding 18 subject specific teaching and learning hubs to sustain and embed the good practice developed through the programme.</p>
          <p>Find out more about the LSEF on the <a href="https://www.london.gov.uk/what-we-do/education-and-youth/improving-standards-schools-and-teaching/london-schools-excellence">Mayor of London website</a>.</p>
        </section> <!-- /.col -->
        <section id="timeline" class="col-md-8 col-md-offset-2">
          <h2>Timetable</h2>
          	<table class="first-par">
	          	<tbody>
		          	<tr>
		          		<td>
		          			<p>May 2016</p>		
		          		</td>
		          		<td>
		          			<h3>Publish Lesson Study good practice guide</h3>
							<p>Agree memorandum of understanding with participating schools.</p>		
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>15th June 2016</p>		
		          		</td>
		          		<td>
		          			<h3>Project Launch</h3>
		          			<p><i>at Rosendale Primary School</i></p>
		            		<p>For all participating teachers.</p>
						</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>July 2016</p>		
		          		</td>
		          		<td>
		          			<h3>Teacher confidence survey</h3>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>12th October 2016</p>		
		          		</td>
		          		<td>
		          			<h3>Lesson Study CPD session</h3>
		            		<p>Teacher Impact Frameworks drafted, reviewed and signed off.</p>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>November 2016</p>		
		          		</td>
		          		<td>
		          			<h3>First cycle of lesson study</h3>
		            		<p>Visits to 6 research lessons by IOE consultant.</p>
		            		<p>Writing subject knowledge and pedagogy CPD programme launched.</p>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>January 2017</p>		
		          		</td>
		          		<td>
		          			<h3>Lesson Study CPD session</h3>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>March 2017</p>		
		          		</td>
		          		<td>
		          			<h3>Second cycle of lesson study</h3>
		          			<p>All open house lesson study events.</p>
		          			<p>Visits to 6 research lessons by IOE consultant.</p>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>March 2017</p>		
		          		</td>
		          		<td>
		          			<h3>Writing subject knowledge and pedagogy CPD programme</h3>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>June 2017</p>		
		          		</td>
		          		<td>
		          			<h3>Data Capture</h3>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>
		          			<p>July 2017</p>		
		          		</td>
		          		<td>
		          			<h3>Conference and Publication</h3>
		          		</td>
		          	</tr>
	          	</tbody>
          	</table>
        </section>
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>