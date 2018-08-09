<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdb";

$con = mysql_connect($servername, $username, $password, $dbname);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

  ?>