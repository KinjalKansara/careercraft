<!DOCTYPE html>
<html>

    @if(session()->has('email'))
        @else
            <script>
                window.location.href="http://127.0.0.1:8000/Login";
            </script>
        @endif

    <head>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Julius+Sans+One&family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
        

        <title>Resume-2</title>

        <style>

            /* Family */
            h1 
            { 
                font-family: 'Julius Sans One', sans-serif;
            }

            h2 
            { /* Contact, Skills, Education, About me, Work Experience */
                font-family: 'Archivo Narrow', sans-serif;
            }

            h3 
            {    /* Accountant */
                font-family: 'Open Sans', sans-serif;
            }

            .jobPosition span, 
            .projectName span 
            {
                font-family: 'Source Sans Pro', sans-serif;
            }

            .upperCase 
            {
                text-transform: uppercase; 
            }

            .smallText, 
            .smallText span, 
            .smallText p, 
            .smallText a 
            {
                font-family: 'Source Sans Pro', sans-serif;
                text-align: justify;
            }

            /* End Family */

            /* Colors */
            h1 
            { 
                color: #111; 
            }

            .leftPanel, 
            .leftPanel a 
            {
                color: #bebebe;
                text-decoration: none;
            }

            .leftPanel h2 
            {
                color: white;
            }

            /* End Colors */

            /* Sizes */
            h1 
            { 
                font-weight: 300; 
                font-size: 1.2cm;
                transform:scale(1,1.15); 
                margin-bottom: 0.2cm;
                margin-top: 0.2cm;
                text-transform: uppercase; 
            }

            h2 
            {
                margin-top: 0.1cm;
                margin-bottom: 0.1cm;
            }

            .leftPanel, 
            .leftPanel a 
            {
                font-size: 0.38cm;
            }

            .projectName span, 
            .jobPosition span
             {
                font-size: 0.35cm;
            }

            .smallText, 
            .smallText span, 
            .smallText p, 
            .smallText a 
            {
                font-size: 0.35cm;
            }

            .leftPanel .smallText, 
            .leftPanel .smallText, 
            .leftPanel .smallText span, 
            .leftPanel .smallText p, 
            .smallText a 
            {
                font-size: 0.45cm;
            }

            .contactIcon 
            {
                width: 0.5cm;
                text-align: center;
            }

            p 
            {
                margin-top: 0.05cm;
                margin-bottom: 0.05cm;
            }
            /* End Sizes */

        .bolded 
        {
            font-weight: bold;
        }

        .white 
        {
            color: white;
        }
        /* End Fonts */

        /* Layout */
        body 
        {
            background: white; 
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
        }

        /* Printing */
        page 
        {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            border : 1px solid black;
        }

        page[size="A4"] 
        {  
            width: 21cm;
            height: 29.7cm; 
        }

        @page 
        {
            size: 21cm 29.7cm;
            padding: 0;
            margin: 0mm;
            border: none;
            border-collapse: collapse;
        }
        /* End Printing */

        .container 
        {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 100%;
        }

        .leftPanel 
        {
            width: 27%;
            background-color: #484444;
            padding: 0.7cm;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .rightPanel 
        {
        
            padding: 0.7cm;
        }

        .leftPanel img 
        {
            width: 4cm;
            height: 4cm;
            margin-bottom: 0.7cm;
            border-radius: 50%;
            border: 0.15cm solid white;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .leftPanel .details 
        {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .skill 
        {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .bottomLineSeparator 
        {
            border-bottom: 0.05cm solid white;
        }

        .yearsOfExperience 
        {
            width: 1.6cm;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .alignleft 
        {
            text-align: left !important;
            width: 1cm;
        }

        .alignright 
        {
            text-align: right !important;
            width: 0.6cm;
            margin-right: 0.1cm
        }

        .workExperience>ul 
        {
            list-style-type: none;
            padding-left: 0;
        }

        .workExperience>ul>li 
        {
            position: relative;
            margin: 0;
            padding-bottom: 0.5cm;
            padding-left: 0.5cm;
        }

        .workExperience>ul>li:before 
        {
            background-color: #b8abab;
            width: 0.05cm;
            content: '';
            position: absolute;
            top: 0.1cm;
            bottom: -0.2cm; /* change this after border removal */
            left: 0.05cm;
        }

        .workExperience>ul>li::after 
        {
            content: '';
            position: absolute;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' aria-hidden='true' viewBox='0 0 32 32' focusable='false'%3E%3Ccircle stroke='none' fill='%23484444' cx='16' cy='16' r='10'%3E%3C/circle%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            left: -0.09cm;
            top: 0;
            width: 0.35cm;
            height: 0.35cm;
        }

        .jobPosition 
        {
            display: flex;
            /* flex-direction: row; */
            /* justify-content: space-between; */
            margin-right : -25%;
        }

        .item 
        {
            padding-bottom: 0.7cm;
            padding-top: 0.7cm;
        }

        .item h2
        {
            margin-top: 0;
        }

        .lastParagrafNoMarginBottom 
        {
            margin-bottom: 0;
        }

        .workExperience>ul>li ul 
        {
            padding-left: 0.5cm;
            list-style-type: disc;
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

        /*End Layout*/

        </style>
    </head>

    <body>
        <div class="download">
            <button onclick="printcontent()">Print</button>
            <button> <a href="/">Back To Home</a></button>  
        </div>
        <page size="A4">
            <div class="container">
                <div class="leftPanel">
                    
                    <div class="details">
                        <div class="item bottomLineSeparator">
                            <h2>CONTACT</h2>
                            <div class="smallText">
                                <p>
                                    <i class="fa fa-phone contactIcon" aria-hidden="true"></i>
                                    @if(isset($phone))
                                        @foreach($phone as $phone)
                                            {{$phone->phone}}
                                        @endforeach
                                    @endif
                                </p>
                                <p>
                                    <i class="fa fa-envelope contactIcon" aria-hidden="true"></i>
                                    
                                    @if(isset($email))
                                        @foreach($email as $e)
                                            {{$e->email}}
                                        @endforeach
                                    @endif 
                                    
                                </p>
                                <p >
                                    <i class="fa fa-map-marker contactIcon" aria-hidden="true" ></i>
                                    @if(isset($city))
                                        @foreach($city as $city)
                                            {{$city->city}}
                                                @if(isset($zip))
                                                    @foreach($zip as $zip)
                                                        {{$zip->zip}}
                                                    @endforeach
                                                @endif
                                        @endforeach
                                    @endif 
                                </p>
                            </div>
                        </div>

                        <div class="item bottomLineSeparator">
                            <h2>SKILLS</h2>
                            <div class="smallText">
                                <div class="skill">
                                    <div>
                                        <span>
                                        @if(isset($skill))
                                            @foreach($skill as $skill)
                                                <p>{{$skill->skills}}</p>
                                            @endforeach
                                        @endif
                                        </span>
                                    </div>     
                                </div>
                            </div>
                        </div>

                        <div class="item bottomLineSeparator">
                            <h2>Area Of Interests</h2>
                            <div class="smallText">
                                <p class="bolded white">
                                @if(isset($hobbies))
                                    @foreach($hobbies as $hobby)
                                        <p>{{$hobby->hobbies}}</p>
                                    @endforeach
                                @endif   
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <h2>Languages</h2>
                            <div class="smallText">
                                <p class="bolded white">
                                @if(isset($language))
                                    @foreach($language as $lan)
                                        <p>{{$lan->language}}</p>
                                    @endforeach
                                @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rightPanel">
                    <div>
                        <h1>
                            @if(isset($first_name))
                                @foreach($first_name as $name)
                                    <p style="display : inline-block; margin-right : 10px;">{{$name->fname}}</p>
                                @endforeach
                            @endif 

                            @if(isset($last_name))
                                @foreach($last_name as $name)
                                    {{$name->lname}}
                                @endforeach
                            @endif 
                        </h1>
                    </div>
                    <div>
                        <h2>Objective</h2>
                        <div class="smallText">
                            <p>
                                @if(isset($description))
                                    @foreach($description as $des)
                                        {{$des->description}}<br>
                                    @endforeach
                                @endif 
                            </p>
                        </div>
                    </div>

                    <div class="workExperience">
                        <h2>Education</h2>
                        <ul>
                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">
                                        @if(isset($education))
                                            @foreach($education as $edu)
                                                <p>Degree Name : {{$edu->degree}}</p>
                                                <p>City Name : {{$edu->city}}</p>
                                                <p>Institute Name : {{$edu->institute1}}</p>
                                                <p>Passing Year : {{$edu->passyear}}</p><br>
                                            @endforeach
                                        @endif 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="workExperience">
                        <h2>Personal Information</h2>
                        <ul>
                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">Date Of Birth :</span>
                                    <span style="display : inline-block; margin-right : 10px;">
                                        @if(isset($dob))
                                            @foreach($dob as $dob)
                                                <p>{{$dob->dob}}</p>
                                            @endforeach
                                        @endif 
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">Gender :</span>
                                    <span>
                                        @if(isset($gender))
                                            @foreach($gender as $gender)
                                                <p>{{$gender->gender}}</p>
                                            @endforeach
                                        @endif 
                                    </span>
                                </div>
                            </li>

                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">Nationality :</span>
                                    <span>
                                        @if(isset($nationality))
                                            @foreach($nationality as $nationality)
                                                <p>{{$nationality->nationality}}</p>
                                            @endforeach
                                        @endif
                                    </span>
                                </div>
                            </li>

                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">Maratial Status : </span>
                                    <span>
                                        @if(isset($maritalsts))
                                            @foreach($maritalsts as $maritalsts)
                                                <p>{{$maritalsts->maritalsts}}</p>
                                            @endforeach
                                        @endif
                                    </span>
                                </div>
                            </li>

                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">Address :</span>
                                    <span>
                                        @if(isset($address))
                                            @foreach($address as $address)
                                                <p>{{$address->address}}</p>
                                            @endforeach
                                        @endif 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="workExperience">
                        <h2>Course</h2>
                        <ul>
                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">
                                    @if(isset($course))
                                        @foreach($course as $co)
                                            <p>Course Name : {{$co->course}}</p>
                                            <p>Institute Name : {{$co->institute2}}</p>
                                        @endforeach
                                    @endif
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="workExperience">
                        <h2>Archievement</h2>
                        <ul>
                            <li>
                                <div class="jobPosition">
                                    <span class="bolded">
                                    @if(isset($archievement))
                                        @foreach($archievement as $achieve)
                                            <p>{{$achieve->archievement}}</p>
                                        @endforeach
                                    @endif 
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </page><br><br>
        <script>
            function printcontent()
            {
                window.print();
            }
        </script>
  
    </body>
</html>