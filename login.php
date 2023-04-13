<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

// Connect to MySQL server, select database
	$conn = mysql_connect('mysql.eecs.ku.edu', 'b542l829', 'aiV3eing')
    		or die('Could not connect: ' . mysql_error());
	echo 'Connected successfully';
    echo "<br>";
	mysql_select_db('b542l829') or die('Could not select database');

    $query = "SELECT * FROM Account WHERE Password = '".$password."' AND Username = '".$username."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
        		echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
	}
	echo "</table>\n";

?> 