<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
                height : 100vh;
                background-color : #f0f0f0;
            }

            header
            {
                width : 100%;
                /* position : absolute; */
                /* height : 600px; */
            }

            header .first-section
            {
                height : 185px;
                width : 100%;
                background-color : #2dc46a;
            }

            .first-section .second-section
            {
                height : 135px;
                width : 100%;
                background-color : #2dc46a;
                transform : skewY(-6deg);
                position : absolute;
                z-index: -1;
            } 

            .first-section img
            {
                height : 50px;
                width : 50px;
                margin-left : 48%;
                margin-top : 10px;
            }

            .nav
            {
                position : absolute;
                left : 180px;
                margin-top : 45px;
                z-index : 1
            }

            .nav ul
            {
                list-style-type : none;
            }

            .nav ul li
            {
                display : inline;
                margin-right : 40px;

            }

            .nav ul li a
            {
                text-decoration : none;
                color : black;
                font-size : 20px;
                font-family : Candara;
            }

            .nav ul li a:hover
            {
                border-bottom : 2px solid black;
                color : white;
                /* box-shadow : 0 0 10px rgba(0, 0, 0, 1.0); */
                /* box-shadow: 0 8px 6px -6px rgba(0,0,0,1.0); */
            }

        </style>
    </head>


    <body>
        <header>
            <div class="containerheader">
                <div class="first-section">
                    <img src="{{url('Image\careercarft.png')}}" alt="">
                    <div class="nav">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/CreateResume1')}}">Create Resume</a></li>
                            <li><a href="{{url('/Resumetemplate')}}">Resume Templates</a></li>
                            <li><a href="{{url('/AboutUs')}}">About Us</a></li>
                            <li><a href="{{url('/ContactUs')}}">Contact Us</a></li>
                            <li><a href="{{url('/ChangeByUser')}}">Profile</a></li>
                            <li><a href="{{url('/Logout')}}">Logout</a></li>
                        </ul>
                    </div><br><br><br><br>
                    <div class="second-section"></div>
                </div>
            </div>
        </header>
    </body>
</html>