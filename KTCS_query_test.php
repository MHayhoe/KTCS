<html>
<head><title>Test Query in K-Town Car Share Database Database</title></head>
<body>

<?php
/* Program: KTCS_query_test.php
 * Desc:    Test a query in the K-Town Car Share database.
 */
 
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

  
    $result = mysqli_query($cxn, "UPDATE Car
						SET Car.Status = 'u'
						WHERE VIN = 100;");
   
   echo $result;
   
   mysqli_close($cxn); 

echo "Query successful.";

?>
</body></html>
