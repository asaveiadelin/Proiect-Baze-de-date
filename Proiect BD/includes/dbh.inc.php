<?php

$dbServername="localHost";
$dbUsername= "root";
$dbPassword="";
$dbName="proiectAsavei";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
	die("Connection failed: ".mysql_connect_error());
}

