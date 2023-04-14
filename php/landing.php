<?php
    session_start();
    $user_info = $_SESSION['user_info'];
    echo '<a href="landing.html">Home</a> -
    <a href="bills.html">Bills</a> -
    <a href="spendinghistory.html">Spending History</a>';
    echo "<br>";
    echo '<h1>Welcome back '.$user_info[0].'</h1>';
    echo "<br>";
?>