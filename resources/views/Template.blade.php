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
        <title>Templates</title>

        <style>
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

            .container .section-4
            {
                height : 850px;
                width : 85%;
                margin-left : 8%;
                border : 3px double #2dc46a; 
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
                margin-top : 5%;
                background-color : white;
                border-radius : 10px;
            }

            .container .section-4 .firstpart
            {
                display : flex;
                margin-top : 3%;
            }

            .container .section-4 .firstpart .r1,
            .r2,
            .r3
            {
                margin-left : 4%;
            }

            .container .section-4 .firstpart .r1 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .firstpart .r1 button:hover
            {
                color : black;
            }

            .container .section-4 .firstpart .r2 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .firstpart .r2 button:hover
            {
                color : black;
            }

            .container .section-4 .firstpart .r3 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .firstpart .r3 button:hover
            {
                color : black;
            }

            .container .section-4 .secondpart
            {
                display : flex;
                margin-top : 2%;
            }

            .container .section-4 .secondpart .r4,
            .r5,
            .r6
            {
                margin-left : 4%;
            }

            .container .section-4 .secondpart .r4 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .secondpart .r4 button:hover
            {
                color : black;
            }

            .container .section-4 .secondpart .r5 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .secondpart .r5 button:hover
            {
                color : black;
            }

            .container .section-4 .secondpart .r6 button
            {
                margin-top : 5%;
                margin-bottom : 5%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                background-color : #2dc46a;
                color : white;
                border : 1px solid white;
                margin-left : 15%;
            }

            .container .section-4 .secondpart .r6 button:hover
            {
                color : black;
            }

        </style>
    </head>

    <body>
    <div class="container">
            <div class="first-section">
                <h1>CareerCraft</h1>
                <h2>Select Template (Third Step)</h2>
                <div class="second-section"></div>

                <div class="other-section">
            
                    <div class="section-4">
                        <div class="firstpart">
                            <div class="r1">
                                <img src="{{url('Image/resume1.png')}}" alt="" height=300px width=300px><br>
                                <a href="/First_Template">
                                    <button type="submit">Create</button>
                                </a>
                            </div>

                            <div class="r2">
                                <img src="{{url('Image/resume2.png')}}" alt="" height=300px width=300px><br>
                                <a href="/Second_Template">
                                    <button type="submit">Create</button>
                                </a>
                            </div>

                            <div class="r3">
                                <img src="{{url('Image/resume3.png')}}" alt="" height=300px width=300px><br>
                                <a href="/Third_Template">
                                    <button type="submit">Create</button>
                                </a>
                            </div>
                        </div>

                        <div class="secondpart">
                            <div class="r4">
                                <img src="{{url('Image/resume4.png')}}" alt="" height=300px width=300px><br>
                                <a href="/Fourth_Template">
                                    <button type="submit">Create</button>
                                </a>
                            </div>

                            <div class="r5">
                                <img src="{{url('Image/resume5.png')}}" alt="" height=300px width=300px><br>
                                <a href="/Fifth_Template">
                                    <button type="submit">Create</button>
                                </a>

                            </div>

                            <div class="r6">
                                <img src="{{url('Image/resume6.png')}}" alt="" height=300px width=300px><br>
                                <a href="/Sixth_Template">
                                    <button type="submit">Create</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br> 
            </div>
        </div>   
    </body>
</html>



