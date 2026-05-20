<?php
include "db.php";
$total =
$conn
->query(
"SELECT COUNT(*) total
FROM students"
)
->fetch_assoc();
$paid =
$conn
->query(
"SELECT COUNT(*) total
FROM students
WHERE fee_status='Completed'"
)
->fetch_assoc();
$sch =
$conn
->query(
"SELECT COUNT(*) total
FROM students
WHERE scholarship_status='Deposited'"
)
->fetch_assoc();
$issues =
$conn
->query(
"SELECT COUNT(*) total
FROM issues"
)
->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<style>

body{
font-family:Segoe UI;
background:#f4f6f9;
padding:30px;
}

.cards{
display:flex;
gap:20px;
}

.card{
background:white;
padding:30px;
width:220px;
border-radius:10px;
box-shadow:0 0 10px #ddd;
}

h1{
color:#2563eb;
}
</style>
</head>
<body>
<h2>Dashboard</h2>
<div class="cards">
<div class="card">
<h1>
<?= $total["total"] ?>
</h1>
Students
</div>
<div class="card">
<h1>
<?= $paid["total"] ?>
</h1>
Fee Paid
</div>
<div class="card">
<h1>
<?= $sch["total"] ?>
</h1>
Scholarship
</div>
<div class="card">
<h1>
<?= $issues["total"] ?>
</h1>
Issues
</div>
</div>
</body>
</html>