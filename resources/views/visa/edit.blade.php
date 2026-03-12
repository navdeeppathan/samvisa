<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Visa Request</title>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

:root{
--blue:#1a4aab;
--blue-dark:#0f2f7a;
--blue-light:#4a7fd4;
--gray:#6b7280;
--border:#d4dce6;
--bg:#f4f6f9;
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
background:linear-gradient(135deg,#f0f5ff,#f6f8fc);
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
padding:40px;
}

/* Card */

.form-card{

width:100%;
max-width:850px;

background:var(--white);
border-radius:16px;

box-shadow:0 20px 60px rgba(26,74,171,0.15);

padding:40px;
border:1px solid var(--border);

}

/* Heading */

.form-title{

font-family:var(--font-title);
font-size:38px;
color:var(--blue-dark);
margin-bottom:10px;

}

.form-sub{

color:var(--gray);
font-size:14px;
margin-bottom:35px;

}

/* Grid */

.form-grid{

display:grid;
grid-template-columns:1fr 1fr;
gap:20px;

}

.full{
grid-column:1/3;
}

/* Labels */

label{

font-size:11px;
letter-spacing:2px;
text-transform:uppercase;
color:var(--blue);
font-weight:600;
margin-bottom:6px;
display:block;

}

/* Inputs */

input,select,textarea{

width:100%;

padding:12px 14px;

border-radius:8px;

border:1.5px solid var(--border);

font-family:var(--font-body);
font-size:14px;

background:#fafbfd;

transition:0.25s;

}

input:focus,
select:focus,
textarea:focus{

outline:none;
border-color:var(--blue);
background:white;
box-shadow:0 0 0 4px rgba(26,74,171,0.1);

}

/* Checkbox */
.checkbox{

display:flex;
align-items:flex-start;
gap:14px;

background:#f8fbff;
border:1.5px solid #d4dce6;

padding:16px 18px;
border-radius:12px;

transition:0.25s;
}

.checkbox:hover{
border-color:#1a4aab;
background:#eef4ff;
}

.checkbox input{

width:18px;
height:18px;

margin-top:4px;
accent-color:#1a4aab;

}

.checkbox-text strong{
display:block;
font-size:14px;
color:#1a4aab;
font-weight:600;
}

.checkbox-text small{
display:block;
font-size:12px;
color:#6b7280;
margin-top:4px;
}

/* Button */

.submit-btn{

margin-top:25px;

background:linear-gradient(135deg,var(--blue),var(--blue-dark));

border:none;

padding:15px 26px;

color:white;

font-weight:600;
font-size:14px;

border-radius:10px;

cursor:pointer;

letter-spacing:1px;

transition:0.3s;

}

.submit-btn:hover{

transform:translateY(-2px);
box-shadow:0 12px 35px rgba(26,74,171,0.3);

}

/* Alert */

.alert{

background:#dcfce7;
border:1px solid #16a34a;
color:#065f46;

padding:12px;
border-radius:8px;

margin-bottom:20px;

}

/* Responsive */

@media(max-width:768px){

.form-grid{
grid-template-columns:1fr;
}

.full{
grid-column:auto;
}

.form-card{
padding:25px;
}

}

</style>
</head>

<body>

<div class="form-card">

<h1 class="form-title">Edit Visa Request</h1>
<p class="form-sub">Update your visa request details below.</p>

@if(session('success'))
<div class="alert">
{{ session('success') }}
</div>
@endif

<form action="{{ route('visa.update',$visa->edit_token) }}" method="POST">

@csrf

<div class="form-grid">

<div>
<label>Full Name</label>
<input type="text" name="name"
value="{{ old('name',$visa->name) }}" required>
</div>

<div>
<label>Email</label>
<input type="email" name="email"
value="{{ old('email',$visa->email) }}" required>
</div>

<div>
<label>Phone</label>
<input type="text" name="phone"
value="{{ old('phone',$visa->phone) }}" required>
</div>

<div>
<label>Nationality</label>
<input type="text" name="nationality"
value="{{ old('nationality',$visa->nationality) }}" required>
</div>

<div class="full">

<label>Destination</label>

<select name="destination" required>

<option value="">Select destination</option>

<option value="Australia" {{ $visa->destination=='Australia'?'selected':'' }}>Australia</option>
<option value="Canada" {{ $visa->destination=='Canada'?'selected':'' }}>Canada</option>
<option value="China" {{ $visa->destination=='China'?'selected':'' }}>China</option>
<option value="Europe (Schengen)" {{ $visa->destination=='Europe (Schengen)'?'selected':'' }}>Europe (Schengen)</option>
<option value="Ireland" {{ $visa->destination=='Ireland'?'selected':'' }}>Ireland</option>
<option value="Morocco" {{ $visa->destination=='Morocco'?'selected':'' }}>Morocco</option>
<option value="Turkey" {{ $visa->destination=='Turkey'?'selected':'' }}>Turkey</option>
<option value="United Arab Emirates" {{ $visa->destination=='United Arab Emirates'?'selected':'' }}>United Arab Emirates</option>
<option value="United Kingdom" {{ $visa->destination=='United Kingdom'?'selected':'' }}>United Kingdom</option>
<option value="United States of America" {{ $visa->destination=='United States of America'?'selected':'' }}>United States of America</option>

</select>

</div>

<div class="full">

<label>Message</label>

<textarea name="message" rows="4">{{ old('message',$visa->message) }}</textarea>

</div>

{{-- <div class="full checkbox">

    <input type="checkbox"
    name="skip_payment"
    {{ $visa->skip_payment ? 'checked' : '' }}>

    <div >
        <strong>Skip Payment (Consult First)</strong><br>
        <small>You can request consultation before making any payment.</small>
    </div>

</div> --}}

</div>

<button class="submit-btn">
Update Visa Request →
</button>

</form>

</div>

</body>
</html>