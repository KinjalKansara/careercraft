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
        <title>Resume-4</title>

        <style>
            body 
            {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }
            .resume 
            {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1 
            {
                font-size: 24px;
                margin-bottom: 10px;
            }
            p 
            {
                font-size: 16px;
                margin-bottom: 10px;
            }

            .download
        {
            display : flex;
            margin-left : 30%;
        }

        button
        {
            margin-top : 5%;
            height : 50px;
            width : 150px;
            border-radius : 5px;
            font-family : Candara;
            font-size : 15px;
            background-color : #2dc46a;
            color : white;
            border : 1px solid white;
            margin-left : 5%;
            margin-bottom: 5%;
        }

        button:hover
        {
            color : black;
        }

        a
        {
            color:white;
            text-decoration : none;
        }

        a:hover
        {
            color : black;
        }

        </style>
    </head>

    <body>
        <div class="download">
            <button onclick="printcontent()">Print</button>
            <button> <a href="/">Back To Home</a></button>  
        </div>
        <div class="resume">
            <h1>
                @if(isset($first_name))
                    @foreach($first_name as $name)
                        {{$name->fname}}
                    @endforeach
                @endif 

                @if(isset($last_name))
                    @foreach($last_name as $name)
                        {{$name->lname}}
                    @endforeach
                @endif
            </h1>
            <p>Email: 
                @if(isset($email))
                    @foreach($email as $e)
                        {{$e->email}}
                    @endforeach
                @endif 
            </p>
            <p style="margin-left:550px; margin-top : -30px">Phone: 
                @if(isset($phone))
                    @foreach($phone as $phone)
                        {{$phone->phone}}
                    @endforeach
                @endif
            </p>
            <h2>Objective</h2>
            <p>
                @if(isset($description))
                    
                        @foreach($description as $des)
                            <p>{{$des->description}}</p>
                        @endforeach
                  
                @endif 
            </p>
            <h2>Education</h2>
            <p>
                @if(isset($education))
                    @foreach($education as $edu)
                        <p>Degree Name : {{$edu->degree}}</p>
                        <p>City Name : {{$edu->city}}</p>
                        <p>Institute Name : {{$edu->institute1}}</p>
                        <p>Passing Year : {{$edu->passyear}}</p><br>
                    @endforeach
                @endif 
            </p><br>

            <p style="margin-left:550px; margin-top : -30px"><h2>Skills: </h2> 
                @if(isset($skill))
                    @foreach($skill as $skill)
                        {{$skill->skills}}<br>
                    @endforeach
                @endif 

                <p><h2 style="margin-left:550px;margin-top:-125px;">Languages: </h2> 
                    <p style="margin-left:550px;">
                    @if(isset($language))
                        @foreach($language as $lan)
                            {{$lan->language}}<br>
                        @endforeach
                    @endif  </p>
                </p>
            </p><br>

            <h2>Personal Information</h2>
                <p>Date Of Birth: 
                    @if(isset($dob))
                         @foreach($dob as $dob)
                            {{$dob->dob}}
                        @endforeach
                    @endif <br>

                    Gender: 
                    @if(isset($gender))
                        @foreach($gender as $gender)
                            {{$gender->gender}}
                        @endforeach
                    @endif<br>

                    Nationality:
                    @if(isset($nationality))
                        @foreach($nationality as $nationality)
                            {{$nationality->nationality}}
                        @endforeach
                    @endif <br>

                    Marital Status:
                    @if(isset($maritalsts))
                        @foreach($maritalsts as $maritalsts)
                            {{$maritalsts->maritalsts}}
                        @endforeach
                    @endif<br>
        
                    Address:
                    @if(isset($address))
                        @foreach($address as $address)
                            {{$address->address}}
                        @endforeach
                    @endif 
                </p><br>

            <h2>Course:</h2>
            <p>
                @if(isset($course))
                    @foreach($course as $co)
                        Course Name : {{$co->course}}<br>
                        Institute Name : {{$co->institute2}}
                    @endforeach
                @endif 
            </p><br>

            <p style="margin-left:550px; margin-top : -30px"><h2>Archievement: </h2> 
                @if(isset($archievement))
                    @foreach($archievement as $achieve)
                        <p>{{$achieve->archievement}}</p>
                    @endforeach
                @endif 

                <p><h2 style="margin-left:550px;margin-top:-80px;">Hobbies: </h2> 
                    <p style="margin-left:550px;">
                        @if(isset($hobbies))
                            @foreach($hobbies as $hobby)
                                {{$hobby->hobbies}}<br>
                            @endforeach
                        @endif   
                    </p>
                </p>
            </p><br>
        </div>
    </body>
    <script>
        function printcontent()
        {
            window.print();
        }
    </script>
</html>
