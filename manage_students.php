<?php
include "db.php";
$search =
$_GET["search"] ?? "";
if($search!=""){
$sql=
"SELECT *
FROM students
WHERE
id LIKE '%$search%'
OR
name LIKE '%$search%'";
}
else{
$sql=
"SELECT *
FROM students";
}
$result=
$conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Manage Students</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<style>

body{
font-family:Segoe UI;
background:#f4f6f9;
padding:30px;
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
background:#2563eb;
color:white;
border:none;
cursor:pointer;
}
input{
padding:10px;
margin-bottom:20px;
}
a{
text-decoration:none;
}
</style>
</head>
<body>
<h2>Student Records</h2>
<form>
<input
name="search"
placeholder="Search Student"
>
<button>
Search
</button>
</form>
<br>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Fee</th>
<th>Scholarship</th>
<th>Reason</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
while(
$row=
$result->fetch_assoc()
){
?>
<tr>
<td>
<?= $row["id"] ?>
</td>
<td>
<?= $row["name"] ?>
</td>
<td>
<?= $row["fee_status"] ?>
</td>
<td>
<?= $row["scholarship_status"] ?>
</td>
<td>
<?= $row["reason"] ?>
</td>
<td>
<a
href=
"admin.php?id=<?= $row["id"] ?>"
>
Edit
</a>
</td>
<td>
<a
class="deleteLink"
href=
"delete_student.php?id=<?= $row["id"] ?>"
>
<button
type="button"
>
Delete
</button>
</a>
</td>
</tr>
<?php
}
?>
</table>
<script>
$(".deleteLink").click(
function(e){
let confirmDelete =
confirm(
"Delete this student?"
);
if(
!confirmDelete
){
e.preventDefault();
}
}
);
</script>
</body>
</html>