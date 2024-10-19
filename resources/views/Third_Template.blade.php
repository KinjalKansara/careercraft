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
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

        <title>Resume-3</title>

        <style>
            * 
            {
                box-sizing: border-box
            }

            html 
            {
                background: white;     
            }

            body 
            {
                
                height : auto;
                width : 60%;
                margin-left : 22%;
                background-color : white;
            }

            div#resume 
            {
                min-width: 310px;
                font: 16px Helvetica, Avernir, sans-serif;
                line-height: 24px;
                color: #000;
               padding : 10px;
                border : 1px solid black;
            }

            div#resume h1 
            {
                margin: 0 0 16px 0;
                padding: 0 0 16px 0;
                font-size: 42px;
                font-weight: bold;
                letter-spacing: -2px;
                border-bottom: 1px solid #999;
                line-height: 50px;
                margin-left: 400px;
            }

            div#resume h2 
            {
                font-size: 20px;
                margin: 0 0 6px 0;
                position: relative
            }

            div#resume h4 span 
            {
                position: absolute;
                
                left: 0;
                font-style: italic;
                font-family: Georgia, serif;
                font-size: 16px;
                color: black;
                font-weight: normal;
                margin-left : 50%;
            }

            div#resume p 
            {
                margin: 0 0 16px 0
            }

            div#resume a 
            {
                color: #999;
                text-decoration: none;
                border-bottom: 1px dotted #999
            }

            div#resume a:hover 
            {
                border-bottom-style: solid;
                color: #000
            }

            div#resume p.objective 
            {
                font-family: Georgia, serif;
                font-style: italic;
                color: #666
            }

            div#resume dt  
            {
                font-style: italic;
                font-weight: bold;
                font-size: 18px;
                text-align: right;
                padding: 0 26px 0 0;
                width: 150px;
                border-right: 1px solid #999
            }

            div#resume dl 
            {
                display: table-row
            }

            div#resume dl dt,
            div#resume dl dd 
            {
                display: table-cell;
                padding-bottom: 20px
            }

            div#resume dl dd 
            {
                width: 500px;
                padding-left: 26px
            }

            div#resume img
            {
                float: right;
                padding: 10px;
                background: #fff;
                margin: 0 30px;
                transform: rotate(-4deg);
                box-shadow: 0 0 4px rgba(0, 0, 0, .3);
                width: 30%;
                max-width: 220px
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
        <div id="resume">
            
            <h1 style="display : inline-block; margin-right : 10px;">
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
            <p>Cell: 
                @if(isset($phone))
                    @foreach($phone as $phone)
                        {{$phone->phone}}
                    @endforeach
                @endif 
            <p>City: 
            @if(isset($city))
                @foreach($city as $city)
                    {{$city->city}},
                        @if(isset($zip))
                            @foreach($zip as $zip)
                                {{$zip->zip}}
                            @endforeach
                        @endif
                @endforeach
            @endif 
            <p>Email: 
                @if(isset($email))
                    @foreach($email as $e)
                        {{$e->email}}
                     @endforeach
                 @endif 
            <p id="objective">
            <dl>
                <dt>Objective
                    <dd>
                    <p>
                    @if(isset($description))
                        @foreach($description as $des)
                            <p>{{$des->description}}</p>
                        @endforeach
                    @endif  
                    </p>
            </dl>
                    
                     
            <dl>
                <dt>Education
                    <dd>
                    <p>
                    @if(isset($education))
                        @foreach($education as $edu)
                            Degree Name : {{$edu->degree}}<br>
                            City Name : {{$edu->city}}<br>
                            Institute Name : {{$edu->institute1}}<br>
                            Passing Year : {{$edu->passyear}}<br><br>
                        @endforeach
                    @endif 
                    </p>
            </dl>

            <dl>
                <dt>Skills
                    <dd>
                    @if(isset($skill))
                        @foreach($skill as $skill)
                            {{$skill->skills}}<br>
                        @endforeach
                    @endif     
            </dl>

            <dl>
                <dt>Personal Details
                    <dd>
                        <h4>Date Of Birth: 
                            <span>
                                @if(isset($dob))
                                    @foreach($dob as $dob)
                                        <p>{{$dob->dob}}</p>
                                    @endforeach
                                @endif 
                            </span>
                        </h4>
                        
                        <h4>Gender : 
                            <span>
                                @if(isset($gender))
                                    @foreach($gender as $gender)
                                        <p>{{$gender->gender}}</p>
                                    @endforeach
                                @endif  
                            </span>

                        <h4>Maratial Status : 
                            <span>
                                @if(isset($maritalsts))
                                    @foreach($maritalsts as $maritalsts)
                                        <p>{{$maritalsts->maritalsts}}</p>
                                    @endforeach
                                @endif 
                            </span>

                        <h4>Nationality: 
                            <span>
                                @if(isset($nationality))
                                    @foreach($nationality as $nationality)
                                        <p>{{$nationality->nationality}}</p>
                                    @endforeach
                                @endif 
                            </span>

                        <h4>Address: 
                            <span>
                                @if(isset($address))
                                    @foreach($address as $address)
                                        <p>{{$address->address}}</p>
                                    @endforeach
                                @endif 
                            </span>
                        
                    </dd>
            </dl>

            <dl>
                <dt>Course
                    <dd>
                    
                    <p>
                        @if(isset($course))
                            @foreach($course as $co)
                                Course Name : {{$co->course}}<br>
                                Institute Name : {{$co->institute2}}<br><br>
                            @endforeach
                        @endif
                    </p>
            </dl>

            <dl>
                <dt>Hobbies
                    <dd>
                        @if(isset($hobbies))
                            @foreach($hobbies as $hobby)
                                {{$hobby->hobbies}}<br>
                            @endforeach
                        @endif
            </dl>

            <dl>
                    <dt>Language
                    <dd>
                        @if(isset($language))
                            @foreach($language as $lan)
                                {{$lan->language}}<br>
                             @endforeach
                        @endif 
            </dl>

            <dl>
                    <dt>Archievement
                    <dd>
                        @if(isset($archievement))
                            @foreach($archievement as $achieve)
                                {{$achieve->archievement}}<br>
                            @endforeach
                        @endif 
            </dl>
                
        </div>

        <script>
            function printcontent()
            {
                window.print();
            }
        </script>
    </body>
</html>