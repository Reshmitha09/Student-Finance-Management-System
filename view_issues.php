<?php
include "db.php";
$sql =
"SELECT * FROM issues";
$result =
$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Issues</title>
<style>

body{
font-family:Segoe UI;
padding:30px;
background:#f4f6f9;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}
th,
td{
padding:12px;
border:1px solid #ddd;
}
button{
padding:8px;
background:red;
color:white;
border:none;
cursor:pointer;
}
</style>
</head>
<body>
<h2>Student Issues</h2>
<table>
<tr>
<th>Issue ID</th>
<th>Student ID</th>
<th>Issue</th>
<th>Action</th>
</tr>
<?php
while(
$row=
$result->fetch_assoc()
){
?>
<tr>
<td>
<?= $row["issue_id"] ?>
</td>
<td>
<?= $row["student_id"] ?>
</td>
<td>
<?= $row["issue_type"] ?>
</td>
<td>
<a href=
"clear_issue.php?id=<?= $row["issue_id"] ?>"
>
<button>
Clear
</button>
</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>