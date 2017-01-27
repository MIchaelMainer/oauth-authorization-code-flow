<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Auth Sample</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('/')}}/css/app.css">

        <!-- Styles -->
        <style>
            .title {
                font-size: 84px;
                padding-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Authorization Code Flow Example
                </div>

                <div class="links">
                    <a href="/login"><img id="login-logo" src="{{ URL::to('/')}}/img/logo.png" alt="Log in with Microsoft" /></a>
                </div>
            </div>
        </div>
    </body>
</html>
