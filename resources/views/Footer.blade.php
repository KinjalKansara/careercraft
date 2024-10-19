<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Footer</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
            }

            footer
            {
                width : 100%;
                background-color : #2dc46a;
                margin-top : -22px;
                bottom :0;
                height : 380px;
            }

            footer .containerfooter .uppercontent
            {
                display : flex;
            }

            footer .containerfooter .uppercontent .logo
            {
                height : 300px;
                width : 25%;
                margin-top : 2%;
            }

            footer .containerfooter .uppercontent .logo img
            {
                margin-left : 20px;
                margin-top : 15px;
            }

            footer .containerfooter .uppercontent .services
            {
                height : 300px;
                width : 20%;
                margin-top : 2%;
            }

            footer .containerfooter .uppercontent .services a
            {
                text-decoration : none;
                font-size : 20px;
                color : black;
            }

            footer .containerfooter .uppercontent .services a:hover
            {
               text-decoration : none;
                color : white;
                text-decoration : underline;
            }

            footer .containerfooter .uppercontent .support
            {
                height : 300px;
                width : 20%;
                margin-top : 2%;
            }

            footer .containerfooter .uppercontent .support a
            {
                text-decoration : none;
                font-size : 20px;
                color : black;
                padding : 30px;
            }

            footer .containerfooter .uppercontent .support a:hover
            {
               text-decoration : none;
                color : white;
                text-decoration : underline;
            }

            footer .containerfooter .uppercontent .cv
            {
                height : 300px;
                width : 20%;
                margin-top : 2%;
            }

            footer .containerfooter .uppercontent .cv a
            {
                text-decoration : none;
                font-size : 20px;
                color : black;
                padding : 30px;
            }

            footer .containerfooter .uppercontent .cv a:hover
            {
               text-decoration : none;
                color : white;
                text-decoration : underline;
            }

            footer .containerfooter .uppercontent h2
            {
                font-size : 35px;
                color : white;
                font-family : Sitka Small Semibold;
            }

            footer .containerfooter hr
            {
                width : 80%;
                margin-top : 3%;
                border : 1px solid black;
            }

            footer .containerfooter .line
            {
                margin-top : -100px;
                text-align : center;
            }

            footer .containerfooter .line h3
            {
                font-family : Segoe Script;
                font-size : 20px;
            }

            footer .containerfooter .line h5
            {
                font-family : Garamond;
                font-size : 15px;
            }

        </style>
    </head>


    <body>
        <footer>
            <div class="containerfooter">
                <div class="uppercontent">
                    <div class="logo">
                        <img src="{{url('Image/careercarft.png')}}" alt="" height=200px width=200px>
                    </div>

                    <div class="services">
                        <h2>Services</h2>
                        <a href="{{url('CreateResume1')}}">Create Resume</a>
                    </div>

                    <div class="support">
                        <h2>Support</h2>
                        <a href="{{url('AboutUs')}}">About Us</a><br><br>
                        <a href="{{url('ContactUs')}}">Contact Us</a><br><br>
                        <a href="{{url('Faq')}}">Faq</a>
                    </div>

                    <div class="cv">
                        <h2>careercraft</h2>
                        <a href="{{url('PrivatePolicy')}}">Privacy</a><br><br>
                        <a href="{{url('Term&Condition')}}">Term&Condition</a><br><br>
                        <a href="{{url('Resumetemplate')}}">Template</a>
                    </div>
                </div>

                <div class="line">
                    <hr>
                    <h3>Developed By Kinjal Kansara</h3>
                    <h5>careercraft | Copyright © 2024 All Rights Reserved</h5>
                </div>
            </div>
        </footer>
    </body>
</html>



<!--  -->