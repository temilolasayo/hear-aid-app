<?php

//Database details

$servername='us-cdbr-east-02.cleardb.com';
$username='b67456d4bbec5d';
$password='bce318a9';
$dbname = "heroku_a4275d67572b90d";

//Create connection and select DB
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
