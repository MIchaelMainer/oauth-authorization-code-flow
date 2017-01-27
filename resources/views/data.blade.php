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

    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Authorization Code Flow Example
                </div>
                <div class="info">
                    <p>Your access token:</p>
                    <p id="access-token">{{ $accessToken }}
                </div>
            </div>
        </div>
    </body>
</html>
