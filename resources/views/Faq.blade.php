<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
        <title>FAQ</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
            }

            .container
            {
                height : auto;
                width : 100%;
                /* background-color : red; */
                /* position : absolute; */
                z-index : 1;
                margin-top : -20px;
                /* margin-left : 45%; */
            }

            .container .other-section h2
            {
                font-size : 60px;
                text-align : center;
                font-family : Comic Sans MS;
                font-weight : normal;
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

        </style>
    </head>

  @include('Header')  
   
    <body>
        
        <div class="container">
            <div class="other-section">
                <h2>Frequently asked questions</h2>

                <div class="faq">
                    <div class="question">
                        <h4>How do i login?</h4> 
                        <i class="icon active fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer active">
                        <p>
                            By logging in via the top right corner on the website, you will get access to your account. In case you have forgotten your password, you can request a new one <a href="{{url('Login')}}">here</a>.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="question">
                        <h4>How do i create an account?</h4> 
                        <i class="icon active fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer active">
                        <p>
                            In order for you to use all the features, you will be asked to create an account by filling in your email address. After that it is possible to create a password. You can then use these details to log into your account.
                        </p>
                    </div>
                </div>

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
                        <h4>Creating a CV with careercraftr</h4> 
                        <i class="icon fa-solid fa-caret-down"></i>
                    </div>
                    <div class="answer">
                        <p>
                            To get started, simply enter your details in the relevant tool and select the appropriate template.<br><br>
                            However, if you have questions related to the tools available in careercraftr,please visit our ‘Frequently asked questions’ page. If not all your questions are answered or you have any other concerns or suggestions, you can contact us directly here.<br><br>    
                        </p>
                    </div>
                </div>

                <div class="formore">
                    <p>Do you have another question, suggestion or complaint? <a href="{{url('ContactUs')}}">Get in touch</a></p>
                </div>
            </div>
        </div><br><br><br>

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

@include('Footer') 