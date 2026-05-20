<?php
include "db.php";

$id=$_POST["id"];
$name=$_POST["name"];
$fee=$_POST["fee"];
$sch=$_POST["sch"];
$reason=$_POST["reason"];

$check=
$conn->query(
"SELECT * FROM students WHERE id='$id'"
);

if($check->num_rows>0){
echo "
<script>
alert(
'Student ID already exists'
);
window.location='admin.php';
</script>
";
exit;
}

$sql=

"INSERT INTO students
(
id,
name,
fee_status,
scholarship_status,
reason
)

VALUES
(
'$id',
'$name',
'$fee',
'$sch',
'$reason'
)";
if($conn->query($sql)){
echo "
<script>
alert(
'Student Saved Successfully'
);
window.location='admin.php';
</script>
";
}

else{
echo $conn->error;
}

?>