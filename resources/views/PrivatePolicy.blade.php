<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Private Policy</title>

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
                <h2>Private Policy</h2>

                <h5>Please read our privacy and cookie statement carefully.</h5>

                <div class="box">
                    <div class="about">
                    <p>Please read this Privacy Policy carefully as it will help you understand what we do with the information we collect. By using the Site, you acknowledge that you have read and understand the terms of this Privacy Policy and our separate Terms and Conditions. If you do not agree with our practices, please do not use or access the Site. Capitalized terms that are not defined in this Privacy Policy have the same meaning ascribed to them in the Terms and Conditions.
                       <br>If you have any questions, please contact us at careercraft2024@gmail.com.
                    </p>
                        <h3>How and When We Collect Information</h3>
                        <p>
                            We collect information you provide to us, protected class information, education and employment information, content you make public, and geolocation information when you enter such information on the Site (including during registration), sign up in the site.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Data Controller</h3>
                        <p>
                            Information provided, collected, or processed is controlled by:
                            careercraft2024@gmail.com
                        </p>
                    </div>

                    <div class="about">
                        <h3>Customer service</h3>
                        <p>
                        Send an e-mail to <a href="https://mail.google.com/">careercraft2024@gmail.com</a>, or contact us through our <a href="{{url('ContactUs')}}">contact form</a> .
                        </p>
                    </div>

                    <div class="about">
                        <h3>Security and Protection of Information</h3>
                        <p>
                        careercraft takes appropriate technical and organizational security measures to protect your personal data.However, no system can be completely secure.  Therefore, although we take steps to secure your information. <br><br>
                        The safety and security of your information also depends on you. Never share your password with anyone else and notify us as soon as possible if you believe your account security has been breached.  
                        </p>
                    </div>
                    
                </div>
            </div>
        </div><br><br><br>
    </body>
    @include('Footer')
</html>