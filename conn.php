<?php
$conn = mysqli_connect("localhost","delai3i3_drinks","drinks@123","delai3i3_drinks");
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>