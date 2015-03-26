<html>
<head><title>Kenya Helps Donor Database</title></head>
<body>

<?php
/* Program: KHDD_main.php
 * Desc:    Main page
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

	$query = "SELECT * FROM `Location`";
	$result = mysqli_query($cxn, $query);
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) {
        	echo $row . "<br>";
    }
} else {
    echo "0 results";
}
  
  mysqli_close($cxn); 

echo "Donations by Brent.";

?>
</body></html>
