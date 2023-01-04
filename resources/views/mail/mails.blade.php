<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .inline{
            display: inline-block;
        }
    </style>
    <title>Document</title>
</head>
<body>
    From: <span>abdullahsajid521@gmail.com</span><br>
    To: <span>{{$cred['email']}}</span><br>
    <p class="inline"> Name : </p><h3 class="inline">{{$cred['name']}}</h3>
    <p class="inline"> Subject: </p><h3 class="inline">{{$detail['subject']}}</h3>
    <p class="inline"> Message: </p><h4 class="inline">{{$detail['message']}}</h4>
</body>
</html>