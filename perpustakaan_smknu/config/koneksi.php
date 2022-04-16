<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpus";

$database = mysqli_connect($host,$username,$password,$database);

if(!$database){
	die("database tidak terhubung");
}