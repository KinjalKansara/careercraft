<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Registration;
use App\Rules\CustomeEmailValidation;
use App\Rules\CustomePasswordValidation;
use App\Admin;
use App\Createresume1;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration_index()
    {
        return view('Registration');
    }

    public function updateprofile_index()
    {
        return view('UpdateProfile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registration_store(Request $request)
    {
        $request -> validate
        (
            [
                'email' => ['required', 'email', new CustomeEmailValidation],
                'password' => ['required', 'string', 'min:8', new CustomePasswordValidation],
                'dob' => 'before:today',
            ]
        );

        $register = new Registration;
        $register -> email = $request->get('email');
        $register -> password = $request->get('password');
        $register -> dob = $request->get('dob');
        $register -> save();

        return redirect('/Login');

    }

    public function login_index()
    {
        return view('Login');
    }

    public function login(Request $request)
    {

        $request -> validate
        (
            [
                'email' => ['required', 'email', new CustomeEmailValidation],
                'role' => 'required'
            ]
        ); 

        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
       
        if($role == 'admin')
        {
            $admin = admin::where('email', $email)->where('password', $password)->first();

            if($admin)
            {
                Session(['email'=>$email]);
                Session(['password'=>$password]);
                Session(['role'=> 'admin']);
                return redirect('/Admin-Profile');
            }

            else
            {
                $fail = "Please, Enter valid email or password";

                return redirect('/Login');
            }
        }

        else
        {
            $user = registration::where('email', $email)->where('password', $password)->first();

            if($user)
            {

                Session(['email'=>$email]);
                Session(['password'=>$password]);
                Session(['role'=> 'user']);

                return redirect('/');
            }

            else
            {
                $fail = "Please, Enter valid email or password";

                return redirect('/Login')->with($fail); 
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function admin_user_show()
    {
        $user_login = Registration::all();
        return view('User-Login-Info',compact('user_login'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
     // data change by user

    public function userinformation(Request $request)
    {
        return view('User-Profile');
    }

    public function userinformationstore()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();

        return view('User-Profile', compact('first_name', 'last_name', 'email', 'address','city', 'dob', 'gender'));
    }


    public function edit_userprofile(Request $request)
    {
        
        return view('UpdateProfile');
    }

    public function update_userprofile(Request $request)
    {
        $request -> validate
        (
            [
                'password' => ['required', 'string', 'min:8', new CustomePasswordValidation],
            ]
        );

        $item = Registration::find($request->input('email'));

        if($item)
        {
            $item->password = $request->input('password');
            $item->save();
        }
        
        return redirect('/ChangeByUser');
    }

    // data change by user

    //********************************************************************************************** */

    //data change by admin

    public function edit($id)
    {
        $user_login = Registration::find($id);
        return view('User-Login-Edit-Update', compact('user_login'));
    }
    
    public function Update_Login_Data(Request $request, $id)
    {
        $user_login = Registration::find($id);

        $user_login -> email = $request->input('email');
        $user_login -> password = $request->input('password');

        $user_login->update();

        return redirect('/User-Login-Info');
    }

     //data change by admin


     //admin email and password update


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login_destroy($id)
    {
        $user_login = Registration::find($id)->delete();

        return redirect()->back();
    }


    public function forgotIndex()
    {
        return view('forgetPassword'); // Use camelCase for method names and lowercase for view names
    }

    public function forgotPassword(Request $request)
    {
        $request -> validate
        (
            [
                'email' => ['required', 'email', new CustomeEmailValidation],
                
            ]
        );
        $userProfile = Registration::where('email', $request->email)->first();
        
        if($userProfile)
        {
            $email = $request->email;
            $request->session()->put('email', $email); // Store email in session
            return view('verifyEmail', compact('email'));
        }
        else
        {
            return redirect()->back()->with('error', 'Email address not found.');
        }
    }

    public function verifyIndex()
    {
        return view('verifyEmail'); // Corrected view name
    }

    public function checkzip(Request $request)
    {

        $dob = $request->dob;
        $dob1 = Registration::where('dob', $dob)->first();

        if ($dob1) {
            $email = $request->session()->get('email');
            return view('changePassword', compact('email', 'zip')); // Use camelCase for view names
        } else {
            return redirect('/login')->with('error', 'ZIP code not found.');
        }
    }

    public function newPasswordIndex()
    {
        return view('changePassword');
    }

    public function newPassword(Request $request)
    {

        $request -> validate
        (
            [
                'password' => ['required', 'string', 'min:8', new CustomePasswordValidation],
               
            ]
        );

        $newPassword = $request->input('password');
        $email = $request->session()->get('email');
        
        $user = Registration::where('email', $email)->first();

        if($user)
        {
            $user->password = $newPassword; // Hash the new password
            $user->save();
            $request->session()->forget('email'); // Remove email from session
        }

        return redirect('/Login')->with('success', 'Password updated successfully.');
    }

    
}

 