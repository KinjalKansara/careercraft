<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AboutUs</title>

        <style>

            .container
            {
                height : auto;
                width : 100%;
                /* background-color : red; */
                /* position : absolute; */
                z-index : 1;
                margin-top : -30px;
                /* margin-left : 45%; */
            }

            .container .other-section h2
            {
                font-size : 60px;
                text-align : center;
                font-family : Comic Sans MS;
                font-weight : normal;
            }

            .container .other-section h5
            {
                font-size : 20px;
                text-align : center;
                margin-top : -30px;
                font-family : Garamond;
                font-weight : normal;
                color : #2dc46a;
            }

            .container .box
            {
                background-color : white;
                height : auto;
                width : 60%;
                margin-top : 4%;
                margin-left : 20%;
                border : 3px double #2dc46a;
                border-radius : 10px;
            }

            .container .box .about
            {
                
                padding-top : 10px;
                padding-right : 30px;
                padding-left : 30px;
            }

            .container .box .about h3
            {
                font-size : 20px;
                font-family : Sitka Small Semibold;
            }

            .container .box .about p
            {
                font-size : 15px;
                font-family : Candara;
                padding : 0;
                white-space: pre-line;
            }

        </style>
    </head>

    @include('Header')
    <body>
        <div class="container">
            <div class="other-section">
                <h2>About Us</h2>

                <h5>We make a beautiful and professional Resume within reach for everyone</h5>

                <div class="box">
                    <div class="about">
                        <h3>About CVmaker</h3>
                        <p>
                            Many people have difficulties in creating their perfect Resume. careercraft started from the idea of making professional Resumes possible for everyone. With our careercraft, you can create a professional Resume through our step-by-step process in just 10 minutes.<br><br>
                            We work with recruiters to create the right content grids which we convert into professional Resume templates. Our Resumes give you the ability to stand out from others in the best way. The templates we have created are integrated within our careercraft, making it incredibly easy to change the order and place of your content or to change the colors of your template. We give you the ability to create and download a professional Resume in just a few minutes.
                        </p>
                    </div>

                    <div class="about">
                        <h3>We are successful!</h3>
                        <p>
                            So far, many people have successfully used careercraft. A high majority of our users now work at some of the largest companies in the United States, thanks to our outstanding Resumes.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Customer service</h3>
                        <p>
                        Send an e-mail to <a href="https://mail.google.com/">careercraft2024@gmail.com</a>, or contact us through our <a href="{{url('ContactUs')}}">contact form</a> .
                        </p>
                    </div>

                    <div class="about">
                        <h3>About Me</h3>
                        <p>
                            
                        </p>
                    </div>
                    
                </div>
            </div>
        </div><br><br><br>
    </body>
</html>
@include('Footer')