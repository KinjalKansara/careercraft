<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <title>Resume-6</title>

        <style>

            @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

            * 
            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                font-family: "Montserrat", sans-serif;
            }

            body 
            {
                background: white;
                font-size: 14px;
                line-height: 22px;
                color: #555555;
            }

            .bold 
            {
                font-weight: 700;
                font-size: 20px;
                text-transform: uppercase;
            }

            .semi-bold 
            {
                font-weight: 500;
                font-size: 16px;
            }

            .resume 
            {
                width: 800px;
                height: auto;
                display: flex;
                margin: 50px auto;
                border : 1px solid black;
            }

            .resume .resume_left 
            {
                width: 280px;
                background: #0bb5f4;
            }

            .resume .resume_left .resume_profile 
            {
                width: 100%;
                height: 280px;
            }

            .resume .resume_left .resume_profile img 
            {
                width: 100%;
                height: 100%;
            }

            .resume .resume_left .resume_content 
            {
                padding: 0 25px;
            }

            .resume .title 
            {
                margin-bottom: 20px;
            }

            .resume .resume_left .bold 
            {
                color: white;
            }

            .resume .resume_left .regular 
            {
                color: #b1eaff;
            }

            .resume .resume_item 
            {
                padding: 25px 0;
                border-bottom: 2px solid #b1eaff;
            }

            .resume .resume_left .resume_item:last-child,
            .resume .resume_right .resume_item:last-child 
            {
                border-bottom: 0px;
            }

            .resume .resume_left ul li 
            {
                display: flex;
                margin-bottom: 10px;
                align-items: center;
            }

            .resume .resume_left ul li:last-child 
            {
                margin-bottom: 0;
            }

            .resume .resume_left ul li .icon 
            {
                width: 35px;
                height: 35px;
                background: #fff;
                color: #0bb5f4;
                border-radius: 50%;
                margin-right: 15px;
                font-size: 16px;
                position: relative;
            }

            .resume .icon i,
            .resume .resume_right .resume_hobby ul li i 
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .resume .resume_left ul li .data 
            {
                color: white;
            }

            .resume .resume_left .resume_skills ul li 
            {
                display: flex;
                margin-bottom: 10px;
                color: #b1eaff;
                justify-content: space-between;
                align-items: center;
            }

            .resume .resume_left .resume_skills ul li .skill_name 
            {
                width: 25%;
            }

            .resume .resume_left .resume_skills ul li .skill_progress 
            {
                width: 60%;
                margin: 0 5px;
                height: 5px;
                background: #009fd9;
                position: relative;
            }

            .resume .resume_left .resume_skills ul li .skill_per 
            {
                width: 15%;
            }

            .resume .resume_left .resume_skills ul li .skill_progress span 
            {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                background: #fff;
            }

            .resume .resume_left .resume_social .semi-bold 
            {
                color: #fff;
                margin-bottom: 3px;
            }

            .resume .resume_right 
            {
                width: 520px;
                background: #fff;
                padding: 25px;
            }

            .resume .resume_right .bold 
            {
                color: #0bb5f4;
            }

            .resume .resume_right .resume_work ul,
            .resume .resume_right .resume_education ul 
            {
                padding-left: 40px;
                overflow: hidden;
            }

            .resume .resume_right ul li 
            {
                position: relative;
            }

            .resume .resume_right ul li .date 
            {
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 15px;
            }

            .resume .resume_right ul li .info 
            {
                margin-bottom: 20px;
            }

            .resume .resume_right ul li:last-child .info 
            {
                margin-bottom: 0;
            }

            .resume .resume_right .resume_work ul li:before,
            .resume .resume_right .resume_education ul li:before 
            {
                content: "";
                position: absolute;
                top: 5px;
                left: -25px;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                border: 2px solid #0bb5f4;
            }

            .resume .resume_right .resume_work ul li:after,
            .resume .resume_right .resume_education ul li:after 
            {
                content: "";
                position: absolute;
                top: 14px;
                left: -21px;
                width: 2px;
                height: 115px;
                background: #0bb5f4;
            }

            .resume .resume_right .resume_hobby ul 
            {
                display: flex;
                justify-content: space-between;
            }

            .resume .resume_right .resume_hobby ul li 
            {
                width: 80px;
                height: 80px;
                border: 2px solid #0bb5f4;
                border-radius: 50%;
                position: relative;
                color: #0bb5f4;
            }

            .resume .resume_right .resume_hobby ul li i 
            {
                font-size: 30px;
            }

            .resume .resume_right .resume_hobby ul li:before 
            {
                content: "";
                position: absolute;
                top: 40px;
                right: -52px;
                width: 50px;
                height: 2px;
                background: #0bb5f4;
            }

            .resume .resume_right .resume_hobby ul li:last-child:before 
            {
                display: none;
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
            margin-bottom:5%;
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
            <div class="resume_left">
                <div class="resume_profile">
                </div>
                <div class="resume_content">
                    <div class="resume_item resume_info">
                        <div class="title">
                            <p class="bold">
                                @if(isset($first_name))
                                    @foreach($first_name as $name)
                                        <p style="display : inline-block; margin-right : 10px; color:white; font-size:25px">{{$name->fname}}</p>
                                    @endforeach
                                @endif 

                                @if(isset($last_name))
                                    @foreach($last_name as $name)
                                    <p style="display : inline-block; margin-right : 10px; color:white; font-size:25px">{{$name->lname}}</p>
                                    @endforeach
                                @endif 
                            </p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-signs"></i>
                                </div>
                                <div class="data">
                                    @if(isset($city))
                                        @foreach($city as $city)
                                            <p style="display : inline-block; margin-right : 10px;">{{$city->city}}</p>
                                                @if(isset($zip))
                                                    @foreach($zip as $zip)
                                                        <p style="display : inline-block; margin-right : 10px;">{{$zip->zip}}</p>
                                                    @endforeach
                                                @endif
                                        @endforeach
                                    @endif 
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="data">
                                    @if(isset($phone))
                                        @foreach($phone as $phone)
                                        <p>{{$phone->phone}}</p>
                                        @endforeach
                                    @endif
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="data">
                                @if(isset($email))
                                    @foreach($email as $e)
                                        <p>{{$e->email}}</p>
                                    @endforeach
                                @endif 
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="resume_item resume_skills">
                        <div class="title">
                            <p class="bold">skill's</p>
                        </div>
                        <ul>
                            <li>
                                <div style="color : white">
                                    @if(isset($skill))
                                        @foreach($skill as $skill)
                                            <p>{{$skill->skills}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="resume_item resume_social">
                        <div class="title">
                            <p class="bold">Language</p>
                        </div>
                        <ul>
                            <li>
                                <p style="color : white">
                                @if(isset($language))
                                    @foreach($language as $lan)
                                        {{$lan->language}}<br>
                                    @endforeach
                                @endif 
                                </p>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="resume_right">
                <div class="resume_item resume_about">
                    <div class="title">
                        <p class="bold">About us</p>
                    </div>
                        @if(isset($description))
                            @foreach($description as $des)
                                <p>{{$des->description}}</p>
                            @endforeach
                        @endif 
                </div>
                <div class="resume_item resume_work">
                    <div class="title">
                        <p class="bold">Education</p>
                    </div>
                    <ul>
                        <li>
                            <div class="info">
                                @if(isset($education))
                                    @foreach($education as $edu)
                                        <p>Degree Name : {{$edu->degree}}</p>
                                        <p>City Name : {{$edu->city}}</p>
                                        <p>Institute Name : {{$edu->institute1}}</p>
                                        <p>Passing Year : {{$edu->passyear}}</p><br>
                                    @endforeach
                                @endif 
                            </div>
                        </li>
                        
                        
                    </ul>
                </div>

                <div class="resume_item resume_hobby">
                    <div class="title">
                        <p class="bold">Archievement</p>
                    </div>

                    <div class="name">
                        @if(isset($archievement))
                            @foreach($archievement as $achieve)
                                <p>{{$achieve->archievement}}</p>
                            @endforeach
                        @endif 
                        
                    </div>
                    
                </div>

                <div class="resume_item resume_education">
                    <div class="title">
                        <p class="bold">Course</p>
                    </div>
                    <ul>
                        <li>
                            <div class="info">
                            @if(isset($course))
                                @foreach($course as $co)
                                    <p>Course Name : {{$co->course}}</p>
                                    <p>Institute Name : {{$co->institute2}}</p>
                                @endforeach
                            @endif 
                            </div>
                        </li>
                       
                    </ul>
                </div>
                <div class="resume_item resume_hobby">
                    <div class="title">
                        <p class="bold">Hobbies</p>
                    </div>

                    <div class="name">
                        @if(isset($hobbies))
                            @foreach($hobbies as $hobby)
                                <p>{{$hobby->hobbies}}</p>
                            @endforeach
                        @endif 
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
        <script>
            function printcontent()
            {
                window.print();
            }
        </script>
</html>