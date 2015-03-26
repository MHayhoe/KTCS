<html>
<head><title>Populate K-Town Car Share Database Database</title></head>
<body>

<?php
/* Program: KTCS_database_populate.php
 * Desc:    Populates the K-Town Car Share database tables with 
 *          sample data.
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

	mysqli_query($cxn,"delete from Car;");
	mysqli_query($cxn,"delete from Member;");
	mysqli_query($cxn,"delete from Location;");
	mysqli_query($cxn,"delete from Reservation;");
	mysqli_query($cxn,"delete from Rental;");
	mysqli_query($cxn,"delete from Comment;");
  
    mysqli_query($cxn,"insert into Car values
    	 (100, 'Toyota', 'Prius', 2010, 'a', 80000, 75, '2014-11-01', 73000, 1),
    	 (423, 'Honda', 'Accord', 2015, 'u', 1200, 100, NULL, NULL, 1),
    	 (888, 'Dodge', 'Grand Caravan', 2008, 'm', 200000, 80, '2014-01-01', 170000, 2);");
  
	mysqli_query($cxn,"insert into Member (Password, FName, LName, Mem_Address, Phone, Email, License_No, CC_No, CC_Expiry, Annual_Fee, Reg_Anniv_Date) values
         ('123', 'John', 'Doe', '123 Ontario St, Kingston ON K1A 1A1', NULL, 'john@doe.com', 'A1234-56789-01234', '1111-2222-3333-4444', '2018-01-20', 34.99, '06-01'),
         ('123', 'Jane', 'Doe', NULL, '613-000-9999', 'jane@doe.com', 'J5555-10101-63928', '0000-1212-3333-9999', '2017-11-01', 105.99, '01-01'),
		 ('123', 'Adam', 'Smith', NULL, NULL, 'invisiblehand@hotmail.com', 'H1111-11111-12345', NULL, NULL, 843.72, '12-31');");
		 
	mysqli_query($cxn,"insert into Location (Address, Num_Spaces) values
         ('500 Princess St, Kingston ON K7K 1X1', 30),
         ('800 John Counter Blvd, Kingston ON K7K 6K7', 120);");
         
    mysqli_query($cxn, "insert into Reservation (Res_Start, Res_End, MIN, LNo, VIN)
    					values
         ('2014-12-15 09:00:00', '2014-12-16 21:00:00', 1, 1, 100),
         ('2015-03-01 10:00:00', '2015-03-02 10:00:00', 2, 1, 423),
         ('2015-05-31 15:45:00', '2015-06-07 15:45:00', 3, 2, 888);");
         
	mysqli_query($cxn, "insert into Rental (Start_Date, Duration, Start_Odom, End_Odom,
						Usage_Fee, MIN, VIN) values
         ('2014-12-15 09:00:00', 37, 75000, 75200, 14.99, 1, 100),
         ('2015-02-10 13:00:00', 0, 1200, 0, 19.99, 2, 423),
         ('2013-11-23 10:30:00', 3, 160000, 16080, 5.99, 2, 888),
         ('2015-03-11 21:00:00', 0, 80000, 0, 14.99, 1, 100);");
         
    mysqli_query($cxn,"insert into Comment (Message, Response, MIN, VIN) values
         ('Great car!', 'We are glad you liked it!', 2, 423),
         ('This thing was a nightmare!', NULL, 1, 888),
         ('Such a great example of capitalism!', 'Thanks!', 3, NULL),
         ('Thanks for protecting the environment', 'We do what we can', 2, 100);");
   
   mysqli_close($cxn); 

echo "Database populated.";

?>
</body></html>
