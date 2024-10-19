<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ChangePassword</title>

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
                /* height : 300px;
                width : 800px; */
                border-radius : 10px;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0)
            }

            .upper-section
            {
                height : 100px;
                width : 550px;
                background-color : #2dc46a;
                padding : 30px;
            }

            .inner-section
            {
                border : 1px solid green;
                height : 100px;
                width : 550px;
                padding : 30px;
            }

            h1,
            h6
            { 
                text-align : center;
                font-family : Segoe Print;
                font-size : 15px;
            }
            
            input[type="password"]
            /* #submit,
            button */
            {
                display : flex;
                width : 80%;
                margin-bottom:30px;
                padding : 10px;
                font-size : 15px;
                font-family : cursive;
            }

            #submit
            {
                background-color : #52be80;
                color : #fff;
                border : none;
                cursor : pointer;
                font-size : 15px;
                height : 40px;
                width : 35%;
                border-radius : 10px;
                color : black;
                text-align : center;
                margin-left : 30%;
                font-family : Candara;
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
            <div class="upper-section">
                <h1>Change Password</h1>
                <h6>Now, You Can Enter Your New Password.</h6>
            </div>

            <div class="inner-section">
                <form action="{{url('/')}}/newpassword" method="post">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="Enter Email For Verification" hidden>
                    <input type="password" name="password" id="password" placeholder="Enter New Password">
                    <span class="text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="submit" value="Change Password" name="submit" id="submit">
                </form>
            </div>
        </div>
    </body>
</html>