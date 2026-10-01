<?php

$conn = mysqli_connect("localhost", "root", "", "noticeboard");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>