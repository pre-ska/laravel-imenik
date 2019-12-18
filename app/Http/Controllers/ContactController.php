<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Validation\Rule;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $contacts = Contact::all()->simplePaginate(15);

        // return view('index', compact('contacts'));
        $contacts = DB::table('contacts')->simplePaginate(5);

        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ime' => 'required|regex:/[a-zA-Z0-9\pL]/u|max:255',
            'prezime' => 'required|regex:/[a-zA-Z0-9\pL]/u|max:255',
            'email' => 'required|email:rfc,dns|unique:contacts,email',
            'telefon' => 'required|min:5|regex:/^[0-9]+$/|unique:contacts,telefon'
        ]);

        $contact = Contact::create($validatedData);
   
        return redirect('/contacts')->with('success', 'Kontakt uspjesno dodan');
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
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('edit', compact('contact'));
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
        $validatedData = $request->validate([
            'ime' => 'required|regex:/[a-zA-Z0-9\pL]/u|max:255',
            'prezime' => 'required|regex:/[a-zA-Z0-9\pL]/u|max:255',
            'email' => 'required|email:rfc,dns|unique:contacts,email,'.$id,
            'telefon' => 'required|min:5|regex:/^[0-9]+$/'
        ]);

        Contact::whereId($id)->update($validatedData);

        return redirect('/contacts')->with('success', 'kontakt uspješno ažuriran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'kontakt uspješno obrisan');
    }
}
