<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CustomeEmailValidation;
use App\Rules\CustomePasswordValidation;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit_adminprofile(Request $request)
     {
         return view('Admin-Profile');
     }
 
     public function update_adminprofile(Request $request)
     {

        $request -> validate
        (
            [
                'password' => ['required', 'string', 'min:8', new CustomePasswordValidation],
            ]
        );

        $item = Admin::where('email',session('email'))->first();
 
         if($item)
         {
            $item->password = $request->input('password');
            $item->save();
         }
         
      return redirect('/Admin-Profile');
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
