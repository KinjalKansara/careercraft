<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ContactUs</title>

        <style>

            /* body
            {
                margin : 0;
                padding : 0;
                display : flex;
                justify-content : center;
                align-items : center;
                height : 90vh;
                background-color:#f0f0f0;
            } */

            .container
            {
                display : flex;
                width : 800px;
                height : 400px;
                display : flex;
                justify-content : center;
                align-items : center;
                height : 90vh;
                background-color:#f0f0f0;
                margin-left : 20%;
                margin-top : 150px;
            }

            .container h2
            {
                font-size : 60px;
                text-align : center;
                font-family : Comic Sans MS;
                font-weight : normal;
                margin-top : -650px;
                position : absolute;
                z-index : 1;
            }

            .left-section,
            .right-section
            {
                background-color : #fff;
                padding : 30px;
                border-radius : 10px;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0)
            }

            .left-section
            {
                background-color : #2dc46a;
                height : 480px;
            }

            .right-section
            {
                width : 400px;
                height : 480px;
            }

            h3
            {
                margin-bottom : 30px;
                margin-left : 30px;
                font-family : Segoe Print;
                font-size : 10px;
            }

            input[type=""],
            input[type="text"]
            /* #submit,
            button */
            {
                display : flex;
                width : 80%;
                /* margin-bottom:30px; */
                padding : 10px;
                font-size : 15px;
                font-family : cursive;
            }

            .imgggg
            {
                height : 460px;
                width : 320px;
            }


            #submit
            {
                background-color : #52be80;
                color : #fff;
                border : none;
                cursor : pointer;
                font-size : 15px;
                height : 40px;
                width : 80%;
                border-radius : 10px;
                color : black;
                text-align : center;
                margin-left : 10px;
                font-family : Candara;
            }

            #submit:hover
            {
                color : white;
            }

            .container .right-section a
            {
                color : #2dc46a;
                
            }

            .container .right-section a:hover
            {
                color : black;
                transform: rotate(20deg);
            }

            .text-danger
            {
                color : red;
            }

        </style>
    </head>

@include('Header')

    <body>
        <div class="container">

            <h2>Contact Us</h2>
            <div class="left-section">
                <img src="{{url('Image/contact.gif')}}" class="imgggg" alt="" srcset="">
            </div>
            
            <div class="right-section">
                <h3>Do you have a question, remark, complaint, or suggestion? Please first read the <a href="Faq">frequently asked questions</a> before contacting us. If your question remains unanswered, use the form below.</h3>
                <form action="{{url('/')}}/ContactUs" method="post" id="myform">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                    <span class="text-danger" >
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="" name="email" id="email" placeholder="Enter your email-I'd" style="margin-top : 30px;">
                    <span class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>

                    <input type="text" name="subject" id="subject" placeholder="Enter your subject" style="margin-top : 30px;">
                    <span class="text-danger">
                        @error('subject')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="text" name="question" id="question" placeholder="Enter your question" style="margin-top : 30px;">
                    <span class="text-danger">
                        @error('question')
                            {{$message}}
                        @enderror
                    </span>

                    <input type="submit" value="Submit" name="submit" id="submit" style="margin-top : 20px;" onclick="showmessage('Message Sent Successfully')"><br><br> 
                    
                    <!-- <div id="message" style="display:none; font-size:1500px;"></div>
                    <script>
                        function showmessage(message)
                        {
                            var messageDiv = document.getElementById('message');
                            messageDiv.innerText = message;
                            messageDiv.style.display = 'block';

                            setTimeout(function()
                            {
                                messageDiv.style.display = 'none';
                            },3000);
                        }
                    </script>
                    <button id="submit" onclick="showmessage('Message Sent Successfully')">Submit</button>
                     -->

                </form>
            </div>
        </div><br><br><br><br><br>
        
    </body>
    @include('Footer')
</html>


