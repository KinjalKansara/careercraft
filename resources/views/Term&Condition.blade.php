<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Term & Conditions</title>

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
                <h2>Terms & Conditions</h2>

                <h5>Read our terms and conditions carefully.</h5>

                <div class="box">
                    <div class="about">
                        <h3>Privacy Policy</h3>
                        <p>
                            We take your privacy very seriously. As such, our Privacy Policy is an important part of this Agreement. The Privacy Policy explains how we collect information from you and how we may share that information.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Eligibility</h3>
                        <p>
                            By accessing and/or using the Services, including by doing so after accessing this Agreement, you represent and warrant that you are legally qualified to enter into and form contracts under applicable law.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Termination</h3>
                        <p>
                            Either you or careercraft may terminate this Agreement at any time upon written notice to the other party. If you terminate this Agreement, you may no longer access your Account or use the Services. If, after termination, you access the Services or create a new Account, such action will constitute your consent to this Agreement and the Privacy Policy, and the prior termination will be deemed null and void.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Third Party Websites</h3>
                        <p>
                         “Third Party Websites” may be linked to the Site. careercraftf does not have control over the content and performance of Third Party Websites. Accordingly, careercraft does not represent, warrant, or endorse any Third Party Websites, or the accuracy, currency, content, fitness, lawfulness, or quality of the information, material, goods or services available through the Third Party Websites.
                        </p>
                    </div>

                    <div class="about">
                        <h3>Third Party Services</h3>
                        <p>
                            The Services may be linked with the services of third parties ("Third Party Services"), some of whom may have established relationships with careercraft and some of whom do not. We do not have control over the content and performance of Third Party Services.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div><br><br><br>
    </body>
    @include('Footer')
</html>