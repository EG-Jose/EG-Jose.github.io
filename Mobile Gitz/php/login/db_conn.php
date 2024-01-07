<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "mbg_db";

$conn = mysqli_connect($firstName, $lastName, $userName, $email, $pass, $db_name);

if (!$conn) {
	echo "Connection failed!";
}