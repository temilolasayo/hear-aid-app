<?php
//Database details

mysql://b67456d4bbec5d:bce318a9@us-cdbr-east-02.cleardb.com/heroku_a4275d67572b90d?reconnect=true

// $db_host = 'localhost';
// $db_username = 'shayo';
// $db_password = 'password123456';
// $db_name = 'test';

$db_host = 'us-cdbr-east-02.cleardb.com';
$db_username = 'b67456d4bbec5d';
$db_password = 'bce318a9';
$db_name = 'heroku_a4275d67572b90d';

//Create connection and select DB
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}