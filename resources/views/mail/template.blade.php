<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
<p>Hello,</p>
<p>{{ $data['message'] }}</p>
<p><a href="#">click here</a> for more details</p>
<p>Regards,</p>
<p>{{ env('APP_NAME') }} Team</p>
</body>
</html>