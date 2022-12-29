<?php

require_once '../config.php';

$conn = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
};