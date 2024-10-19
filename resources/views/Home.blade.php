<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        <title>Home</title>

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

            .container .other-section button
            {
                /* transform: rotate(5deg); */
                /* margin-top : -20px; */
                margin-left : 43%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px;
                
            }

            .container .other-section button:hover
            {
                color : #52be80;
            }

            .container .other-section h3
            {
                font-size : 30px;
                text-align : center;
                font-family : Bookman;
                font-weight : 300;
                
            }

            .container .section-2
            {
                display : flex;
                position : relative;
                padding : 20px;
                column-gap : 10%;
                margin-left : 15%;
                
            }

            .container .section-2 .imgsection
            {
                text-align : center;
            }

            .container .section-2 h4
            {
                text-align : center;
                font-size : 18px;
                font-weight : bold;
                font-family : Segoe Print;
                text-decoration : underline;
                color : #2dc46a;
            }

            .container .section-2 h6
            {
                text-align : center;
                font-size : 12px;
                font-weight : normal;
                font-family : Arial;
            }

            .container .section-2 .first,
            .second,
            .third
            {
                height : 200px;
                width : 200px;
            }

            .container .faq
            {
                background-color : white;
                padding : 4px 16px;
                margin-bottom : 16px;
                border-radius : 4px;
                box-shadow : 1px 1px 5px rgb(255, 255, 255);
                width : 60%;
                margin-left : 20%;
                cursor : pointer;
            }

            .container .faq .question
            {
                display : flex;
                align-items : center;
                justify-content : space-between;
                font-size : 20px;
                font-family : Candara;
            }

            .container .faq .question .icon
            {
                margin-right : 16px;
            }

            .container .faq .question .icon.active
            {
                transform : rotate(-180deg);
            }

            .container .faq .answer
            {
                max-height : 0;
                overflow : hidden;
                font-family : Candara;
                font-size : 15px;

            }

            .container .faq .answer.active
            {
                max-height : fit-content;
            }

            .container .formore p
            {
                width : 60%;
                margin-left : 20%;
                font-size : 20px;
            }

            .container .formore p a
            {
                color : #2dc46a;
                
            }

            .container .formore p a:hover
            {
                color : black;
                transform: rotate(20deg);
            }

            .container .section-3
            {
                display : flex;
                height : 700px;
                width : 80%;
                margin-left : 10%;
                border : 3px double black;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
                border-radius : 10px;
                margin-top : 5%;
            }

            .container .section-3 .text
            {
                height : 700px;
                width : 50%;
                background : white;
                background-color : #2dc46a;
            }

            .container .section-3 .image-scroll
            {
                height : 700px;
                width : 50%;
                display : flex;
                background-color : #F4f6f7
            } 

            .container .section-3 .image-scroll .scroll-1
            {
                margin-left : 50px;
            } 

            .container .section-3 .text h2
            {
                color : #f0f3f4;
                font-size : 50px;
                margin-top : 5%;
            }

            .container .section-3 .text button
            {
                /* transform: rotate(5deg); */
                /* margin-top : -20px; */
                margin-left : 34%;
                height : 50px;
                width : 150px;
                border-radius : 5px;
                font-family : Candara;
                font-size : 15px; 
            }

            .container .section-3 .text p
            {
                text-align : center;
                font-size : 25px;
                padding : 10px;

            }

            .container .section-4
            {
                height : 850px;
                width : 85%;
                margin-left : 8%;
                border : 3px double #2dc46a; 
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
            }

            .container .section-4 .template  .tempbutton 
            {
                display : flex;
            }

            .container .section-4 .template  .tempbutton button
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
            }

            .container .section-4 .template .tempbutton button:hover
            {
               color : black;
            }

            /* .container .section-4 .template .tempbutton a
            {
               display : flex;
               margin-top : 2%;
               margin-bottom : 2%; 
               text-decoration : none;
               color : white;
            }

            .container .section-4 .template .tempbutton button:hover
            {
               text-decoration : none;
               background-color : red;
            } */

        </style>
    </head>

    @include('Header')
    <body>
        <div class="container">
            <div class="other-section">
                <h2>Create a professional CV</h2>

                <h5>Fill in the blanks. choose a template and download your CV in minitues</h5>

                <a href="{{url('CreateResume1')}}">
                    <button type="submit">Create CV</button>
                </a>


                <h3>Available Templates</h3>

                <div class="section-4">
                    <div class="template">
                        <img src="{{url('Image/resume1.png')}}" alt="" height=300px width=300px style="margin-top : 5%; margin-left : 5%;">
                        <img src="{{url('Image/resume2.png')}}" alt="" height=300px width=300px style="margin-left : 3%">
                        <img src="{{url('Image/resume3.png')}}" alt="" height=300px width=300px style="margin-left : 3%"><br>

                        <div class="tempbutton">
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 90%;">Create</button>
                            </a>
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 210%;">Create</button>
                            </a>
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 340%;">Create</button>
                            </a>
                        </div><br>

                        <img src="{{url('Image/resume4.png')}}" alt="" height=300px width=300px style="margin-left : 5%;">
                        <img src="{{url('Image/resume5.png')}}" alt="" height=300px width=300px style="margin-left : 3%;">
                        <img src="{{url('Image/resume6.png')}}" alt="" height=300px width=300px style="margin-left : 3%;"><br>

                        <div class="tempbutton">
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 90%;">Create</button>
                            </a>
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 210%;">Create</button>
                            </a>
                            <a href="{{url('CreateResume1')}}">
                                <button type="submit" style="margin-left : 340%;">Create</button>
                            </a>
                        </div><br>
                    </div>
                </div>



                <h3>How It Works</h3>

                <div class="section-2">
                
                    <div class="first">
                        <div class="imgsection">
                            <img src="{{url('Image/1.png')}}" alt="" height=40px width=40px>
                        </div>

                        <h4>Fill details</h4>

                        <h6>Start by filling in the relevant information for your CV</h6>
                    </div>

                    <div class="second">
                        <div class="imgsection">
                            <img src="{{url('Image/2.png')}}" alt="" height=40px width=40px>
                        </div>
                        
                        <h4>Pick a template</h4>

                        <h6>Choose a template according your requirement</h6>
                    </div>

                    <div class="third">
                        <div class="imgsection">
                            <img src="{{url('Image/3.png')}}" alt="" height=40px width=40px>
                        </div>
                        
                        <h4>Download CV</h4>

                        <h6>Easily download your CV</h6>
                    </div>
                </div>

                <h3>Everything about a CV for a job application</h3>

                <div class="faq">
                    <div class="question">
                        <h4>What is a CV?</h4> 
                        <i class="icon active fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer active">
                        <p>
                            A CV, which stands for curriculum vitae, is a written summary of your work history, education, skills and achievements. Essential to any job application, the aim of a CV is to provide a meaningful summary of your career to date and show prospective employers that you have the necessary skills and competencies to perform well in a job.<br><br>
                            As in most cases, your CV will be the first point of contact between you and a prospective employer, it’s crucial that your document makes a good impression. This means that your CV not only needs to clearly communicate your value but also be correct and free of grammatical and spelling mistakes to have a chance of getting through the first round.<br><br>
                            Below you will find information and advice on how to create a CV to win over recruiters and increase your chances of landing your dream job.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>What to include in a CV?</h4>
                        <i class="icon fa-solid fa-caret-down"></i> 
                    </div>
                    <div class="answer">
                        <p>
                            The following is a summary of the sections that belong in a CV and those that are optional: <br><br>

                            <span style="font-family:25px; font-weight:bold;">Personal details</span><br><br>

                            The personal details section, which sits at the top of your CV, lets employers know who you are and how you can be contacted. Therefore, this section should not only include your name and current address, but also a phone number and an email address, where you can be contacted.<br><br>
                            For the most part, you won’t need to mention information such as your nationality, date of birth, gender, marital status or religious beliefs as anti-discrimination laws in many countries prohibit the selection of employees on these grounds. <br><br>
                        
                            <span style="font-family:25px; font-weight:bold;">CV objective or personal statement</span><br><br>
                           
                            Sitting at the top of your CV after your contact details, your CV objective or personal statement is a short introduction that provides busy recruiters with a quick overview of your work experience, skills and qualifications. <br><br>
                            With recruiters spending only seconds scanning CVs, a compelling CV objective or personal statement can be an invaluable opportunity to make your application stand out and convince recruiters to keep reading the rest of your CV.<br><br>

                            <span style="font-family:25px; font-weight:bold;">Education</span><br><br>

                            The education section of your CV provides employers with an overview of your training and qualifications. Depending on the stage of your career, this section may be given lesser or greater weight by recruiters and hiring managers.<br><br>
                            For instance, experienced professionals will typically give greater emphasis to career history and place this section after the work experience section. On the other hand, if you’re a recent graduate or someone in the early stages of your career, it makes sense to highlight your education as evidence you have the required knowledge for the job and place this section earlier in your CV.<br><br>

                            <span style="font-family:25px; font-weight:bold;">Skills</span><br><br>

                            One of the most important sections of your CV, this section provides an opportunity to highlight special knowledge and skills relevant to the position you are applying for, which are not mentioned under the education or work experience headings.<br><br>
                            This can include language skills, IT skills or core competencies such as critical thinking, leadership and the ability to learn new things quickly. If you have volunteer work experience, you can also list skills that you have acquired in connection with this activity.<br><br>
                        
                            <span style="font-family:25px; font-weight:bold;">Language Skills</span><br><br>

                            In today’s international environment, having language skills can bring professional opportunities and give you a distinct edge over similarly qualified candidates. The reason is that many businesses are now multinational and language skills enable you to work with people across borders and from different cultures.<br><br>
                            Even in companies that don’t have an international base, the chances are, you’ll be working with and serving people whose native language is different to your own. By mentioning language skills in your CV, you demonstrate cultural awareness, adaptability and your ability to learn new skills.<br><br>
                       
                            <span style="font-family:25px; font-weight:bold;">Courses and Qualifications</span><br><br>

                            This section includes all further education that has been completed outside of regular school/university or vocational training, whether that’s job-related training or language stays abroad.<br><br>
                            While listing your professional qualifications and courses can demonstrate a willingness to develop yourself further as well as an ability to learn, whether you include this section in your CV will depend on the work experience you have and the amount of space left on your CV.<br><br>

                            <span style="font-family:25px; font-weight:bold;">Hobbies and Interests</span><br><br>

                            Including your hobbies and interests on your CV can give a human touch to your CV as well as add individuality to your application. In addition, hobbies can indicate specialist knowledge or skills. For example, if you blog in your spare time, this demonstrates creativity and communication skills.<br><br>
                            Nevertheless, the hobbies and interests section is an optional section of your CV and should only be included if it adds value to your application and aligns with the professional image you’re trying to convey to prospective employers.<br><br>

                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>What is a purpose of CV?</h4> 
                        <i class="icon fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer">
                        <p>
                        When you apply for a job, you have two opportunities to show recruiters and prospective employers that you’re a good match for the role. These are your CV. <br><br>
                        As the first impression a prospective employer will have of you, your CV should provide a succinct but meaningful overview of your work experience, education, skills and qualifications and make clear why you’re a great candidate for the advertised position.<br><br>
                        Your letter, on the other hand, is primarily used to add more context to your CV, express your motivation(s) for applying and further explain your value.<br><br>    
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>Creating a CV with careercraft</h4> 
                        <i class="icon fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer">
                        <p>
                            To get started, simply enter your details in the relevant tool and select the appropriate template.<br><br>
                            However, if you have questions related to the tools available in careercraft,please visit our ‘Frequently asked questions’ page. If not all your questions are answered or you have any other concerns or suggestions, you can contact us directly here.<br><br>    
                        </p>
                    </div>
                </div>

                <div class="formore">
                    <p>Do you have unanswered questions? Take a look at our <a href="{{url('Faq')}}">FAQ</a></p>
                </div>

                <div class="section-3">
                    <div class="text">
                        <h2>Impress potential employers with your resume</h2>
                        <p>Follow step-by-step professional guidance to create a polished resume in minutes.</p>


                        <img src="{{url('Image/scroll.gif')}}" alt="" srcset="" height=200px width=200px style="margin-left : 30%;"><br>

                        <a href="{{url('CreateResume1')}}">
                            <button type="submit">Create CV</button>
                        </a>
                    </div>

                    <div class="image-scroll">
                        <div class="scroll-1">
                            <marquee behavior="scroll" direction="up" >
                                <img src="{{url('Image/r1.jpeg')}}" width="200" height="200" alt="" />
                                <img src="{{url('Image/r2.jpeg')}}" width="200" height="200" alt="" />
                                <img src="{{url('Image/r3.png')}}" width="200" height="200" alt="" />
                            </marquee>
                        </div>
                    

                        <div class="scroll-2">
                            <marquee behavior="scroll" direction="down">
                                <img src="{{url('Image/r4.jpeg')}}" width="200" height="200" alt="" />
                                <img src="{{url('Image/r5.jpeg')}}" width="200" height="200" alt="" />
                                <img src="{{url('Image/r6.jpeg')}}" width="200" height="200" alt="" />
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br><br><br>
        
        <script>
            const faq = document.querySelectorAll('.faq');

            faq.forEach(faq => {
                const icon = faq.querySelector('.icon');
                const answer = faq.querySelector('.answer');

                faq.addEventListener('click',() => {
                    icon.classList.toggle('active');
                    answer.classList.toggle('active');
                })
            })
        </script>
    </body>
</html>

@include('footer')



