<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>

:root{
--blue:#1a4aab;
--blue-dark:#0f2f7a;
--blue-light:#4a7fd4;
--gray:#6b7280;
--border:#d4dce6;
--bg:#f3f6fb;
--white:#ffffff;

--font-title:'Cormorant Garamond',serif;
--font-body:'Jost',sans-serif;
}

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{

font-family:var(--font-body);

background:linear-gradient(135deg,#eef4ff,#f6f9ff);

min-height:100vh;

display:flex;
align-items:center;
justify-content:center;

padding:20px;

}

/* LOGIN WRAPPER */

.login-wrapper{

width:100%;
max-width:900px;

background:var(--white);

border-radius:16px;

overflow:hidden;

box-shadow:0 25px 70px rgba(26,74,171,0.2);

display:flex;
flex-wrap:wrap;

}

/* LEFT SIDE */

.login-left{

flex:1;
min-height:520px;

background:linear-gradient(135deg,var(--blue),var(--blue-dark));

color:white;

display:flex;
flex-direction:column;
justify-content:center;

padding:50px;

position:relative;

}

.login-left h1{

font-family:var(--font-title);
font-size:42px;
text-align: center;

}

.login-left p{

margin-top:20px;
line-height:1.7;
opacity:.9;
text-align: center;

}

/* RIGHT SIDE */

.login-right{

flex:1;

padding:60px 50px;

display:flex;
flex-direction:column;
justify-content:center;

}

.login-right h3{

font-family:var(--font-title);
font-size:32px;

color:var(--blue-dark);

margin-bottom:10px;

}

.login-right p{

color:var(--gray);
margin-bottom:30px;

}

/* INPUTS */

.form-control{

width:100%;
height:48px;

border-radius:10px;

border:1.5px solid var(--border);

padding:0 14px;

font-family:var(--font-body);

margin-bottom:15px;

background:#fafbfd;

transition:.25s;

}

.form-control:focus{

outline:none;

border-color:var(--blue);

background:white;

box-shadow:0 0 0 4px rgba(26,74,171,0.1);

}

/* BUTTON */

.login-btn{

width:100%;

padding:14px;

border:none;

border-radius:10px;

background:linear-gradient(135deg,var(--blue),var(--blue-dark));

color:white;

font-weight:600;

letter-spacing:1px;

cursor:pointer;

transition:.3s;

}

.login-btn:hover{

transform:translateY(-2px);

box-shadow:0 12px 30px rgba(26,74,171,0.3);

}

.login-logo{
    width: 200px;
    height: 200px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    margin-bottom: 20px;
    margin-top: 20px;
}

/* RESPONSIVE */

@media(max-width:768px){

.login-wrapper{
flex-direction:column;
}

.login-left{
min-height:auto;
text-align:center;
}

.login-right{
padding:40px 25px;
}

}

</style>

</head>

<body>

<div class="login-wrapper">

<!-- LEFT -->

<div class="login-left">
    <div class="login-logo">
        <img src="https://samvisauk.com/wp-content/uploads/2023/11/fulllogo_transparent_nobuffer-removebg-preview_200x100px.png" alt="">
    </div>
<h1>Welcome Back</h1>

<p>
Login to manage visa requests, respond to users,
and monitor applications easily from your admin dashboard.
</p>

</div>

<!-- RIGHT -->

<div class="login-right">

<h3>Admin Login</h3>
<p>Enter your credentials to access dashboard</p>

<form method="POST" action="{{ route('admin.login.check') }}">
@csrf

<input type="email"
name="email"
class="form-control"
placeholder="Email address"
required>

<input type="password"
name="password"
class="form-control"
placeholder="Password"
required>

<button class="login-btn">
Login →
</button>

</form>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@if(session('error'))
<script>
Swal.fire({
icon:'error',
title:'Login Failed',
text:'Invalid email or password',
confirmButtonColor:'#1a4aab'
});
</script>
@endif

</body>
</html>