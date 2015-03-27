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
            <li class="active"><a href="KTCS_admin.php">Home</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
	<br>
	<br>
	<br>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <div class="col-md-4">
          <h2>Today's Annual Fees</h2>
          <p>Click here to view members to be charged today.</p>
          <p><a class="btn btn-default" href="KTCS_anniversary.php" role="button">Go &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Add Car</h2>
          <p>Click here to add a new car to the fleet.</p>
          <p><a class="btn btn-default" href="KTCS_add_car.php" role="button">Go &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Car History</h2>
          <p>Click here to view the rental history of a specific car.</p>
          <form method="get" action="KTCS_car_history.php">
			  <!--<label for="iVIN" class="sr-only">Vehicle ID</label>-->
			  <input type="text" id="iVIN" name="iVIN" class="form-control" style="width:200px" placeholder="Vehicle ID">
			  <button class="btn btn-default" style="width:200px" type="submit">Go &raquo;</button>
          </form>
        </div>
        <div class="col-md-4">
          <h2>Available Cars</h2>
          <p>Click here to view all available cars on a given date.</p>
          <form method="get" action="KTCS_available_cars.php">
			  <!--<label for="iVIN" class="sr-only">Vehicle ID</label>-->
			  <input type="text" id="iDate" name="iDate" class="form-control" style="width:200px" placeholder="Date (Blank for Today)">
			  <button class="btn btn-default" style="width:200px" type="submit">Go &raquo;</button>
          </form>
          </div>
        <div class="col-md-4">
          <h2>Maintenance</h2>
          <p>Click here to view all cars that are in need of maintenance.</p>
          <p><a class="btn btn-default" href="KTCS_maintenance.php" role="button">Go &raquo;</a></p>
          <br><br>
        </div>
        <div class="col-md-4">
          <h2>Best/Worst Cars</h2>
          <p>Click here to view the most and least popular cars by rental.</p>
          <p><a class="btn btn-default" href="KTCS_best_worst_cars.php" role="button">Go &raquo;</a></p>
          <br><br>
        </div>
        <div class="col-md-4">
          <h2>Today's Reservations</h2>
          <p>Click here to view all cars that are in need of maintenance.</p>
          <p><a class="btn btn-default" href="KTCS_todays_reservations.php" role="button">Go &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Respond to Comment</h2>
          <p>Click here to respond to a member's comment.</p>
          <p><a class="btn btn-default" href="KTCS_respond_comment.php" role="button">Go &raquo;</a></p>
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
