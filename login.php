<?php
session_start();
include "db.php";
$user=
$_POST["username"];
$pass=
$_POST["password"];
$sql=
"SELECT *
FROM users
WHERE
username='$user'
AND
password='$pass'";
$result=
$conn->query($sql);
if(
$result->num_rows>0
){
$row=
$result->fetch_assoc();
$_SESSION["role"]=
$row["role"];
if(
$row["role"]=="admin"
){
header(
"Location:admin.php"
);
}
else{
header(
"Location:student.php"
);
}
}
else{
echo
"Invalid Login";
}
?>