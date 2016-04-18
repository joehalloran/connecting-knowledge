    <footer class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          	<nav>
	         <ul>
	            <li><a href="/">Connecting Knowledge</a></li>
	          	<li><a href="about.php">About</a></li>
	          	<li><a href="connecting-knowledge-14-15.php">C.K. 2014-15</a></li>
	            <li><a href="contact.php">Contact</a></li>
	          </ul>
	        </nav>
          </div> <!-- /.col -->
          <div id="footer-right" class="col-md-6">
          	<?php $year = date("Y"); ?>
            <!-- <p>&copy Rosendale Primary School 2016</p> -->
            <p><?php printf('&copy Rosendale Primary School %d', $year); ?></p>
            <p><a href="http://www.rosendale.cc">www.rosendale.cc</a></p>
          </div> <!-- /.col -->
        </div> <!-- ./row -->
      </div> <!-- /.container -->
    </footer>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- custom js -->
    <script src="js/connectingknowledge.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>