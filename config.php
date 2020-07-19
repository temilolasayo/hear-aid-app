<?php
//Database details


$db_host = 'us-cdbr-east-02.cleardb.com';
$db_username = 'b67456d4bbec5d';
$db_password = 'bce318a9';
$db_name = 'heroku_a4275d67572b90d';

//Create connection and select DB
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
