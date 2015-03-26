<html>
<head>
	<link type="text/css" rel="stylesheet" href="KenyaHelpStyle.css"/>
	<title>Kenya Help Donor Database</title>
</head>
<body>

<div id="Title">
<h1>Kenya Help Donor Database</h1>
<a href="KHDD_main.php">Home</a>
</div>

<?php
 $host = "localhost";
 $user = "kenyahelp";
 $password = "password";
 $database = "DonorDatabase";

 $mysqli = new mysqli($host,$user,$password, $database);
 $result = $mysqli->query("SELECT * FROM Donors ORDER BY Donors.ID DESC");
 showResults($result, "Complete Donor List");
 
 $mysqli->close();


function showResults($result, $title) {
		
	echo '<h3>',$title,'</h3>';
	
	echo '<table cellpadding="5" cellspacing="5" class="db-table" border="1">';
	$column = $result->fetch_fields();
	
	echo '<tr>';
	$num = 0;
	foreach ($column as $col) {
		if ($num < 4 || $num > 9)
			echo '<th>'.$col->name.'</th>';
		$num++;
    }
	
	echo '</tr>';
	while($row2 = $result->fetch_row() ) {
		echo '<tr>';
		$num = 0;
		foreach($row2 as $key=>$value) {
			if($num == 0)
				echo '<td>','<a href="KHDD_ViewProfile.php?ID=',$value,'">',$value,'</a></td>';
			elseif ($num < 4 || $num > 9)
				echo '<td>',$value,'</td>';
			$num++;
		}
		echo '</tr>';
	}
	echo '</table><br />';
}

?>


</body>
</html> 