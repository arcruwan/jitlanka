<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <p style="color: black;font-size:18px">Hello! You have a new inquiry</p>

    <p><b>Name :</b> {{$data['firstName']}}&nbsp;{{$data['lastName']}}</p>
    <p><b>Email :</b> {{$data['Email']}}</p>
    <p><b>Phone :</b> {{$data['Phone']}}</p>
    <p><b>Message :</b> {{$data['Message']}}</p>
</body>
</html>