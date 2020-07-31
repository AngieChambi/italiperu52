<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function sendMessage(Request $request){

        $this->validate($request,[
            'nombre' => 'required',
            'email' => 'required',
            'sede' => 'required',
            'programa' => 'required',
            'celular' => 'required'
        ]);

        $contact = new Contact();
        $contact->nombre = $request->nombre;
        $contact->email = $request->email;
        $contact->programa = $request->programa;
        $contact->sede = $request->sede;
        $contact->celular = $request->celular;
        $contact->save();

        return view('welcome');
    }
}
