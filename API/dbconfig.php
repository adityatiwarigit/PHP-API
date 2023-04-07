<?php
    $hostname= "localhost";
    $user = "root";
    $password = "";
    $dbname = "text";

    $conn = mysqli_connect($hostname,$user,$password,$dbname);

    if(!$conn)
    {
        die("connection failed->" . mysqli_connect_error());
    }
?>