<?php
$conn = new mysqli(
"localhost",
"root",
"",
"daily_curiosity_db"
);
if($conn->connect_error){
die("Connection Failed");
}
?>