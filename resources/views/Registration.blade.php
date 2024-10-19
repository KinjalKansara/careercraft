<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>

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
                width : 380px;
            }
            
            h3
            {
                margin-bottom : 30px;
                margin-left : 30px;
                font-family : Segoe Print;
                font-size : 25px;
            }

            input[type=""],
            input[type="password"],
            input[type="date"]
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

            input[type="password"],
            input[type="date"]
            {
                margin-top : 30px;
            }

            img
            {
                height : 380px;
                width : 300px;
            }

            #submit
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

            #submit:hover
            {
                color : white;
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
                <img src="{{url('Image/registration.gif')}}" alt="" srcset="">
            </div>
            
            <div class="right-section">
            <h3>Registration</h3>
                <form action="{{url('/')}}/Registration" method="post">
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
                    <input type="date" name="dob" id="email" value="{{old('dob')}}">
                    <span class="text-danger">
                        @error('dob')
                            {{$message}}
                        @enderror
                    </span>

                    <input type="submit" value="Sign up" name="submit" id="submit"><br><br>

                </form>
            </div>
        </div>
    </body>
</html>