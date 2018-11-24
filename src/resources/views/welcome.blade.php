<!DOCTYPE html>
<html>
    <head>
        <title>Radio & Business Server</title>

        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Liberation Serif';
            }

            .container {
                margin-top: 200px;
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Radio &amp; Business Server</div>
                <div style="padding:200px;text-align:center">
                    <a href="{{ route('admin/login') }}" style="color:black;">
                        <?= FA::webApplication_Lock('fa-5x') ?>
                    </a>
                    
                </div>
            </div>
        </div>
        <div align="center">
            <a href="/credits">Credits</a>
        </div>
    </body>
</html>
