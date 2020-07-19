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
} else {
   $sql = "CREATE TABLE IF NOT EXISTS emailcapture ( id INT(30) NOT NULL AUTO_INCREMENT , email VARCHAR(100) NOT NULL , regDate DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

   mysqli_query($conn, $sql);
}
?>
