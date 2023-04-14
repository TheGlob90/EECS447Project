<?php
// Connect to MySQL server, select database
	$conn = mysqli_connect('mysql.eecs.ku.edu', 'b542l829', 'aiV3eing')
    		or die('Could not connect: ' . mysqli_error());
	echo 'Connected successfully';
	mysqli_select_db('b542l829') or die('Could not select database');

// Send SQL query
	$query = 'SELECT * FROM Account';
	$result = mysqli_query($query) or die('Query failed: ' . mysqli_error());

// Print results in HTML
	echo "<table>\n";
	while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
        		echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
	}
	echo "</table>\n";

	echo "Number of fields: ".mysqli_num_fields($result)."<br>";
	echo "Number of records: ".mysqli_num_rows($result)."<br>";

// Free resultset
	mysql_free_result($result);

// Close connection
	mysql_close($link);
?> 
