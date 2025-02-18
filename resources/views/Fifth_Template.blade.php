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
        <title>Resume-5</title>

        <style>

            :root 
            {
                --color-gray-light-1: #f8f8f8;
                --color-gray-light-2: #e9e9e9;
                --color-gray-light-3: #dedede;
                --color-gray-dark-1: #545454;
                --color-gray-dark-2: #737373;
                --color-gray-dark-3: #9a9a9a;
                --color-blue-dark-1: #00387f;
                --color-tiffany: #00a6a6;
                --profile-theme: #4682bf;
                --timeline-circle-theme: #14253e;
                
                --pgbar-length: 100%;

                --MATH-PI: 3.1415px;
                --percent: 100;
            }

            html 
            {
                font-size: 100%;
                font-family: 'PT Sans', sans-serif;
            }

            * 
            {
                box-sizing: border-box;
            }

            body 
            {
                margin: 0;
                width : 70%;
                margin-left : 18%;
                padding: 3rem 1rem;
                min-height: 100vh;
                /* background-color: var(--color-gray-light-3); */
            }

            .wrapper 
            {
                margin: 0 auto;
                max-width: 70rem;
                background-color: var(--color-gray-light-2);
                display: flex;
                box-shadow: 0px 0px 15px 4px #b3b3b3;
            }

            .intro 
            {
                flex: 0 0 250px;
                background-color: var(--color-gray-light-1);
                box-shadow: 5px 0px 15px 0px #b3b3b3;
                z-index: 5;
            }

            .profile 
            {
                position: relative;
                background-color: var(--profile-theme);
                padding: 2rem 1rem;
                margin-bottom: 50px;
                text-align: center;
                user-select: none;
            }

            .profile::after 
            {
                content: " ";
                position: absolute;
                left: 0;
                bottom: -15px;
                width: 100%;
                height: 30px;
                background-color: var(--profile-theme);
                transform: skewY(-5deg);
            }

            .photo img 
            {
                width: 80%;
                border-radius: 50%;
            }

            .bio .name 
            {
                font-size: 1.5rem;
                text-align: center;
                color: var(--color-gray-light-1);
                margin: 0;
                margin-top: 1rem;
            }

            .bio .profession 
            {
                font-size: 1rem;
                text-align: center;
                color: var(--color-gray-light-1);
                margin: 0;
            }

            .intro-section 
            {
                padding: 0 1rem;
                color: var(--color-gray-dark-1);
            }

            .intro-section .title 
            {
                font-size: 1rem;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .about .paragraph 
            {
                text-align: justify;
            }

            .info-section 
            {
                margin: 1rem 0;
            }

            .info-section span 
            {
                position: relative;
                transition: all 0.3s;
            }

            .info-section i
            {
                color: var(--profile-theme);
                width: 20px;
                height: 20px;
            }

            .link a 
            {
                text-decoration: none;
                color: inherit;
            }

            .link span::after 
            {
                position: absolute;
                content: '';
                left: 50%;
                bottom: -3px;
                width: 0;
                height: 2px;
                background-color: var(--profile-theme);
                transition: width 0.3s;
                /*transition-timing-function: cubic-bezier(.64,.51,.16,.86);*/
                transition-timing-function: cubic-bezier(.92,.57,.33,1.02);
                transform: translate(-50%, 0);
            }

            .link span:hover 
            {
                color: var(--profile-theme);
            }

            .link span:hover::after 
            {
                width: 100%;
            }

            /* Detail section overall setting*/
            .detail 
            {
                flex: 1 0 0;
                background-color: white;
                padding: 2rem;
            }

            .detail:hover > .detail-section:not(:hover) 
            {
                opacity: 0.3;
            }

            .detail-section 
            {
                transition: all 0.3s;
            }

            .detail-section:not(:last-of-type) 
            {
                padding-bottom: 1rem;
            }

            .detail-title 
            {
                display: flex;
                align-items: center;
            }

            .detail-section > .detail-content 
            {
                padding: 1.5rem;
                padding-left: 2rem;
                user-select: none;
            }

            .detail-section.edu > .detail-content 
            {
                padding-left: calc(1.5rem + 10px);
            }

            .title-icon + span 
            {
                font-size: 1.5rem;
                transition: all 0.3s;
            }

            .title-icon 
            {
                display: inline-flex;
                justify-content: center;
                align-items: center;
                padding: 1rem;
                margin-right: 1rem;
                width: 2.5rem;
                height: 2.5rem;
                background-color: var(--profile-theme);
                border-radius: 50%;
                transition: all 0.3s;
            }

            .title-icon i 
            {
                color: white;
                line-height: 1rem;
                font-size: 1rem;
                text-align: center;
            }

            .detail-section:hover .title-icon 
            {
                transform: scale(1.5);
                margin-right: 1.5rem;
            }

            .detail-section:hover .title-icon + span 
            {
                letter-spacing: 1.5px;
            }

            /* time line block in education section */
            .timeline-block 
            {
                position: relative;
                padding-left: 30px;
            }

            .timeline-block:not(:last-of-type) 
            {
                margin-bottom: 1rem;	
            }

            .timeline-block h1 
            {
                font-size: 1rem;
                margin: 5px 0;
                transition: all 0.3s;
            }

            .timeline-block p 
            {
                font-size: 0.8rem;
                margin: 5px 0;
            }

            .timeline-block time 
            {
                font-size: 0.8rem;
                color: var(--color-gray-dark-2);
            }

            .timeline-block::before 
            {
                position: absolute;
                content: '';
                width: 15px;
                height: 15px;
                background-color: white;
                border: 3px solid var(--timeline-circle-theme);
                border-radius: 50%;
                left: -10px;
                top: -5px;
            }

            .timeline-block::after 
            {
                position: absolute;
                content: '';
                width: 3px;
                height: 100%;
                background-color: var(--timeline-circle-theme);
                left: -1px;
                top: 13px;
            }

            .timeline-block:hover h1 
            {
                color: var(--color-tiffany);
            }

            .timeline-block:hover::before 
            {
                animation: circle 1.2s infinite;
            }

            /* Programming skills section */
            .pg-list, .tool-list, .favor-list 
            {
                padding: 0;
                list-style: none;
            }

            .pg-list > li 
            {	
                margin: 1rem 0;
                display: flex;
                align-items: center;
            }

            .sb-skeleton 
            {
                position: relative;
                flex: 1 0 auto;
                height: 2px;
                background-color: var(--color-gray-dark-3);
            }

            .pg-list > li > span 
            {
                flex: 0 0 100px;
            }

            .sb-skeleton > .skillbar 
            {
                position: absolute;
                left: 0;
                top: -1px;
                width: var(--pgbar-length);
                height: 4px;
                background-color: var(--profile-theme);
            }

            .tool-list 
            {
                list-style: none;
                display: flex;
                justify-content: space-between;
            }

            .tool-list > li 
            {
                position: relative;
                text-align: center;
                flex: 0 0 25%;
            }

            .tool-list > li > svg 
            {
                position: relative;
                fill: transparent;
                width: 95%;
                transform: rotate(-90deg);
            }

            .tool-list > li > svg > circle {
                stroke-width: 1px;
                stroke: #cdcdcd;
            }

            .tool-list > li > svg > circle.cbar {
                stroke-width: 3px;
                stroke: var(--profile-theme);
                stroke-linecap: round;
                stroke-dashoffset: 0;
                stroke-dasharray: calc(var(--MATH-PI) * 45 * 2);
                transition: all 0.8s;
                transition-timing-function: cubic-bezier(.64,.51,.16,.86);
            }

            .tool-list > li:hover > svg > circle.cbar 
            {
                stroke-width: 4px;
                stroke: var(--color-tiffany);
                stroke-dashoffset: calc(var(--MATH-PI) * 45 * 2 * (1 - var(--percent)));
            }

            .tool-list > li > .tl-name,
            .tool-list > li > .tl-exp 
            {
                position: absolute;
                left: 50%;
                color: var(--color-gray-dark-1);
            }
            .tool-list > li > .tl-name 
            {
                top: 50%;
                font-size: 1.2rem;
                transform: translate(-50%, -50%);
            }

            .tool-list > li > .tl-exp 
            {	
                top: calc(50% + 1.4rem);
                font-size: 1rem;
                transform: translate(-50%, -50%);
            }
            /* Interests Section */
            .outer-frame 
            {
                border: 1px solid var(--color-gray-dark-3);
                border-radius: 5px;
            }

            .favor-list 
            {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                align-content: center;
            }

            .favor-list > li 
            {
                display: flex;
                flex: 1 0 0;
                align-items: center;
                justify-content: baseline;
                flex-direction: column;
                color: var(--profile-theme);
                padding: 1rem 0;
                transition: all 0.3s;
            }

            .favor-list > li > i 
            {
                display: inline-flex;
                justify-content: center;
                align-items: center;
                font-size: 40px;
                width: 50px;
                height: 50px;
            }

            .favor-list > li:hover 
            {
                transform: scale(1.2);
                color: var(--color-tiffany);
            }

            .favor-list > li > span 
            {
                letter-spacing: 1px;
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
        <div class="wrapper">
            <div class="intro">
                <div class="profile">
                    <div class="photo">
                       
                    </div>
                    <div class="bio">
                        <h1 class="name">
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
                    </div>
                </div>

                <div class="intro-section about">
                    <h1 class="title">Objective</h1>
                    <p class="paragraph">
                        @if(isset($description))
                            @foreach($description as $des)
                                <p>{{$des->description}}</p>
                            @endforeach
                        @endif 
                    </p>
                </div><br>

                <div class="intro-section contact">
                    <h1 class="title">Contact</h1>
                    <div class="info-section">
                        <i class="fas fa-phone"></i>
                        <span>
                            @if(isset($phone))
                                @foreach($phone as $phone)
                                    {{$phone->phone}}
                                @endforeach
                            @endif 
                        </span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>
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
                        </span>
                    </div>
                    <div class="info-section">
                        <i class="fas fa-paper-plane"></i>
                        <span>
                            @if(isset($email))
                                @foreach($email as $e)
                                    <p>{{$e->email}}</p>
                                @endforeach
                            @endif
                        </span>
                    </div>
                </div><br>

                <div class="intro-section follow">
                    <h1 class="title">Personal information</h1>
                    <h5 style="display :">Date Of Birth : 
                        <span>
                            @if(isset($dob))
                                @foreach($dob as $dob)
                                    {{$dob->dob}}
                                @endforeach
                             @endif
                        </span>
                    </h5>
                    <h5 style="display :"> Gender: 
                        <span>
                            @if(isset($gender))
                                @foreach($gender as $gender)
                                    {{$gender->gender}}
                                @endforeach
                            @endif
                        </span>
                    </h5>
                    <h5 style="display :">Nationality : 
                        <span>
                            @if(isset($nationality))
                                @foreach($nationality as $nationality)
                                    {{$nationality->nationality}}
                                @endforeach
                            @endif
                        </span>
                    </h5> 
                    <h5 style="display :">Marital Status : 
                        <span>
                            @if(isset($maritalsts))
                                @foreach($maritalsts as $maritalsts)
                                    {{$maritalsts->maritalsts}}
                                    @endforeach
                                @endif 
                        </span>
                    </h5> 
                </div><br>

                <div class="intro-section follow">
                    <h1 class="title">Archievement</h1>
                    <span>
                        @if(isset($archievement))
                            @foreach($archievement as $achieve)
                                <p>{{$achieve->archievement}}</p>
                            @endforeach
                        @endif 
                    </span> 
                </div><br>

                <div class="intro-section follow">
                    <h1 class="title">language</h1>
                    <span>
                        @if(isset($language))
                            @foreach($language as $lan)
                                <p>{{$lan->language}}</p>
                             @endforeach
                        @endif 
                    </span> 
                </div>
            </div>

            <div class="detail">
                <div class="detail-section edu">
                    <div class="detail-title">
                        <div class="title-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <span>Eduation</span>
                    </div>
                    <div class="detail-content">
                        <div class="timeline-block">
                            @if(isset($education))
                                @foreach($education as $edu)
                                    <p>Degree Name : {{$edu->degree}}</p>
                                    <p>City Name : {{$edu->city}}</p>
                                    <p>Institute Name : {{$edu->institute1}}</p>
                                    <p>Passing Year : {{$edu->passyear}}</p><br>
                                @endforeach
                            @endif 
                        </div>
                        
                    </div>
                </div>
                <div class="detail-section pg-skill">
                    <div class="detail-title">
                        <div class="title-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <span>Programming skills</span>
                    </div>
                    <div class="detail-content">
                        <ul class="pg-list">
                            <li>
                                <span>
                                    @if(isset($skill))
                                        @foreach($skill as $skill)
                                            <p>{{$skill->skills}}</p>
                                        @endforeach
                                    @endif 
                                </span>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="detail-section tool-skill">
                    <div class="detail-title">
                        <div class="title-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <span>course</span>
                    </div>
                    
                    <div class="detail-content">
                        <div class="timeline-block">
                            @if(isset($course))
                                @foreach($course as $co)
                                    <p>Course Name : {{$co->course}}</p>
                                    <p>Institute Name : {{$co->institute2}}</p>
                                @endforeach
                            @endif 
                        </div>
                        
                    </div>   
                </div>
            
                <div class="detail-section interests">
                    <div class="detail-title">
                        <div class="title-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <span>Interests</span>
                    </div>
                    <div class="detail-content">
                    <span>
                        @if(isset($hobbies))
                            @foreach($hobbies as $hobby)
                                <p>{{$hobby->hobbies}}</p>
                            @endforeach
                        @endif 
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function printcontent()
            {
                window.print();
            }
        </script>
    </body>
</html>