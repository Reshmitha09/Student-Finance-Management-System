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
<title>Dashboard</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<h2 class="text-primary mb-4">
Admin Dashboard
</h2>
<div class="row g-4">
<div class="col-md-3">
<div class="card shadow text-center">
<div class="card-body">
<h1 class="text-primary">
<?= $total["total"] ?>
</h1>
<h5>
Students
</h5>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card shadow text-center">
<div class="card-body">
<h1 class="text-success">
<?= $paid["total"] ?>
</h1>
<h5>
Fee Paid
</h5>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card shadow text-center">
<div class="card-body">
<h1 class="text-warning">
<?= $sch["total"] ?>
</h1>
<h5>
Scholarship
</h5>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card shadow text-center">
<div class="card-body">
<h1 class="text-danger">
<?= $issues["total"] ?>
</h1>
<h5>
Issues
</h5>
</div>
</div>
</div>
</div>
<br>
<a
href="manage_students.php"
class="btn btn-primary"
>
Manage Students
</a>
</div>
</body>
</html>