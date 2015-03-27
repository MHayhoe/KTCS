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
    <link href="KTCS_login.css" rel="stylesheet">

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
            <li><a href="KTCS_admin.php">Home</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
	<br>
	<br>
	<br>

    <div class="container">
      <h2>Add New Car</h2>
      <form method="get" action="KTCS_add_car_to_database.php"> 
      <?
        if(!empty($_GET["attempt"]))
        {
        	echo '<p>Incorrect input. Please try again.</p>';
        }
      ?>
			<label for="iVIN" class="sr-only">Vehicle ID</label>
        	<input type="text" id="iVIN" name="iVIN" class="form-control" placeholder="Vehicle ID" required autofocus>
        	<label for="iMake" class="sr-only">Make</label>
        	<input type="text" id="iMake" name="iMake" class="form-control" placeholder="Make" required>
        	<label for="iModel" class="sr-only">Model</label>
        	<input type="text" id="iModel" name="iModel" class="form-control" placeholder="Model" required>
        	<label for="iYear" class="sr-only">Year</label>
        	<input type="text" id="iYear" name="iYear" class="form-control" placeholder="Year" required>
        	<label for="iStatus" class="sr-only">Status</label>
        	<input type="text" id="iStatus" name="iStatus" class="form-control" placeholder="Status" required>
        	<label for="iLast_Odom" class="sr-only">Last Odometer Reading</label>
        	<input type="text" id="iLast_Odom" name="iLast_Odom" class="form-control" placeholder="Last Odometer Reading" required>
        	<label for="iLast_Gas" class="sr-only">Last Gas Reading</label>
        	<input type="text" id="iLast_Gas" name="iLast_Gas" class="form-control" placeholder="Last Gas Reading" required>
        	<label for="iMaint_Date" class="sr-only">Last Maintenance Date</label>
        	<input type="text" id="iMaint_Date" name="iMaint_Date" class="form-control" placeholder="Last Maint. Date">
        	<label for="iMaint_Odom" class="sr-only">Last Maintenance Odometer Reading</label>
        	<input type="text" id="iMaint_Odom" name="iMaint_Odom" class="form-control" placeholder="Last Maint. Odom. Reading">
        	<label for="iLNo" class="sr-only">Location Number</label>
        	<input type="text" id="iLNo" name="iLNo" class="form-control" placeholder="Location Number">
        	
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
		</form>

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
