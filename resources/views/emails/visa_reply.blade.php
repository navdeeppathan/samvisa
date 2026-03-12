<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Visa Request Update</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;background:#f4f6f9;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.1);">

<!-- HEADER -->
<tr>
<td style="background:#1a4aab;color:#ffffff;padding:25px;text-align:center;font-size:22px;font-weight:bold;">
SAM Visa Services
</td>
</tr>

<!-- BODY -->
<tr>
<td style="padding:35px;color:#333;font-size:15px;line-height:1.7;">

<h2 style="margin-top:0;color:#1a4aab;">Visa Request Update</h2>

<p>
{{ $messageBody }}
</p>

<p>
You can update your visa request using the secure link below.
</p>

<p style="text-align:center;margin:30px 0;">

<a href="{{ $editUrl }}"
style="
background:#1a4aab;
color:#ffffff;
text-decoration:none;
padding:14px 28px;
border-radius:6px;
display:inline-block;
font-weight:bold;
font-size:14px;
">
Edit Visa Request
</a>

</p>

<p style="font-size:13px;color:#666;">
This link is unique and secure. Please do not share it with anyone.
</p>

</td>
</tr>

<!-- FOOTER -->
<tr>
<td style="background:#f1f5fb;padding:20px;text-align:center;font-size:12px;color:#777;">

© {{ date('Y') }} SAM Visa Services  
<br>
London, United Kingdom

</td>
</tr>

</table>

</td>
</tr>
</table>

</body>
</html>