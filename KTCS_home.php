<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Mikhail Hayhoe and Mark Mahony">
    <link rel="icon" href="../../favicon.ico">

    <title>K-Town Car Share</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="jumbotron.css" rel="stylesheet">-->

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="KTCS_main.php">KTCS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="KTCS_home.php?MIN=<?=$_GET["MIN"];?>">Home</a></li>
            <li><a href="KTCS_reserve.php?MIN=<?=$_GET["MIN"];?>">Reserve a Car</a></li>
            <li><a href="KTCS_contact.php?MIN=<?=$_GET["MIN"];?>">Contact</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
	<br>
	<br>
	<br>

    <div class="container">
      <!-- Example row of columns -->
      <?php
      		$host = "localhost";
		 	$user = "admin";
		 	$password = "password";
		 	$database = "KTCS";

			$cxn = mysqli_connect($host,$user,$password, $database);
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				die();
			} 
      		$query = "SELECT FName FROM Member WHERE MIN = " . $_GET["MIN"] . ";";
      		$result = mysqli_query($cxn,$query);
      		$value = $result->fetch_row();
      		
      		echo "<h2>Welcome, " . $value[0] . "</h2>";
      		
      		mysqli_close($cxn); 
      ?>
      <div class="row">
          <div class="col-md-4">
          <h2>Return Vehicle</h2>
          <p>Click here to return a car.</p>
          <p><a class="btn btn-default" href="KTCS_return.php?MIN=<?=$_GET["MIN"];?>" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>See Rental History</h2>
          <p>Click here to see your rental history.</p>
          <p><a class="btn btn-default" href="KTCS_history.php?MIN=<?=$_GET["MIN"];?>" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>See Locations</h2>
          <p>Click here to see all of our locations.</p>
          <p><a class="btn btn-default" href="KTCS_locations.php?MIN=<?=$_GET["MIN"];?>" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Make a Comment</h2>
          <p>Click here to make a comment.</p>
          <p><a class="btn btn-default" href="KTCS_comment.php?MIN=<?=$_GET["MIN"];?>" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>View Available Cars</h2>
          <p>Click here to see all the available cars at a given time, and make bookings.</p>
          <p><a class="btn btn-default" href="KTCS_available.php?MIN=<?=$_GET["MIN"];?>" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; KTCS 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
