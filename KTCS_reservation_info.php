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
      <h2>Book Car</h2>
      <p>Enter the start and end date for your booking.</p>
      <form method="get" action="KTCS_book_car.php"> 
      <?
        if(!empty($_GET["attempt"]))
        {
        	echo '<p>Incorrect input. Please try again.</p>';
        }
      ?>			
			<!--<label for="iDate" class="sr-only">Date (yyyy-mm-dd)</label>-->
        	<input type="text" id="iStart" name="iStart" class="form-control" placeholder="Start Date (yyyy-MM-dd hh:mm:ss)" value="<?=$_GET["iDate"];?>"  required>
        	<input type="text" id="iEnd" name="iEnd" class="form-control" placeholder="End Date (yyyy-MM-dd hh:mm:ss)" autofocus required>
        	<input type="hidden" id="MIN" name="MIN" value="<?=$_GET["MIN"];?>">
        	<input type="hidden" id="VIN" name="VIN" value="<?=$_GET["VIN"];?>">
			<input type="hidden" id="iDate" name="iDate" value="<?=$_GET["iDate"];?>">
			<input type="hidden" id="iLNo" name="iLNo" value="<?=$_GET["iLNo"];?>">
        	
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Go</button>
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
