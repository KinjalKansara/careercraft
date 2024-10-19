<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

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
                margin-top : 5%;
                margin-bottom : 5%;
            }

            .container
            {
                display : flex;
                width : 800px;
                height : auto;
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
                margin-top : 15px;
            }

            #role
            {
                display : flex;
                width : 80%;
                /* margin-bottom:30px; */
                padding : 10px;
                font-size : 15px;
                font-family : cursive;
                margin-top : 15px;
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
                <h3>Welcome Back!</h3>
                <p>
                    Welcome back! We are so happy <br> to have  you here.It's great to see <br> you again.
                    We hope you had a <br> safe and enjoyable time away.
                </p>
                <a href="{{url('Registration')}}">
                <button type="submit">No account yet? Sign up</button>
                </a>
            </div>

            <div class="right-section">
                <h3>Login</h3>
                <form action="{{url('/')}}/Login" method="post">
                @csrf
                    <input type="" name="email" id="email" placeholder="Enter Your Email-I'd" value="{{old('email')}}">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>

                    <input type="password" name="password" id="email" placeholder="Enter Your Password">
                        <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>

                        <select name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>

                    <input type="submit" value="Sign in" name="submit" id="submit"><br><br>

                    <a href="{{url('ForgetPassword')}}">Lost Your Password?</a>
                </form>
            </div>
        </div>
    </body>
</html>