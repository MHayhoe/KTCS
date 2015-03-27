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
  
  <style>
		#def {
			width: 100%;
			border-collapse: collapse;
		}

		#def td, #def th {
			font-size: 1em;
			border: 1px solid #666666;
			padding: 3px 7px 2px 7px;
		}

		#def th {
			font-size: 1.1em;
			text-align: left;
			padding-top: 5px;
			padding-bottom: 4px;
			background-color: #0000ff;
			color: #ffffff;
		}

		#def tr.alt td {
			color: #000000;
			background-color: #E6E6E6;
		}
	</style>
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
      <?
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
		  
		$query = "SELECT Res_Start, MIN, VIN, Last_Odom, Res_No
				  FROM Reservation NATURAL JOIN Car
				  WHERE DATEDIFF('" . date('Y-m-d', time()) . "',Reservation.Res_Start) = 0;";
		$result = mysqli_query($cxn, $query);
		

		while($value = $result->fetch_row() )
		{
			$query2 = "INSERT INTO Rental (Start_Date, Duration, Start_Odom, End_Odom, Usage_Fee, MIN, VIN) " .
					  "VALUES ('".$value[0]."', 0, ".$value[3].", 0, 19.99, ".$value[1].", ".$value[2].");";
			
			$result2 = mysqli_query($cxn,$query2);
			
			$query3 = "DELETE FROM Reservation " . 
				   	  "WHERE Res_No = ".$value[4].";";

			$result3 = mysqli_query($cxn,$query3);
		}
		
		//Go back to input page
		ob_start();
		while(ob_get_status())
		{
			ob_end_clean();
		}
		$url = 'KTCS_admin.php?convert=1';
		header("Location: $url");
		
		mysqli_close($cxn); 
      ?>
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