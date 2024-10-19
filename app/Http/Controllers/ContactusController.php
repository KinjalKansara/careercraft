<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use App\Rules\CustomeEmailValidation;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus_index()
    {
        return view('ContactUs');
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
    public function contactus_store(Request $request)
    {
        $request -> validate
        (
            [
                'name' => 'required',
                'email' => ['required', 'email', new CustomeEmailValidation],
                'subject' => 'required',
                'question' => 'required',
            ]
        );

        $contact = new Contactus;
        $contact -> name = $request->get('name');
        $contact -> email = $request->get('email');
        $contact -> subject = $request->get('subject');
        $contact -> question = $request->get('question');
        $contact -> save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $contact = Contactus::all();
        return view('User-Query',compact('contact'));
    }

    public function delete($id)
    {
        $contact = Contactus::find($id);

        if(!is_null($contact))
        {
            $contact->delete();
        }
        return redirect('User-Query');
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
    public function destroy($id)
    {
        //
    }
}
