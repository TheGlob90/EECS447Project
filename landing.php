<?php
    session_start();
    $user_info = $_SESSION['user_info'];
    echo "<br>";
    echo '<h1 style="color: white;">Welcome back '.$user_info[0].'</h1>';
    echo "<br>";
?>