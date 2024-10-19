<!DOCTYPE html>
<html lang="en">

   
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ForgetPassword</title>

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
                height : 150px;
                width : 550px;
                padding : 30px;
            }

            h1,
            h6
            { 
                margin-left : 30px;
                font-family : Segoe Print;
                font-size : 15px;
            }

            h1
            {
                text-align : center;
            }
            
            input[type="email"]
            /* #submit,
            button */
            {
                display : flex;
                width : 80%;
                
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
            <div class="upper-section">
                <h1>Password Lost</h1>
                <h6>Lost your password? No problem, we can help you to recover it.</h6>
            </div>

            <div class="inner-section">
                <form action="{{url('/')}}/forgotpassword" method="post">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="Enter Email For Verification">
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span><br>

                    <input type="submit" value="Verify Email" name="submit" id="submit">
                </form>
            </div>
        </div>
    </body>
</html>