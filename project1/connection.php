<?php

$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


