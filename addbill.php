<?php
    session_start();
    $type = $_POST["type"];
    $amount = $_POST["amount"];
    $dates = $_POST["dates"];
    $user_info = $_SESSION['user_info'];
    $a_id = $user_info[4];


    $conn = mysql_connect('mysql.eecs.ku.edu', 'b542l829', 'aiV3eing')
    		or die('Could not connect: ' . mysql_error());
    echo "<br>";
	mysql_select_db('b542l829') or die('Could not select database');

    $query = "INSERT INTO `Bills`(`Type`, `Amount`, `Dates`, `A_ID`) VALUES ('$type','$amount','$dates','$a_id')";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    // Free resultset
	mysql_free_result($result);

	// Close connection
	mysql_close($link);

    header('Location: bills.html');
?>