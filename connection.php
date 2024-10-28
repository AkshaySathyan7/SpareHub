<?php
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}
?>