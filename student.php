<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
</head>
<body>
<h2>Student Dashboard</h2>
<input
id="regNo"
placeholder="Student ID"
>
<button
onclick="loadStudent()"
>
Load
</button>
<br><br>
Fee:
<span id="fee">-</span>
<br><br>
Scholarship:
<span id="sch">-</span>
<br><br>
Reason:
<span id="reason">-</span>
<hr>
<h3>Raise Issue</h3>
<select id="issue">
<option>
Fee not updated
</option>
<option>
Scholarship delay
</option>
<option>
Wrong status
</option>
</select>
<button
onclick="raiseIssue()"
>
Submit
</button>
<script>
let currentID="";
function loadStudent(){
let id=
document
.getElementById(
"regNo"
)
.value;
currentID=id;
fetch(
"load_student.php?id="+id
)
.then(
r=>r.json()
)
.then(
s=>{
document
.getElementById(
"fee"
)
.innerHTML=
s.fee_status;
document
.getElementById(
"sch"
)
.innerHTML=
s.scholarship_status;
document
.getElementById(
"reason"
)
.innerHTML=
s.reason;
}
);
}
function raiseIssue(){
let issue=
document
.getElementById(
"issue"
)
.value;
fetch(
"raise_issue.php",
{
method:"POST",
headers:{
"Content-Type":
"application/x-www-form-urlencoded"
},
body:
"student_id="
+
currentID
+
"&issue="
+
issue
}
)
.then(
r=>r.text()
)
.then(
alert
);
}
</script>
</body>
</html>