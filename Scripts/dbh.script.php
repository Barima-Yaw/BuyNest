<?php

$Servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "buynest";

$connect = mysqli_connect($Servername, $dBUsername, $dBPassword, $dBName);

if (!$connect) {
    die("Connection failed: ".mysqli_connect_error());
}