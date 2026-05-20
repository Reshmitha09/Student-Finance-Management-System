<?php
include "db.php";
$id=
$_POST["student_id"];
$issue=
$_POST["issue"];
$sql=
"INSERT INTO issues
(
student_id,
issue_type
)
VALUES
(
'$id',
'$issue'
)";
if(
$conn->query($sql)
){
echo
"Issue Submitted";
}
else{
echo
"Error";
}
?>