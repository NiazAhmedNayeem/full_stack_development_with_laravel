<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .div-one{
            height: auto;
            width: 60%;
            margin: 0 auto;
            background-color: #2a3042;
            color: white;
            text-align: center;
            padding: 40px;
        }
    </style>
</head>
<body>
<div class="div-one">
    <h4>Name: {{ $value['name'] }}</h4>
    <p>Email: {{ $value['email'] }}</p>
    <p>Subject: {{ $value['subject'] }}</p>
    <p style="text-align: justify">Message: {{ $value['message'] }}</p>
    <br/>
    <br/>
    <br/>
    <p>Thank you..</p>
    <br>
    <br>
    <hr/>
    <p>&copy; 2023 All Rights Reserved | Niaz </p>

</div>
</body>
</html>
