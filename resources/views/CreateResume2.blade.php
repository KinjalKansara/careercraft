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
        <title>CreateResume2</title>

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
                margin-bottom : 20px;
            }

            .forform .form h1
            {
                font-family : Cascadia Code;
            }

            .forform .form .objective,
            .education,
            .interests,
            .course,
            .skill,
            .archievement,
            .language
            {
                border : 2px dashed #2dc46a;
                height : auto;
                width : 65%;
                justify-content : center;
                align-items : center;
                margin-left : 18%;
                border-radius : 10px;
                margin-bottom : 5%;
            }

            .forform .form .objective h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form label
            {
                color : black;
                font-size : 18px;
                margin-left : 30px;
                font-family : Candara;
            }

            .forform .form .objective .input
            {
                width : 560px;
                height : 100px;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-top : 3%;
                margin-left : 30px;
                margin-bottom : 30px;
                font-family : Candara;
                font-size : 15px;
            }

            .forform .form .education h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .education .column
            {
                display : flex;
                column-gap : 15%;
            }

            .forform .form .education .column1
            {
                display : flex;
                column-gap : 22%;
            }

            .forform .form .education .input-box input
            {
                position : relative;
                height : 50px;
                width : 100%;
                outline : none;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-left : 30px;
                margin-top : 3%;
                margin-bottom : 30px;
                font-family : Candara;
                font-size : 15px;
            }

            .forform .form input
            {
                width : 560px;
                height : 50px;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-top : 3%;
                margin-left : 30px;
                margin-bottom : 30px;
                font-family : Candara;
                font-size : 15px;
            }

            .forform .form .interests h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .interests button
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 76%;
                background-color : #2dc46a;
                color : black;
            }

            .forform .form .interests button:hover
            {
                color : white;
            }

            .forform .form .skill h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .skill button
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 76%;
                background-color : #2dc46a;
                color : black;
            }

            .forform .form .skill button:hover
            {
                color : white;
            }

            .forform .form .course h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .course .column
            {
                display : flex;
                column-gap : 15%;
            }

            .forform .form .course .column1
            {
                display : flex;
                column-gap : 22%;
            }

            .forform .form .course .input-box input
            {
                position : relative;
                height : 50px;
                width : 100%;
                outline : none;
                border : 1px solid black;
                border-radius : 10px;
                padding : 0 15px;
                margin-left : 30px;
                margin-top : 3%;
                margin-bottom : 30px;
                font-family : Candara;
                font-size : 15px;
            }

            .forform .form .archievement h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .language h2
            {
                font-size : 25px;
                margin-left : 20px;
                text-decoration : underline;
                font-family : Garamond;
                margin-bottom : 30px;
            }

            .forform .form .language button
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 76%;
                background-color : #2dc46a;
                color : black;
            }

            .forform .form .archievement button:hover
            {
                color : white;
            }

            .forform .form .archievement button
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 76%;
                background-color : #2dc46a;
                color : black;
            }

            .forform .form .language button:hover
            {
                color : white;
            }

            .input-box #submit
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 45%;
                background-color : #2dc46a;
                color : black;
            }

            .input-box #submit:hover
            {
                color : white;
            }

            .column2 button
            {
                height : 50px;
                width : 120px;
                font-family : cursive;
                font-size : 15px;
                margin-left : 75%;
                background-color : #2dc46a;
                color : black;
                margin-bottom : 5%;
            }

            .column2 button:hover
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
                <h2>Experiences (Second Step)</h2>
                
                <div class="second-section"></div>

                <div class="forform">
                    <form action="{{url('/')}}/CreateResume2" method="post" class="form">
                        @csrf
                        <h1>Experiences</h1>

                        <hr style="margin-bottom:50px;width:95%;">

                        <div class="objective">
                            <h2>Resume Objective</h2>

                            <label for="description">Description:</label><br>
                            <textarea name="description" class="input" cols="30" rows="10" placeholder="Enter resume related objective"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </span>
                            <!-- <input type="text" name="description" placeholder="Enter Objective" cols="40" rows="5"> -->
                        
                            <!-- <a href="{{url('/')}}/Description">
                                <input type="submit" value="Save" name="submit" id="submit">
                            </a> -->
                            <div class="column2">
                                <button type="submit" name="action" value="save">Save</button>
                            </div>
                        </div>
    
                        <div class="education">
                            <h2>Education & Qualification</h2>

                            <div class="column">
                                <div class="input-box">
                                    <label for="degree">Degree:</label><br>
                                    <input type="text" name="degree" placeholder="Enter your degree">
                                    <span class="text-danger">
                                        @error('degree')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="input-box">
                                    <label for="city">City/Town:</label><br>
                                    <input type="text" name="city" placeholder="Enter city">
                                    <span class="text-danger">
                                        @error('city')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <label for="institute1">Institute Name:</label><br>   
                            <input type="text" name="institute1" placeholder="Enter institute name">
                            <span class="text-danger">
                                @error('institute1')
                                    {{$message}}
                                @enderror
                            </span>


                            <div class="column1">
                                <div class="input-box">
                                    <label for="passyear">Passing Year:</label><br>
                                    <input type="number" name="passyear" placeholder="Enter your pass year" style="width : 100%;">
                                    <span class="text-danger">
                                        @error('passyear')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="column2">
                                <!-- <a href="{{url('/')}}/Education">
                                    <input type="submit" value="Add" name="submit" id="submit">
                                </a> -->

                                <button type="submit" name="action" value="education">Add</button>
                            </div>
                        </div>

                        
                        <div class="interests">
                            <h2>Area Of Interests</h2>

                            <label for="hobbies">Hobbies:</label><br>
                            <input type="text" name="hobbies" placeholder="Enter your area of interests">
                            <span class="text-danger">
                                @error('hobbies')
                                    {{$message}}
                                    @enderror
                            </span>

                            <!-- <a href="{{url('/')}}/Hobbies">
                                <input type="submit" value="Add" name="submit" id="submit">
                            </a> -->

                            <button type="submit" name="action" value="hobbies" style="margin-bottom : 5%;">Add</button>
                        </div>

                        
                        <div class="skill">
                            <h2>Skills</h2>

                            <label for="skill">Skills:</label><br>
                            <input type="text" name="skill" placeholder="Enter your skills">
                            <span class="text-danger">
                                @error('skill')
                                    {{$message}}
                                @enderror
                            </span>

                            <!-- <a href="{{url('/')}}/Skill">
                                <input type="submit" value="Add" name="submit" id="submit">
                            </a> -->

                            <button type="submit" name="action" value="skill" style="margin-bottom : 5%;">Add</button>
                        </div>

                        <div class="course">
                            <h2>Course</h2>

                            <div class="column">
                                <div class="input-box">
                                    <label for="course">Course:</label><br>
                                    <input type="text" name="course" placeholder="Enter your Course">
                                    <span class="text-danger">
                                        @error('course')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="input-box">
                                    <label for="institute2">Institute:</label><br>
                                    <input type="text" name="institute2" placeholder="Enter institute">
                                    <span class="text-danger">
                                        @error('institute2')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="column2">
                                <!-- <a href="{{url('/')}}/Course">
                                    <input type="submit" value="Add" name="submit" id="submit">
                                </a> -->

                                <button type="submit" name="action" value="course" style="margin-bottom : 5%;">Add</button>
                            </div>
                        </div>

                        
                        <div class="archievement">
                            <h2>Archievement</h2>

                            <label for="archievement">Archievement:</label><br>
                            <input type="text" name="archievement" placeholder="Enter your archievement">
                            <span class="text-danger">
                                @error('archievement')
                                    {{$message}}
                                @enderror
                            </span>
                            
                            <!-- <a href="{{url('/')}}/Archievement">
                                <input type="submit" value="Add" name="submit" id="submit">
                            </a> -->

                            <button type="submit" name="action" value="archievement" style="margin-bottom : 5%;">Add</button>
                        </div>

                        <div class="language">
                            <h2>Language Known</h2>

                            <label for="language">Language:</label><br>
                            <input type="text" name="language" placeholder="Enter known language">
                            <span class="text-danger">
                                @error('institute2')
                                    {{$message}}
                                @enderror
                                    </span>
                            <!-- <a href="{{url('/')}}/Language">
                                <input type="submit" value="Add" name="submit" id="submit">
                            </a> -->

                            <button type="submit" name="action" value="language" style="margin-bottom : 5%;">Add</button>
                        </div>
                        
                        <div class="input-box">
                                <input type="submit" value="Next Step" name="submit" id="submit">
                        </div>  
                        
                    </form>
                </div><br><br><br><br>
            </div>
        </div>
    </body>
</html>