<?php
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("%TITLE%","Connecting Knowledge 2014-15",$buffer);
echo $buffer;
?>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Connecting Knowledge 2014-15</h1>
	      </div> <!-- /.col -->
	    </div> <!-- /.row -->
  	  </div> <!-- /.container -->
  	  <div id="banner-bar">
  	  </div>
    </header>
    <main id="main" class="container">
      <div class="row">
        <section class="col-md-8 col-md-offset-2">
          <h2>About</h2>
          <p class="first-par">The 2014-15 Connecting Knowledge project, the first iteration of the programme, focused on improving attainment in primary mathematics through a combination of Lesson study and high quality CPD. For more information about this work please download the project case study:</p>
          <p><a href="docs/rosendale-cn-case-study.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Connecting Knowlegde 2014-15 case study</a></p>
        </section> <!-- /.col -->
        <section class="col-md-8 col-md-offset-2">
          <h2>Lesson Plans</h2>
            <p class="first-par"><a href="docs/HF-Lesson-Plan-final.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Henry Fawcett – Yr 3 Addition and Subtraction Strategies</a></p>
            <p><a href="docs/Hill-Mead-Research-Lesson-Plan-algebra-Y6-2014-for-LSEF.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Hill Mead – Yr 6 Algebra</a></p>
            <p><a href="docs/Lesson-plan-hitherfield-5th-November-2014-V2.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Hitherfield – Yr 4 Fractions (lesson 1)</a></p>
            <p><a href="docs/Hitherfiled-LS-plan-fractions-lesson-2.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Hitherfield – Yr 4 Fractions (lesson 2)</a></p>
            <p><a href="docs/Immanuel-LS-multiples-Y5.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Immanuel and St Andrew – Yr 5 Multiples</a></p>
            <p><a href="docs/Immanuel-LS-Factors-Y5-Version-A.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Immanuel and St Andrew – Yr 5 Factors</a></p>
            <p><a href="docs/dice-counting-L-kingswood-Recep-adding-and-subting.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Kingswood – Reception Dice Adding and Subtracting</a></p>
            <p><a href="docs/Rosendale-Y2-coin-value-and-problems.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr 2 Coin value and problems</a></p>
            <p><a target="_blank" href="docs/rosendale-Y2AF-T2-y2-moneyinvestigation.pdf"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr 2 Money investigation</a></p>
            <p><a href="docs/rosendale-LS-2014-Y4-probability-and-reasoning.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr4 Probability and Reasoning</a></p>
            <p><a href="docs/Lesson-Study-14th-Jan-2015.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr 5 Exploring Singapore Bar Method</a></p>
            <p><a href="docs/Rosendale-resource-sheet-1.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr5 Exploring Singapore Bar Resource Sheet 1</a></p>
            <p><a href="docs/Rosendale-resource-sheet-2.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr5 Exploring Singapore Bar Resource Sheet 2</a></p>
            <p><a href="docs/Rosendale-resource-sheet-2-pt-2.docx"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr5 Exploring Singapore Bar Resource Sheet 2 part 2</a></p>
            <p><a href="docs/Lesson-study-Jan-28th.notebook"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Rosendale – Yr5 Exploring Singapore Bar SMART Notebook</a></p>
            <p><a href="docs/restaurant-tables-lesson-plan-finished-June-2014.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Woodmansterne – Restaurant tables lesson plan</a></p>
            <p><a href="docs/Restaurant-tables-question-prompts.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Woodmansterne – Restaurant tables question prompts</a></p>
            <p><a href="docs/Wyvil-Research-Lesson-Plan-final-13th-March-2014.doc"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Wyvil – Angle facts Lesson Plan final 13th March 2014</a></p>
            <p><a target="_blank" href="docs/Resources-1-Wyvil-March-13th.pdf"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Wyvil – Angle facts – Resources 1</a></p>
            <p><a target="_blank" href="docs/Resources-2-Wyvil-March-13th.pdf"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Wyvil – Angle facts – Resources 2</a></p>
        </section>
      </div> <!-- ./row -->
    </main> <!-- /.container -->
    <?php include "footer.php" ; ?>