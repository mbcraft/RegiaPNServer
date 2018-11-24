<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
    <head>
        <title>Error 500 - Internal server error</title>

        <link href='{{ asset('/assets/css/errors.css') }}' rel='stylesheet' text='text/css'>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><h1>An internal error has occurred during processing of your request.</h1></div>
                @if(isset($message))
                <div class="error_message">
                    {{ $message }}
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
