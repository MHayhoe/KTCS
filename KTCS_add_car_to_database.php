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
		  
		  $query = "insert into Car values (" . $_GET["iVIN"] . ",'" . $_GET["iMake"] . "','" .
					$_GET["iModel"] . "'," . $_GET["iYear"] . ",'" . $_GET["iStatus"] . "'," .
					$_GET["iLast_Odom"] . "," . $_GET["iLast_Gas"];
	
			if(empty($_GET["iMaint_Date"])) {
				$query = $query . ",NULL";
			}
			else {
				$query = $query . ",'" . $_GET["iMaint_Date"] . "'";
			}
			if(empty($_GET["iMaint_Odom"])) {
				$query = $query . ",NULL";
			}
			else {
				$query = $query . "," . $_GET["iMaint_Odom"];
			}
			if(empty($_GET["iLNo"])) {
				$query = $query . ",NULL);";
			}
			else {
				$query = $query . "," . $_GET["iLNo"] . ");";
			}
			
			$result = mysqli_query($cxn, $query);
			
			if (!$result) //query failed
			{
				//Go back to input page
				ob_start();
				while(ob_get_status())
				{
					ob_end_clean();
				}
				$url = 'KTCS_add_car.php?attempt=1';
				header("Location: $url");
			}
			else
			{
				$query2 = "SELECT * FROM Car WHERE VIN = " . $_GET["iVIN"] . ";";
				$result = mysqli_query($cxn, $query2);
			
				echo '<table cellpadding="5" cellspacing="5" class="db-table" id="def" border="1">';
				$column = $result->fetch_fields();
	
				echo '<tr>';
				foreach ($column as $col) {
					echo '<th>'.$col->name.'</th>';
				}
	
				echo '</tr>';
				while($row2 = $result->fetch_row() ) {
					echo '<tr>';
					foreach($row2 as $key=>$value) {
						echo '<td>',$value,'</td>';
					}
					echo '</tr>';
				}
				echo '</table><br />';
				echo '<br><a href = "KTCS_admin.php?">Back to Admin Page</a>';
			}
			
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
