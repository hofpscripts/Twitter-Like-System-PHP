<?php
//Edit the following fields in order to establish a connection with MySQL
//********************************************************************************
$dbhost	= "localhost"; //Leave this as 'localhost' once uploaded on a server
$dbuser	= "USERNAME"; //Username that is allowed to access the database
$dbpass	= "PASSWORD"; //Password
$dbname	= "NAME-OF-THE-DATABASE"; //Name of the database
//********************************************************************************

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Error connecting to database");
?>
