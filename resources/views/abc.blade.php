
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>abc</title>

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
        </style>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <div class="full-name">
                    <span class="first-name">John</span> 
                    <span class="last-name">Doe</span>
                </div>
                <div class="contact-info">
                    <span class="email">Email: </span>
                    <span class="email-val">john.doe@gmail.com</span>
                    <span class="separator"></span>
                    <span class="phone">Phone: </span>
                    <span class="phone-val">111-222-3333</span>
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
                                <div class="name">Fr developer</div>
                                <div class="desc">did This and that</div>
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
                        <div class="left">
                            <div class="name">Degree:</div>
                            <div class="addr">City:</div>
                            <div class="duration">Name Of Institute:</div>
                            <div class="duration">Passing Year</div>
                        </div>
                        <div class="right" style="margin-top:-13%;">
                            <!-- here value of education -->
                            <div class="name"></div>
                            <div class="desc"> that</div>
                        </div>
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
                            <div class="name">Course:</div>
                            <!-- here value of course -->
                        <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow.</div>
                    </div>
                    <div class="section__list-item">
                    <div class="name">Institute Name:</div>
                    <!-- here value of institute name of course -->
                        <div class="text">I am a front-end developer with more than 3 years of experience writing html, css, and js. I'm motivated, result-focused and seeking a successful team-oriented company with opportunity to grow. <a href="/login">link</a></div>
                    </div>
                </div>
            </div>


            <div class="section">
                <div class="section__title">Skills</div>
                <div class="skills">
                    <div class="skills__item">
                        <div class="left">
                            <!-- here value of skills -->
                            <div class="name">
                                Javascript
                            </div>
                        </div>
                        <!-- <div class="right">
                            <input  id="ck1" type="checkbox" checked/>
                            <label for="ck1"></label>
                            <input id="ck2" type="checkbox" checked/>
                            <label for="ck2"></label>
                            <input id="ck3" type="checkbox" />
                            <label for="ck3"></label>
                            <input id="ck4" type="checkbox" />
                            <label for="ck4"></label>
                            <input id="ck5" type="checkbox" />
                            <label for="ck5"></label>
                        </div> -->
                    </div>
                </div>
                <div class="skills__item">
                    <div class="left">
                        <div class="name">
                            CSS
                        </div>
                    </div>
                    <!-- <div class="right">
                        <input  id="ck1" type="checkbox" checked/>
                        <label for="ck1"></label>
                        <input id="ck2" type="checkbox" checked/>
                        <label for="ck2"></label>
                        <input id="ck3" type="checkbox" />
                        <label for="ck3"></label>
                        <input id="ck4" type="checkbox" />
                        <label for="ck4"></label>
                        <input id="ck5" type="checkbox" />
                        <label for="ck5"></label>
                    </div> -->
                </div>
            </div>

            <div class="section">
                <div class="section__title">
                    Area Of Interests
                </div>
                <div class="section__list">
                    <div class="section__list-item">
                        <!-- here value of hobbies -->
                        Football, programming.
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
                        Football, programming.
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
                        Football, programming.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>