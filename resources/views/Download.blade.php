<!DOCTYPE html>
<html lang="en">

    @if(session()->has('email'))
        @else
            <script>
                window.location.href="http://127.0.0.1:8000/Login";
            </script>
        @endif

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Download</title>

        <style>

            body
            {
                background-color : #f0f0f0;
                height : auto;
                width : 80%;
            }

            .container .download 
            {
                margin-top : 5%;
                margin-left : 50%;
            }

            .container .download a
            {
                border : 2px solid black;
                background-color : green;
                color : white;
                padding : 20px;
                border-radius : 10px;
                font-family : arial;
                text-decoration : none;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
            }

            .container .download a:hover
            {
                color : black;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <div class="download">
                <a href="#">Download</a>
            </div>

            <div class="body">

            </div>
        </div>
    </body>
</html>