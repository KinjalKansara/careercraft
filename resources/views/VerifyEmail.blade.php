<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VerifyEmail</title>

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

        
            h6
            { 
                margin-left : 60px;
                font-family : Segoe Print;
                font-size : 15px;
            }

            h1
            {
                text-align : center;
                font-family : Segoe Print;
                font-size : 15px;
            }
            
            input[type="date"]
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
                <h1>Verify BirthDate</h1>
                <h6>Don't Worry, Enter your BirthDate For Verification.</h6>
            </div>

            <div class="inner-section">
                <form action="{{url('/')}}/checkzip" method="post">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="Enter Email For Verification" hidden>
                    <input type="date" name="dob" id="number">
                    <span class="text-danger">
                        @error('number')
                            {{$message}}
                        @enderror
                    </span>

                    <input type="submit" value="Check DoB" name="submit" id="submit">
                </form>
            </div>
        </div>
    </body>
</html>