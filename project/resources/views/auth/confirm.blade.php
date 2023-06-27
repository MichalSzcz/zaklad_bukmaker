<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBC Bets</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */


        body {
            background-color: #1a202c;
            font-family: 'Nunito', sans-serif;
        }
        .container {
            justify-content: center;
            width: 80%;
            margin: 200px auto;
            grid-template-columns: 20% 80%;
        }
        .links {
            text-align: left;
            width: 50%;
            height: 110px;
            float: left;
            border: 1px solid gray;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px #ccc;
            background-color: #2d3748;
            color: #fde910;
        }
        .links a {
            display: block;
            margin-bottom: 10px;
            color: #fde910;
            text-decoration: none;
        }
        .links a:hover {
            color: black;
        }
        .content {
            display: grid;
            grid-template-columns: 1fr;
            background-color: #2d3748;
            color: #fde910;
            margin: auto;
        }
        .content-text {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-top: 50px;
        }
    </style>
</head>
<body>
@include('partial.header')
<div class="container">

    <div class="content">
        <div class="content-text">Zostałeś zarejestrowany/a</div>
    </div>
</div>
</body>
</html>
