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
        <title>User-Resume-Info</title>

        <style>

            body
            {
                margin : 0;
                padding : 0;
            }

            .user-login-info-container
            {
                height : 700px;
                width : 65%;
                background-color : #ecf0f1;
                border-radius : 10px;
                margin-left : 27%;
                margin-top : -62%;
                box-shadow : 0 0 10px rgba(0, 0, 0, 1.0);
            }

            .user-login-info-container h1
            {
                text-align : center;
                font-family : Garamond;
                padding-top : 30px;
            }

            .user-login-info-container .store-info table,
            .user-login-info-container .store-info table tr,
            .user-login-info-container .store-info table td 
            {
                border : 1px solid black;
                width : 90%;
            }

            .user-login-info-container .store-info table
            {
                padding : 20px;
                margin-left : 5%;
                width: 5%;
            }

            .user-login-info-container .store-info table tr
            {
                font-family : Verdana;
                font-size : 15px;
                padding : 5px;
                text-align : center;
            }

            .user-login-info-container .store-info table td .btn
            {
                padding : 5px;
            }

            .user-login-info-container .store-info table tbody:before 
            {
                content:"@";
                display:block;
                line-height:10px;
                text-indent:-99999px;
            }

            .user-login-info-container .store-info table td .edit-btn
            {
               padding : 0;
               height : 25px;
               width : 25px;
               color : blue;
            }

            .user-login-info-container .store-info table td .delete-btn
            {
               padding : 0;
               height : 25px;
               width : 25px;
               color : red;
            }

            tbody:before 
            {
                content:"@";
                display:block;
                line-height:10px;
                text-indent:-99999px;
            }

            .user-login-info-container .store-info table td .edit-btn:hover
            {
               background-color : #d6eaf8;
            }

            .user-login-info-container .store-info table td .delete-btn:hover
            {
                background-color : #f1948a;
            }

        </style>
    </head>

    @include('Header-3')
    <body>
        <div class="user-login-info-container">
            <h1> User Personal Information</h1>

            <div class="store-info">
                <table>
                    <thead>  
                        <tr>  
                            <td>title</td>  
                            <td>First Name</td>  
                            <td>Last Name </td>  
                            <td>Email</td> 
                            <td>Phone No.</td> 
                            <td>Address</td>
                            <td>Zip Code</td> 
                            
                        </tr>

                        <tr colspan="2">
                            <td>City/Town</td>
                            <td>DOB</td>
                            <td>Place Of Birth</td>
                            <td>Gender</td> 
                            <td>Nationality</td>  
                            <td>Marital Status</td>      
                            <td>Action</td>
                        </tr>  
                    </thead>
                
                    <tbody>
                        @foreach($user_personal_info as $user_personal_info)
                        <tr>
                            <td>{{$user_personal_info->title}}</td>
                            <td>{{$user_personal_info->fname}}</td>
                            <td>{{$user_personal_info->lname}}</td>
                            <td>{{$user_personal_info->email}}</td>
                            <td>{{$user_personal_info->phone}}</td>
                            <td>{{$user_personal_info->address}}</td>
                            <td>{{$user_personal_info->zip}}</td>
                        </tr>

                        <tr colspan="2">
                            <td>{{$user_personal_info->city}}</td>
                            <td>{{$user_personal_info->dob}}</td>
                            <td>{{$user_personal_info->placedob}}</td>
                            <td>{{$user_personal_info->gender}}</td>
                            <td>{{$user_personal_info->nationality}}</td>
                            <td>{{$user_personal_info->maritalsts}}</td>

                            <td>
                                <a href="{{route('personal.personal_info_destroy', ['id' => $user_personal_info->id])}}">
                                    <div class="btn">
                                        <input type="submit" value="&#128465;" name="delete" class="delete-btn">
                                    </div>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </body>
</html>