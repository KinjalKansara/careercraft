<!DOCTYPE html>
<html lang="en">

    @if(session()->has('email') && session('role') != 'admin')


        @else
            <script>
                window.location.href="http://127.0.0.1:8000/Login";
            </script>
    @endif

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>

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
                margin-top : -57.5%;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
            }

            .user-container h1
            {
                text-align : center;
                font-family : Garamond;
                padding-top : 30px;
            }

            .content2
            {
                margin-top : 7%;
                margin-left : 5%;
            }

            .content2 .input-box
            {
                width : 100%;
                margin-top : 20px;
                position : relative;
                height : 50px;
                width : 50%;
                padding : 0 15px;
                font-family : Candara;
                font-size : 20px;
            }

            .content2 .input-box label
            {
                color : #2dc46a;
                font-size : 20px;
                font-family : cursive;
            }

            .content2 .input-box input
            {
                position : relative;
                height : 50px;
                width : 50%;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-top : 3%;
                font-family : Candara;
                font-size : 25px;
            }

            .content2 .column
            {
                display : flex;
                column-gap : 5%;
            }
            

        </style>

    </head>

    
    @include('Header-2')
    <body>
        <div class="user-container">
            <h1> User Information</h1>
            
            <div class="content2">
                <div class="column">
                    <div class="input-box">
                        <label for="fname">First Name:</label> 
                            @if(isset($first_name))
                                @foreach($first_name as $name)
                                    {{$name->fname}}
                                @endforeach
                            @endif         
                    </div>

                    <div class="input-box">
                        <label for="lname">Last Name:</label>
                        @if(isset($last_name))
                            @foreach($last_name as $name)
                                {{$name->lname}}
                            @endforeach
                         @endif       
                    </div>
                </div>

                <div class="column">
                    <div class="input-box">
                        <label for="email">Email Address:</label>
                        @if(isset($email))
                            @foreach($email as $e)
                                {{$e->email}}
                            @endforeach
                         @endif 
                    </div>

                    <div class="input-box">
                        <label for="gender">Gender:</label>
                        @if(isset($gender))
                            @foreach($gender as $gender)
                                {{$gender->gender}}
                            @endforeach
                        @endif     
                    </div>
                </div>

                <div class="column">
                    <div class="input-box">
                        <label for="dob">Date Of Birth:</label>
                        @if(isset($dob))
                            @foreach($dob as $dob)
                                {{$dob->dob}}
                            @endforeach
                        @endif    
                        </div>

                    <div class="input-box">
                        <label for="city">City-Town:</label>
                        @if(isset($city))
                            @foreach($city as $city)
                                {{$city->city}}
                            @endforeach
                        @endif 
                    </div>
                </div>

                <div class="input-box">
                    <label for="address"> Per. Address:</label>
                    @if(isset($address))
                        @foreach($address as $address)
                            {{$address->address}}
                        @endforeach
                    @endif 
                </div>
            </div>
        </div>
        <br><br><br><br>
    </body>
    
</html>