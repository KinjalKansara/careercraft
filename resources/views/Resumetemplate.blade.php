<!DOCTYPE html>
<html lang="en">

    

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume Templates</title>

        <style>
            body
            {
                margin : 0;
                padding : 0;
            }

            .container .other-section h2
            {
                font-size : 60px;
                text-align : center;
                font-family : Comic Sans MS;
                font-weight : normal;
                margin-top : 5px;
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

    @include('Header')
    <body>
        <div class="container">
            <div class="other-section">
                <h2>Templates</h2>
            </div>

            <div class="section-4">
                <div class="firstpart">
                    <div class="r1">
                        <img src="{{url('Image/resume1.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>
                    </div>

                    <div class="r2">
                        <img src="{{url('Image/resume2.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>
                    </div>

                    <div class="r3">
                        <img src="{{url('Image/resume3.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>
                    </div>
                </div>

                <div class="secondpart">
                    <div class="r4">
                        <img src="{{url('Image/resume4.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>
                    </div>

                    <div class="r5">
                        <img src="{{url('Image/resume5.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>

                    </div>

                    <div class="r6">
                        <img src="{{url('Image/resume6.png')}}" alt="" height=300px width=300px><br>
                        <a href="/CreateResume1">
                            <button type="submit">Create</button>
                        </a>

                    </div>
                </div>
            </div> 
                
        </div><br><br><br><br>    
    </body>
</html>

@include('Footer')

