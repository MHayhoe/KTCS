<html>
<head><title>Load K-Town Car Share Database</title></head>
<body>

<?php
/* Program: KTCS_database_load.php
 * Desc:    Creates and loads the KTCS  database tables with 
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
   
   mysqli_query($cxn,"drop table Car;");
   mysqli_query($cxn,"drop table Member;");
   mysqli_query($cxn,"drop table Location;");
   mysqli_query($cxn,"drop table Reservation;");
   mysqli_query($cxn,"drop table Rental;");
   mysqli_query($cxn,"drop table Comment;");

   mysqli_query($cxn,"CREATE TABLE Car (
                  VIN			INTEGER		NOT NULL,
				  Make			VARCHAR(20)	NOT NULL,
                  Model			VARCHAR(20)	NOT NULL,
                  Year			INTEGER		NOT NULL,
                  Status		CHAR(1)		NOT NULL,
                  Last_Odom		INTEGER		NOT NULL,
                  Last_Gas		INTEGER		NOT NULL,
                  Maint_Date	DATE,
                  Maint_Odom	INTEGER,
                  LNo			INTEGER,
                  PRIMARY KEY(VIN));");

   mysqli_query($cxn,"CREATE TABLE Member (
				  MIN			INTEGER		AUTO_INCREMENT,
				  FName			VARCHAR(20)	NOT NULL,
				  LName			VARCHAR(20)	NOT NULL,
                  Mem_Address	VARCHAR(50),
                  Phone			VARCHAR(12),
                  Email			VARCHAR(50),
                  License_No	VARCHAR(20)	NOT NULL,
                  CC_No			VARCHAR(20),
                  CC_Expiry		DATE,
                  Annual_Fee	DECIMAL(6,2) NOT NULL,
                  Reg_Anniv_Date CHAR(5)	NOT NULL,
                  PRIMARY KEY(MIN));");
                  
    mysqli_query($cxn,"CREATE TABLE Location (
				  LNo			INTEGER 	AUTO_INCREMENT,
				  Address		VARCHAR(50)	NOT NULL,
				  Num_Spaces	INTEGER,
                  PRIMARY KEY(LNo));");
                  
    mysqli_query($cxn,"CREATE TABLE Reservation (
				  Res_No		INTEGER		AUTO_INCREMENT,
				  Res_Start		DATETIME	NOT NULL,
				  Res_End		DATETIME	NOT NULL,
				  MIN			INTEGER		NOT NULL,
				  LNo			INTEGER	NOT NULL,
				  VIN			INTEGER		NOT NULL,
                  PRIMARY KEY(Res_No));");
                  
    mysqli_query($cxn,"CREATE TABLE Rental (
				  Rent_No		INTEGER		AUTO_INCREMENT,
				  Start_Date	DATETIME	NOT NULL,
				  Duration		INTEGER		NOT NULL,
				  Start_Odom	INTEGER		NOT NULL,
				  End_Odom		INTEGER		NOT NULL,
				  Usage_Fee		DECIMAL(5,2) NOT NULL,
				  MIN			INTEGER 	NOT NULL,
				  VIN			INTEGER		NOT NULL,
                  PRIMARY KEY(Rent_No));");
                  
	mysqli_query($cxn,"CREATE TABLE Comment (
				  Comm_No		INTEGER		AUTO_INCREMENT,
				  Message		VARCHAR(255) NOT NULL,
				  Response		VARCHAR(255),
				  MIN			INTEGER		NOT NULL,
				  VIN			INTEGER,
                  PRIMARY KEY(Comm_No));");


   mysqli_close($cxn); 

echo "Database created.";

?>
</body></html>
