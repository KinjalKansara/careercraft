<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Createresume1;
use App\Createresume2;
use App\Education;
use App\Hobbies;
use App\Skill;
use App\Course;
use App\Archievement;
use App\Language;

class Createresume2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CreateResume2');
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


     public function store(Request $request)
     {
        
        if($request->has('action'))
        {
            switch($request->input('action'))
            {
                case 'save':
                    Createresume2::create([
                        'email' => session('email'),
                        'description' => $request->input('description')
                    ]);
                    return redirect()->back(); 
                    break;
                
                case 'education':
                    Education::create([
                        'email' => session('email'),
                        'degree' => $request->input('degree'),
                        'city' => $request->input('city'),
                        'institute1' => $request->input('institute1'),
                        'passyear' => $request->input('passyear'),
                    ]);
                    return redirect()->back();      
                    break;
                
                case 'hobbies':
                    Hobbies::create([
                        'email' => session('email'),
                        'hobbies' => $request->input('hobbies')
                    ]);
                    return redirect()->back();
                    break;

                case 'skill':
                    Skill::create([
                        'email' => session('email'),
                        'skills' => $request->input('skill')
                    ]);
                    return redirect()->back();
                    break;

                case 'course':
                    Course::create([
                        'email' => session('email'),
                        'course' => $request->input('course'),
                        'institute2' => $request->input('institute2')
                    ]);
                    return redirect()->back();
                    break;

                case 'archievement':
                    Archievement::create([
                        'email' => session('email'),
                        'archievement' => $request->input('archievement')
                    ]);
                    return redirect()->back();
                    break;

                case 'language':
                    Language::create([
                        'email' => session('email'),
                        'language' => $request->input('language')
                    ]);
                    return redirect()->back();   
                    break;
            }
        }

        return redirect('/Template');
     }
   
// $register -> email = $request->get('email');
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function first_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('First_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    public function second_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('Second_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    public function third_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('Third_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    public function fourth_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('Fourth_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    public function fifth_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('Fifth_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    public function sixth_template_show()
    {
        // all field of Createresume1
        $first_name = Createresume1::where("email", session('email'))->get();
        $last_name = Createresume1::where("email", session('email'))->get();
        $email = Createresume1::where("email", session('email'))->get();
        $phone = Createresume1::where("email", session('email'))->get();
        $address = Createresume1::where("email", session('email'))->get();
        $zip = Createresume1::where("email", session('email'))->get();
        $city = Createresume1::where("email", session('email'))->get();
        $dob = Createresume1::where("email", session('email'))->get();
        $placedob = Createresume1::where("email", session('email'))->get();
        $lincense = Createresume1::where("email", session('email'))->get();
        $gender = Createresume1::where("email", session('email'))->get();
        $nationality = Createresume1::where("email", session('email'))->get();
        $maritalsts = Createresume1::where("email", session('email'))->get();

        // all field of Createresume2
        $description = Createresume2::where("email", session('email'))->get();
        $education = Education::where("email", session('email'))->get();
        $hobbies = Hobbies::where("email", session('email'))->get();
        $skill = Skill::where("email", session('email'))->get();
        $course = Course::where("email", session('email'))->get();
        $archievement = Archievement::where("email", session('email'))->get();
        $language = Language::where("email", session('email'))->get();
        return view('Sixth_Template', compact('first_name', 'last_name', 'email', 'phone', 'address', 'zip', 'city', 'dob', 'placedob', 'license', 'gender', 'nationality', 'maritalsts', 'description', 'education', 'hobbies', 'skill', 'course', 'archievement', 'language'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
        
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
        
    // }
}
