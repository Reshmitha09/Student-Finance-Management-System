<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>

body{
margin:0;
font-family:'Segoe UI';
background:#0f172a;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.card{
background:#1e293b;
padding:30px;
width:420px;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

h2{
text-align:center;
color:white;
margin-bottom:25px;
}

input,
select,
button{
width:100%;
padding:12px;
margin-bottom:15px;
border-radius:8px;
font-size:15px;
box-sizing:border-box;
}

input,
select{
border:none;
}

button{
background:#2563eb;
color:white;
border:none;
cursor:pointer;
font-weight:bold;
}

button:hover{
background:#1d4ed8;
}
</style>

</head>

<body>

<div class="card">

<h2>Add Student</h2>

<form action="save_student.php" method="POST">

<input
type="text"
name="id"
placeholder="Student ID"
required
>

<input
type="text"
name="name"
placeholder="Student Name"
required
>

<select name="fee" required>

<option value="">
Select Fee Status
</option>

<option value="Completed">
Completed
</option>

<option value="Pending">
Pending
</option>

</select>

<select name="sch" required>

<option value="">
Select Scholarship Status
</option>

<option value="Deposited">
Deposited
</option>

<option value="Under Verification">
Under Verification
</option>

<option value="Issue">
Issue
</option>
</select>

<input
type="text"
name="reason"
placeholder="Reason"
>

<button type="submit">
Save Student
</button>
</form>
<br>
<a href="manage_students.php">
<button type="button">
Manage Students
</button>
</a>
<br>
<a href="view_issues.php">
<button type="button">
View Student Issues
</button>
</a>
<br>
<a href="dashboard.php">
<button type="button">
Dashboard
</button>

</a>
</div>
</body>
</html>