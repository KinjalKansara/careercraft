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
        <title>CreateResume</title>

        <style>

            /* imp */
            body
            {
                margin : 0;
                padding : 0;
                /* height : 100vh; */
                background-color : #f0f0f0;
            }

            .container
            {
                width : 100%;
                margin-top:-22px;
            }

            .container .first-section
            {
                height : 227px;
                width : 100%;
                background-color : #2dc46a;
            }

            .container .first-section .second-section
            {
                height : 135px;
                width : 100%;
                background-color : #2dc46a;
                transform : skewY(-6deg);
                z-index : -1;
                position : absolute;
            } 

            .first-section h1
            {
                padding : 20px;
                margin-left : 5%;
            }

            .first-section h2
            {
                margin-left : 35%;
                font-family : Segoe Print;
            }

            /* imp */

            .container .forform
            {
                background-color : white;
                height : auto;
                width : 80%;
                margin-top : 4%;
                margin-left : 10%;
                border : 3px double #2dc46a;
                border-radius : 10px;
            }

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
                border-radius : 10px;
            }

            .content
            {
                margin-left : 5%;
                width : 90%;
            }

            .forform .form
            {
                margin-top : 30px;
            }

            .forform .form h1
            {
                font-family : Cascadia Code;
            }

            .content2
            {
                margin-top : 7%;
            }

            .forform .content2 .input-box
            {
                width : 100%;
                margin-top : 20px;
            }

            .forform .content2 .input-box label
            {
                color : black;
                font-size : 15px;
                font-family : cursive;
            }

            .forform .content2 .input-box input
            {
                position : relative;
                height : 50px;
                width : 100%;
                outline : none;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-top : 3%;
                font-family : Candara;
                font-size : 15px;
            }

            .forform .content2 .column
            {
                display : flex;
                column-gap : 10%;
            }

            .forform .content2 .input-box #submit
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 45%;
                background-color : #2dc46a;
                color : black;
            }

            .forform .content2 .input-box #submit:hover
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
            <div class="first-section">
                <h1>CareerCraft</h1>
                <h2>Personal Information (First Step)</h2>

                <div class="second-section"></div>

                <div class="forform">
                    <form action="{{url('/')}}/CreateResume1" method="POST" class="form">
                        @csrf
                        <h1>Personal Details</h1>
                    
                        <input type="text" name="title" placeholder="Enter Resume Title" value="{{old('title')}}" style="margin-top: -20px; margin-left : 60%; height : 50px; width : 30%; padding : 10px; border-radius : 10px; border : 1px solid black;font-family : Candara; font-size : 15px;">
                        <br>
                        <span class="text-danger" style="margin-left : 60%;">
                            @error('title')
                                {{$message}}
                            @enderror
                        </span>
                        

                        <hr style="margin-top : 20px;margin-bottom:50px;width:95%;">

                        <div class="content">
                            <!-- <div class="input-box"> -->
                                <!-- <label class="label" for="upload">Photo Upload(optional)</label>
                                <input type="file" name="src" id="upload" accept="image/*">
                                <span class="text-danger">
                                    @error('src')
                                        {{$message}}
                                    @enderror
                                </span> -->
                            <!-- </div> -->
                            <div class="content2">
                                <div class="column">
                                    <div class="input-box">
                                        <label for="fname">First Name:</label>
                                        <input type="text" name="fname" placeholder="Enter First Name" value="{{old('fname')}}">
                                        <span class="text-danger">
                                            @error('fname')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="input-box">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" name="lname" placeholder="Enter Last Name" value="{{old('lname')}}">
                                        <span class="text-danger">
                                            @error('lname')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="input-box">
                                        <label for="email">Email Address:</label>
                                        <input type="" name="email" placeholder="Enter Email Address" value="{{session('email')}}" readonly> 
                                    </div>

                                    <div class="input-box">
                                        <label for="phone">Phone Number:</label>
                                        <input type="number" name="phone" placeholder="Enter Valid Phone No." value="{{old('phone')}}">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="address"> Per. Address:</label>
                                    <input type="text" name="address" placeholder="Enter Address" value="{{old('address')}}">
                                    <span class="text-danger">
                                        @error('address')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="column">
                                    <div class="input-box">
                                        <label for="zip">Zip Code:</label>
                                        <input type="number" name="zip" placeholder="Enter Zip Code" value="{{old('zip')}}">
                                        <span class="text-danger">
                                            @error('zip')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="input-box">
                                        <label for="city">City-Town:</label>
                                        <input type="text" name="city" placeholder="Enter City" value="{{old('city')}}">
                                        <span class="text-danger">
                                            @error('city')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="input-box">
                                        <label for="dob">Date Of Birth:</label>
                                        <input type="date" name="dob" value="{{old('dob')}}">
                                        <span class="text-danger">
                                            @error('dob')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="input-box">
                                        <label for="placedob">Place Of Birth:</label>
                                        <input type="text" name="placedob" placeholder="Enter Your Birth Place" value="{{old('placedob')}}">
                                        <span class="text-danger">
                                            @error('placedob')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="input-box">
                                        <label for="license">Driving License:</label>
                                        <input type="text" name="license" placeholder="Enter Your Driving License" value="{{old('license')}}">
                                        <span class="text-danger">
                                            @error('license')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    
                                    <div class="input-box">
                                        <label for="gender">Gender:</label>
                                        <input type="text" name="gender" placeholder="Enter Your Gender" value="{{old('gender')}}">
                                        <span class="text-danger">
                                            @error('gender')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="input-box">
                                        <label for="nationality">Nationality:</label>
                                        <input type="text" name="nationality" placeholder="Enter Your Nationality" value="{{old('nationality')}}">
                                        <span class="text-danger">
                                            @error('nationality')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="input-box">
                                        <label for="maritalsts">Marital Status:</label>
                                        <input type="text" name="maritalsts" placeholder="Enter Your Marital Status" value="{{old('maritalsts')}}">   
                                        <span class="text-danger">
                                            @error('maritalsts')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div> 
                                </div>

                                <div class="input-box">
                                    <input type="submit" value="Next Step" name="submit" id="submit">
                                </div>    
                            </div>    
                        </div>
                    </form><br><br>
                </div><br><br><br><br>
            </div>
        </div>
    </body>
</html>