<?php
ob_start(); // Wait until we have all the data for sending it to the server.
session_start();
$timezone = date_default_timezone_set("America/Mexico_City");
$con = mysqli_connect("localhost", "root", "pAssw@rd1", "splotify");
if (mysqli_connect_errno()) {
    echo "Failed to connect:" . mysqli_connect_errno();
}
