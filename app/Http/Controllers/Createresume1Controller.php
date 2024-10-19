<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CustomeEmailValidation;
use App\Createresume1;

class Createresume1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CreateResume');
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

        $request -> validate
        (
            [
                'title' => 'required|max:30',
                'fname' => 'required|max:20',
                'lname' => 'required|max:20',
                'email' => ['required', 'email', new CustomeEmailValidation],
                'address' => 'required|max:60',
                'zip' => 'required|max:10',
                'city' => 'required|max:30',
                'dob' => 'required',
                'placedob' => 'required|max:30',
                'license' => 'required',
                'gender' => 'required',
                'nationality' => 'required|max:20',
                'maritalsts' => 'required|max:10',
            ]
        );

        $resume1 = new Createresume1;

        $resume1 -> title = $request->get('title');
        $resume1 -> fname = $request->get('fname');
        $resume1 -> lname = $request->get('lname');
        $resume1 -> email = $request->get('email');
        $resume1 -> phone = $request->get('phone');
        $resume1 -> address = $request->get('address');
        $resume1 -> zip = $request->get('zip');
        $resume1 -> city = $request->get('city');
        $resume1 -> dob = $request->get('dob');
        $resume1 -> placedob = $request->get('placedob');
        $resume1 -> license = $request->get('license');
        $resume1 -> gender = $request->get('gender');
        $resume1 -> nationality = $request->get('nationality');
        $resume1 -> maritalsts = $request->get('maritalsts');
        $resume1 -> save();

        return redirect('CreateResume2');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_personal_info_show()
    {
        $user_personal_info = Createresume1::all();
        return view('User-Personal-Info',compact('user_personal_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function personal_info_destroy($id)
    {
        $user_personal_info = Createresume1::find($id);

        if(!is_null($user_personal_info))
        {
            $user_personal_info->delete();
        }
        return redirect('User-Personal-Info');
    }
}
