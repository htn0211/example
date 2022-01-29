<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                background-color: yellow;
            }
        .header {
            background-color: #26d0c9;
            color: #fff;
            height: 90px;
            }

        .header-logo {
            float: left;
            font-size: 36px;
            padding: 20px 40px;
            }
        li{
            list-style-type: none;
            float: left;
            padding: 20px 40px;
        }
        .main{
            background-color: pink;
            height: 600px;
        }
        .footer{
            background-color: green;
            height: 90px;
        }        
        </style>
    </head>
    <body>
    <div class = "header">
        <div class="header-logo">Progate</div>
        <div class="header-list">
            <ul>
                <li>プログラミングとは</li>
                <li>お問い合わせ</li>
                <li>お問い合わせ</li>
            </ul>
        </div>
    </div>
    <div class = "main"></div>
    <div class = "footer"></div>
    </body>
</html>
