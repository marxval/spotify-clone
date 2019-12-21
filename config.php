<?php
ob_start(); // Wait until we have all the data for sending it to the server.
$timezone = date_default_timezone_set("America/Mexico_City");
$con = mysqli_connect("localhost", "root", "pink1sKEY@", "splotify");
if (mysqli_connect_errno()) {
    echo "Failed to connect:( rr " . mysqli_connect_errno();
}
