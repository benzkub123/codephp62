<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'codephp62';

$myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($myconn->connect_errno) {
    printf("Connect failed: %s\n", $myconn->connect_error);
    exit();
}