<!DOCTYPE html>
<html lang="en">
    
    @if(session()->has('email') && session('role') != 'user')
        @else
            <script>
                window.location.href="http://127.0.0.1:8000/Login";
            </script>
        @endif

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Profile</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
            }

            .user-container
            {
                height : 700px;
                width : 65%;
                background-color : #ecf0f1;
                border-radius : 10px;
                margin-left : 27%;
                margin-top : -62%;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
            }

            .user-container h1
            {
                text-align : center;
                font-family : Garamond;
                padding-top : 30px;
            }

            /* .user-container .forform
            {
                background-color : white;
                height : 1150px;
                width : 80%;
                margin-top : 4%;
                margin-left : 10%;
                border : 3px double #2dc46a;
                border-radius : 10px;
            } */

            input[type="file"]
            {
                display : none;
            }

            .label
            {
                margin-left : 40%;
                padding-left : 5px;
                padding-bottom : 50px;
                padding-top : 30px;
                padding-right : 5px;
                border : 1px dashed #2dc46a;
                border-radius : 50%;
            }

            .forform .form
            {
                /* margin-top : 50px; */
                padding : 30px;
            }

            .forform .personal-info .content-2
            {
                /* margin-top : 7%; */
            }

            .forform .content-2 .input-box
            {
                width : 100%;
                margin-top : 20px;
            }

            .forform .content-2 .input-box label
            {
                color : black;
                font-size : 15px;
                font-family : cursive;
            }

            .forform .content-2 .input-box input
            {
                position : relative;
                height : 35px;
                width : 75%;
                outline : none;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                /* margin-top : 3%; */
                font-family : Candara;
                font-size : 15px;
            }

            .forform .content-2 .column
            {
                display : flex;
                column-gap : 10%;
            }

            .forform .content-3
            {
                display : flex;
                margin-top : 4%;
                margin-left : 40%;
            }

            .forform .content-3 .input-box #submit
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                background-color : #2dc46a;
                color : black;
                border-radius : 10px;
                margin-right : 60px;
            }

            .forform .content-3 .input-box #submit:hover
            {
                color : white;
            }

            /* .content-1
            {
                margin-left : 5%;
                width : 90%;
            } */

            .text-danger
            {
                color : red;
            }

        </style>

    </head>


    @include('Header-3')
    <body>
        <div class="user-container">
            <h1>Admin Change Username And Password</h1>

            <div class="forform">
                <form action="{{url('/')}}/Admin-Profile" class="form" method="post"> 
                @csrf
                    <div class="personal-info">
                        <div class="content-2">
                            <div class="column">
                                <div class="input-box">
                                    <label for="mail">Email Address:</label><br>
                                    <input type="" name="mail" placeholder="Enter Email Address" value="{{session('email')}}" readonly>
                                </div>

                                <div class="input-box">
                                    <label for="password">Password:</label><br>
                                    <input type="password" name="password" placeholder="Enter Your Password"><br>
                                    <span class="text-danger">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-3">
                        <div class="input-box">
                           
                                <input type="submit" value="Update" name="submit" id="submit">
                            
                        </div> 
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </body>
</html>