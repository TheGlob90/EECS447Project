<?php
    session_start();
    $user_info = $_SESSION['user_info'];

    $conn = mysql_connect('mysql.eecs.ku.edu', 'b542l829', 'aiV3eing')
    		or die('Could not connect: ' . mysql_error());
    echo "<br>";
	mysql_select_db('b542l829') or die('Could not select database');

    $query = "SELECT Bills.Type, Bills.Amount, Bills.Dates FROM Bills INNER JOIN Account ON Bills.A_ID = Account.ID AND Account.ID = '".$user_info[4]."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    echo "<table>\n";
	echo "<tr> 
			<th> Type </th> 
			<th> Amount </th> 
			<th> Date </th>
		 </tr>";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
        		echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
	}
	echo "</table>\n";

    // Free resultset
	mysql_free_result($result);

	// Close connection
	mysql_close($link);
?>