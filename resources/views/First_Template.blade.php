
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
        <title>First-Template</title>

        <style>

        * 
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html
        {
            height: 100%;  
        }

        body 
        {
            min-height: 100%;  
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding-bottom: 50px;
        }

        .container 
        {
            max-width: 700px;   
            background: #fff;
            margin: 0px auto 0px; 
            box-shadow: 1px 1px 2px #DAD7D7;
            border-radius: 3px;  
            padding: 40px;
            margin-top: 50px;
        }

        .header 
        {
            margin-bottom: 30px;
        
            .full-name 
            {
                font-size: 40px;
                text-transform: uppercase;
                margin-bottom: 5px;
            }
        
            .first-name 
            {
                font-weight: 700;
            }
            
            .last-name 
            {
                font-weight: 300;
            }
        
            .contact-info 
            {
                margin-bottom: 20px;
            }
            
            .email ,
            .phone 
            {
                color: #999;
                font-weight: 300;
            } 
        
            .separator 
            {
                height: 10px;
                display: inline-block;
                border-left: 2px solid #999;
                margin: 0px 10px;
            }
        
            .position 
            {
                letter-spacing: 2px;
                color: #54AFE4;
                font-weight: bold;
                margin-bottom: 10px;
                text-transform: uppercase;
            }
        }


        .details 
        {
            line-height: 20px;
        
            .section 
            {
                margin-bottom: 40px;  
            }
            
            .section:last-of-type 
            {
                margin-bottom: 0px;  
            }
        
            .section__title 
            {
                letter-spacing: 2px;
                color: #54AFE4;
                font-weight: bold;
                margin-bottom: 10px;
                text-transform: uppercase;
            }
            
            .section__list-item 
            {
                margin-bottom: 40px;
            }
        
            .section__list-item:last-of-type 
            {
                margin-bottom: 0;
            }
            
            .left ,
            .right 
            {
                vertical-align: top;
                display: inline-block;
            }
            
            .left 
            {
                width: 60%;    
            }
        
            .right 
            {
                /* tex-align: right; */
                width: 39%;  
                margin-left: 25%;
                margin-top : -22%;  
            }
            
            .name 
            {
                font-weight: normal;
            }
        
            a 
            {
                text-decoration: none;
                color: #000;
                font-style: italic;
            }
        
            a:hover 
            {
                text-decoration: underline;
                color: #000;
            }
            
            .skills 
            {
                
            }
            
            .skills__item 
            {
                margin-bottom: 10px;  
            }
        
            .skills__item .right 
            {
                input 
                {
                    display: none;
                }
            
                label 
                {
                    display: inline-block;  
                    width: 20px;
                    height: 20px;
                    background: #C3DEF3;
                    border-radius: 20px;
                    margin-right: 3px;
                }
            
                input:checked + label 
                {
                    background: #79A9CE;
                }
            }

            
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
            margin-left : 5%
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
        <div class="container">
            <div class="header">
                <div class="full-name">                                                             
                    <span class="first-name" style="display : inline-block; margin-right : 10px;">
                        @if(isset($first_name))
                            @foreach($first_name as $name)
                                <p>{{$name->fname}}</p>
                            @endforeach
                         @endif 
                    </span> 
                    <span class="last-name" >
                        @if(isset($last_name))
                            @foreach($last_name as $name)
                                {{$name->lname}}
                            @endforeach
                         @endif 
                    </span> 
                </div>
                <div class="contact-info">
                    <span class="email">Email: </span>
                    <span class="email-val" style="display : inline-block; margin-right : 10px; color: #999;">
                        @if(isset($email))
                            @foreach($email as $e)
                                <p>{{$e->email}}</p>
                            @endforeach
                         @endif 
                    </span>
                    <span class="separator"></span>
                    <span class="phone">Phone: </span>
                    <span class="phone-val" style="display : inline-block; margin-right : 10px; color: #999;">
                        @if(isset($phone))
                            @foreach($phone as $phone)
                                <p>{{$phone->phone}}</p>
                            @endforeach
                         @endif 
                    </span>
                </div>
                <div class="about">
                    <span class="position">About Me</span>
                    @if(isset($description))
                    <span class="desc">
                        @foreach($description as $des)
                            <p>{{$des->description}}</p>
                        @endforeach
                    </span>
                    @endif 
                </div>
            </div>


            <div class="details">
                <div class="section">
                    <div class="section__title">Personal Information</div>
                    <div class="section__list">
                        <div class="section__list-item">
                            <div class="left">
                                <div class="name">Date Of Birth:</div>
                                <div class="addr">Place Of Birth:</div>
                                <div class="duration">Gender:</div>
                                <div class="duration">Nationality:</div>
                                <div class="duration">Marital Status:</div>
                                <div class="duration">Address:</div>
                                <div class="duration">City-Zip:</div>
                                
                            </div>
                            <div class="right">
                                <!-- here value of personal info -->
                                <div class="name">
                                    @if(isset($dob))
                                        @foreach($dob as $dob)
                                            <p>{{$dob->dob}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
                                    @if(isset($placedob))
                                        @foreach($placedob as $placedob)
                                            <p>{{$placedob->placedob}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
                                    @if(isset($gender))
                                        @foreach($gender as $gender)
                                            <p>{{$gender->gender}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
                                    @if(isset($nationality))
                                        @foreach($nationality as $nationality)
                                            <p>{{$nationality->nationality}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
                                    @if(isset($maritalsts))
                                        @foreach($maritalsts as $maritalsts)
                                            <p>{{$maritalsts->maritalsts}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
                                    @if(isset($address))
                                        @foreach($address as $address)
                                            <p>{{$address->address}}</p>
                                        @endforeach
                                    @endif 
                                </div>
                                <div class="desc">
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
                            </div>
                        </div>
                        <div class="section__list-item">
                        <!-- <div class="left">
                            <div class="name">Akount</div>
                            <div class="addr">San Monica, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div> -->
                        <!-- <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did This and that</div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section__title">Education</div>
                <div class="section__list">
                    <div class="section__list-item"> 
                            @if(isset($education))
                                @foreach($education as $edu)
                                    <p>Degree Name : {{$edu->degree}}</p>
                                    <p>City Name : {{$edu->city}}</p>
                                    <p>Institute Name : {{$edu->institute1}}</p>
                                    <p>Passing Year : {{$edu->passyear}}</p><br>
                                @endforeach
                            @endif 
                    </div>
                    <!-- <div class="section__list-item">
                        <div class="left">
                            <div class="name">Akount</div>
                            <div class="addr">San Monica, CA</div>
                            <div class="duration">Jan 2011 - Feb 2015</div>
                        </div>
                        <div class="right">
                            <div class="name">Fr developer</div>
                            <div class="desc">did This and that</div>
                        </div>
                    </div> -->
                </div>
            </div>


            <div class="section">
                <div class="section__title">Course</div>
                    <div class="section__list">
                        <div class="section__list-item">
                            
                            <!-- here value of course -->
                        <div class="text">
                        @if(isset($course))
                            @foreach($course as $co)
                                <p>Course Name : {{$co->course}}</p>
                                <p>Institute Name : {{$co->institute2}}</p>
                            @endforeach
                        @endif 
                        </div>
                    </div>
                    <div class="section__list-item">
                </div>
            </div>


            <div class="section">
                <div class="section__title">Skills</div>
                <div class="skills">
                    <div class="skills__item">
                        <div class="left">
                            <!-- here value of skills -->
                            <div class="name">
                                @if(isset($skill))
                                    @foreach($skill as $skill)
                                        <p>{{$skill->skills}}</p>
                                    @endforeach
                                @endif 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section__title">
                    Area Of Interests
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        <!-- here value of hobbies -->
                        @if(isset($hobbies))
                            @foreach($hobbies as $hobby)
                                <p>{{$hobby->hobbies}}</p>
                            @endforeach
                        @endif 
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section__title">
                    Archievement
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        <!-- here value of archievement -->
                        @if(isset($archievement))
                            @foreach($archievement as $achieve)
                                <p>{{$achieve->archievement}}</p>
                            @endforeach
                        @endif 
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section__title">
                    Language
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        <!-- here value of language -->
                        @if(isset($language))
                            @foreach($language as $lan)
                                <p>{{$lan->language}}</p>
                             @endforeach
                        @endif 
                    </div>
                </div>
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