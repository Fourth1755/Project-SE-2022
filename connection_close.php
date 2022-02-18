<?php
    $severname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "animedb";

    $conn = mysqli_connect($severname,$username,$password);
    $conn->close();
?>