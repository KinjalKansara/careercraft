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
        <title>Login Update By Admin</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
                display : flex;
                justify-content : center;
                align-items : center;
                height : 90vh;
                background-color:#f0f0f0;
            }

            .container
            {
                display : flex;
                width : 800px;
                height : 420px;
            }

            .left-section,
            .right-section
            {
                background-color : #fff;
                padding : 30px;
                border-radius : 10px;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0)
            }

            .left-section
            {
                background-color : #2dc46a;
            }

            .right-section
            {
                width : 350px;
            }

            h3
            {
                margin-bottom : 30px;
                margin-left : 30px;
                font-family : Segoe Print;
                font-size : 25px;
            }

            p
            {
                font-size : 20px;
                font-family :  Bookman Old Style;
            }

            input[type=""],
            input[type="password"]
            /* #submit,
            button */
            {
                display : flex;
                width : 80%;
                /* margin-bottom:30px; */
                padding : 10px;
                font-size : 15px;
                font-family : cursive;
            }

            input[type="password"]
            {
                margin-top : 30px;
            }

            #submit,
            button
            {
                background-color : #52be80;
                color : #fff;
                border : none;
                cursor : pointer;
                font-size : 15px;
                height : 40px;
                width : 80%;
                border-radius : 10px;
                color : black;
                text-align : center;
                margin-left : 10px;
                font-family : Candara;
                margin-top : 30px;
            }

            button
            {
                background-color : white;
                color : black;
                margin-left : 25%;
                width : auto;
            }

            #submit:hover
            {
                color : white;
            }

            button:hover
            {
                color : #52be80;
            }

            a
            {
                text-decoration : none;
                font-size : 15px;
                font-family : Cascadia Code;
            }

            a:hover
            {
                color : black;
            }

            .text-danger
            {
                color : red;
            }

        </style>
    </head>


    <body>
        <div class="container">
            <div class="left-section">
                <h3>Update Your Email & Password</h3>
                <p>
                    Update Email & Password By Admin.
                </p>

                
            </div>

            <div class="right-section">
                <h3>Login</h3>
                <form action="{{url('UpdateProfile/'.$user_login->email)}}" method="post">
                @csrf
                    <input type="" name="email" id="email" placeholder="Enter Your Email-I'd" value="{{$user_login->email}}">
                        <!-- <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span> -->
                    <input type="password" name="password" id="email" placeholder="Enter Your Password">
                        <!-- <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span> -->

                    <input type="submit" value="Sign in" name="submit" id="submit"><br><br>

                    
                </form>
            </div>
        </div>
    </body>
</html>