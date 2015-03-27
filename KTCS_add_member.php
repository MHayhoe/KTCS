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
      <h2>Car Added</h2>
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
		  
		  $query = "insert into Member (Password, FName, LName, Mem_Address, Phone, Email," . 
		  			"License_No, CC_No, CC_Expiry, Annual_Fee, Reg_Anniv_Date) values ('" .
		  			$_GET["iPassword"] . "','" . $_GET["iFName"] . "','" . $_GET["iLName"] .
		  			"'";
	
			if(empty($_GET["iMem_Address"])) {
				$query = $query . ",NULL";
			}
			else {
				$query = $query . ",'" . $_GET["iMem_Address"] . "'";
			}
			if(empty($_GET["iPhone"])) {
				$query = $query . ",NULL,'";
			}
			else {
				$query = $query . ",'" . $_GET["iPhone"] . "','";
			}
			
			$query = $query . $_GET["iEmail"] . "','" . $_GET["iLicense_No"] . "'";
			
			if(empty($_GET["iCC_No"])) {
				$query = $query . ",NULL";
			}
			else {
				$query = $query . ",'" . $_GET["iCC_No"] . "'";
			}
			if(empty($_GET["iCC_Expiry"])) {
				$query = $query . ",NULL";
			}
			else {
				$query = $query . ",'" . $_GET["iCC_Expiry"] . "'";
			}
			
			$query = $query . ",19.99,'" . date('Y-m-d', time()) . "');";
			
			$result = mysqli_query($cxn, $query);
			
			if (!$result || empty($_GET["iPassword"])) //query failed
			{
				$url = 'KTCS_signup.php?attempt=1';
			}
			else
			{
				$query2 = "SELECT MIN FROM Member WHERE Email = '" . $_GET["iEmail"] . "' LIMIT 1;";
				$result = mysqli_query($cxn, $query2);
				$value = $result->fetch_row();
				$url = "KTCS_home.php?MIN=" . $value[0];
			}
			
			//Go back to input page
			ob_start();
			while(ob_get_status())
			{
				ob_end_clean();
			}
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
