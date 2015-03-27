<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="KTCS_login.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	
    <div class="container">
	  <h2 class="form-signin-heading">Please sign in</h2>
	  <h5>Required fields denoted by *</h5>
      <form method="get" action="KTCS_add_member.php"> 
      <?
        if(!empty($_GET["attempt"]))
        {
        	echo '<p>Incorrect input. Please try again.</p>';
        }
      ?>
			<label for="iFName" class="sr-only">First Name</label>
        	<input type="text" id="iFName" name="iFName" class="form-control" placeholder="First Name*" required autofocus>
        	<label for="iLName" class="sr-only">Last Name</label>
        	<input type="text" id="iLName" name="iLName" class="form-control" placeholder="Last Name*" required>
        	<label for="iMem_Address" class="sr-only">Address</label>
        	<input type="text" id="iMem_Address" name="iMem_Address" class="form-control" placeholder="Address">
        	<label for="iPhone" class="sr-only">Phone</label>
        	<input type="text" id="iPhone" name="iPhone" class="form-control" placeholder="Phone">
        	<label for="iEmail" class="sr-only">Email</label>
        	<input type="email" id="iEmail" name="iEmail" class="form-control" placeholder="Email*" required>
        	<label for="iPassword" class="sr-only">Password</label>
        	<input type="password" id="iPassword" name="iPassword" class="form-control" placeholder="Password*" required>
        	<label for="iLicense_No" class="sr-only">License Number</label>
        	<input type="text" id="iLicense_No" name="iLicense_No" class="form-control" placeholder="License Number*" required>
        	<label for="iCC_No" class="sr-only">Credit Card Number</label>
        	<input type="text" id="iCC_No" name="iCC_No" class="form-control" placeholder="Credit Card Number">
        	<label for="iCC_Expiry" class="sr-only">Credit Card Expiry</label>
        	<input type="text" id="iCC_Expiry" name="iCC_Expiry" class="form-control" placeholder="Credit Card Expiry">
        	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
		</form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

