<body>
<h3>
 Hello {!! $detail['email'] !!}
</h3>
<p>
 Somebody request for changes your password,
 <br />
 if you dont please ignore this email,
 <br />
 but if you do, please click link below for futher intruction.
</p>
 
<?php
$code = $detail['code'];
$id = $detail['id'];
?>
<a href="{{route('reminders.edit', ['id' => $detail['id'], 'code' =>
$detail['code']])}}"> Click Me </a>
<h2>Thanks</h2>
</body>