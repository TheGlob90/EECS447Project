<?php
	session_start();
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

    $_SESSION['user_info'] = mysql_fetch_row($result);

	header('Location: landing.html');
	exit;

?> 