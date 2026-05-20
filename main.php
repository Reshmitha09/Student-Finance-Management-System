<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>

body{
background:#0a1f44;
font-family:Segoe UI;
}

.box{
width:350px;
background:white;
padding:30px;
margin:120px auto;
border-radius:10px;
}

input,
button{
width:100%;
padding:12px;
margin:10px 0;
}

button{
background:#2563eb;
color:white;
border:none;
}
</style>
</head>

<body>
<div class="box">
<h2>Login</h2>

<form
action="login.php"
method="POST"
>

<input
name="username"
placeholder="Username"
required
>

<input
type="password"
name="password"
placeholder="Password"
required
>
<button>
Login
</button>
</form>
</div>
</body>
</html>