<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Visa Request</title>
</head>

<body style="margin:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;background:#f4f6f9;">
<tr>
<td align="center">

<table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 10px 40px rgba(0,0,0,0.08);">

<!-- HEADER -->
<tr>
<td style="background:linear-gradient(135deg,#1a4aab,#0f2f7a);padding:28px;text-align:center;color:#ffffff;">

<h2 style="margin:0;font-size:22px;letter-spacing:1px;">
SAM VISA SERVICES
</h2>

<p style="margin:5px 0 0;font-size:12px;opacity:0.9;">
London, United Kingdom
</p>

</td>
</tr>

<!-- TITLE -->
<tr>
<td style="padding:30px 40px 10px 40px;">

<h3 style="margin:0;color:#0f2f7a;font-size:20px;">
New Visa Request Received
</h3>

<p style="margin:8px 0 0;color:#5a6a7a;font-size:14px;">
A new visa request has been submitted on your website.
</p>

</td>
</tr>

<!-- DETAILS -->
<tr>
<td style="padding:10px 40px 30px 40px;">

<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Name</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">{{ $visa->name }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Email</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">{{ $visa->email }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Phone</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">{{ $visa->phone }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Nationality</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">{{ $visa->nationality }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Destination</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">{{ $visa->destination }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Skip Payment</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;font-weight:600;">
{{ $visa->skip_payment ? 'Yes' : 'No' }}
</td>
</tr>

@if($visa->message)
<tr>
<td style="padding:10px;border-bottom:1px solid #edf0f5;color:#5a6a7a;">Message</td>
<td style="padding:10px;border-bottom:1px solid #edf0f5;">{{ $visa->message }}</td>
</tr>
@endif

</table>

</td>
</tr>

<!-- ACTION -->
<tr>
<td style="text-align:center;padding:0 40px 35px 40px;">

<a href="{{ url('/admin/visa-requests') }}"
style="
background:#1a4aab;
color:#ffffff;
text-decoration:none;
padding:14px 30px;
border-radius:6px;
font-weight:bold;
display:inline-block;
font-size:14px;
">
View in Admin Panel
</a>

</td>
</tr>

<!-- FOOTER -->
<tr>
<td style="background:#f8fafc;padding:20px;text-align:center;font-size:12px;color:#8a9aaa;">

© {{ date('Y') }} SAM Visa Services  
<br>
Professional Visa & Travel Services · London

</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>