<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header-2</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
                background-color : white;
            }

            .header2-container .user-profile-logo
            {
                text-align : center;
            }

            .header2-container .user-profile-logo img
            {
                height : 100px;
                width : 100px;
                margin-top : 3%;
            }

            .header2-container .nav
            {
                background-color : #2dc46a;
                height : 690px;
                width : 15%;
                margin-left : 10%;
                padding : 10px;
                margin-top : 25px;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
                border-radius : 10px;
                
            }

            .header2-container .nav ul
            {
                list-style-type : none;
            }

            .header2-container .nav ul li
            {
                padding : 10px;
                /* border : 1px solid black; */
            }

            .header2-container .nav ul li a
            {
               text-decoration : none;
               font-size : 20px;
               color : white;
               font-family : Candara;
            }

            .header2-container .nav ul li a:hover
            {
               color : black;
            }

            .header2-container .nav hr
            {
               width : 100%;
               border : 1px solid black;
               margin-left : -20px;
            }

            .header2-container .logout
            {
                margin-top : 350px;
                padding : 10px;
                text-align : center;
            }

            .header2-container .logout a
            {
               text-decoration : none;
               font-size : 20px;
               color : white;
               font-family : Candara;
            }

            .header2-container .logout a:hover
            {
               color : black;
            }

            .header2-container .logout hr
            {
               width : 100%;
               border : 1px solid black;
                margin-left : 2px;
            }

        </style>
    </head>


    <body>
        <div class="header2-container">
            <div class="user-profile-logo">
                <img src="{{url('Image/user.png')}}" alt="" height=100px width=100px>
            </div>

            <div class="nav">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Back Home</a>
                    </li>

                    <hr>

                    <li>
                        <a href="{{url('/User-Profile')}}">User-Profile</a>
                    </li>

                    <hr>

                    <li>
                        <a href="{{url('/ChangeByUser')}}">Change Email & Password</a>
                    </li>

                    <hr>

                    <li>
                        <a href="{{url('/ContactUs')}}">Ask Question</a>
                    </li>
                </ul>

                <div class="logout">
                    <hr>
                    <a href="{{url('/Logout')}}">Logout</a>
                </div>

            </div>
        </div>
    </body>
</html>