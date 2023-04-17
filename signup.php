<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

// Connect to MySQL server, select database
	$conn = mysql_connect('mysql.eecs.ku.edu', 'b542l829', 'aiV3eing')
    		or die('Could not connect: ' . mysql_error());
    echo "<br>";
	mysql_select_db('b542l829') or die('Could not select database');

    $query = "INSERT INTO `Account`(`Name`, `Username`, `Password`, `Email`) VALUES ('$name','$username','$password','$email')";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
?> 
<html>
    <head>
        <link rel="stylesheet" href="format.css">
    </head>
    <body class="logins">
            <h1 style="color: white;">Account Created</h1><br>
            <a href="homepage.html" class="home">Click Here to Return to Login Page</a>
    <body>
</html>
