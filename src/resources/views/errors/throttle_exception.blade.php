<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
    <head>
        <title>Error 503 - Service unavailable</title>

        <link href='{{ asset('/assets/css/errors.css') }}' rel='stylesheet' text='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><h1>Too many login attempts.</h1></div>
                @if(isset($message))
                <div class="error_message">
                    {{ $message }}
                </div>
                @endif
            </div>
        </div>
    </body>
</html>